<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Notifications\VerifyEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;

class AuthController extends Controller
{
    public function auth(){
        return view('auth');
    }

    public function register(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ],[
            'name.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 6 karakter',
        ]);

        try {
            $user = User::create([
                'name' => $request-> name,
                'email' => $request-> email,
                'password' => Hash::make($request->password),
            ]);

            Notification::send($user, new VerifyEmail());

            return redirect()->route('auth')->with('success', 'Berhasil Mendaftar! Silahkan cek email untuk verifikasi akun anda!');

        }catch(\Exception $e){
            return redirect()-> route('auth')-> with('error', 'Gagal Mendaftar! Silahkan coba lagi!' . $e);
        }

    }

    public function Login(Request $request){
         $request-> validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
         ], [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Email tidak valid',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 6 karakter',
         ]);
         if (Auth::attempt($request->only('email', 'password'))){
             if(Auth::user()->email_verified_at){
                $request->session()->regenerate();
                if(Auth::user()->role === 'admin'){
                    return redirect()->route('admin')->with('success', 'Selamat datang Admin!');
                }else {
                    return redirect()-> route('user')-> with('success', 'Anda berhasil Masuk!');
                }
                
             }else{
                Auth::Logout();
                return back()->with('error', 'Harap verfikasi AKun anda!');
             }
         }

         return redirect()->route('auth')->with('error', 'Kombinasi email dan password salah');
    }

    public function verify($id, $hash){
        $user = User::findOrFail($id);

        if(sha1($user->getEmailForVerification()) !== $hash){
             return redirect()-> route('auth')-> with('error', 'Kode verifikasi tidak valid');
        }

        if($user->hasVerifiedEmail()){
            return redirect()-> route('auth')-> with('Succes', 'Email sudah terverifikasi');
        }

        if($user->markEmailAsVerified()){
            return redirect()-> route('auth')-> with('Succes', 'Email berhasil terverifikasi');
        }

        return redirect()-> route('auth')-> with('error', 'Gagal Mendaftar! Silahkan coba lagi!');
    }

    public function logout(Request $request){
         Auth::logout();
         $request-> session()-> invalidate(); 
          $request-> session()-> regenerateToken();
         return redirect('/');
    }

    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use Illuminate\Support\Facades\Hash; 
use Illuminate\Validation\Rule; 
use Illuminate\Support\Facades\Auth; 

class AuthController extends Controller
{
    /**
    
     *
     * @return \Illuminate\View\View
     */
    public function showSignupForm()
    {
        return view('auth.signup');
    }

    /**
     
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string|min:10|max:100', 
            'email' => [
                'required',
                'email:rfc,dns', 
                Rule::unique('users', 'email'), 
            ],
            'password' => 'required|string|min:8|max:12', 
        ],
        [
            
            'name.required' => 'Nama tidak boleh kosong.',
            'name.min' => 'Nama minimal 10 karakter.',
            'name.max' => 'Nama maksimal 100 karakter.',
            'email.required' => 'Email tidak boleh kosong.',
            'email.email' => 'Format email tidak valid atau domain tidak terdaftar.',
            'email.unique' => 'Email ini sudah terdaftar.',
            'password.required' => 'Password tidak boleh kosong.',
            'password.min' => 'Password minimal 8 karakter.',
            'password.max' => 'Password maksimal 12 karakter.',
        ]);

        try {
           
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password), 
            ]);


            if ($user) {
               
                return redirect('/signin')->with('success', 'Pendaftaran berhasil! Silakan masuk.');
            } else {
                
                return back()->withInput()->with('error', 'Terjadi kesalahan saat menyimpan data.');
            }

        } catch (\Exception $e) {
          
            return back()->withInput()->with('error', 'Terjadi kesalahan sistem: ' . $e->getMessage());
        }
    }

    /**
    
     *
     * @return \Illuminate\View\View
     */
    public function showSigninForm()
    {
        return view('auth.signin');
    }

    /**
     
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'password.required' => 'Password harus diisi.',
        ]);

   
        if (Auth::attempt($credentials)) {
            
            $request->session()->regenerate();

           
            return redirect()->intended('/dashboard')->with('success', 'Anda berhasil masuk!');
        }

       
        return back()->withErrors([
            'email' => 'Email atau password yang Anda masukkan salah.',
        ])->onlyInput('email'); 
    }

    /**
    
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::logout(); 

        $request->session()->invalidate(); 
        $request->session()->regenerateToken(); 

        return redirect('/signin')->with('success', 'Anda telah berhasil logout.');
    }
}
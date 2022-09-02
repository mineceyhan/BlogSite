<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use App\Models\Category;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{


    public function register(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'email' => 'required|string|unique:users,email|email',
            'password' => 'required|string|confirmed|min:8'
        ]);

        $user = User::create([
            'name' => $fields['name'],
            'surname' => $fields['surname'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password'])
        ]);
        $response = [
            'user' => $user,
        ];
        return view('auth/login');
    }

    public function login(Request $request){
        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        if (filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            $user = User::where('email', $fields['email'])->first();
        } else {
            return response([
                'message' => 'Yanlış şifre veya kullanıcı adı girdiniz. Lütfen kontrol edin.'
            ], 401);
        }

        // Check password
        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'message' => 'Yanlış şifre veya kullanıcı adı girdiniz. Lütfen kontrol edin.'
            ], 401);
        }
        $request->input();
        $request->session()->put('email' ,$user->email);
        $request->session()->put('name' ,  $user->name);
        $request->session()->put('surname' , $user->surname);
        $request->session()->put('id' ,  $user->id);
        return redirect('panel');
    }

    public function logout(Request $request)
    {
        $check = session('id');

        if ($check != NULL) {
            $check = auth('sanctum')->user()->tokens()->delete();
            if ($check) {
                return [
                    'message' => 'Çıkış yapıldı.'
                ];
            } else {
                return [
                    'message' => 'Çıkış sırasında bir hata oluştu.'
                ];
            }
        } else {
            return [
                'message' => 'Geçersiz kimlik.'
            ];
        }
    }
}

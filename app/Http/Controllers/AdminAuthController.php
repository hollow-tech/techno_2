<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\AdminLoginRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    protected $guard = 'web';

    public function adminLoginForm(AdminLoginRequest $request)
    {
        // $phone = $request->phone;
        $email = $request->email;
        $password = $request->password;

        $user = User::query()->where('email', $email)->firstOr(function () {
            throw ValidationException::withMessages([
                'email' => [__('auth.Phone number not found')]
            ]);
        });

        if (Hash('sha1', $password) !== $user->password) {
            throw ValidationException::withMessages([
                'password' => [__('auth.Phone or password is incorrect')]
            ]);
        }

        Auth::guard($this->guard)->login($user);
        return redirect()->route('admin.index');
//        $token = Auth::attempt(['tel_num' => $phone, 'password' => $password])
//        if (!$token) {
//            throw ValidationException::withMessages([
//                'password' => [__('auth.Phone or password is incorrect')]
//            ]);
//        }
//        $user = Auth::user();
    }

    public function logout()
    {
        Auth::guard($this->guard)->logout();
        return redirect()->route('adminLoginShow');
    }
}

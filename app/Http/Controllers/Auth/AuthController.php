<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registration()
    {
        return view('auth.register');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request)
    {
        $request->validate([
            'id_student' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('id_student', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('You have Successfully loggedin');
        }

        return redirect("login")->with('error', ('Failed to login, ID Student or Password does not match'));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postRegistration(Request $request)
    {
        $request->validate([
            'id_student' => 'required|min:5|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();

        $split_data = mb_str_split($request['id_student']);
        $sum = (int)$split_data[0] + (int)$split_data[1] + (int)$split_data[2];
        if (strlen((string)$sum) == 1) {
            $sum = "0{$sum}";
        }
        $total = "{$split_data[3]}{$split_data[4]}";
        if ((string)$sum == $total) {
            $check = $this->create($data);
            return redirect("login")->with('success', ('Your account was created successfully, please login.'));
        } else {
            return redirect("login")->with('error', ('Failed to create an account, ID Strudent does not match!'));
        }
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard()
    {
        if (Auth::check()) {
            return view('index');
        }

        // return redirect("login")->withSuccess('Opps! You do not have access');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)
    {
        return User::create([
            'id_student' => $data['id_student'],
            'password' => Hash::make($data['password']),
        ]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}

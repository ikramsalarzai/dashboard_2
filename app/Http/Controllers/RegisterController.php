<?php

namespace App\Http\Controllers;

 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;

 
class RegisterController extends Controller
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

        return view('auth.signup');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {

            return redirect( route('students.index'));
        }
        return redirect(route('login'))->with('error', 'Please enter correct login credentials');
    }

    /**
     *
     *
     * Write code on Method
     *
     * @return response()
     */
    public function postRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        $data = $request->all();
        $check = $this->create($data);
        return redirect("/");
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function thankYou()
    {
        if (Auth::check()) {
            return view('thank-you');
        }
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)
    {

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            //   'user_type' => $data['user_type'],
            'phone' => $data['phone']

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
        return Redirect('/');
    }
}

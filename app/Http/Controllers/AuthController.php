<?php  

namespace App\Http\Controllers;  

use App\Models\User;
use Illuminate\Http\Request;  
use Illuminate\Support\Facades\Hash;  
use Illuminate\Support\Facades\Log;  

class AuthController extends Controller  
{  
    public function showRegister()  
    {  
        return view('formregister'); 
    }  

    public function register(Request $request)  
    {  
        $request->validate([  
            'name' => 'required|max:35',
            'email' => 'required|email|unique:users,email',  
            'password' => 'required|min:6',  
        ]);  
   
        User::create([
            'name' => $request->name,
            'email' => $request->email,  
            'password' => Hash::make($request->password),  
        ]);  

        return redirect()->route('login')->with('success', 'Registration successful. Please login.');  
    }  

    public function showLogin()  
    {  
        return view('formlogin');  
    }  

    public function login(Request $request)  
    {    
        $request->validate([  
            'email' => 'required|email',  
            'password' => 'required',  
        ]);  

        $user = User::where('email', $request->email)->first(); 

        if ($user && Hash::check($request->password, $user->password)) {  
            auth()->login($user);
            return redirect()->route('showTest', ['id' => $user->id])->with('success', 'Logged in successfully.'); 
        }  

        return back()->withErrors(['email' => 'The provided credentials do not match our records.']);  
    }  
 
    public function showTest($id)  
    {  
        $name = User::where('id', $id)->pluck('name')->first();
    
    if (!$name) {
        return "User with ID {$id} not found.";
    }

    return view('test', compact('name'));
}
}
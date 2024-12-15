<?php  

namespace App\Http\Controllers;  

use Illuminate\Http\Request;  

class FormController extends Controller  
{  
    
    public function showForm()  
    {  
        return view('form'); 
    }  

     
    public function submitForm(Request $request)  
    {    
        $validatedData = $request->validate([  
            'title' => 'required|string',  
            'first-name' => 'required|string',  
            'last-name' => 'required|string',  
            'position' => 'nullable|string',  
            'company' => 'nullable|string',  
            'business-arena' => 'nullable|string',  
            'employees' => 'nullable|integer',  
            'address' => 'required|string',  
            'additional-info' => 'nullable|string',  
            'zip-code' => 'required|string',  
            'place' => 'required|string',  
            'country' => 'required|string',  
            'phone' => 'required|string',  
            'email' => 'required|email',  
            'terms' => 'accepted',  
        ]);  

        return back()->with('success', 'Data submitted successfully!');  
    }  
}
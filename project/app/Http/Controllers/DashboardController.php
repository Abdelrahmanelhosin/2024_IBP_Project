<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function dashboard_index() : View {
        $users = User::all();
        return view('dashboard',compact('users'));
    }
    

    public function create(){
        return view('create');
    }

    public function store(Request $request) {
        
        if($request->register_professional_status=='yes') $admin=1;
        else $admin=0;
        
        User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'tel'=>$request->tel,
            'password' => Hash::make($request->password),
            'user_type'=>$admin,
        ]);
    
        return redirect()->route('dashboard');
    }
    
    public function edit(User $user) {
        // // $user = User::where('id', 4)->first();
        // return ($user);
        return view('update', ['user' => $user]);
    }
    
    public function update(Request $request, User $user) {
        $user = User::findOrFail($request->id); // Ensure the event exists
        // return $request;
        if($request->register_professional_status=='yes') $admin=1;
        else $admin=0; 
            $user->update([
                'email' => $request->email,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name, 
                'tel' => $request->tel,
                'user_type' =>$admin
            ]);
   
    
        return redirect()->route('dashboard');
    }
    
    public function destroy(User $user) {
        $user->delete(); 
        return redirect()->route('dashboard');
    }

}

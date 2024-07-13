<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Member;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;


class UserController extends Controller
{
    //
    public function register(Request $request) {
    
        // dd($request->all());

        // $user_find = User::where('email', $request->email)->orWhere('username', $request->username)->first();
        // if($user_find){
        //     return redirect()->route('register')->with('error', 'Email atau Username sudah di gunakan')->withInput();;
        // }

        $data_request = [
            'name' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];

        $user = User::create($data_request);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('login');
    }

    public function login(Request $request) {
       
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('dashboard');
        }

        return back()->withErrors(['errors' => $credentials])->withInput();
    }

    public function logout(){
        Auth::logout();

        return redirect()->route('login');
    }

    public function member(Request $request){
        // dd($request->all());
        $data = [
            'name' => $request->name,
            'nickname' => $request->nickname,

        ];

        Member::create($data);

        return redirect()->route('dashboard');
    }

    public function editMember($id) {
        $member = Member::findOrFail($id);
        return view('auth.edit-member', compact('member'));
    }

    public function updateMember(Request $request, $id) {
        $member = Member::findOrFail($id);
        $member->update([
            'name' => $request->name,
            'nickname' => $request->nickname,
        ]);

        return redirect()->route('dashboard')->with('success', 'Member updated successfully.');
    }

    public function deleteMember($id) {
        $member = Member::findOrFail($id);
        $member->delete();
        return redirect()->route('dashboard')->with('success', 'Member deleted successfully.');
    }
    
}

<?php

namespace App\Http\Controllers;
use App\Models\Member;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function login(Request $request) {
        $data = [
            'title' => 'Login | Layanan Pengaduan',
        ];
    
        return view('login', $data);
    }
    public function register(Request $request) {
        $data = [
            'title' => 'register | Layanan Pengaduan',
        ];
    
        return view('register', $data);
    }
    public function dashboard(Request $request) {
        $member = Member::all();
        $data = [
            'members' => $member,
            'title' => 'dashboard | Layanan Pengaduan',
        ];
    
        return view('auth.dashboard', $data);
    }

}

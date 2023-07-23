<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminStaffController extends Controller
{
    public function index(){
        $users = User::all();
       
        return view('backend.staff.index', compact('users'));
    }

}

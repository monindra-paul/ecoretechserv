<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Create_token;

class AdminShowTokensController extends Controller
{
    public function index(){
        $showtokens = Create_token::all();
       
        return view('backend.tokenpage.showtokens', compact('showtokens'));
    }

    public function edit(){
      
        return view('backend.tokenpage.edittoken');
    }
}

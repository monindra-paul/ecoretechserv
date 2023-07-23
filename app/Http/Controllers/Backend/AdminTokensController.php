<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Create_token;
use Carbon\Carbon;
class AdminTokensController extends Controller
{
    public function index(){
        return view('backend.admission.show');
    }

    public function createtokens(Request $request){
        $request->validate([
            'warranty_info'=>'required',
            'name'=>'required',
            'mobile'=>'required',
            'email'=>'required|email',
            'invoice_no'=>'required',
            'invoice_date'=>'required',
            'product_name'=>'required',
            'serial_no'=>'required',
            'model_no'=>'required',
            'address'=>'required',
            'issue'=>'required'
            

        ]);

        $data = [
            'warranty_info' => $request->warranty_info,
            'name' => $request->name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'invoice_no' => $request->invoice_no,
            'invoice_date' => $request->invoice_date,
            'product_name' => $request->product_name,
            'serial_no' => $request->serial_no,
            'model_no' => $request->model_no,
            'address' => $request->address,
            'issue' => $request->issue,
        ];

        $createdata = Create_token::insert($data);

        if($createdata){
            return redirect()->back()->with('Updated Successfully');
        }
        else{
            return redirect()->back()->with('Error', 'Something Went Wrong');
        }
    }

    public function edit($id){

        $tokens = Create_token::find($id);
        if ( is_null ($tokens) ){
            
            return redirect('admintokens');
        }
        else{
          
            $data = compact('tokens');
            return view('backend.tokenpage.edittoken')->with($data);
        }
    }

    public function update($id, Request $request){
        $tokens = Create_token::find($id);

            $tokens->name = $request['name'];
            $tokens->mobile = $request['mobile'];
            $tokens->email = $request['email'];
            $tokens->save();

            return redirect('adminshowtokens');

    }
}

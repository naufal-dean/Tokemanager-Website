<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Income;
use Validator;

class FormsController extends Controller
{
    // Handle get request.
    // public function addMore(){
    //     return view("addMore");
    // }

    // Handle post request.
    public function addRow(Request $request){
        $rules = [];

        foreach($request->input('name') as $key => $value) {
            $rules["name.{$key}"] = 'required';
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->passes()) {
            foreach($request->input('name') as $key => $value) {
                Income::create([
                  'item_id'=>$request->input('item_id'),
                  'invoice_id'=>$request->input('invoice_id'),
                  'finance_id'=>1,
                  'qty'=>$request->input('qty'),
                  'transaction'=>$request->input('transaction')
                ]);
            }
            return response()->json(['success'=>'done']);
        }
        return response()->json(['error'=>$validator->errors()->all()]);
    }
}

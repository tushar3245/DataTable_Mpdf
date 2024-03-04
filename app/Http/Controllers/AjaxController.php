<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AjaxController extends Controller
{
    public function index(){
        return view('ajax');
    }

        public function upload(Request $request)
        {
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('uploads'), $imageName);
    
                return response()->json(['success' => true, 'image' => $imageName]);
            }
    
            return response()->json(['success' => false]);
        }
    }







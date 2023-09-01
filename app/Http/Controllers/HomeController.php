<?php

namespace App\Http\Controllers;

use App\Models\h;
use App\Models\r;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function ret(){
   $rs=r::all();
    // return back();

        return view('book.book',compact('rs'));
    }

    public function rr(Request $request)
    {
       r::Create([

        'name' => $request->name,
        'des' => $request->des,
        
    ]);
    // return back();

        //return view('book.book');
        return back();
    }

public function edit($id){
   $rs=r::find($id);
    // return back();

        return view('book.edit',compact('rs'));
    }
   
    //update
    public function pubcreate_update(Request $request, $id)
    {

        r::find($id)->update([

           
            'name' => $request->name,
            'des' => $request->des,


        ]);

        return redirect()->route('ret');
    }
}

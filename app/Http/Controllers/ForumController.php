<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Forum;
use Illuminate\Support\Facades\DB;

class ForumController extends Controller
{
    public function show()
    {
        return view('forum');
    }

    public function HunterForum()
    {
        return view('hunter-page');
    }

    public function AddForum(Request $request){
    
        // $add =  new Forum();

        // dd($add);
        
        // $add->postalcode = $request->postalcode;    
        // $add->number =$request->number;            
        // $add->email = $request->email;
        // $add->insurancetype = $request->insurancetype;

        $data = [
            'postalcode' => $request->postalcode,
            'number'=> $request->number,
            'email' => $request->email,
            'insurancetype' => $request->insurancetype,
       ];
      
       
       DB::table('forum')->insert($data);
        

     return redirect('/hunter-page')->with('status',"Insert successfully");
    
}

}

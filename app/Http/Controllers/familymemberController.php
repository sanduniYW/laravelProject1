<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\familyMember;
use App\pMember;

class familymemberController extends Controller
{
    public function storeFamilyMember(Request $request){
        $table1= new familyMember();
        $table2=new pMember();

         $this->validate($request,[
           'name'=>'required|min:8',
           'relationship'=>'required|min:3',
           'gender'=>'required',
           'DoB'=>'required'
         ]);

        $table1->fullName       = $request->input('name');
        $table1->relationship   = $request->input('relationship');
        $table1->gender         = $request->input('gender');
        $table1->dob            = $request->input('DoB');
        $table1->pMember_id     = $table2->pMemberId;
        $table1->save();

        $data=familyMember::all();
        return view('familyMember')->with('data',$data);
    }
}

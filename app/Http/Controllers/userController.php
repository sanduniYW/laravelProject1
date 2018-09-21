<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\allUser;
use App\ORFOL;
use App\pMember;
use App\OrPmMo;
use App\supervisingOfficer;
use App\familyMember;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    
    public function storeUsers(Request $request){
        
            $table1=new allUser();

            $this->validate($request,[
                'name'=>'required|max:50',
                'callingName'=>'required|max:10',
                'email'=>'required|max:25',
                'nic'=>'required|min:10',
                'contactNo'=>'required|min:10',
                'password'=>'required|min:5',
                'type'=>'required'
            ]);

            $table1->nameWithInitials = $request->input('name');
            $table1->callingName      = $request->input('callingName');
            $table1->email            = $request->input('email');
            $table1->NIC              = $request->input('nic');
            $table1->contactNo        = $request->input('contactNo');
            $table1->password         = bcrypt($request->input('password'));
            $table1->type             = $request->input('type');

            $table1->save();
            

        if($request->input('type') == 'P-Member'){
            $table2=new pMember();

            $this->validate($request,[
                'addNo'=>'required|max:8',
                'addStreet'=>'required|max:20',
                'addCity'=>'required|max:20',
                'intentToJoin'=>'required',
                'noOfFamilyMember'=>'required'
              ]);
          
            $table2->addNo            = $request->input('addNo');
            $table2->addStreet        = $request->input('addStreet');
            $table2->addCity          = $request->input('addCity');
            $table2->intentToJoin     = $request->input('intentToJoin');
            $table2->noOfFamilyMember = $request->input('noOfFamilyMember');

            $table2->user_id          = $table1->userId;
            
            $table2->save();
            $data=pMember::all();
            return view('familyMember')->with('noOffamilymember', $data);
       
        }

        if(($request->input('type')) =='OR-FOL' ){
            $table3=new ORFOL();

            $this->validate($request,[
                'region'=>'required|max:10',
              ]);

            $table3->region           = $request->input('region');
            $table3->user_id          = $table1->userId;

            $table3->save();
            return redirect()->back()->with('message','Registered Successfully');

        }
        
        return redirect()->back();
    }
    
    public function storeMember(Request $request){
         $table1=new familyMember();
         $result = DB::table('p_members')->select('user_id')->where('noOfFamilyMember',  $request->input('family_member_count'))->first();
         $type= $result->user_id; 

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

         $table1->user_id        = $type;
         $table1->save();

         $data=pMember::all();
         if($request->input('family_member_count')>1){
             
         return view('familyMember')->with('noOffamilymember', $data);
          } else{
         return redirect()->back()->with('message','Registered Successfully');
          }

    }

    public function loginUsers(Request $request){

        $email=$request->input('email');
        $password=$request->input('password');
        $data=DB::select('select NIC from all_users where email=? ',[$email]);
        $d=allUser::all();
        if(count($data)){
           $result = DB::table('all_users')->select('type')->where('email', $email)->first();
           $type= $result->type; 
           if($type=="P-Member"){
                return view('p-memeber');
           }
           if($type=="OR-FOL"){
                $details=familyMember::all();
                return view('or-fol')->with('detail',$details);
           }
            if($type=="OR-PM@PM"){

                $details=DB::table('all_users')
                        ->join('p_members','p_members.user_id','=','all_users.userId')
                        ->select('all_users.nameWithInitials','all_users.callingName','all_users.email','all_users.NIC','all_users.contactNo','p_members.pMemberId','p_members.isFinalize')
                        ->get();
                //dd($details);
                return view('or-pm')->with('detail',$details);
            }
            if($type=="Supervising Officer"){

                $details=DB::table('all_users')
                        ->where('type','=','P-Member'  )
                        ->select('nameWithInitials','callingName','email','NIC','contactNo')
                        ->get();
                        
                $det=DB::table('all_users')
                        ->where('type','=','OR-FOL'  )
                        ->select('nameWithInitials','callingName','email','NIC','contactNo')
                        ->get();        

                        return view('super', array('detail' => $details,'d' => $det) );
            }
        }else{
            return redirect()->back()->with('message','Login Failed');
        }
    }

    public function updateAsMember($pId){
       
            DB::table('p_members')
            ->where('pMemberId','=',$pId)
            ->update(['isFinalize' => 1]);

            $details=DB::table('all_users')
            ->join('p_members','p_members.user_id','=','all_users.userId')
            ->select('all_users.nameWithInitials','all_users.callingName','all_users.email','all_users.NIC','all_users.contactNo','p_members.pMemberId','p_members.isFinalize')
            ->get();
            return view('or-pm')->with('detail',$details);
    }

    public function delete($familyMemberId){
          $d= familyMember::find($familyMemberId);
          $d->delete(); 

          $details=familyMember::all();
         return view('or-fol')->with('detail',$details);
    }


    public function update($familyMemberId){
        $d= familyMember::find($familyMemberId);
         
       return view('update')->with('d',$d);
  }

    public function reSubmit(Request $request, $id){
        $d= familyMember::find($id);
        $d->fullName       = $request->name;
        $d->relationship   = $request->relationship;
        $d->dob            = $request->DoB;
        $d->save();

        $details=familyMember::all();
        return view('or-fol')->with('detail',$details);
    }

    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect('/');
    }
}

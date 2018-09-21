<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Home');
});
Route::get('/Home', function () {
    return view('Home');
});
Route::get('/Contact', function () {
    return view('Contact');
});

Route::get('/Register', function () {
    return view('Register');
});

Route::get('/About', function () {
    return view('About');
});

Route::get('/or-pm', function () {

    $details=DB::table('all_users')
    ->join('p_members','p_members.user_id','=','all_users.userId')
    ->select('all_users.nameWithInitials','all_users.callingName','all_users.email','all_users.NIC','all_users.contactNo','p_members.isFinalize?')
    ->get();

    return view('or-pm')->with('detail',$details);
});

Route::get('/or-fol', function () {
     $details=familyMember::all();
    return view('or-fol')->with('detail',$details);
});



//for family members
Route::post('/familyMember',[
    'uses'=>'userController@storeMember',
    'as'=>'save'
]);

Route::post('/Register',[
    'uses'=>'userController@storeUsers',
    'as'=>'signUp'
]);

Route::post('/Home',[
    'uses'=>'userController@loginUsers',
    'as'=>'signIn'
]);

Route::get('/markedAsMember/{pMemberId}','userController@updateAsMember');

Route::get('/familyMembersDelete/{familyMemberId}',[
    'uses'=>'userController@delete',
    'as'=>'familyMembers.delete'
]);

Route::get('/familyMembersUpdate/{familyMemberId}',[
    'uses'=>'userController@update',
    'as'=>'familyMembers.update'
]);

Route::post('/submit/{familyMemberId}',[
    'uses'=>'userController@resubmit',
    'as'=>'submit'
]);

Route::get('/super', function () {
    return view('super');
});

Route::get('signout',[
    'uses'=>'userController@logout',
    'as'=>'home'
]);


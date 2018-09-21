<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pMember extends Model
{
    
    protected $fillable   = [ 'addNo', 'addStreet', 'addCity', 'intentToJoin','noOfFamilyMember', 'user_id'];

   
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class familyMember extends Model
{
   protected $primaryKey = 'familyMemberId';
    protected $fillable   = [ 'fullName','relationship', 'gender', 'dob','user_id'];

    
}

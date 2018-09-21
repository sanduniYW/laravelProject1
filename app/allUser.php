<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

class allUser extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;

    protected $primaryKey = 'userId';
    protected $fillable = [ 'userId', 'nameWithInitials', 'callingName','email', 'NIC', 'contactNo','password','type'];
}

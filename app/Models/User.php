<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model{

    protected $table = 'tbluserinfo';
    
    protected $fillable = [ 'UserID', 'Username', 'Password','JobID'];

    public $timestamps = true;
    protected $primaryKey = 'UserID';
}
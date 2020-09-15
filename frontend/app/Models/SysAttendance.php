<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SysAttendance extends Model
{
    protected $table = 'sys_attendances';
    protected $fillable = [
    	'user_id',
    	'check_in',
    	'check_out',
    	'location',
    	'ip_address',
    	'latitude',
    	'longitude',
    	'notes'
    ];
}

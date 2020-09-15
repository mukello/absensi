<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SysParents extends Model
{
    protected $table = 'sys_parents';
    protected $fillable = [
    	'user_id',
    	'name',
    	'relationship',
    	'address',
    	'phone_number',
    	'occupation',
    	'ktp_number',
    	'ktp_file',
    	'kk_number',
    	'kk_file',
    	'created_at',
    	'updated_at',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SysUserModel extends Model
{
    protected $table = 'users';
    protected $fillable = [
    	'class_id',
    	'role_id',
    	'registration_number',
    	'nis',
    	'nisn',
    	'nip',
    	'name',
    	'gender',
    	'birth_place',
    	'birth_date',
    	'religion',
    	'email',
    	'password',
    	'phone_number',
    	'address',
    	'photo',
    	'flag',
    	'tahun_ajaran',
    	'email_verified_at',
    	'remember_token',
    	'created_by',
    	'updated_by',
    	'deleted_date',
    	'deleted_by',
    	'is_deleted',
    	'current_sign_in_at',
    	'last_sign_in_at'
    ];
}

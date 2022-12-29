<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $table = 'members';
    protected $fillable = ['m_sex', 'm_name', 'm_username', 'm_passwd', 'm_birthday', 'm_level', 'm_email', 'm_phone', 'm_address', 'm_jointime'];
}
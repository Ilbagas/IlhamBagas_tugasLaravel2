<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class datatim extends Model
{
    protected $table = 'data_timf1';
    protected $fillable = ['nama_tim', 'description', 'juaradunia'];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserColorSetting extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'mode', 'name', 'value'];
}



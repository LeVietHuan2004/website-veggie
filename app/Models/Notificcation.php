<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notificcation extends Model
{
    protected $fillable = ['user_id','type', 'message','link', 'is_read'];
}
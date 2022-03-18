<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disneyplus extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'gender', 'state', 'lga', 'phone_no', 'email', 'reg_no', 'profile_image'];
}

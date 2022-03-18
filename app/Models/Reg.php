<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reg extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'sname',
        'fname',
        'gender',
        'age',
        'phoneNo',
        'email',
        'state',
        'lga',
        'state2',
        'lra',
    ];
}

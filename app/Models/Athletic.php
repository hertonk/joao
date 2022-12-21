<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Athletic extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'college',
        'citystate'
    ];
}

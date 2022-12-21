<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "cpf",
        "birthday",
        "whatsapp",
        "emergency",
        "address",
        "instagram",
        "registration",
        "photo",
        "athletic_id",
        "type",
        "accommodation",
        "status"
    ];
}

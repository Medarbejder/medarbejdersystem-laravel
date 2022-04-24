<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'end',
        'start',
        'numberVolunteerNiceToHave',
        'numberVolunteerNeedToHave',
        'description',
        'meetingPoint',
        'udvalg',
        'createdBy',
    ];

}

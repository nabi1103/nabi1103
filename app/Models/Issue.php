<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'phone', 'email', 'urgency', 'problem-description', 'steps-taken', 'expectation' ];
}

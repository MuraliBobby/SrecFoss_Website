<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;

    protected $fillable =[
        'event_name',
        'event_description',
        'event_date',
        'event_duration',
        'event_venue',
        'participation_certificate',
        'winner_runner_certificate',
        'cash_prize',
        'registration_link',
        'poster_path',
        'event_status',
    ];

    protected $casts = [
        'participation_certificate' => 'boolean',
        'winner_runner_certificate' => 'boolean',
        'cash_prize' => 'boolean',
    ];

    
}

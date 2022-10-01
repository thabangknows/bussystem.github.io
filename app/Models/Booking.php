<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Booking extends Model
{
use HasApiTokens, HasFactory, Notifiable;
/**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'booked_by',
        'trip_from',
        'trip_to',
        'date_trip',
        'time_trip',
        'accepted_check'
    ];
}

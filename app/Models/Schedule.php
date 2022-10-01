<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Schedule extends Model
{
    use HasFactory;

    use HasApiTokens, HasFactory, Notifiable;
/**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'trip_from',
        'trip_to',
        'trip1',
        'trip2',
        'trip3',
        'trip4',
        'trip5',
    ];
}

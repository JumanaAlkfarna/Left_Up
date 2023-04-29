<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    public function car(){
        return $this->belongsTo(Car::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function time(){
        return $this->belongsTo(User::class);
    }


    public static function isAvailable(Time $time, $date)
    {
        $reservations = self::where('time_id', $time->id)
                            ->where('date', $date)
                            ->get();

        return $reservations->count() < 2;
    }
}
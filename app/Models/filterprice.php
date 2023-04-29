<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class filterprice extends Model
{
    use HasFactory;

    public function filter(){
        return $this->belongsTo(filter::class);
    }
}
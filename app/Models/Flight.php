<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Flight extends Model
{
    use HasFactory;

    protected $fillable = [
        'airline',
        'flight_date',
        'flight_status' ,
        'departure' ,
        'arrival',
        'flight' ,
      
    
    ];

    protected $dates = ['flight_date'];

    public static function booted()
    {
        static::creating(function ($model){
            $model->uuid = Str::uuid();
        });
    }
    public function getFlightDateAttribute($value)
    {
        return Carbon::parse($value)->format('D, d M Y');
    }
 
}

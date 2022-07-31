<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MuseumRegister extends Model
{
    use HasFactory;

    protected $fillable = [
        'document',
        'name',
        'age',
        'gender',
        'transport',
        'register_date',
        'day',
        'country_id',
        'user_id',
        'museum_id'
    ];

    public function countries(){
        return $this->belongsTo(Country::class);
    }

    public function museums(){
        return $this->belongsTo(Museum::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }


    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;

    protected $fillable = [
        'age',
        'gender',
        'country_id',
        'user_id',
        'recommend_visit',
        'education_level',
        'economic_activity',
        'museum',
        'interest',
        'kid',
        'day',
        'reason',
    ];

    public function countries(){
        return $this->belongsTo(Country::class);
    }

}

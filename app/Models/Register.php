<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;

    protected $fillable = [
        'number_of_tourist',
        'register_date',
        'days_of_visit',
        'country_id',
        'reason_item_id',
        'user_register_id',
        'transport_item_id',
        'responsible_tourist',
        'month_of_register',
        'year_of_register',
        'place_item_id',
    ];

    public function countries(){
        return $this->belongsTo(Country::class);
    }

    public function places(){
        return $this->belongsTo(Place::class);
    }

    public function reasons(){
        return $this->belongsTo(Reason::class);
    }

    public function transports(){
        return $this->belongsTo(Transport::class);
    }
}

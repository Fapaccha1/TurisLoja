<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'region_id'
    ];

    public function registers(){
        return $this->hasMany(Register::class);
    }

    public function museumregisters(){
        return $this->hasMany(Register::class);
    }

    public function surveys(){
        return $this->hasMany(Survey::class);
    }
}

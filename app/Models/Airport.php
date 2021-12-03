<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'city', 'reference',
    ];

    public function flights()
    {
        return $this->hasMany(Flight::class, 'airport_id', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anomalie extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
    ];

    public function rapports()
    {
        return $this->hasMany(Rapport::class);
    }

}


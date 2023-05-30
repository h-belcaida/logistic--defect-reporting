<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Rapport extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = ['title', 'salle_id', 'anomalie_id', 'comment', 'est_resolu'];
    protected $casts = [
        'est_resolu' => 'boolean',
    ];

    public function salle()
    {
        return $this->belongsTo(Salle::class);
    }

    public function anomalie()
    {
        return $this->belongsTo(Anomalie::class);
    }

}

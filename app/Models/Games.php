<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    use HasFactory;
    protected $fillable = ['Risultato', 'data', 'ruolo'];
    public function campioni()
    {
        return $this->belongsTo(Campioni::class, statistiche::class, errori::class);
    }
    public function statistiche()
    {
        return $this->hasOne(Statistiche::class);
    }
    public function errori()
    {
        return $this->hasOne(Errori::class);
    }
}

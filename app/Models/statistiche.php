<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class statistiche extends Model
{
    use HasFactory;
    protected $table = 'statistiche';
    public function games()
    {

        return $this->hasMany(Games::class);
    }
}

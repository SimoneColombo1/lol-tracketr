<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class campioni extends Model
{
    use HasFactory;
    protected $table = 'campioni';
    public function games()
    {
        return $this->hasMany(Games::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesure extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function Client()
    {
        return $this->belongsTo(Client::class, 'clients_id');
    }
}

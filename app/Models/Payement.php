<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payement extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function Client()
    {
        return $this->belongsTo(Client::class, 'clients_id');
    }
    public function Modele()
    {
        return $this->belongsTo(Modele::class, 'modeles_id');
    }
}

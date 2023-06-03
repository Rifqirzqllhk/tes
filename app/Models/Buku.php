<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Genre;

class Buku extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function Genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function Reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}

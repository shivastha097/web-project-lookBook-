<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Room;
use App\User;

class Seller extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function rooms() {
        return $this->hasMany(Room::class);
    }
}

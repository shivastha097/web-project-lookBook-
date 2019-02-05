<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Bookmark;
use App\User;

class Buyer extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function bookmarks(){
        return $this->hasMany(Bookmark::class);
    }
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Buyer;

class Bookmark extends Model
{
    public function buyer(){
        return $this->belongsTo(Buyer::class);
    }
}

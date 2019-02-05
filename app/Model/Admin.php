<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Category;

class Admin extends Model
{
    public function categories(){
        return $this->hasMany(Category::class);
    }
}

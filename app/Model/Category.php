<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Admin;

class Category extends Model
{
    public function admin() {
        return $this->belongsTo(Admin::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * The relation between tables.
     * 
     */
    public function raiseFund()
    {
        return $this->hasMany(RaiseFund::class, 'category_id');
    }
}

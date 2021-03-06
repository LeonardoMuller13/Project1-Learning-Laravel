<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'image'
    ];

    protected $dates =[
        'deleted_at'
    ];

    public function category ()
    {
        return $this->hasMany(Product::class);
    }
}

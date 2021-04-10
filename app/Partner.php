<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'category_id',
        'name',
        'description'
    ];
    
    protected $dates =[
        'deleted_at'
    ];


    public function category ()
    {
        return $this->belongsTo(Category::class);
    }
}

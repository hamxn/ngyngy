<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $fillable = ['image', 'order', 'status'];

    public function artwork()
    {
        return $this->belongsTo(Artwork::class, 'artwork_id');
    }	
}

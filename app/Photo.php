<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $fillable = ['path', 'order', 'status'];

    public function artwork()
    {
        return $this->belongsTo(Artwork::class, 'artwork_id');
    }
}

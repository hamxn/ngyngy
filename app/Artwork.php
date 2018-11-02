<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
	//
    public function photos()
    {
        return $this->hasMany(Photo::class, 'artwork_id');
    }

    public function contacts()
    {
        return $this->hasMany(Contact::class, 'artwork_id');
    }
}

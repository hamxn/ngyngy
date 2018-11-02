<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
	/**
	 * Get list photos of Artwork
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
    public function photos()
    {
        return $this->hasMany(Photo::class, 'artwork_id');
    }

    /**
     * Get list contacts of Artwork
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contacts()
    {
        return $this->hasMany(Contact::class, 'artwork_id');
    }

    /**
     * Get list text of artwork type
     * @return array
     */
    public static function listTextTypes()
    {
    	return config('config.artworks.type');
    }

    /**
     * Get list text of artwork status
     * @return array
     */
    public static function listTextStatus()
    {
    	return config('config.artworks.status');
    }

    /**
     * Get text of artwork type
     * @param number $type 
     * @return string
     */
    public static function textType($type) 
    {
    	return config('config.artworks.type.'.$type);
    }

    /**
     * Get text of artwork status
     * @param number $status 
     * @return string
     */
    public static function textStatus($status)
    {
    	return config('config.artworks.status.'.$status);
    }

}

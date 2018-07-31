<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public $timestamps = false;

    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
	
	public function page_contents()
    {
    	return $this->hasMany(PageContent::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function scopeHasNav($query)
    {
    	return $query->where('has_nav', 1);
    }
}

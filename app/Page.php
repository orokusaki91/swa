<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public $timestamps = false;
	
	public function page_contents()
    {
    	return $this->hasMany(PageContent::class);
    }

    public function scopeHasNav($query)
    {
    	return $query->where('has_nav', 1);
    }
}

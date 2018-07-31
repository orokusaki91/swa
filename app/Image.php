<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function page_content()
    {
    	return $this->belongsTo(PageContent::class);
    }
}

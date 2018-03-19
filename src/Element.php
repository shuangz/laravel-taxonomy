<?php

namespace Shuangz\Taxonomy;

use Illuminate\Database\Eloquent\Model;

class Element extends Model {

	public function taxonomy()
    {
    	return $this->belongsTo(Taxonomy::class);
    }
}
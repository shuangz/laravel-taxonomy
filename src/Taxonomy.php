<?php

namespace Shuangz\Taxonomy;

use Baum\Node;

class Taxonomy extends Node {

	public function elements()
    {
    	return $this->hasMany(Element::class);
    }
}
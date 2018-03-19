<?php

namespace Shuangz\Taxonomy;

/**
*
*/
class ClassName extends AnotherClass
{

	public function setTaxonomy($taxonomy, $value)
	{
		//第一步：首先获取这个分类法
		//更改，同时获取两个
		$root = Taxonomy::where('name', $taxonomy)
			->orWhere('name', $value)
			->get();

		//第二部：判断这个分类法是否存在，并且是否为根节点
		//第三步：是否有value这个下级节点
		//第四步：获取下级节点value
		//
		$leaf = Taxonomy::where('name', $taxonomy)->first();

		//以下是另外一个思路
		//
		$query = Node::query();

	}
}
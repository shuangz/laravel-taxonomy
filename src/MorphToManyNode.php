<?php

//关于命名空间的一个坑：
//Trait 作为一个关键字不能在命名空间中出现，可以用 Mixin 代替
namespace Shuangz\Taxonomy;


/**
 * 在Model类中使用，拥有一个简单的父类与子类功能
 * 所在的Model中对应的数据库必须有一个'parent_id'字段
 */
trait MorphToManyNode
{
    /**
    * 获得此 Model 实例的所有 node
    * @return [type] [description]
    */
    public function nodes()
    {
        return $this->MorphToMany(Element::class, 'nodeable');
    }

    public function node($name, $de)
    {
    	$descendants = Node::where('name', $name)->descendants()->get();
    }

    public function FunctionName($taxonomy, $value)
    {
    	Taxonomy::where()->Element::where('name', $value)
    	$this->nodes()->attach('id');
    }
}
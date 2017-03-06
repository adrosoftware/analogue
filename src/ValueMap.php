<?php

namespace Analogue\ORM;

class ValueMap
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $class;

    /**
     * @var array
     */
    protected $embeddables = [];

    /**
     * @var array
     */
    protected $attributes = [];

    /**
     * @var boolean
     */
    protected $disablePrefixes = false;

    /**
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @return array
     */
    public function getEmbeddables()
    {
        return $this->embeddables;
    }

    /**
     * @param $class
     */
    public function setClass($class)
    {
        $this->class = $class;
    }

    /**
     * @return mixed
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @return string
     */
    public function getName()
    {
        if (isset($this->name)) {
            return $this->name;
        } else {
            return class_basename($this);
        }
    }

    public function usePrefixes()
    {
        return $this->disablePrefixes ? false : true;
    }
}

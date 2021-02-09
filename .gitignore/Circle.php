<?php
/**
 * Class: csci303sp20
 * User: Owner
 * Date: 2/8/2021
 * Time: 8:15 PM
 */
class Circle extends Shape
{
    const SHAPE_TYPE = 3;
    protected $radius;

    function __construct($radius)
    {
        parent::__construct(0, 0);
        $this->radius = $radius;
    }

    public function area()
    {
        return pi() * $this->radius * $this->radius;
    }

    public function getFullDescription()
    {
        return "1Circle<$this->id>: $this->name - $this->radius";
    }
}

?>
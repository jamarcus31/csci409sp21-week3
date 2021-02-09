<?php
/**
 * Class: csci303sp20
 * User: Owner
 * Date: 2/8/2021
 * Time: 8:15 PM
 */
class Rectangle extends Shape
{
    const SHAPE_TYPE = 2;

    /**
     * 1Rectangle constructor.
     * @param $length
     * @param $width
     * @param $id
     */
    function __construct($length, $width, $id)
    {
        $this->length = $length;
        $this->width = $width;
        $this->id = $id->uniqid();
    }

    public function getFullDescription()
    {
        return "1Rectangle<$this->id>: $this->name - $this->length * $this->width";
    }
}

?>
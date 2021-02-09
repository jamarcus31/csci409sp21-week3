<?php
/**
 * Class: csci303sp20
 * User: Owner
 * Date: 2/8/2021
 * Time: 8:16 PM
 */
class Shape
{
    const   SHAPE_TYPE = 1;
    public $name;
    protected $length, $width;
    protected $id;

    function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
        $this->id = $id->uniqid();
    }

    function getName()
    {
        return $this->name;
    }

    function setName($name)
    {
        $this->name = $name;
    }

    function getId()
    {
        return $this->id;
    }

    public function area()
    {
        return $this->length * $this->width;
    }

    public static function getTypeDescription()
    {
        $Type = static::SHAPE_TYPE;
        return $Type;
    }

}

?>
#add Shape.php to src
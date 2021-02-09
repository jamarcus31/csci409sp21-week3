<?php
/**
 * Class: csci303sp20
 * User: Owner
 * Date: 2/8/2021
 * Time: 8:15 PM
 */

/**
 * Class: csci303sp20
 * User: Owner
 * Date: 2/8/2021
 * Time: 8:00 PM
 */
class Octagon extends Shape
{
    const SHAPE_TYPE = 4;
    protected $side;

    function __construct($side)
    {
        parent::__construct(0, 0);
        $this->side = $side;
    }

    public function area()
    {
        return (2 * (1 + sqrt(2)) * $this->side * $this->side);
    }

    public function getFullDescription()
    {
        return "1Octagon<$this->id>: $this->name - $this->side";
    }
}

?>
#add Octagon.php to src
git commit -m "Created Octagon Class"
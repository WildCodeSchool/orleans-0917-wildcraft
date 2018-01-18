<?php
/**
 * Created by PhpStorm.
 * User: nico
 * Date: 18/01/18
 * Time: 09:59
 */

namespace App;

/**
 * Class Map
 * @package App
 */
class Map
{
    /**
     * @var array
     */
    private $grid;

    /**
     * @return array
     */
    public function getGrid(): array
    {
        return $this->grid;
    }

    /**
     * @param array $grid
     * @return Map
     */
    public function setGrid(array $grid): Map
    {
        $this->grid = $grid;
        return $this;
    }
}

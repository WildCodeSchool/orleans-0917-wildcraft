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
     * Map constructor.
     * @param array $grid
     */
    public function __construct(array $grid)
    {
        $this->grid = $grid;
    }

    /**
     * @return array
     */
    public function getGrid(): array
    {
        return $this->grid;
    }

    /**
     * Retourne un tableau HTML représentant la grille
     * @return string
     */
    public function render() : string
    {
        $table = '<table id="map">';
        foreach ($this->getGrid() as $row) {
            $table .= "<tr>";
                foreach ($row as $col) {
                    $table .= "<td>&nbsp;</td>";
                }
            $table .= "</tr>";
        }
        $table .= "</table>";

        return $table;
    }
}

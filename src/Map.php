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
     * @var array
     */
    private $characters;

    /**
     * Map constructor.
     * @param array $grid
     */
    public function __construct(array $grid, array $characters=[])
    {
        $this->grid = $grid;
        $this->characters = $characters;
    }

    /**
     * @return array
     */
    public function getGrid(): array
    {
        return $this->grid;
    }

    /**
     * @return array
     */
    public function getCharacters(): array
    {
        return $this->characters;
    }

    /**
     * @param array $characters
     * @return Map
     */
    public function setCharacters(array $characters): Map
    {
        $this->characters = $characters;

        return $this;
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

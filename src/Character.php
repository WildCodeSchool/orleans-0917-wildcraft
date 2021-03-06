<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 18/01/18
 * Time: 10:25
 */

namespace App;


/**
 * Class Character
 * @package App
 */
abstract class Character implements RenderInterface
{
    /**
     * @var array
     */
    private $coordinates;

    /**
     * @var string
     */
    private $image;

    /**
     * @var string
     */
    private $name;

    private $direction;

    private $map;

    /**
     * Character constructor.
     * @param string $name
     * @param string $image
     * @param array $coordinates
     */
    public function __construct(string $name, string $image, array $coordinates=[0,0])
    {
        $this->name = $name;
        $this->image = $image;
        $this->coordinates = $coordinates;
    }


    /**
     * @return array
     */
    public function getCoordinates(): array
    {
        return $this->coordinates;
    }

    /**
     * @return mixed
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * @param mixed $direction
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;
    }

    /**
     * @param array $coordinates
     * @return Character
     */
    // 5,2 6,2
    public function setCoordinates(array $coordinates): Character
    {
        $this->coordinates = $coordinates;

        return $this;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     * @return Character
     */
    public function setImage(string $image): Character
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * @param mixed $map
     * @return Character
     */
    public function setMap($map)
    {
        $this->map = $map;

        return $this;
    }



    public function render(): string
    {
        return '<img class="character '. $this->getDirection() .'"  src="images/'.$this->getImage().'" />';
    }

}
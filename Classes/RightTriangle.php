<?php

namespace Classes;

class RightTriangle implements ShapeInterface, ColorInterface
{
    private float $ab;
    private float $ac;
    private float $bc;
    private string $color;

    public function setRightTriangle(float $ab, float $ac, float $bc)
    {
        $this->ab = $ab;
        $this->ac = $ac;
        $this->bc = $bc;
    }

    public function getRightTriangle(): array
    {
        return [$this->ab, $this->ac, $this->bc];
    }

    public function setColor(string $color)
    {
        $this->color = $color;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function area(): float
    {
        return ($this->ab * $this->ac) / 2;
    }

    public function perimeter(): float
    {
        return $this->ab + $this->ac + $this->bc;
    }


    public function __construct(float $ab, float $ac, float $bc)
    {
        if ($ab <= 0 && $ac <= 0 && $bc <= 0) {
            echo "Length of every side must be > 0.";
        } elseif ($ab ** 2 + $ac ** 2 === $bc ** 2) {
            $this->ab = $ab;
            $this->ac = $ac;
            $this->bc = $bc;
        } else {
            echo "Length of the sides must be multiple of 3, 4, 5 that verify AB<sup>2</sup> + AC<sup>2</sup> = BC<sup>2</sup>";
        }
    }

    public function __toString()
    {
        return "The TRIANGLE with AB = $this->ab, AC = $this->ac, BC = $this->bc, "
            . "have ARIA = " . $this->area() . " , PERIMETER = " . $this->perimeter() . " and COLOR = " . $this->getColor() . ".";
    }
}
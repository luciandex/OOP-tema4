<?php

namespace Classes;

class Rectangle implements ShapeInterface, ColorInterface
{
    private float $length;
    private float $width;
    private string $color;

    public function setDimensions(float $length, float $width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    public function getDimensions(): array
    {
        return [$this->length, $this->width];
    }

    public function setColor(string $color)
    {
        $this->color = $color;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function __construct(float $length, float $width)
    {
        if ($length > $width) {
            $this->length = $length;
            $this->width = $width;
        } else {
            echo "Length must be higher than with to form a rectangle";
        }
    }

    public function perimeter(): float
    {
        return ($this->length + $this->width) * 2;
    }

    public function area(): float
    {
        return $this->length * $this->width;
    }

    public function __toString()
    {
        return "The RECTANGLE with LENGTH = $this->length and WIDTH = $this->width, "
            . "have ARIA = " . $this->area() . " , PERIMETER = " . $this->perimeter() . " and COLOR = " . $this->getColor() . ".";
    }
}

<?php

namespace Classes;

interface ColorInterface
{
    public function setColor(string $color);

    public function getColor(): string;
}
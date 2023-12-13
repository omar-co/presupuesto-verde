<?php

namespace App\Values;

class Millions
{
    public float $formatted;

    public function __construct(
        public readonly int $value,
    )
    {
        $this->formatted = number_format(($this->value / 100) / 1_000_000, 2, '.', null);
    }


}

<?php

declare(strict_types=1);

namespace Ashu\Aba;

final class Calculator
{
    private $email;

    public function add(int $param1, int $param2): int
    {
        return $param1 + $param2;
    }

}

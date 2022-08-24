<?php

namespace Klykovrv\NaturalNumberDivisorsPackage;

use Exception;

class NaturalNumberDivisors
{
    /**
     * Возвращает делители числа
     * @param int $integer <p>
     * Число, делители которого необходимо получить
     * </p>
     * @return string Строка, в которой перечислены делители числа через запятую
     * @throws Exception Если число ненатуральное
     */
    public static function getDivisors(int $integer): string
    {
        $divisors = [];

        if ($integer <= 0) {
            throw new Exception("Ненатуральное число.");
        }

        for ($i = 2; $i < $integer; $i++) {
            if (!($integer % $i)) {
                $divisors[] = $i;
            }
        }

        return $divisors ? implode(", ", $divisors) : $integer;
    }
}

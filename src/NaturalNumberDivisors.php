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

        for ($i = 1; $i <= $integer; $i++) {
            if ($integer % $i === 0) {
                $divisors[] = $i;
            }
        }

        return implode(", ", $divisors);
    }
}

<?php

// Создание анонимного замыкания
$sumClosure = function($a, $b) {
    return $a + $b;
};

// Вызов замыкания с разными парами чисел
echo "Сумма чисел 2 и 3: " . $sumClosure(2, 3) . "<br/>";
echo "Сумма чисел 5 и 7: " . $sumClosure(5, 7) . "<br/>";
echo "Сумма чисел -1 и 10: " . $sumClosure(-1, 10) . "<br/>";

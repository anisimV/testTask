<?php 

function findMaxConsecutiveOnes($nums) {
    $maxCount = 0;
    $currentCount = 0;
    
    foreach ($nums as $num) {
        if ($num == 1) {
            $currentCount++;
            $maxCount = max($maxCount, $currentCount);
        } else {
            $currentCount = 0;
        }
    }
    
    return $maxCount;
}

$nums = array(1, 1, 0, 1, 1, 1);
echo "Максимальное количество последовательных \"1\" в массиве " . implode(", ", $nums) . " равно " . findMaxConsecutiveOnes($nums) . ".";

<?php

for ($i = 1; $i <= 21; $i++) {
    $divideByThreeRemainder = ($i % 3);
    $multipleOfThree = ($divideByThreeRemainder == 0);

    if (!$multipleOfThree) {
        // skip to next loop value
        continue;
    }

    print "$i ";
}

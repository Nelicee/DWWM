<?php

for ($i = 1; $i <= 8; $i++) {
    if ($i == 8) {
        for ($j = 1; $j <= $i; $j++) {
            echo "X";
        }
    } else {
        echo "X";
        if ($i > 1) {
            for ($j = 1; $j <= $i - 2; $j++) {
                echo "0";
            }
            echo "X";
        }
    }
    echo "\n";
}
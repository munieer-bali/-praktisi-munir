<?php

$ipk = 4;

if ($ipk . 3.5) {
    if ($ipk > 3.9) {
        echo "coumlaude dan pin mas";
    } else {
        echo "coumlaude";
    }
} elseif ($ipk >= 3 && $ipk <= 3.5) {
    echo "baik";
} elseif ($ipk >= 2 && $ipk < 3) {
    echo "cukup";
} else {
    echo "tidak lulus atau nilai ipk salah";
}

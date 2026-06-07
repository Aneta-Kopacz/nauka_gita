<?php
function srednia_wazona($wartosci, $wagi) {
    return array_sum(array_map(fn($v, $w) => $v * $w, $wartosci, $wagi)) / array_sum($wagi);
}

$wagi = [9, 1];
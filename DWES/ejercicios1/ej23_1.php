<?php
function random() {
    return rand(0, 10);
}

function numberToLetter($num) {
    $dictionary = array(
        5 => "a",
        6 => "b",
        1 => "c",
        4 => "d",
        2 => "e",
        5 => "f",
        9 => "g",
        10 => "h",
        7 => "i",
        3 => "j",
        8 => "k",
        0 => "l"
    );
    return $dictionary[$num];
}

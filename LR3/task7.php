<?php
function test ($str) {
    $text = array (
        " " => "_",
    );
    return strtr($str, $text);
}
echo test("раз два три");
?>
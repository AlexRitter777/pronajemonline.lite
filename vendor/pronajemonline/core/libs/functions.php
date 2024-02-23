<?php

function debug($arr) {
    echo '<pre>' . print_r($arr, true) . '</pre>';
}

function h($string) {
    echo htmlspecialchars($string);
}
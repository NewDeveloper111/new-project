<?php

use app\A;
use app\B;

require_once __DIR__ . '/../vendor/autoload.php';
echo A::getValue() . '<br>';
echo B::getValue();
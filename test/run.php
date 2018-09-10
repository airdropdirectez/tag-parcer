<?php

require_once 'vendor/autoload.php';

use chlz\parser\Parser;

$parser = new Parser();

print_r($parser->process('a', 'https://directez.ru'));


#!/usr/bin/php
<?php

$subject = $argv[1];
$result = preg_replace('/^\s+|\s+$|\s+(?=\s)/', '', $subject);
echo $result . "\n";

?>
<?php

require_once 'File.php';

$file = new File('text.txt');

$file->writeText('line1');
$file->writeText('line2');
$file->writeText('line3');

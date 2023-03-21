<?php
require 'vendor/autoload.php';
use Censure\Censure;

$check = Censure::false_if_no_bad_words('Очень хорошо');
dd($check);
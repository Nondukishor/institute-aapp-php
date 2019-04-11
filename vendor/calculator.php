<?php
include_once ('../vendor/autoload.php');
use Pondit\Calculator\NumberCalculator\Addition;
use Pondit\Calculator\NumberCalculator\Subtraction;
use Pondit\Calculator\NumberCalculator\Multiplication;
use Pondit\Calculator\NumberCalculator\Division;
/*object decleartion of classes*/
$add=new Addition();
$sub=new Subtraction();
$mul=new Multiplication();
$div=new Division();
$add->add(5,5).'<br>';
$sub->subtrution(5,5).'<br>';
$mul->Mul(5,5).'<br>';
$div->div(5,5);

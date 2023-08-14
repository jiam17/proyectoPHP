<?php
require_once 'ConverterInterface.php';
require_once 'UnitConverter.php';

$value = $_POST['value'];
$fromUnit = $_POST['fromUnit'];
$toUnit = $_POST['toUnit'];

$unitConverter = new UnitConverter();
$convertedValue = $unitConverter->convert($value, $fromUnit, $toUnit);

echo "$value $fromUnit is equal to $convertedValue $toUnit";
?>
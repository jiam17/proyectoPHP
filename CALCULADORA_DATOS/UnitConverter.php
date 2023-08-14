<?php
class UnitConverter implements ConverterInterface {
    protected $conversionFactors = [
        'seconds' => 1,
        'minutes' => 60,
        'hours' => 3600,
        'days' => 86400
    ];

    public function convert($value, $fromUnit, $toUnit) {
        $fromFactor = $this->conversionFactors[$fromUnit];
        $toFactor = $this->conversionFactors[$toUnit];
        $convertedValue = ($value * $fromFactor) / $toFactor;
        return $convertedValue;
    }
}
?>

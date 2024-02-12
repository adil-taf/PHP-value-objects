<?php

declare(strict_types=1);

use App\PackageDimension;
use App\Weight;
use App\BillableWeightCalculatorService;
use App\DimDivisor;

require_once __DIR__ . '/autoload.php';

$package = [
  'weight' => 6,
  'dimensions' => [
    'width' => 9,
    'length' => 15,
    'height' => 7
    ],
];

$packageDimensions = new PackageDimension(
    $package['dimensions']['width'],
    $package['dimensions']['length'],
    $package['dimensions']['height'],
);

$weight = new Weight($package['weight']);

$billableWeightService = new BillableWeightCalculatorService();

$widerPackageDimensions = $packageDimensions->increaseWidth(10);

$billableWeight = ($billableWeightService)->calculate(
    $packageDimensions,
    $weight,
    DimDivisor::FEDEX
);

$widerPackageBillableWeight = ($billableWeightService)->calculate(
    $widerPackageDimensions,
    $weight,
    DimDivisor::FEDEX
);

echo $billableWeight . ' lb' . PHP_EOL;
echo $widerPackageBillableWeight . ' lb' . PHP_EOL;

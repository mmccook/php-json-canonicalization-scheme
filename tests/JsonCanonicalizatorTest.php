<?php

it('can handle arrays', function (array $array, string $asHex, string $asJson) {
    $instance = \Mmccook\JsonCanonicalizator\JsonCanonicalizatorFactory::getInstance();
    $jsonResult = $instance->canonicalize($array);
    expect($jsonResult)->toBe($asJson);
    $hexResult = $instance->canonicalize($array, true);
    expect($hexResult)->toBe($asHex);
})->with('array')
    ->with('hex_output_array')
    ->with('json_output_array');


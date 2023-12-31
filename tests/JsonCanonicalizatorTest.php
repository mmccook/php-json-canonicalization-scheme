<?php

use Mmccook\JsonCanonicalizator\JsonCanonicalizatorFactory;

function __TestMethod($array, $asHex, $asJson): void
{
    $instance = JsonCanonicalizatorFactory::getInstance();
    $jsonResult = $instance->canonicalize($array);
    expect($jsonResult)->toEqual($asJson);
    $hexResult = trim($instance->canonicalize($array, true));
    expect($hexResult)->toEqual($asHex);
}
it('can handle arrays', fn (array $array, string $asHex, string $asJson) => __TestMethod($array, $asHex, $asJson))
    ->with('array')
    ->with('hex_output_array')
    ->with('json_output_array');

it('can handle generic structures', fn (array $array, string $asHex, string $asJson) => __TestMethod($array, $asHex, $asJson))
    ->with('structure')
    ->with('hex_output_structure')
    ->with('json_output_structure');

it('can handle french', fn (array $array, string $asHex, string $asJson) => __TestMethod($array, $asHex, $asJson))
    ->with('french')
    ->with('hex_output_french')
    ->with('json_output_french');

it('can handle unicode', fn (array $array, string $asHex, string $asJson) => __TestMethod($array, $asHex, $asJson))
    ->with('unicode')
    ->with('hex_output_unicode')
    ->with('json_output_unicode');

it('can handle values', fn (array $array, string $asHex, string $asJson) => __TestMethod($array, $asHex, $asJson))
    ->with('values')
    ->with('hex_output_values')
    ->with('json_output_values');

it('can handle weird', fn (array $array, string $asHex, string $asJson) => __TestMethod($array, $asHex, $asJson))
    ->with('weird')
    ->with('hex_output_weird')
    ->with('json_output_weird');

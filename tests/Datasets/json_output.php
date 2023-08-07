<?php

function __LoadDataFile($file): string
{
    $path = __DIR__ . sprintf('/output/json/%s', $file);
    if (! file_exists($path)) {
        throw new \Exception("$file does not exists");
    }
    if (! is_readable($path)) {
        throw new \Exception("$file is not readable");
    }
    $contents = file_get_contents($path);

    return rtrim($contents);
}

dataset('json_output_array', [
    __LoadDataFile('arrays.json'),
]);

dataset('json_output_structure', [
    __LoadDataFile('structures.json'),
]);

dataset('json_output_french', [
    __LoadDataFile('french.json'),
]);
dataset('json_output_unicode', [
    __LoadDataFile('unicode.json'),
]);

dataset('json_output_values', [
    __LoadDataFile('values.json'),
]);

dataset('json_output_weird', [
    __LoadDataFile('weird.json'),
]);

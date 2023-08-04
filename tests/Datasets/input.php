<?php

declare(strict_types=1);
function __LoadBaseDataFile($file): array
{
    $path = __DIR__ . sprintf('/output/json/%s', $file);
    if (! file_exists($path)) {
        throw new \Exception("$file does not exists");
    }
    if (! is_readable($path)) {
        throw new \Exception("$file is not readable");
    }
    $contents = file_get_contents($path);

    return [json_decode(trim($contents), true)];
}

dataset('array', [
    __LoadBaseDataFile('arrays.json'),
]);

dataset('structure', [
    __LoadBaseDataFile('structures.json'),
]);

dataset('french', [
    __LoadBaseDataFile('french.json'),
]);

dataset('unicode', [
    __LoadBaseDataFile('unicode.json'),
]);

dataset('values', [
    __LoadBaseDataFile('values.json'),
]);

dataset('weird', [
    __LoadBaseDataFile('weird.json'),
]);

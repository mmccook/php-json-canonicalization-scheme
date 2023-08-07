<?php

function __LoadHexFile($file): string
{
    $path = __DIR__ . sprintf('/output/hex/%s', $file);
    if (! file_exists($path)) {
        throw new \Exception("$file does not exists");
    }
    if (! is_readable($path)) {
        throw new \Exception("$file is not readable");
    }

    return rtrim(str_replace('\n', ' ', file_get_contents($path)));
}

dataset('hex_output_array', [
    __LoadHexFile('arrays.txt'),
]);


dataset('hex_output_structure', [
    __LoadHexFile('structures.txt'),
]);

dataset('hex_output_french', [
    __LoadHexFile('french.txt'),
]);

dataset('hex_output_unicode', [
    __LoadHexFile('unicode.txt'),
]);

dataset('hex_output_values', [
    __LoadHexFile('values.txt'),
]);

dataset('hex_output_weird', [
    __LoadHexFile('weird.txt'),
]);

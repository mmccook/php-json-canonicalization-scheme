<?php

declare(strict_types=1);

dataset('array', [
    [[ 56, [ 'd' => true, "10" => null, "1" => []]]],
]);

dataset('structure', [
    [[
        "1" => [
            "f" => ["f" => "hi", "F" => 5],
            "
" => 56,
        ],
        "10" => [],
        "111" => [["e" => "yes", "E" => "no"]],
        "" => "empty",
        "a" => [],
        "A" => [],
    ]],
]);

dataset('french', [[[
  "peach" => "This sorting order",
  "péché" => "is wrong according to French",
  "pêche" => "but canonicalization MUST",
  "sin" => "ignore locale",
]]]);

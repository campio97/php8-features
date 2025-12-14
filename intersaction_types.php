<?php

declare(strict_types=1);

function process((Countable&Iterator)|string $input): void
{
    if (is_string($input)) {
        echo "String: $input";
    } else {
        echo "Count: " . $input->count();
    }
}

process("2");

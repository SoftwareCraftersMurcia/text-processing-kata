<?php declare(strict_types=1);

namespace Kata;

class TextProcessor
{
    public function analyse($text): string
    {
        return <<<TXT
1. hello
2. there
TXT;
    }
}

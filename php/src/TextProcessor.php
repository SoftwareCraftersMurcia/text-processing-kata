<?php declare(strict_types=1);

namespace Kata;

class TextProcessor
{
    public function analyse($text): string
    {
        $words = explode(' ', $text);

        $result = '';
        foreach ($words as $k => $word) {
            $result .= ($k + 1) . '. ' . $word . PHP_EOL;
        }

        return $result;
    }
}

<?php declare(strict_types=1);

namespace Kata;

class TextProcessor
{
    public static function analyse(string $string): ProcessedText
    {
        if (empty($string)) {
            return ProcessedText::empty();
        }
        return new ProcessedText([$string], 1);
    }
}

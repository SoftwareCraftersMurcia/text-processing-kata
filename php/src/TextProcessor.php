<?php declare(strict_types=1);

namespace Kata;

class TextProcessor
{
    public static function analyse(string $string): ProcessedText
    {
        if (empty($string)) {
            return ProcessedText::empty();
        }

        $string = str_replace(['.', ','], '', $string);
        $listOfWords = explode(' ', strtolower($string));

        return new ProcessedText(
            array_unique($listOfWords),
            count($listOfWords)
        );
    }
}

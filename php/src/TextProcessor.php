<?php
declare(strict_types = 1);

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

        $words = array_count_values($listOfWords);
        uasort($words, fn(int $a, int $b) => $b <=> $a);

        return new ProcessedText(
            array_keys(array_slice($words, 0, 10)),
            count($listOfWords)
        );
    }
}

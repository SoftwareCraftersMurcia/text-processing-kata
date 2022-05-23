<?php
declare(strict_types = 1);

namespace Kata;

class TextProcessor
{
    private const WORD_SEPARATOR = ' ';
    private const EMPTY_STRING = '';
    private const TOP_WORDS_LIMIT = 10;
    private const TOP_WORD_STARTING = 0;
    private const INVALID_CHARACTERS = ['.', ','];

    public static function analyse(string $blogPost): ProcessedText
    {
        if (empty($blogPost)) {
            return ProcessedText::empty();
        }

        $listOfWords = self::cleanListOfWords($blogPost);
        $orderTopTenWords = self::orderedTopTenWords($listOfWords);
        $totalWords = count($listOfWords);

        return new ProcessedText(
            $orderTopTenWords,
            $totalWords
        );
    }

    private static function cleanListOfWords(string $string): array
    {
        $string = str_replace(self::INVALID_CHARACTERS, self::EMPTY_STRING, $string);
        return explode(self::WORD_SEPARATOR, strtolower($string));
    }

    private static function orderedTopTenWords(array $listOfWords): array
    {
        $words = array_count_values($listOfWords);
        uasort($words, fn(int $a, int $b) => $b <=> $a);
        return array_keys(array_slice($words, self::TOP_WORD_STARTING, self::TOP_WORDS_LIMIT));
    }
}

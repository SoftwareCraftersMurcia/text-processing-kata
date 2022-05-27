<?php

declare(strict_types = 1);

namespace Kata;

class TextProcessor
{
    /**
     * @return array{top:list<string>,total:int}
     */
    public function analyse(string $text): array
    {
        $lowerText = strtolower($text);
        $cleanedText = preg_replace('/[^A-Za-z0-9 \-]/', '', $lowerText);
        $words = explode(' ', $cleanedText);

        return [
            'top' => $this->getTopWords($words),
            'total' => count($words),
        ];
    }

    /**
     * @param list<string> $words
     */
    public function getTopWords(array $words): array
    {
        $topWords = array_count_values($words);

        uasort($topWords, fn(int $a, int $b) => $b <=> $a);

        return array_keys($topWords);
    }
}

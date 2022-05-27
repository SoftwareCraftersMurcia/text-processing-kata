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
        $words = explode(' ', $this->sanitizedText($text));

        return [
            'top' => array_slice($this->getTopWords($words), 0, 10),
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

    public function sanitizedText(string $text): string
    {
        $lowerText = strtolower(trim($text));
        return preg_replace('/[[:punct:]]/', '', $lowerText);
    }
}

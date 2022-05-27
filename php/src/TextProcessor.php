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
        $words = explode(' ', $lowerText);

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
        $topWords = [];
        foreach ($words as $word) {
            if (!isset($topWords[$word])) {
                $topWords[$word] = 0;
            }
            $topWords[$word]++;
        }

        uasort($topWords, fn(int $a, int $b) => $b <=> $a);

        return array_keys($topWords);
    }
}

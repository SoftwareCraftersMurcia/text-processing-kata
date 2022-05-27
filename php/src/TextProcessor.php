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
        $words = explode(' ', $text);

        $topWords = [];
        foreach ($words as $word) {
            if (!isset($topWords[$word])) {
                $topWords[$word] = 0;
            }
            $topWords[$word]++;
        }

        krsort($topWords);

        return [
            'top' => array_keys($topWords),
            'total' => count($words),
        ];
    }
}

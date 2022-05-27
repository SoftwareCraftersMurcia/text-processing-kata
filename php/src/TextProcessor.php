<?php declare(strict_types=1);

namespace Kata;

class TextProcessor
{
    /**
     * @return array{top:list<string>,total:int}
     */
    public function analyse($text): array
    {
        $words = explode(' ', $text);

        return [
            'top' => $words,
            'total' => count($words),
        ];
    }
}

<?php

declare(strict_types = 1);

namespace Kata;

final class ProcessedText
{
    /** @var list<string> */
    private array $topWords;

    private int $totalWords;

    public static function empty(): self
    {
        return new self([], 0);
    }

    /**
     * @param list<string> $topWords
     */
    public function __construct(array $topWords, int $totalWords)
    {
        $this->topWords = $topWords;
        $this->totalWords = $totalWords;
    }

    /**
     * @return list<string>
     */
    public function topWords(): array
    {
        return $this->topWords;
    }

    public function totalWords(): int
    {
        return $this->totalWords;
    }
}

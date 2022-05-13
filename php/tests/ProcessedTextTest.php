<?php

declare(strict_types = 1);

namespace KataTests;

use Kata\ProcessedText;
use PHPUnit\Framework\TestCase;

final class ProcessedTextTest extends TestCase
{
    public function test_empty(): void
    {
        $actual = ProcessedText::empty();

        self::assertSame([], $actual->topWords());
        self::assertSame(0, $actual->totalWords());
    }
}

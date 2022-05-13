<?php declare(strict_types=1);

namespace KataTests;

use Kata\ProcessedText;
use Kata\TextProcessor;
use PHPUnit\Framework\TestCase;

class TextProcessorTest extends TestCase
{
    /** @test */
    public function given_empty_input_then_empty_processed_text(): void
    {
        $processedText = TextProcessor::analyse('');

        self::assertEquals(ProcessedText::empty(), $processedText);
    }
}

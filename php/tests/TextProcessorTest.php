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

    /** @test */
    public function given_one_word_as_input(): void
    {
        $actual = TextProcessor::analyse('one_word');

        self::assertEquals(['one_word'], $actual->topWords());
        self::assertEquals(1, $actual->totalWords());
    }

    /** @test */
    public function given_two_words_as_input(): void
    {
        $actual = TextProcessor::analyse('one_word two_word');

        self::assertEquals(['one_word', 'two_word'], $actual->topWords());
        self::assertEquals(2, $actual->totalWords());
    }

    /** @test */
    public function given_repeated_words_as_input(): void
    {
        $actual = TextProcessor::analyse('one_word two_word one_word');

        self::assertEquals(['one_word', 'two_word'], $actual->topWords());
        self::assertEquals(3, $actual->totalWords());
    }
}

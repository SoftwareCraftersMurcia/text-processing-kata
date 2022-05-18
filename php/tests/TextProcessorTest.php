<?php declare(strict_types=1);

namespace KataTests;

use Kata\TextProcessor;
use PHPUnit\Framework\TestCase;

class TextProcessorTest extends TestCase
{
    public function provideTexts(): iterable
    {
        yield ['', [], 0];
        yield ['one_word', ['one_word'], 1];
        yield ['one_word two_words', ['one_word', 'two_words'], 2];
        yield ['one_word two_words one_word', ['one_word', 'two_words'], 3];
        yield ['one_word two_words ONE_WORD', ['one_word', 'two_words'], 3];
        yield ['Hello, this is an example for you to practice. You should grab this text and make it as your test case.', ['this', 'you', 'hello', 'is', 'an', 'example', 'for', 'to', 'practice', 'should'], 21];
    }

    /**
     * @test
     * @dataProvider provideTexts
     */
    public function given_a_text_to_process(string $input, array $expectedWords, int $totalwords): void
    {
        $processedText = TextProcessor::analyse($input);

        self::assertSame($expectedWords, $processedText->topWords());
        self::assertSame($totalwords, $processedText->totalWords());
    }
}

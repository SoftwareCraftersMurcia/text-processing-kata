<?php declare(strict_types=1);

namespace KataTests;

use Kata\TextProcessor;
use PHPUnit\Framework\TestCase;

class TextProcessorTest extends TestCase
{
    public function provideTexts(): iterable
    {
        yield [
            '$input' => '',
            '$expectedWords' => [],
            '$totalWords' => 0
        ];
        yield [
            '$input' => 'one_word',
            '$expectedWords' => ['one_word'],
            '$totalWords' => 1
        ];
        yield [
            '$input' => 'one_word two_words',
            '$expectedWords' => ['one_word', 'two_words'],
            '$totalWords' => 2
        ];
        yield [
            '$input' => 'one_word two_words one_word',
            '$expectedWords' => ['one_word', 'two_words'],
            '$totalWords' => 3
        ];
        yield [
            '$input' => 'one_word two_words ONE_WORD',
            '$expectedWords' => ['one_word', 'two_words'],
            '$totalWords' => 3
        ];
        yield [
            '$input' => 'Hello, this is an example for you to practice. You should grab this text and make it as your test case.',
            '$expectedWords' => ['this', 'you', 'hello', 'is', 'an', 'example', 'for', 'to', 'practice', 'should'],
            '$totalWords' => 21
        ];
    }

    /**
     * @test
     * @dataProvider provideTexts
     */
    public function given_a_text_to_process(string $input, array $expectedWords, int $totalWords): void
    {
        $processedText = TextProcessor::analyse($input);

        self::assertSame($expectedWords, $processedText->topWords());
        self::assertSame($totalWords, $processedText->totalWords());
    }
}

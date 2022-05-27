<?php

declare(strict_types=1);

namespace KataTests;

use Kata\TextProcessor;
use PHPUnit\Framework\TestCase;

class TextProcessorTest extends TestCase
{

    /*
    Hello, this is an example for you to practice. You should grab this text and make it as your test case.

    The output should be:

    Those are the top 10 words used:

    1. you
    2. this
    3. your
    4. to
    5. text
    6. test
    7. should
    8. practice
    9. make
    10. it

    The text has in total 21 words
    */

    /** @test */
    public function analyse_two_words(): void
    {
        $textProcessor = new TextProcessor();
        $text = 'hello there';
        $result = $textProcessor->analyse($text);
        $expected = [
            'top' => ['hello', 'there'],
            'total' => 2,
        ];

        self::assertEquals($expected, $result);
    }

    /** @test */
    public function analyse_two_words_with_duplicates(): void
    {
        $textProcessor = new TextProcessor();
        $text = 'hello another another';
        $result = $textProcessor->analyse($text);
        $expected = [
            'top' => ['another', 'hello'],
            'total' => 3,
        ];

        self::assertEquals($expected, $result);
    }

    /** @test */
    public function analyse_duplicate_words_with_different_cases(): void
    {
        $textProcessor = new TextProcessor();
        $text = 'Hello Another another';
        $result = $textProcessor->analyse($text);
        $expected = [
            'top' => ['another', 'hello'],
            'total' => 3,
        ];

        self::assertEquals($expected, $result);
    }

    /** @test */
    public function analyse_duplicate_words_with_special_characters(): void
    {
        $textProcessor = new TextProcessor();
        $text = 'Hello, Another another.';
        $result = $textProcessor->analyse($text);
        $expected = [
            'top' => ['another', 'hello'],
            'total' => 3,
        ];

        self::assertEquals($expected, $result);
    }

    /** @test */
    public function analyse_top_ten_words(): void
    {
        $textProcessor = new TextProcessor();
        $text = 'Hello, this is an example for you to practice. You should grab this text and make it as your test case.';
        $result = $textProcessor->analyse($text);
        $expected = [
            'top' => [
                'this',
                'you',
                'hello',
                'is',
                'an',
                'example',
                'for',
                'to',
                'practice',
                'should',
            ],
            'total' => 21,
        ];

        self::assertEquals($expected, $result);
    }
}

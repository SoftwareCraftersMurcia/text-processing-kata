<?php declare(strict_types=1);

namespace KataTests;

use Kata\TextProcessor;
use PHPUnit\Framework\TestCase;

class TextProcessorTest extends TestCase
{
    /** @test */
    public function analyse_two_words(): void
    {
        $textProcessor = new TextProcessor();
        $text = 'hello there';
        $result = $textProcessor->analyse($text);
        $expected = <<<TXT
1. hello
2. there
TXT;
        self::assertEquals($expected, $result);
    }
}

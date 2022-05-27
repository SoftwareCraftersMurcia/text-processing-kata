<?php declare(strict_types=1);

namespace KataTests;

use Kata\TextProcessor;
use PHPUnit\Framework\TestCase;

class TextProcessorTest extends TestCase
{
    /** @test */
    public function give_me_a_good_name_please(): void
    {
        $textProcessor = new TextProcessor();

        $result = $textProcessor->analyse();

        self::assertEquals(true, $result);
    }
}

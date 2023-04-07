<?php

namespace App\Tests;

use App\Entity\Article;
use PHPUnit\Framework\TestCase;

class ArticleTest extends TestCase
{
    public function testReadingTime(): void
    {
        $article = new Article();
        $article->setText('This is a sample text with more than three words');

        $expected = 'less than 1 minute';
        $actual = $article->readingTime();

        var_dump($actual);

        $this->assertEquals($expected, $actual);
    }

    public function testReadingTimeTwo(): void
    {
        $article = new Article();
        $article->setText(str_repeat('lorem ', 410));

        $expected = '2 minutes';
        $actual = $article->readingTime();

        $this->assertEquals($expected, $actual);
    }

    public function testReadingTimeThree(): void
    {
        $article = new Article();
        $article->setText(str_repeat('lorem ', 1600));

        $expected = '8 minutes';
        $actual = $article->readingTime();

        $this->assertEquals($expected, $actual);
    }

    public function testReadingTimeFour(): void
    {
        $article = new Article();
        $article->setText(str_repeat('is ', 500));

        $expected = 'less than 1 minute';
        $actual = $article->readingTime();

        $this->assertEquals($expected, $actual);
    }
}

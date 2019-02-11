<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class NumbersTest extends TestCase

{
    public function testCanBeCreatedFromValidNumbers(): void
{
    $this->assertInstanceOf(
        Numbers::class,
        Numbers::fromString('233-234-4567')
    );
}

    public function testCannotBeCreatedFromInvalidNumbers(): void
{
    $this->expectException(InvalidArgumentException::class);

    Email::fromString('invalid');
}

    public function testCanBeUsedAsString(): void
{
    $this->assertEquals(
        '233-234-4567',
        Email::fromString('233-234-4567')
    );
}
}

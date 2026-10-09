<?php
// File: ValidatorTest.php
use PHPUnit\Framework\TestCase;

require_once "validator.php";

class ValidatorTest extends TestCase {

    // === Test Age ===
    public function testValidAge() {
        $this->assertTrue(validateAge(30));
    }

    public function testNegativeAgeThrowsException() {
        $this->expectException(InvalidArgumentException::class);
        validateAge(-30);
    }

    public function testEmptyAgeThrowsException() {
        $this->expectException(InvalidArgumentException::class);
        validateAge("");
    }
}
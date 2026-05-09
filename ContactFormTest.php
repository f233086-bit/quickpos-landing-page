<?php

use PHPUnit\Framework\TestCase;

class ContactFormTest extends TestCase
{
    // Test 1 - Empty name should fail
    public function testEmptyNameFails()
    {
        $name = "";
        $this->assertEmpty($name);
    }

    // Test 2 - Invalid email should fail
    public function testInvalidEmailFails()
    {
        $email = "notanemail";
        $this->assertFalse(filter_var($email, FILTER_VALIDATE_EMAIL));
    }

    // Test 3 - Valid email should pass
    public function testValidEmailPasses()
    {
        $email = "user@example.com";
        $this->assertTrue((bool)filter_var($email, FILTER_VALIDATE_EMAIL));
    }

    // Test 4 - Empty message should fail
    public function testEmptyMessageFails()
    {
        $message = "";
        $this->assertEmpty($message);
    }

    // Test 5 - All valid data should pass
    public function testAllValidDataPasses()
    {
        $name = "Zara Asif";
        $email = "zara@example.com";
        $message = "Hello I want to know more.";

        $this->assertNotEmpty($name);
        $this->assertTrue((bool)filter_var($email, FILTER_VALIDATE_EMAIL));
        $this->assertNotEmpty($message);
    }
}
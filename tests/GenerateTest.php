<?php defined('SYSPATH') OR die('Kohana bootstrap needs to be included before tests run');

class GenerateTest extends Unittest_TestCase
{
    protected function setUp()
    {
        parent::setUp();
        // $this->markTestSkipped("Message");
    }

    public function testGenerateWithoutArguments()
    {
        $key = Keys::Generate();

        $this->assertTrue($key);
    }

    // Test what happens when a format without characters to replace is used
    public function testGenerateFormatWithoutReplaceChar()
    {
        $key = Keys::Generate("hdjas-skajdkasj-dj938-8848");
        $this->expectedExceptionMessage("did not contain your replace character");
    }
}

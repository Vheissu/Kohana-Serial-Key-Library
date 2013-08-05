<?php defined('SYSPATH') OR die('Kohana bootstrap needs to be included before tests run');

class GenerateTest extends Unittest_TestCase
{
    protected function setUp()
    {
        // $this->markTestSkipped("Message");
    }

    public function test_generate_without_arguments()
    {
        $key = Keys::Generate();

        $this->assertTrue($key);
    }

    // Test what happens when a format without characters to replace is used
    public function test_generate_format_without_replace_char()
    {
        $key = Keys::Generate("hdjas-skajdkasj-dj938-8848");
    }
}

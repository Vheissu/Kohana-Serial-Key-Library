<?php defined('SYSPATH') OR die('Kohana bootstrap needs to be included before tests run');

class GenerateTest extends Unittest_TestCase
{
    public function setUp()
    {
        parent::setUp();
        // $this->markTestSkipped("Message");
    }

    /**
     * Test Generate Without Arguments
     *
     * Make sure a key was generated
     *
     */
    public function testGenerateWithoutArguments()
    {
        $key = Keys::Generate();

        $this->assertNotEquals(FALSE, $key);
    }

    /**
     * Test generate format
     *
     * Test what happens when a format without characters to replace is used
     *
     * @expectedException               Kohana_Exception
     * @expectedExceptionMessage did not contain your replace character
     *
     */
    public function testGenerateFormatWithoutReplaceChar()
    {
        $key = Keys::Generate("hdjas-skajdkasj-dj938-8848");
    }
}

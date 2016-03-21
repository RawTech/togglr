<?php

namespace RawTech\Togglr\Tests;

use RawTech\Togglr\ToggleManager;

class ToggleManagerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ToggleManager
     */
    protected $toggleManager;

    public function setUp()
    {
        $this->toggleManager = new ToggleManager();
    }

    public function testSomething()
    {
        self::assertSame([], $this->toggleManager->getCollection());
    }
}

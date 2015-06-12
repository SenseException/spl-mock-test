<?php

namespace Tests;

class SplFileInfoTest extends \PHPUnit_Framework_TestCase
{
    public function testSplError()
    {
        // the following mock creation triggers an error
        $spl = $this->getMockBuilder(SPLFileInfo::CLASS)
            ->disableOriginalConstructor()
            ->getMock();

        // this test doesn't work
        $spl->expects($this->once())
            ->method('getFileName')
            ->will($this->returnValue('Foo.php'));

        $this->assertEquals('Foo.php', $spl->getFileName());
    }

    public function testSplWorks()
    {
        // Constructor gets a parameter for this mock
        $spl = $this->getMockBuilder(SPLFileInfo::CLASS)
            ->setConstructorArgs([__DIR__])
            ->getMock();

        $spl->expects($this->once())
            ->method('getFileName')
            ->will($this->returnValue('Foo.php'));

        $this->assertEquals('Foo.php', $spl->getFileName());
    }
}

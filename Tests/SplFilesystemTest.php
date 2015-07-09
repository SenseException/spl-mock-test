<?php

namespace Tests;

class SplFileSystemTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider classNameProvider
     */
    public function testSplError()
    {
        // the following mock creation triggers an error
        $spl = $this->getMockBuilder('SPLFileInfo')
            ->disableOriginalConstructor()
            ->getMock();

        // this test doesn't work
        $spl->expects($this->once())
            ->method('getFileName')
            ->will($this->returnValue('Foo.php'));

        $this->assertEquals('Foo.php', $spl->getFileName());
    }

    /**
     * @dataProvider classNameProvider
     */
    public function testSplWorks()
    {
        // Constructor gets a parameter for this mock
        $spl = $this->getMockBuilder('SPLFileInfo')
            ->setConstructorArgs(array(__DIR__))
            ->getMock();

        $spl->expects($this->once())
            ->method('getFileName')
            ->will($this->returnValue('Foo.php'));

        $this->assertEquals('Foo.php', $spl->getFileName());
    }

    /**
     * @return array
     */
    public function classNameProvider()
    {
        return array(
            array('SPLFileInfo'),
            array('SPLFileObject'),
            array('DirectoryIterator'),
            array('FilesystemIterator'),
        );
    }
}

<?php

namespace Liip\ImagineBundle\Tests\Controller;

use Liip\ImagineBundle\Controller\ImagineController;
use Liip\ImagineBundle\Imagine\Cache\CacheManager;
use Liip\ImagineBundle\Imagine\Data\DataManager;
use Liip\ImagineBundle\Imagine\Filter\FilterManager;

/**
 * @covers Liip\ImagineBundle\Controller\ImagineController
 */
class ImagineControllerTest extends \PHPUnit_Framework_TestCase
{
    public function testCouldBeConstructedWithExpectedServices()
    {
        new ImagineController(
            $this->createDataManagerMock(),
            $this->createFilterManagerMock(),
            $this->createCacheManagerMock(),
            $this->createSignerMock()
        );
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|DataManager
     */
    protected function createDataManagerMock()
    {
        return $this->getMock('Liip\ImagineBundle\Imagine\Data\DataManager', array(), array(), '', false);
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|FilterManager
     */
    protected function createFilterManagerMock()
    {
        return $this->getMock('Liip\ImagineBundle\Imagine\Filter\FilterManager', array(), array(), '', false);
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|CacheManager
     */
    protected function createCacheManagerMock()
    {
        return $this->getMock('Liip\ImagineBundle\Imagine\Cache\CacheManager', array(), array(), '', false);
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|\Liip\ImagineBundle\Util\SignerInterface
     */
    protected function createSignerMock()
    {
        return $this->getMock('Liip\ImagineBundle\Util\Signer', array(), array(), '', false);
    }
}

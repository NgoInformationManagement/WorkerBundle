<?php

namespace spec\NIM\WorkerBundle\DependencyInjection;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class NIMWorkerExtensionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('NIM\WorkerBundle\DependencyInjection\NIMWorkerExtension');
    }

    function it_should_extends_nim_extension()
    {
        $this->shouldHaveType('NIM\CoreBundle\DependencyInjection\NIMCoreExtension');
    }

    function it_should_extends_symfony_extension()
    {
        $this->shouldHaveType('Symfony\Component\DependencyInjection\Extension\Extension');
    }
}

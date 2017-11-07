<?php

namespace Ami\BlockchainBundle\Tests\DependencyInjection;

use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBag;
use Symfony\Component\DependencyInjection\Reference;
use Ami\BlockchainBundle\DependencyInjection\AmiBlockchainExtension;

class AmiBlockchainExtensionTest extends TestCase
{
    /**
     * @var ContainerBuilder
     */
    private $container;

    /**
     * @var AmiBlockchainExtension
     */
    private $extension;

    protected function setUp()
    {
        $this->container = new ContainerBuilder(new ParameterBag([
            'kernel.root_dir'    => __DIR__,
            'kernel.bundles'     => ['AmiBlockchainBundle' => true],
            'kernel.environment' => 'test',
        ]));
        $this->extension = new AmiBlockchainExtension();
    }

    protected function tearDown()
    {
        unset($this->container, $this->extension);
    }

    public function testEnableBlockchain()
    {
        $config = ['ami_blockchain' => [
            'api_key' => 'foo-bar',
        ]];
        $this->extension->load($config, $this->container);

        $this->assertTrue($this->container->hasDefinition('ami_blockchain.blockchain'));
    }
}

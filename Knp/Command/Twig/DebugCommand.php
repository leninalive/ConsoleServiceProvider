<?php

namespace Knp\Command\Twig;

use Pimple\Container;
use Symfony\Bridge\Twig\Command\DebugCommand as BaseDebugCommand;

/**
 * Twig DebugCommand that can locate the twig environment in a Pimple container.
 */
class DebugCommand extends BaseDebugCommand
{
    private $container;

    /**
     * DebugCommand constructor.
     *
     * @param Container $container A Pimple container instance
     */
    public function __construct(Container $container)
    {
        parent::__construct($container['twig']);

        $this->container = $container;
    }

    protected function configure()
    {
        parent::configure();

        $this->setName(self::$defaultName);
    }
}

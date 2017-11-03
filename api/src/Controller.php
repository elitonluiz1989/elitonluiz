<?php
namespace Src;

use Psr\Container\ContainerInterface;

/**
 * Class Controller
 * @package Src
 */
class Controller
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    /**
     * @var \Slim\Http\Request
     */
    protected $request;

    /**
     * @var \Slim\Http\Response
     */
    protected $response;

    /**
     * Controller constructor.
     * @param ContainerInterface $container
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function __construct(ContainerInterface $container) {
        $this->container = $container;

        $this->request = $container->get('request');
        $this->response = $container->get('response');
    }
}
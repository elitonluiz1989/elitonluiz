<?php
namespace Src;

use Psr\Container\ContainerInterface;

/**
 * Class Controller
 * @package Src
 */
abstract class Controller
{
    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * @var \Slim\Http\Request
     */
    protected $request;

    /**
     * @var \Slim\Http\Response
     */
    protected $response;

    /**
     * @var array
     */
    protected $data;

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
        $this->data = $this->container->get('routeArguments');
    }

    protected function formattedReturn($data) {
        $data = ['data' => $data];

        return $this->response->withJson($data);
    }
}
<?php
namespace Src\Middleware;

use Psr\Container\ContainerInterface;
use Slim\Http\Request;
use Slim\Http\Response;

class RouteDataHandler
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * @param Request $request
     * @param Response $response
     * @param callable $next
     * @return mixed
     */
    public function __invoke(Request $request, Response $response, callable $next)
    {
        $routeArgs = $request->getAttribute('route')->getArguments();
        $requestParams = ($request->isGet()) ? $request->getParams() : $request->getParsedBody();
        $routeArguments = array_merge($routeArgs, $requestParams);

        $this->container['routeArguments'] = $routeArguments;

        $newResponse = $next($request, $response);

        return $newResponse;
    }
}
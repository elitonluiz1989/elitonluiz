<?php
namespace Modules\Home\Controllers;

use Src\Controller;

/**
 * Class HomeController
 * @package Modules\Home\Controllers
 */
class HomeController extends Controller
{
    /**
     * @return static
     */
    public function index()
    {
        $response = $this->response->withJson('API working.');
        return $response;
    }
}
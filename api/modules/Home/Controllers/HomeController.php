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
        $return = 'API Working';
        return $this->formattedReturn($return);
    }
}
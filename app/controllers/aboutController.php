<?php
/**
 * Created by PhpStorm.
 * User: Wichny
 * Date: 23.02.2017
 * Time: 15:08
 */
class AboutController
{

    public function index()
    {
        require_once ('../app/views/about/index.phtml');
    }


    public function error()
    {
        require_once ('../app/views/about/error.php');
    }
}
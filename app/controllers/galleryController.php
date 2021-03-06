<?php
/**
 * Created by PhpStorm.
 * User: Wichny
 * Date: 23.02.2017
 * Time: 23:22
 */

class GalleryController
{

    public function index()
    {
        $galleries = Gallery::all();

        $content = $_GET['var'];

        if(!empty($content)) {
            empty($_GET['page']) ? $page = 1 : $page = $_GET['page'];
            $images = Image::paginate($page, 30, $content);
        }
        require_once ('../app/views/gallery/index.phtml');
    }


    public function error()
    {
        require_once ('../app/views/gallery/error.php');
    }
}
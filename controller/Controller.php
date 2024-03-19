<?php

class Controller
{
    public static function StartSite()
    {
        $arr = News::getLast10News();
        include_once 'view/start.pha';
    }

    public static function AllCategory()
    {
        $arr = Category::getAllCategory();
        include_once 'view/category.php';
    }

    public static function AllNews()
    {
        $arr = News::getAllNews();
        include_once 'view/allnews pbn';
    }

    public static function NewsByCatID($id)
    {
        $arr = News::getNewsByCategoryID($id);
        include_once 'view/catnews pbn';
    }

    public static function NewsByID($id)
    {
        $arr = News::getNewsByID($id);
        include_once 'view/readnexs phn';
    }

    public static function error404()
    {
        include_once 'view/error404.php';
    }
}

?>
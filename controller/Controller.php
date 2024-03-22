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

    public static function InsertComment($c, $id)
    {
        Comments::InsertComment($c, $id);
        //self::NewsByID($id);
        header('Location::news?id=' . $id . '#ctable');
    }

    public static function Comments($newsid)
    {
        $arr = Comments::getCommentByNewsID($newsid);
        ViewComments::CommentByNews($arr);
    }

    public static function CommentsCount($newsid)
    {
        $arr = Comments::getCommnetsCountByNewsID($newsid);
        ViewComments::CommentsCount($arr);
    }

    public static function CommentsCountWithAncor($newsid)
    {
        $arr = Comments::getCommnetsCountByNewsID($newsid);
        ViewComments::CommentCountWithAncor($arr);
    }

    public function registerForm()
    {
        include_once ('view/formRegister.php');
    }

    public function registerUser()
    {
        $result = Register::registerUser();
        include_once ('view/answerRegister.php');
    }
}
?>
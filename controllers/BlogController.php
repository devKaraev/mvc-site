<?php

include ROOT.'/models/news.php';

class BlogController
{
    public function actionIndex()
    {
        $news = array();
        
        $news = news::getNews();
                
        include ROOT.'/views/blog/blog.phtml';
    }

    public function actionNews($id)
    {
        $newsId = array();
        $newsId = news::getNewsById($id);
        
        include ROOT.'/views/blog/blog_news.phtml';
    }
    
}
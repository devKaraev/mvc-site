<?php 

include_once ROOT.'/config/Config.php';

class news
{
    public static function getNews()
    {
        $db = Config::getConnectDb();   
        
        $newsList = array();
        
        $result = $db->prepare('SELECT id, name, short_content, content FROM category');
        $result->execute();
        
        $i=0;
        
        while($row = $result->fetch(PDO::FETCH_ASSOC))
        {
            $newsList[$i]['name'] = $row['name'];
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['short_content'] = $row['short_content'];
            $newsList[$i]['content'] = $row['content'];
            $i++;
        }
        
        return $newsList;
    }
    
    public static function getNewsById($id)
    {
        $db = Config::getConnectDb();
        
        $newsProduct = array();
        
        $result = $db->prepare('SELECT * FROM category WHERE id=:id');
        
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        
        $result->execute();
        
        $i=0;
        while($row = $result->fetch(PDO::FETCH_ASSOC))
        {
            $newsProduct[$i]['name'] = $row['name'];
            $newsProduct[$i]['id'] = $row['id'];
            $newsProduct[$i]['content'] = $row['content'];
            $newsProduct[$i]['short_content'] = $row['short_content'];
            $newsProduct[$i]['date'] = $row['date'];
            $i++;
        }
        
        return $newsProduct;
    }
}


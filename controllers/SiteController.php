<?php

class SiteController
{
  
    public function actionIndex(){
        
        return include_once ROOT.'/views/site/index.phtml';
    }
    
}

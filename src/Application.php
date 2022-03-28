<?php
class Application 
{
    public static function run()
    {
        if (!isset($_SERVER['PATH_INFO']) ) //si path_info = false , rien
        {
            $path="";
        }
        
        if (isset($_SERVER['PATH_INFO'])) //si path_info = true alors lancé path_info
        {
            $path=$_SERVER['PATH_INFO'];
        }
        /* on peut commencer à partir d'ici */
        if ($path=='')
        {
            include __DIR__."/../src/Controller/HomeCtrl.php";
            $home=new HomeCtrl();
            $home->home();
        } 
            else if ($path =='/articles')
            {
                include __DIR__ ."/../src/Controller/ArticlesCtrl.php";
                $articles = new ArticlesCtrl();
                $articles->articles();
            } 
            else if ($path == '/utilisateurs') 
            {
            include __DIR__ . "/../src/Controller/UtilisateursCtrl.php";
            $utilisateurs = new UtilisateursCtrl();
            $utilisateurs->utilisateurs();
            }
    }

}
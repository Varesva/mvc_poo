<?php
require "Modele.php";

class Articles extends Modele
{
    protected $table = "Articles";
}

$article=new Articles;
$article->("test","test","test");
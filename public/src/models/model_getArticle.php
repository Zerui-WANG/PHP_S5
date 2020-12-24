<?php

    function getArticle($subject)
    {
        require('controller_article.php');
        $request = $db->prepare('SELECT UPPER(title) AS title_upper, id_article, content, category, title 
        FROM article WHERE category= :category') or die(print_r($db->errorInfo()));
        $request->execute(array('category' => $subject));

        return $request;
    }
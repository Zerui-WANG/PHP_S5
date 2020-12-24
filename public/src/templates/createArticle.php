<?php

    function createArticle()
    {
        if(isset($_POST['category']) AND isset($_POST['title']) AND isset($_POST['content']))
        {
            if($_POST['category'] == 'Civilisation' OR $_POST['category'] == 'Guerre')
            {
                $category = $_POST['category'];
                $title = $_POST['title'];
                $content = $_POST['content'];

                require('controller_article.php');
                
                $req = $db->prepare('INSERT INTO article(category, title, content) VALUES(:category, :title, :content)') 
                    or die(print_r($db->errorInfo()));
                $req->execute(array(
                        'category' => $category,
                        'title' => $title,
                        'content' => $content
                ));

                $req->closeCursor();
            }
        }
    }

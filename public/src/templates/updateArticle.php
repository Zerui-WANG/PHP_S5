<?php

    function updateArticle()
    {
        if(isset($_POST['titleEdit']) AND isset($_POST['contentEdit']) AND isset($_POST['id_article']))
            {
                if($_POST['categoryEdit'] == 'Civilisation' OR $_POST['categoryEdit'] == 'Guerre')
                {
                    $category = $_POST['categoryEdit'];
                    $title = $_POST['titleEdit'];
                    $content = $_POST['contentEdit'];
                    $id = $_POST['id_article'];

                    require('controller_article.php');
                    
                    $req = $db->prepare('UPDATE article SET category = :newcategory, title = :newtitle, content = :newcontent
                        WHERE id_article = :id') or die(print_r($db->errorInfo()));
                    $req->execute(array(
                            'newcategory' => $category,
                            'newtitle' => $title,
                            'newcontent' => $content,
                            'id' => $id
                        ));

                    $req->closeCursor();
                }
            }
    }

<?php

function deleteArticle()
    {
        if(isset($_POST['suppress']))
        {
            $id = $_POST['id_article'];

            require('controller_article.php');
            
            $req = $db->prepare('DELETE FROM article WHERE id_article = :id') or die(print_r($db->errorInfo()));
            $req->execute(array(
                'id' => $id
            ));

            $req->closeCursor();
        }
    }


<?php

    function getArticleContent()
    {

        require('../controllers/controller_article.php');
        $request = $db->prepare('SELECT content FROM article WHERE id_article= :id');
        $request->execute(array('id' => $_POST['id_article']));
        $data = $request->fetch();
        
        $request->closeCursor();

        return $data['content'];
    
    }
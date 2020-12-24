<?php

    require('../config/session_start.php');

    require('../templates/header.php');

    require('../views/view_article_create.php');

    require('../templates/createArticle.php');

    $createArticle = createArticle();

    require('../templates/footer.php');

    if(isset($_POST['validate']))
    {
        header('Location: index.php');
    }
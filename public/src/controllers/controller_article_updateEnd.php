<?php

    require('../templates/updateArticle.php');

    $updateArticle = updateArticle();

    if(isset($_POST['validate']))
    {
        header('Location: index.php');
    }
    else if(isset($_POST['suppress']))
    {
        header('Location: index.php');
    }
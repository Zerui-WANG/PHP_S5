<?php

    require('../templates/header.php');
    
    require('../templates/deleteArticle.php');

    $delete = deleteArticle();
    
    require('../templates/footer.php');

    header('Location: index.php');
<?php

    require('../config/session_start.php');

    require('../templates/header.php');
    
    require('../models/model_getArticle.php');

    require('../views/view_article_civilisation.php');

    $request = getArticle($subject);
    
    require('../templates/body_article.php');

    require('../templates/footer.php');
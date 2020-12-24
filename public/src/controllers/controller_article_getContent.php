<?php

    require('../models/model_getArticleContent.php');

    $content = getArticleContent();

    echo $content;
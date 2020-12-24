<form method='post' action='controller_article_create.php'>
    <input type='submit' name='create' value='Ecrire mon article'/>
</form>

<?php

    while($article = $request->fetch())
    {
        echo '<h1>' . htmlspecialchars($article['title_upper']) . '</h1>';
        echo '<p>' . nl2br(htmlspecialchars($article['content'])) . '</p>';
?>
<table>
    <tr>
        <td>
            <form method='post' action='controller_article_update.php'>
                <input type='hidden' name='id_article' value='<?= $article['id_article'] ?>'/>
                <input type='hidden' name='category' value='<?= $article['category'] ?>'/>
                <input type='hidden' name='title' value='<?= $article['title'] ?>'/>
                <input type='submit' name='edit' value='Modifier'/>
            </form>
        </td>
        <td>
            <form method='post' action='controller_article_delete.php'>
                <input type='hidden' name='id_article' value='<?= $article['id_article'] ?>'/>
                    <input type='submit' name='suppress' value='Supprimer'/>
            </form>     
        </td>
        <td>
            <a href='view_commentaire.php?id_article=<?= $article['id_article'] ?>&' 
            class='commentaire'>Voir les commentaires</a>
        </td>
    </tr>
</table>
<?php
    }

?>
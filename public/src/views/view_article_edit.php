<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8"/>
	<link rel="stylesheet" href="../../../assets/css/style_page.css"/>
	<title>Ecrire un article</title>
</head>
<body>

    <table>
        <form method="post" action="controller_article_updateEnd.php">
        <tr>
            <td>
                <p>Catégorie : </p>
            </td>
            <td>
            <?php
                if($_POST['category'] == 'Civilisation')
                {
            ?>
                    <input type="radio" name="categoryEdit" value='Civilisation' checked/>
                    <label for="categoryCiv">Civilisation</label>
                    <input type="radio" name="categoryEdit" value='Guerre'/>
                    <label for="categoryWar">Guerre : </label>
            <?php
                }
                else if($_POST['category'] == 'Guerre')
                {
            ?>
                    <input type="radio" name="categoryEdit" value='Civilisation'/>
                    <label for="categoryCiv">Civilisation</label>
                    <input type="radio" name="categoryEdit" value='Guerre' checked/>
                    <label for="categoryWar">Guerre : </label>
            <?php
                }
            ?>
            </td>
        </tr>
        <tr>
            <td>
                <label for="titleEdit">Titre : </label>
            </td>
            <td>
            <input type="text" id="titleEdit" name="titleEdit" 
                        value='<?= $_POST['title'] ?>'/>
            </td>
        </tr>
        <tr>
            <td>
                <label for="contentEdit">Contenu : </label>
            </td>
            <td>
            <textarea id="contentEdit" name="contentEdit" rows="20" cols="100"><?php
                require('controller_article_getContent.php');
            ?></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <input type='hidden' name='id_article' value='<?= $_POST['id_article'] ?>'/>
                <input type="submit" id="validate" name='validate' value="Valider"/>
            </td>
        </tr>
        </form>
    </table>

</body>
</html>
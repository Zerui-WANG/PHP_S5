<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8"/>
	<link rel="stylesheet" href="../../../assets/css/style_page.css"/>
	<title>Ecrire un article</title>
</head>
<body>

    <table>
        <form method="post" action="controller_article_create.php">
        <tr>
            <td>
                <p>Catégorie : </p>
            </td>
            <td>
                <input type="radio" id="categoryCiv" name="category" value='Civilisation'/>
                <label for="categoryCiv">Civilisation</label>
                <input type="radio" id="categoryWar" name="category" value='Guerre'/>
                <label for="categoryWar">Guerre : </label>
            </td>
        </tr>
        <tr>
            <td>
                <label for="title">Titre : </label>
            </td>
            <td>
                <input type="text" id="title" name="title"/>
            </td>
        </tr>
        <tr>
            <td>
                <label for="content">Contenu : </label>
            </td>
            <td>
                <textarea id="content" name="content" rows="20" cols="100">Mettez ici le contenu de votre article.</textarea>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" id="validate" name='validate' value="Valider"/>   
            </td>
        </tr>
        </form>
    </table>

</body>
</html>
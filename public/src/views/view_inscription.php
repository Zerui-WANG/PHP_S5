<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8"/>
	<link rel="stylesheet" href="../../../assets/css/style_page.css"/>
	<title>Inscription</title>
</head>
<body>

    <table>
        <form method="post" action="controller_inscription_handler.php">
        <tr>
            <td>
                <label for="id">Pseudo : </label>
            </td>
            <td>
                <input type="text" id="id" name="id"/>
            </td>
        </tr>
        <tr>
            <td>
                <label for="mail">e-mail : </label>
            </td>
            <td>
                <input type="text" id="mail" name="e-mail"/>
            </td>
        </tr>
        <tr>
            <td>
                <label for="mdp">Mot de passe : </label>
            </td>
            <td>
                <input type="text" id="password" name="password"/>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" id="submit" value="Envoyer"/>   
            </td>
        </tr>
        </form>
    </table>

</body>
</html>
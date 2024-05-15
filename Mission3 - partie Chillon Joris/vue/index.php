<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" type="text/css"/>
        <br />
    </head>

    <body>

        <table class="bords">
            <form action="../controleur/controleur.php" method="POST">
            <caption class="titre">connexion</caption>
            <tr>
            <th>Email : </th>
            <th><input type="text" name="mailU" placeholder="Email de connexion" /></th>
            </tr>
            <tr>
            <th>mot de passe : </th>
            <td><input type="password" name="mdpU" placeholder="Mot de passe"  /></th>
            </tr>
            <tr>
            <td><input type="submit" value="se connecter" name="get logged"/></td>
            </tr>
</form>
        </table>
        
    </body>


</html>
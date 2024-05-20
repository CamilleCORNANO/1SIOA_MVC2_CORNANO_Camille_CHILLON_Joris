<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Utilisateurs</title>
</head>
<body>
    <h1>Liste des Utilisateurs</h1>
    <table>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Remarque</th>
        </tr>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user['nom'] ?></td>
            <td><?= $user['prenom'] ?></td>
            <td><?= $user['email'] ?></td>
            <td><?= $user['telephone'] ?></td>
            <td><?= $user['remarque'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
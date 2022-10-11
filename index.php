<?php
    require_once 'connect.php';

    $pdo = new PDO(DSN, USER, PASS);
    
    $query = "SELECT * FROM story";
    $statement = $pdo->query($query);
    $stories = $statement->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des histoires</title>
</head>
<body>
    <h1>Liste des histoires</h1>

    <table>
        <thead>
            <tr>
                <th>Titre</th>
                <th>Contenu</th>
                <th>Auteur</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach($stories as $story) {
                echo '<tr>';
                    echo "<td>". $story['title'] ."</td>";
                    echo "<td>". $story['content'] ."</td>";
                    echo "<td>". $story['author'] ."</td>";
                echo '</tr>';
            }
        ?>
        </tbody>
    </table>
</body>
</html>
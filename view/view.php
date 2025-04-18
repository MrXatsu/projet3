<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Projet 3</title>
</head>
<body>
    <section>

         <ul>
            <?php foreach ($personnages as $personnage): ?>
                <li>
                    <a href="info.php?personnage_id=<?= $personnage['personnage_id']; ?>">
                        <?= htmlspecialchars($personnage['nom']); ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
</body>
</html>
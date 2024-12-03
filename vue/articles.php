<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
</head>
<body>
    </html><h1>Liste des articles</h1>
    <ul>
        <?php foreach ($articles as $article): ?>
            <li><a href="index.php?action=show&id=<?= $article['id'] ?>"><?= $article['title'] ?></a></li>
        <?php endforeach; ?>
    </ul>
</body>

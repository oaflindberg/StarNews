<?php

require __DIR__ . '/data.php';
require __DIR__ . '/functions.php';

usort($articles, function (array $a, array $b): int {
    return strtotime($b['published']) - strtotime($a['published']);
});

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Star News</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon/lightsaber.png" type="image/x-icon">
</head>

<body>
    <header>
        <h1>Star News!</h1>
        <p class="displaydate"></p>
    </header>

    <main>
        <?php foreach ($articles as $article) : ?>
            <?php
                $articleTitle = $article['title'];
                $articleContent = $article['content'];
                $authorName = $authors[$article['authorId']]['name'];
                $authorImage = $authors[$article['authorId']]['image'];
                $articlePublished = $article['published'];
                $articleLikes = $article['likes'];
                $articleImage = $article['image']
                ?>

            <article>
                <h1 class="articletitle"><?php echo getRandomTitle(); ?></h1>
                <p class="articlepublished">Article published: <?php echo $articlePublished; ?></p>
                <div class="likeswrapper">
                    <img class="likeicon" src="img/like.png" alt="Heart">
                    <p class="likes">Likes: <?php echo randomLikes() ?></p>
                </div>
                <div class="imagewrapper">
                    <img class="articleimage" src="<?php echo $articleImage; ?>" alt="Star Wars poster">
                </div>

                <p><?php echo nl2br($articleContent); ?></p>

                <div class="articlefooter">
                    <div class="authorheadshot">
                        <img class="authorimage" src="<?php echo $authorImage; ?>" alt="Image of <?php echo $authorname; ?>">
                        <p class="authorname">Article by: <?php echo $authorName; ?></p>
                    </div>
                </div>
            </article>

        <?php endforeach; ?>
    </main>
    <script src="script.js"></script>
</body>

</html>
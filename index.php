<?php

require __DIR__ . '/data.php';
require __DIR__ . '/functions.php';

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
    <nav>
        <h1>Star News!</h1>
        <p>News from a galaxy far, far away...</p>
    </nav>

    <main>
        <?php foreach ($authors as $author) : ?>

            <?php $authorName = $author["name"]; ?>
            <?php $authorImage = $author["authorimg"]; ?>
            <?php $authorId = $author["id"]; ?>

            <?php for ($i = 0; $i <= 1; $i++) : ?>

                <?php $articleTitle = $author['articles'][$i]['title']; ?>
                <?php $articleContent = $author['articles'][$i]['content']; ?>
                <?php $articlePublished = $author['articles'][$i]['published']; ?>
                <?php $articleLikes = $author['articles'][$i]['likes']; ?>

                <article>
                    <h1 class="articletitle"><?php echo nl2br($articleTitle); ?></h1>
                    <p class=" italic">Article published: <?php echo $articlePublished ?></p>
                    <p class="articlecontent"><?php echo nl2br($articleContent) ?></p>
                    <div class=" articlefooter">
                        <div class="authorheadshot">
                            <img class="authorimage" src="<?php echo $authorImage; ?>" alt="<?php echo $authorName; ?>">
                            <p><?php echo $authorName ?></p>
                        </div>
                        <p>Likes: <?php echo $articleLikes; ?></p>
                    </div>
                </article>

            <?php endfor; ?>
        <?php endforeach; ?>
    </main>

</body>

</html>
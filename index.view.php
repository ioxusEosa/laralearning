<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100;
            margin: 0;
            font-family: 'Lucida Sans';
        }
    </style>
</head>
<body>
 
    <h1>
        Cello
    </h1>
  
    <a href="https://i2.wp.com/images.genshin-builds.com/genshin/characters/nefer/image.png?strip=all&quality=100&w=160">aaaaaaaaaaaaa</a>
  
    <img src="nefer2.gif" alt="lonely lonely i guess im lonely" width="800" height="400">
    
    <p title="AAAAAAAAAAAAAAAAA">
        hunger
    </p>

    <ul>
        <?php foreach ($filteredCharacters as $character) : ?>
            <li>
                <a href="<?= $character['link']?>">
                    <?= $character['name'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
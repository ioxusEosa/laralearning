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
    
    <?php 
    
    $characters = [
        [
            'name' => 'Nefer',
            'element' => 'Dendro',
            'region' => 'Sumeru',
            'link' => 'https://genshin-impact.fandom.com/wiki/Nefer'
        ],
        [
            'name'=> 'Lauma',
            'element' => 'Dendro',
            'region' => 'Nod Krai',
            'link'=> 'https://genshin-impact.fandom.com/wiki/Lauma'
        ],
        [
            'name'=> 'Columbina',
            'element'=> 'Hydro',
            'region'=> 'Nod Krai',
            'link'=> 'https://genshin-impact.fandom.com/wiki/Columbina'
        ],
        [
            'name'=> 'Furina',
            'element'=> 'Hydro',
            'region'=> 'Fontaine',
            'link'=> 'https://genshin-impact.fandom.com/wiki/Furina'
        ],
        [
            'name'=> 'Zibai',
            'element' => 'Geo',
            'region'=> 'Liyue',
            'link'=> 'https://genshin-impact.fandom.com/wiki/Zibai'
        ],
        [
            'name'=> 'Xianyun',
            'element'=> 'Anemo',
            'region'=> 'Liyue',
            'link'=> 'https://genshin-impact.fandom.com/wiki/Xianyun'
        ]

    ];

    function filter($items, $key, $value) {
        $filteredItems = [];

        foreach ($items as $item) {
            if ($item[$key] == $value){
                $filteredItems[] = $item;
            }
        }

        return $filteredItems;
    }

    $filteredCharacters = filter($characters, 'region', 'Nod Krai');

    ?>

    <h1>
    
     
        
    </h1>
  
    <a href="https://i2.wp.com/images.genshin-builds.com/genshin/items/nefer/image.png?strip=all&quality=100&w=160">aaaaaaaaaaaaa</a>
  
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
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

<<<<<<< HEAD
    $filteredCharacters = filter($characters, 'element', 'Hydro');

    ?>

    <h1>
    
     
        
    </h1>
  
    <a href="https://i2.wp.com/images.genshin-builds.com/genshin/characters/nefer/image.png?strip=all&quality=100&w=160">aaaaaaaaaaaaa</a>
  
    <img src="nefer2.gif" alt="lonely lonely i guess im lonely" width="800" height="400">
    
    <p title="AAAAAAAAAAAAAAAAA">
        hunger
    </p>
=======
    $filteredCharacters = filter($characters, 'region', 'Nod Krai'); 
>>>>>>> fd62d94f396ad54bfd0bea6125cabbfdaae8096e


    require "index.view.php";










?>
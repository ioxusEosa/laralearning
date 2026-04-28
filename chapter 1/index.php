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


    require "index.view.php";










?>
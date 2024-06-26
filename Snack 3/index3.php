<?php
$array = [
    '22/05/2024' => [
        [
            'team' => 'Atalanta',
            'competition' => 'EuropaLeague',
            'result'=> 'win',
            
        ],
        [
            'team' => 'BayerLeverkusen',
            'competition' => 'EuropaLeague',
            'result'=> 'loser',
            
        ],
    ],
    '28/06/1989' => [
        [
            'team' => 'Sampdoria',
            'competition' => 'CoppaItalia',
            'result'=> 'win',
        ],
        [
            'team' => 'Napoli',
            'competition' => 'CoppaItalia',
            'result'=> 'loser',
            
        ],
    ]
    
],
foreach ($array as $key => $post){
    echo $key;
foreach ($post as $singlePost) {
    echo $singlePost;
}
}

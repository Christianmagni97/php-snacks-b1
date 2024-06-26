
<?php
$calendario = [
    "22-05-2024" => [
        "team" => "Atalanta",
        "competition" => "EuropaLeague",
        "result" => "win ",
    ],
    "28-06-1989" => [
        "team" => "Sampdoria",
        "competition" => "CoppaItalia",
        "result" => "win",
    ],
    "28-06-1989" => [
        "team" => "Napoli",
        "competition" => "CoppaItalia",
        "result" => "Loser",
    ],
    ];
    foreach ($calendario as $key => $post){
            echo $key;
        foreach ($post as $singlePost) {
            echo $singlePost;
        }
    }
?>
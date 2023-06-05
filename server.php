<?php

$Movie = [
    [
        'artist' => 'Queen',
        'album' => 'The Game',
        'year' => '1980',
        'poster' => 'https://cdn.shoplightspeed.com/shops/626319/files/13121634/queen-the-game-lp.jpg'
    ],
    [
        'artist' => 'Ray Charles',
        'album' => 'What d i say',
        'year' => '1958',
        'poster' => 'https://i.ebayimg.com/images/g/ArUAAOSw7zVkBlqR/s-l500.png'
    ],
    [
        'artist' => 'The Offspring',
        'album' => 'The Offspring',
        'year' => '1989',
        'poster' => 'https://i.ebayimg.com/images/g/zCsAAOSw6GBe-dBE/s-l500.jpg'
    ],
    [
        'artist' => 'Francois Couperin',
        'album' => 'Les Nations',
        'year' => '1726',
        'poster' => 'https://th.bing.com/th/id/R.ace6dd51b470159c848717209bfe761e?rik=lNjfroJhBSfdNA&pid=ImgRaw&r=0'
    [
        'artist' => 'The Cranberries',
        'album' => 'Bury the hatchet',
        'year' => '1999',
        'poster' => 'https://th.bing.com/th/id/OIP.SSD3UAqTiYrGe9YFfDjscAHaHa?pid=ImgDet&rs=1'
    ],
    [
        'artist' => 'U2',
        'album' => 'The Best 1980-1990',
        'year' => '1998',
        'poster' => 'https://i.pinimg.com/originals/68/d1/cf/68d1cf25f053076842e23747fd3900ab.jpg'
    ],
];

header('Content-Type: application/json');

echo json_encode( $Movie );


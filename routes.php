<?php

return [
    '~^articles/(\d+)$~' => [ArticlesController::class, 'show'],
    '~^$~'               => [ArticlesController::class, 'show'],
];

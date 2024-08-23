<?php

declare(strict_types=1);



if (
    $_POST['status']

) {

    $newAdsId = (new \App\Status())->createStatus($_POST['status']);



    if ($newAdsId) {
        header('Location: /status/create');

        exit();
    }

    return;
}
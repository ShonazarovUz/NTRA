<?php

declare(strict_types=1);

$name = $_POST['name'];
$address = $_POST['address'];

if (isset($_POST['name']) && isset($_POST['address'])) {
    $branch = (new \App\Branch())->createBranch($_POST['name'],$_POST['address']);

    if ($branch) {
            header('Location: /branches');
    }
}



// if ($_POST['name']

// ) {
    
//     $newAdsId = (new \App\Branch())->createBranch($_POST['name']);

    

//     if ($newAdsId) {
//         header('Location: /admin/createBranch');

//         exit();
//     }

//     return;
// }

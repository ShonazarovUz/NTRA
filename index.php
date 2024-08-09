<?php

require_once 'bootstrap.php';

//$user = new App\User();
//$user -> updateUser('nasriddin', 'developer', 'male', '123456799');

//$status = new App\Status();
//$status -> createStatus(1, 'developer');
//$branch = new App\Branch();
//$branch-> createBranch(1, 'nasriddin', 'Samarqand');

//$ads = new App\Ads();
//$ads -> createAds(1, 'nasriddin', 'developer', 1, 1, 1, 'Samarqand', 100000, 3);

//$update = new App\User();
//$update -> updateUser(1, 'nasriddin', 'developer', 'male', '123415566');

//$delete = new App\User();
//$delete -> deleteUser(2);

//$status = new App\Status();
//$status -> createStatus(2,'GentileMen');

$status = new App\Status();
$status -> deleteStatus(2);
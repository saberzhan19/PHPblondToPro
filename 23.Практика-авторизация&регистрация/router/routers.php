<?php 

// Route('/login', 'login.php');

use App\Services\Router;

Router::page('/login', 'login');

?>

<pre>
    <?= Router::enable(); ?>
</pre>

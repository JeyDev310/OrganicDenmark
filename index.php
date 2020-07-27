<?php
   require_once './composer/vendor/autoload.php';

   $loader = new \Twig\Loader\FilesystemLoader('./view');
   $twig = new \Twig\Environment($loader, [
       'auto_reload ' => true,
   ]);
echo $twig->render('main.html', ['the' => 'variables', 'go' => 'here']);
?>

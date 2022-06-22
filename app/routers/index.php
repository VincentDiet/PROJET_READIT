<?php 

if(isset($_GET['postId'])):
    include '../app/controllers/postsController.php';
    \App\Controllers\PostsController\showAction($connexion, $_GET['postId']);

else:
    include '../app/controllers/postsController.php';
    \App\Controllers\PostsController\indexAction($connexion);

endif;
?>
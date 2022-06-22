<?php 

    namespace App\Controllers\PostsController;
    use \PDO, \App\Models\PostsModel;

    function indexAction(PDO $connexion) {
        include_once '../app/models/postsModel.php';
        $posts = PostsModel\findAll($connexion);

        GLOBAL $content;
        ob_start();
            include '../app/views/posts/index.php';
        $content = ob_get_clean();
    }

    function showAction(PDO $connexion, int $post_id) {
        include_once '../app/models/postsModel.php';
        $post = PostsModel\findOneById($connexion, $post_id);

        GLOBAL $content;
        ob_start();
            include '../app/views/posts/show.php';
        $content = ob_get_clean();
    }

?>
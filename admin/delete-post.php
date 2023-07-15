<?php
require 'config/database.php';

if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    //fetch post from database in order to delte thumbnail

    $query = "SELECT * FROM posts WHERE id=$id";
    $result = mysqli_query($connection, $query);

    //make sure only 1 post is fetched
    if (mysqli_num_rows($result) == 1) {
        $posr = mysqli_fetch_assoc($result);
        $thumbnail_name = $post['thumbnail'];
        $thumbnail_path = '../images/' . $thumbnail_name;

        if ($thumbnail_path) {
            unlink($thumbnail_path);


            //delete post from database
            $delete_post_query = "DELETE FROM posts WHERE id=$id LIMIT 1";
            $delete_post_result = mysqli_query($connection, $delete_post_query);


            if (!mysqli_errno($connection)) {
                $_SESSION['delete-post-success'] = "Post deleted successfully";
            }
        }
    }
}

header('location: ' . ROOT_URL . 'admin/');
die();

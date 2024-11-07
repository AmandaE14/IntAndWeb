<?php

require_once "../app/controllers/PostController.php";
use app\controllers\PostController;

$route = $_GET['route'] ?? null;
$method = $_SERVER["REQUEST_METHOD"];

if ($route === 'posts' && $method === 'GET') {
    $postController = new PostController();
    $postController->viewPosts();
} elseif ($route === 'add-post' && $method === 'POST') {
    $postController = new PostController();
    $postController->addPost();
} elseif ($route === 'view-posts' && $method === 'GET') {
    require 'views/ViewPosts.html';
    exit();
} elseif ($route === 'add-post-form' && $method === 'GET') {
    require 'views/AddPost.html';
    exit();
} else {
    echo "404 Not Found";
}
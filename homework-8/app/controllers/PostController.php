<?php

namespace app\controllers;

use app\models\Post;

require_once __DIR__ . '/../models/Post.php';

class PostController
{
    public function addPost()
    {
        $post = new Post($_POST['title'], $_POST['content']);
        $post->save();
        echo json_encode(['success' => true, 'message' => 'Post added successfully!']);
    }

    public function viewPosts()
    {
        $posts = Post::getAllPosts();
        echo json_encode($posts);
    }

    public function searchPosts()
    {
        $title = $_GET['title'] ?? '';
        $posts = Post::searchPosts($title);
        echo json_encode(array_values($posts));
    }
}
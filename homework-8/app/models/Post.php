<?php

namespace app\models;

class Post
{
    public $title;
    public $content;

    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    public function save()
    {
        $file = 'posts.json';
        $posts = file_exists($file) ? json_decode(file_get_contents($file), true) : [];
        $posts[] = ['title' => $this->title, 'content' => $this->content];
        file_put_contents($file, json_encode($posts, JSON_PRETTY_PRINT));
    }

    public static function getAllPosts()
    {
        $file = 'posts.json';
        return file_exists($file) ? json_decode(file_get_contents($file), true) : [];
    }

    public static function searchPosts($searchTitle)
    {
        $allPosts = self::getAllPosts();
        return array_filter($allPosts, function ($post) use ($searchTitle) {
            return stripos($post['title'], $searchTitle) !== false;
        });
    }
}

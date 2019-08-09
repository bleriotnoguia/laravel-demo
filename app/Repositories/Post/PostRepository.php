<?php

namespace App\Repositories\Post;


use App\Repositories\Post\PostInterface as PostInterface;
use App\Post;

class PostRepository implements PostInterface
{
    public $post;

    function __construct(Post $post) {
	    $this->post = $post;
    }

    public function getAll()
    {
        return $this->post->getAll();
    }

    public function find($id)
    {
        return $this->post->findPost($id);
    }

    public function delete($id)
    {
        return $this->post->deletePost($id);
    }

}
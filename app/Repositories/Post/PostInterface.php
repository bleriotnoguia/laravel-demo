<?php

namespace App\Repositories\Post;

interface PostInterface {

    public function getAll();

    public function find($id);

    public function delete($id);

}
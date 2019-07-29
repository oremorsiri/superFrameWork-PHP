<?php
namespace App\controllers;

use App\db\entities\Post;
use Kint;

class PostController extends Controller
{
    public function index(){
        $posts = $this->doctrineManager->em->getRepository(Post::class)->findAll();
        Kint::dump($posts);
        $this->viewManager->renderTemplate('post.twig.html', ['post'=>$posts]);
    }
}
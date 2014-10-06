<?php

namespace AB\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PostsController extends Controller
{
    public function indexAction(Request $request)
    {
        $posts = $this->getDoctrine()->getRepository('ABBlogBundle:Post')->getPosts($request->get('first_result', 20));

        return $this->render('ABBlogBundle:Posts:index.html.twig', [
            'posts' => $posts
        ]);
    }
}

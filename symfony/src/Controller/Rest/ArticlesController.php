<?php

namespace App\Controller\Rest;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Doctrine\ORM\QueryBuilder;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ArticlesController extends AbstractFOSRestController
{
    /**
     * Retrieves a collection of Article resource
     * @Rest\Get("/articles")
     */
    public function getArticles(Request $request, ArticleRepository $articleRepository): View
    {
        /** @var Article[] $articles */
        $articles = $articleRepository->search($request->get('filter'), $request->get('categories'));

        return View::create($articles, Response::HTTP_OK);
    }

    /**
     * Get an article by id
     * @Rest\Get("/articles/{articleId}")
     */
    public function getArticle(int $articleId, ArticleRepository $articleRepository): View
    {
        /** @var Article $article */
        $article = $articleRepository->findActiveById($articleId);

        return View::create($article, Response::HTTP_OK);
    }
}

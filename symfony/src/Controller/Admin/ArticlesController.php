<?php

namespace App\Controller\Admin;

use App\Entity\Article;
use App\Entity\Category;
use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityNotFoundException;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ArticlesController extends AbstractFOSRestController
{
    /**
     * Creates an Article resource
     * @Rest\Post("/articles")
     * @param Request $request
     * @return View
     */
    public function createArticle(Request $request,
                                ArticleRepository $articleRepository,
                                CategoryRepository $categoryRepository): View
    {
        /** @var Category[] $categories */
        $categories = $categoryRepository->findAllByIds($request->get('categories'));

        $article = new Article();
        $article->setTitle($request->get('title'));
        $article->setText($request->get('text'));
        $article->setCategories($categories);

        $articleRepository->save($article);

        return View::create($article, Response::HTTP_CREATED); # 201
    }

    /**
     * Replaces Article resource
     * @Rest\Put("/articles/{articleId}")
     */
    public function updateArticle(int $articleId,
                               Request $request,
                               ArticleRepository $articleRepository,
                               CategoryRepository $categoryRepository): View
    {
        /** @var Category[] $categories */
        $categories = $categoryRepository->findAllByIds($request->get('categories'));

        $article = $this->getArticle($articleId);
        $article->setTitle($request->get('title'));
        $article->setText($request->get('text'));
        $article->setCategories($categories);

        $articleRepository->save($article);

        return View::create($article, Response::HTTP_OK); # 200
    }

    /**
     * Removes the Article resource
     * @Rest\Delete("/articles/{articleId}")
     */
    public function deleteArticle(int $articleId, ArticleRepository $articleRepository): View
    {
        $article = $this->getArticle($articleId);
        $articleRepository->delete($article);

        return View::create([], Response::HTTP_NO_CONTENT); # 204
    }

    /**
     * @param int $articleId
     * @return Article
     * @throws EntityNotFoundException
     */
    private function getArticle(int $articleId): Article
    {
        /** @var Article $article */
        $article = $this->getDoctrine()->getRepository(Article::class)->findOneById($articleId);

        if (!$article) {
            throw new EntityNotFoundException("Article with id $articleId does not exist!");
        }

        return $article;
    }
}

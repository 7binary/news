<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityNotFoundException;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CategoriesController extends AbstractFOSRestController
{
    /**
     * Creates a Category resource
     * @Rest\Post("/categories")
     * @param Request $request
     * @return View
     */
    public function postCategory(Request $request, CategoryRepository $categoryRepository): View
    {
        $category = new Category();
        $category->setName($request->get('name'));

        $categoryRepository->save($category);

        return View::create($category, Response::HTTP_CREATED); # 201
    }

    /**
     * Replaces the Category resource
     * @Rest\Put("/categories/{categoryId}")
     */
    public function putCategory(int $categoryId,
                               Request $request,
                               CategoryRepository $categoryRepository): View
    {
        $category = $this->getCategory($categoryId);
        $category->setName($request->get('name'));

        $categoryRepository->save($category);

        return View::create($category, Response::HTTP_OK); # 200
    }

    /**
     * Removes the Category resource
     * @Rest\Delete("/categories/{categoryId}")
     */
    public function deleteCategory(int $categoryId, CategoryRepository $categoryRepository): View
    {
        $category = $this->getCategory($categoryId);
        $categoryRepository->delete($category);

        return View::create([], Response::HTTP_NO_CONTENT); # 204
    }

    /**
     * @param int $categoryId
     * @return Category
     * @throws EntityNotFoundException
     */
    private function getCategory(int $categoryId): Category
    {
        /** @var Category $category */
        $category = $this->getDoctrine()->getRepository(Category::class)->findOneById($categoryId);

        if (!$category) {
            throw new EntityNotFoundException("Category with id $categoryId does not exist!");
        }

        return $category;
    }
}

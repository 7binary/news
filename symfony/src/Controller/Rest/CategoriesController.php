<?php

namespace App\Controller\Rest;

use App\Entity\Category;
use App\Repository\CategoryRepository;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Response;

class CategoriesController extends AbstractFOSRestController
{
    /**
     * Retrieves a collection of Category resource
     * @Rest\Get("/categories")
     */
    public function getCategories(CategoryRepository $categoryRepository): View
    {
        /** @var Category[] $categories */
        $categories = $categoryRepository->findAll();

        return View::create($categories, Response::HTTP_OK);
    }
}

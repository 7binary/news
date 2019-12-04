<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 * @ORM\Table(name="article", indexes={@ORM\Index(columns={"title", "text"}, flags={"fulltext"})})
 * @inheritDoc
 */
class Article extends BaseEntity
{
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $text;

    /**
     * @ORM\ManyToMany(targetEntity="Category", inversedBy="articles", cascade={"persist"})
     * @ORM\JoinTable(
     *     name="article_category",
     *     joinColumns={
     *          @ORM\JoinColumn(name="article_id", referencedColumnName="id")
     *     },
     *     inverseJoinColumns={
     *          @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     *     }
     * )
     */
    private $categories;

    public function __construct()
    {
        $this->categories = new ArrayCollection();
    }

    public function addCategory(Category $category): self
    {
        $this->categories[] = $category;

        return $this;
    }

    public function removeCategory(Category $category): bool
    {
        return $this->categories->removeElement($category);
    }

    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function setCategories(array $categories): self
    {
        $this->categories = $categories;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }
}

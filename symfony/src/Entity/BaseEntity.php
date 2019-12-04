<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use DateTime;

abstract class BaseEntity
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Gedmo\Timestampable(on="create")
     */
    protected $created_at;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Gedmo\Timestampable
     */
    protected $updated_at;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $deleted_at;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreatedAt(): ?DateTime
    {
        return $this->created_at;
    }

    public function setCreatedAt(?DateTime $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdatedAt(): ?DateTime
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(?DateTime $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    public function getDeletedAt(): ?DateTime
    {
        return $this->deleted_at;
    }

    public function setDeletedAt(?DateTime $deleted_at): self
    {
        $this->deleted_at = $deleted_at;

        return $this;
    }
}

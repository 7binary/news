<?php

namespace App\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User extends BaseEntity implements UserInterface
{
    const ROLE_ADMIN = 'ROLE_ADMIN';

    /**
     * @ORM\Column(type="string", unique=true)
     */

    private $username;

    /**
     * @ORM\Column(type="string", unique=true, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="json_array")
     */
    private $roles = array();

    /**
     * @ORM\Column(type="string", unique=true, nullable=true)
     */
    private $apiToken;

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Returns the roles or permissions granted to the user for security.
     */
    public function getRoles()
    {
        $roles = $this->roles;

        if (empty($roles)) {
            $roles[] = self::ROLE_ADMIN;
        }

        return array_unique($roles);
    }

    public function setRoles($roles)
    {
        $this->roles = $roles;
    }

    /**
     * Returns the salt that was originally used to encode the password.
     */
    public function getSalt()
    {
        return;
    }

    /**
     * Removes sensitive data from the user.
     */
    public function eraseCredentials()
    {
        // if you had a plainPassword property, you'd nullify it here
        // $this->plainPassword = null;
    }

    /**
     * @param string $apiToken
     */
    public function setApiToken($apiToken)
    {
        $this->apiToken = $apiToken;
    }
}

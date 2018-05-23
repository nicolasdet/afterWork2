<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\FOSUserBundle;
use FOS\UserBundle\Model\User as FOSUser;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User extends FOSUser
{


    public function __construct()
    {
        parent::__construct();
        $this->relationsUserGroupe = new ArrayCollection();

    }
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var int
     *
     * @ORM\Column(name="id_user_groupe", type="integer", nullable=true)
     * @ORM\OneToMany(targetEntity="App\Entity\UserGroupe", mappedBy="User", orphanRemoval=true)
     */
    protected $relationsUserGroupe;


    public function getIdUserGroupe(): ?int
    {
        return $this->id;
    }

    public function setIdUserGroupe(string $idUserGroupe): self
    {
        $this->idUserGroupe = $idUserGroupe;

        return $this;
    }




    public function getId(): ?int
    {
        return $this->id;
    }





}

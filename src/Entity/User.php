<?php
// src/Entity/User.php


namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping\Driver;
use Doctrine\ORM\Mapping\AnnotationDriver;




#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: 'users')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    
    #[ORM\Id]
    #[ORM\Column(type: 'string', length: 255)]
     private $idelecteur;
     

    
 #[ORM\Column(type: 'string', length: 255)]
     private $password;
    private bool $hasVoted = false;
    
#[ORM\Column(type: 'string', length: 255)] 
    private $nom; 
    
    #[ORM\Column(type: 'string', length: 255)] 
    private $prenom;
    
    #[ORM\Column(type: 'string', length: 255)] 
    private $email;
    
    #[ORM\Column(type: 'string', length: 255)] 
    private $adresse;
    
    #[ORM\Column(type: 'date')] 
    private $datenaiss;
     
     
    public function setIdelecteur(string $idelecteur): self
    {
        $this->idelecteur = $idelecteur;
        return $this;
    }

	 public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }

    public function getDatenaiss(): ?\DateTimeInterface
    {
        return $this->datenaiss;
    }

    public function setDatenaiss(\DateTimeInterface $datenaiss): self
    {
        $this->datenaiss = $datenaiss;
        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;
        return $this;
    }

    public function hasVoted(): bool
    {
        return $this->hasVoted;
    }

    public function setHasVoted(bool $hasVoted): self
    {
        $this->hasVoted = $hasVoted;
        return $this;
    }

    public function getUsername(): string
    {
        return (string) $this->idelecteur;
    }

    public function getUserIdentifier(): string
    {
        return (string) $this->idelecteur;
    }


      public function getIdelecteur(): string
    {
        return (string) $this->idelecteur;
    }
    
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
    }

    public function getRoles(): array
    {
        // Return at least one role
        return ['ROLE_USER'];
    }

    public function getSalt(): ?string
    {
        return null; // bcrypt doesn't require a separate salt.
    }
}


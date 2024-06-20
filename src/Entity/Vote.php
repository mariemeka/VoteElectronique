<?php
// src/Entity/Vote.php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


 #[ORM\Entity]
#[ORM\Table(name: 'vote')]
class Vote
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "SEQUENCE")]
    #[ORM\SequenceGenerator(sequenceName: "vote_id_seq", allocationSize:1, initialValue:1)]
    #[ORM\Column(type: 'integer')]
    private $id;

 
  #[ORM\Column(type: 'date')] 
    private $dateVote;

    #[ORM\Column(name: 'candidateid', type: 'string', length: 255)]
    private $candidateId;
    
      #ORM\ManyToOne(targetEntity="Candidate")
    #ORM\JoinColumn(name="candidateid", referencedColumnName="id")
	private $candidate;
	
	
   
    
    #[ORM\Column(type: 'text', name: 'public_key')]
    private $publicKey;
    
    public function getPublicKey(): ?string
    {
        return $this->publicKey;
    }

    public function setPublicKey(string $publicKey): self
    {
        $this->publicKey = $publicKey;

        return $this;
    }
	

    public function getEncryptedVote(): ?string
    {
        return $this->encryptedVote;
    }

    public function setEncryptedVote(string $encryptedVote): self
    {
        $this->encryptedVote = $encryptedVote;

        return $this;
    }
	
	
   //  #[ORM\Column(type: 'text')]
    //private $encryptedVote;

     #[ORM\Column(type: 'text')]
    private $signature;
    
    public function setSignature(string $signature): self
    {
        $this->signature = $signature;

        return $this;
    }


public function getCandidate(): ?Candidate
    {
        return $this->candidate;
    }

    public function setCandidate(?Candidate $candidate): self
    {
        $this->candidate = $candidate;

        return $this;
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateVote(): ?\DateTimeInterface
    {
        return $this->dateVote;
    }

    public function setDateVote(\DateTimeInterface $dateVote): self
    {
        $this->dateVote = $dateVote;

        return $this;
    }

    public function getCandidateId(): ?string
    {
        return $this->candidateId;
    }

    public function setCandidateId(string $candidateId): self
    {
        $this->candidateId = $candidateId;

        return $this;
    }
    
  
    
}


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

  #[ORM\Column(type: 'string', length: 255)]
    private $electionName;

  #[ORM\Column(type: 'string', length: 255)]
    private $voter;

  #[ORM\Column(type: 'date')] 
    private $dateVote;

    #[ORM\Column(name: 'candidateid', type: 'string', length: 255)]
    private $candidateId;
    
      #ORM\ManyToOne(targetEntity="Candidate")
    #ORM\JoinColumn(name="candidateid", referencedColumnName="id")
	private $candidate;

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

    public function getElectionName(): ?string
    {
        return $this->electionName;
    }

    public function setElectionName(string $electionName): self
    {
        $this->electionName = $electionName;

        return $this;
    }

    public function getVoter(): ?string
    {
        return $this->voter;
    }

    public function setVoter(string $voter): self
    {
        $this->voter = $voter;

        return $this;
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


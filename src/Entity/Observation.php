<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ObservationRepository")
 */
class Observation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $geographic_coordinates;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $observation_title;

    /**
     * @ORM\Column(type="text")
     */
    private $comment;

    /**
     * @ORM\Column(type="datetime")
     */
    private $post_date;

    /**
     * @ORM\Column(type="datetime")
     */
    private $delete_date;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $validation_date;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $reason_of_delete;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Birds", inversedBy="observations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $bird_id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="observations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    public function getId()
    {
        return $this->id;
    }

    public function getGeographicCoordinates(): ?string
    {
        return $this->geographic_coordinates;
    }

    public function setGeographicCoordinates(string $geographic_coordinates): self
    {
        $this->geographic_coordinates = $geographic_coordinates;

        return $this;
    }

    public function getObservationTitle(): ?string
    {
        return $this->observation_title;
    }

    public function setObservationTitle(string $observation_title): self
    {
        $this->observation_title = $observation_title;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getPostDate(): ?\DateTimeInterface
    {
        return $this->post_date;
    }

    public function setPostDate(\DateTimeInterface $post_date): self
    {
        $this->post_date = $post_date;

        return $this;
    }

    public function getDeleteDate(): ?\DateTimeInterface
    {
        return $this->delete_date;
    }

    public function setDeleteDate(\DateTimeInterface $delete_date): self
    {
        $this->delete_date = $delete_date;

        return $this;
    }

    public function getValidationDate(): ?\DateTimeInterface
    {
        return $this->validation_date;
    }

    public function setValidationDate(?\DateTimeInterface $validation_date): self
    {
        $this->validation_date = $validation_date;

        return $this;
    }

    public function getReasonOfDelete(): ?string
    {
        return $this->reason_of_delete;
    }

    public function setReasonOfDelete(?string $reason_of_delete): self
    {
        $this->reason_of_delete = $reason_of_delete;

        return $this;
    }

    public function getBirdId(): ?Birds
    {
        return $this->bird_id;
    }

    public function setBirdId(?Birds $bird_id): self
    {
        $this->bird_id = $bird_id;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
}

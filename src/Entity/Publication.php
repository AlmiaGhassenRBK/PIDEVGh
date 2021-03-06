<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Publication
 *
 * @ORM\Table(name="publication", indexes={@ORM\Index(name="publication_ibfk_1", columns={"id_citoyen"})})
 * @ORM\Entity
 */
class Publication
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     * @Assert\NotBlank(message="Statut doit etre non vide")
     * @Assert\Length(
     *     min= 7,
     *     max= 100,
     *     minMessage = "doit etre >=7",
     *     maxMessage = "doit etre <=100" )
     * @ORM\Column(name="status", type="string", length=1000, nullable=false)
     */
    private $status;

    /**
     * @var string
     * @Assert\NotBlank(message="Image doit etre non vide")
     * @ORM\Column(name="photo", type="string", length=255, nullable=false)
     */
    private $photo;

    /**
     * @var int
     *
     * @ORM\Column(name="id_employee", type="integer", nullable=false)
     */
    private $idEmployee;

    /**
     * @var bool
     *
     * @ORM\Column(name="confirm_publication", type="boolean", nullable=false)
     */
    private $confirmPublication;

    /**
     * @var \Citoyen
     *
     * @ORM\ManyToOne(targetEntity="Citoyen")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_citoyen", referencedColumnName="id")
     * })
     */
    private $idCitoyen;





    /**
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param string $photo
     */
    public function setPhoto( $photo)
    {
        $this->photo = $photo;
    }

    /**
     * @return int
     */
    public function getIdEmployee(): ?int
    {
        return $this->idEmployee;
    }

    /**
     * @param int $idEmployee
     */
    public function setIdEmployee(int $idEmployee): void
    {
        $this->idEmployee = $idEmployee;
    }

    /**
     * @return bool
     */
    public function isConfirmPublication(): ?bool
    {
        return $this->confirmPublication;
    }

    /**
     * @param bool $confirmPublication
     */
    public function setConfirmPublication(bool $confirmPublication): void
    {
        $this->confirmPublication = $confirmPublication;
    }

    /**
     * @return string
     */
    public function getIdCitoyen(): ?string
    {
        return $this->idCitoyen;
    }

    /**
     * @param Citoyen $idCitoyen
     */
    public function setIdCitoyen(Citoyen $idCitoyen): void
    {
        $this->idCitoyen = $idCitoyen;

    }
    /**
     * @return string
     */
    public function __toString(){
        return (String)$this->getIdCitoyen();
    }

    public function getFilename(): ?string
    {
        return $this->filename;
    }

    public function setFilename(string $filename): self
    {
        $this->filename = $filename;

        return $this;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(string $path): self
    {
        $this->path = $path;

        return $this;
    }




}

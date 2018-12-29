<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ServicioRepository")
 */
class Servicio
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Servicio", inversedBy="no", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $salud;

    
    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Servicio", inversedBy="servicio", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $empleo;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Servicio", mappedBy="empleo", cascade={"persist", "remove"})
     */
    private $servicio;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Servicio", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $tramite;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Servicio", inversedBy="deporte")
     * @ORM\JoinColumn(nullable=false)
     */
    private $yes;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Servicio", mappedBy="yes")
     */
    private $deporte;

    

    
    public function __construct()
    {
        $this->deporte = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSalud(): ?self
    {
        return $this->salud;
    }

    public function setSalud(self $salud): self
    {
        $this->salud = $salud;

        return $this;
    }

   

    public function getEmpleo(): ?self
    {
        return $this->empleo;
    }

    public function setEmpleo(self $empleo): self
    {
        $this->empleo = $empleo;

        return $this;
    }

    public function getServicio(): ?self
    {
        return $this->servicio;
    }

    public function setServicio(self $servicio): self
    {
        $this->servicio = $servicio;

        // set the owning side of the relation if necessary
        if ($this !== $servicio->getEmpleo()) {
            $servicio->setEmpleo($this);
        }

        return $this;
    }

    public function getTramite(): ?self
    {
        return $this->tramite;
    }

    public function setTramite(self $tramite): self
    {
        $this->tramite = $tramite;

        return $this;
    }

    public function getYes(): ?self
    {
        return $this->yes;
    }

    public function setYes(?self $yes): self
    {
        $this->yes = $yes;

        return $this;
    }

    /**
     * @return Collection|self[]
     */
    public function getDeporte(): Collection
    {
        return $this->deporte;
    }

    public function addDeporte(self $deporte): self
    {
        if (!$this->deporte->contains($deporte)) {
            $this->deporte[] = $deporte;
            $deporte->setYes($this);
        }

        return $this;
    }

    public function removeDeporte(self $deporte): self
    {
        if ($this->deporte->contains($deporte)) {
            $this->deporte->removeElement($deporte);
            // set the owning side to null (unless already changed)
            if ($deporte->getYes() === $this) {
                $deporte->setYes(null);
            }
        }

        return $this;
    }

    
    
}

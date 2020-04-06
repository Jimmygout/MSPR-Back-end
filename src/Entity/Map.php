<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MapRepository")
 */
class Map
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
    private $titre;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Parking", mappedBy="map")
     */
    private $parking;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Boutique", mappedBy="map")
     */
    private $boutique;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Buvette", mappedBy="map")
     */
    private $buvette;


    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ObjetPerdu", mappedBy="map")
     */
    private $objetPerdu;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Wc", mappedBy="map")
     */
    private $Wc;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\StandInformation", mappedBy="map")
     */
    private $standInformation;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Evenement", mappedBy="map")
     */
    private $Evenement;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Concert", mappedBy="map")
     */
    private $Concert;

    public function __construct()
    {
        $this->parking = new ArrayCollection();
        $this->boutique = new ArrayCollection();
        $this->buvette = new ArrayCollection();
        $this->objetPerdu = new ArrayCollection();
        $this->Wc = new ArrayCollection();
        $this->standInformation = new ArrayCollection();
        $this->Evenement = new ArrayCollection();
        $this->Concert = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * @return Collection|Parking[]
     */
    public function getParking(): Collection
    {
        return $this->parking;
    }

    public function addParking(Parking $parking): self
    {
        if (!$this->parking->contains($parking)) {
            $this->parking[] = $parking;
            $parking->setMap($this);
        }

        return $this;
    }

    public function removeParking(Parking $parking): self
    {
        if ($this->parking->contains($parking)) {
            $this->parking->removeElement($parking);
            // set the owning side to null (unless already changed)
            if ($parking->getMap() === $this) {
                $parking->setMap(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Boutique[]
     */
    public function getBoutique(): Collection
    {
        return $this->boutique;
    }

    public function addBoutique(Boutique $boutique): self
    {
        if (!$this->boutique->contains($boutique)) {
            $this->boutique[] = $boutique;
            $boutique->setMap($this);
        }

        return $this;
    }

    public function removeBoutique(Boutique $boutique): self
    {
        if ($this->boutique->contains($boutique)) {
            $this->boutique->removeElement($boutique);
            // set the owning side to null (unless already changed)
            if ($boutique->getMap() === $this) {
                $boutique->setMap(null);
            }
        }

        return $this;
    }

    public function __toString(): string
    {
        return $this->titre;
    }

    /**
     * @return Collection|Buvette[]
     */
    public function getBuvette(): Collection
    {
        return $this->buvette;
    }

    public function addBuvette(Buvette $buvette): self
    {
        if (!$this->buvette->contains($buvette)) {
            $this->buvette[] = $buvette;
            $buvette->setMap($this);
        }

        return $this;
    }

    public function removeBuvette(Buvette $buvette): self
    {
        if ($this->buvette->contains($buvette)) {
            $this->buvette->removeElement($buvette);
            // set the owning side to null (unless already changed)
            if ($buvette->getMap() === $this) {
                $buvette->setMap(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|ObjetPerdu[]
     */
    public function getObjetPerdu(): Collection
    {
        return $this->objetPerdu;
    }

    public function addObjetPerdu(ObjetPerdu $objetPerdu): self
    {
        if (!$this->objetPerdu->contains($objetPerdu)) {
            $this->objetPerdu[] = $objetPerdu;
            $objetPerdu->setMap($this);
        }

        return $this;
    }

    public function removeObjetPerdu(ObjetPerdu $objetPerdu): self
    {
        if ($this->objetPerdu->contains($objetPerdu)) {
            $this->objetPerdu->removeElement($objetPerdu);
            // set the owning side to null (unless already changed)
            if ($objetPerdu->getMap() === $this) {
                $objetPerdu->setMap(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Wc[]
     */
    public function getWc(): Collection
    {
        return $this->Wc;
    }

    public function addWc(Wc $wc): self
    {
        if (!$this->Wc->contains($wc)) {
            $this->Wc[] = $wc;
            $wc->setMap($this);
        }

        return $this;
    }

    public function removeWc(Wc $wc): self
    {
        if ($this->Wc->contains($wc)) {
            $this->Wc->removeElement($wc);
            // set the owning side to null (unless already changed)
            if ($wc->getMap() === $this) {
                $wc->setMap(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|StandInformation[]
     */
    public function getStandInformation(): Collection
    {
        return $this->standInformation;
    }

    public function addStandInformation(StandInformation $standInformation): self
    {
        if (!$this->standInformation->contains($standInformation)) {
            $this->standInformation[] = $standInformation;
            $standInformation->setMap($this);
        }

        return $this;
    }

    public function removeStandInformation(StandInformation $standInformation): self
    {
        if ($this->standInformation->contains($standInformation)) {
            $this->standInformation->removeElement($standInformation);
            // set the owning side to null (unless already changed)
            if ($standInformation->getMap() === $this) {
                $standInformation->setMap(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Evenement[]
     */
    public function getEvenement(): Collection
    {
        return $this->Evenement;
    }

    public function addEvenement(Evenement $evenement): self
    {
        if (!$this->Evenement->contains($evenement)) {
            $this->Evenement[] = $evenement;
            $evenement->setMap($this);
        }

        return $this;
    }

    public function removeEvenement(Evenement $evenement): self
    {
        if ($this->Evenement->contains($evenement)) {
            $this->Evenement->removeElement($evenement);
            // set the owning side to null (unless already changed)
            if ($evenement->getMap() === $this) {
                $evenement->setMap(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Concert[]
     */
    public function getConcert(): Collection
    {
        return $this->Concert;
    }

    public function addConcert(Concert $concert): self
    {
        if (!$this->Concert->contains($concert)) {
            $this->Concert[] = $concert;
            $concert->setMap($this);
        }

        return $this;
    }

    public function removeConcert(Concert $concert): self
    {
        if ($this->Concert->contains($concert)) {
            $this->Concert->removeElement($concert);
            // set the owning side to null (unless already changed)
            if ($concert->getMap() === $this) {
                $concert->setMap(null);
            }
        }

        return $this;
    }
}

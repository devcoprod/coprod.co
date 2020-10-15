<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @UniqueEntity(fields={"email"}, message="There is already an account with this email")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isVerified = false;

    /**
     * @ORM\ManyToMany(targetEntity=Role::class, mappedBy="users")
     */
    private $userRoles;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $avatar;



    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isOrganization;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $organizationName;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isAssociate;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isWorker;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $bornAt;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $bornCity;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $bornCounty;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $bornCountry;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $nationality;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $nirpp;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $gender;

    /**
     * @ORM\Column(type="string", length=9, nullable=true)
     */
    private $siren;

    /**
     * @ORM\Column(type="string", length=14, nullable=true)
     */
    private $siret;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $rcs;

    public function __construct()
    {
        $this->userRoles = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->userRoles->map(function($role){
            return $role->getTitle();
        })->toArray();
        
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;

        return $this;
    }

    /**
     * @return Collection|Role[]
     */
    public function getUserRoles(): Collection
    {
        return $this->userRoles;
    }

    public function addUserRole(Role $userRole): self
    {
        if (!$this->userRoles->contains($userRole)) {
            $this->userRoles[] = $userRole;
            $userRole->addUser($this);
        }

        return $this;
    }

    public function removeUserRole(Role $userRole): self
    {
        if ($this->userRoles->contains($userRole)) {
            $this->userRoles->removeElement($userRole);
            $userRole->removeUser($this);
        }

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(?string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(?string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    public function setAvatar(?string $avatar): self
    {
        $this->avatar = $avatar;

        return $this;
    }

    public function getIsOrganization(): ?bool
    {
        return $this->isOrganization;
    }

    public function setIsOrganization(?bool $isOrganization): self
    {
        $this->isOrganization = $isOrganization;

        return $this;
    }

    public function getFullname(): ?string
    {
        return $this->organizationName;
    }

    public function setFullname(?string $organizationName): self
    {
        $this->organizationName = $organizationName;

        return $this;
    }

    public function getIsAssociate(): ?bool
    {
        return $this->isAssociate;
    }

    public function setIsAssociate(?bool $isAssociate): self
    {
        $this->isAssociate = $isAssociate;

        return $this;
    }

    public function getIsWorker(): ?bool
    {
        return $this->isWorker;
    }

    public function setIsWorker(?bool $isWorker): self
    {
        $this->isWorker = $isWorker;

        return $this;
    }

    public function getBornAt(): ?\DateTimeInterface
    {
        return $this->bornAt;
    }

    public function setBornAt(?\DateTimeInterface $bornAt): self
    {
        $this->bornAt = $bornAt;

        return $this;
    }

    public function getBornCity(): ?string
    {
        return $this->bornCity;
    }

    public function setBornCity(?string $bornCity): self
    {
        $this->bornCity = $bornCity;

        return $this;
    }

    public function getBornCounty(): ?string
    {
        return $this->bornCounty;
    }

    public function setBornCounty(?string $bornCounty): self
    {
        $this->bornCounty = $bornCounty;

        return $this;
    }

    public function getBornCountry(): ?string
    {
        return $this->bornCountry;
    }

    public function setBornCountry(?string $bornCountry): self
    {
        $this->bornCountry = $bornCountry;

        return $this;
    }

    public function getNationality(): ?string
    {
        return $this->nationality;
    }

    public function setNationality(?string $nationality): self
    {
        $this->nationality = $nationality;

        return $this;
    }

    public function getNirpp(): ?string
    {
        return $this->nirpp;
    }

    public function setNirpp(?string $nirpp): self
    {
        $this->nirpp = $nirpp;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(?string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getSiren(): ?string
    {
        return $this->siren;
    }

    public function setSiren(?string $siren): self
    {
        $this->siren = $siren;

        return $this;
    }

    public function getSiret(): ?string
    {
        return $this->siret;
    }

    public function setSiret(?string $siret): self
    {
        $this->siret = $siret;

        return $this;
    }

    public function getRcs(): ?string
    {
        return $this->rcs;
    }

    public function setRcs(?string $rcs): self
    {
        $this->rcs = $rcs;

        return $this;
    }
}

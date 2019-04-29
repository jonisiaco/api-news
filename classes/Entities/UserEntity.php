<?php
namespace classes\Entities;

/**
 * @Entity
 * @ORM\Table(name="user", options={"collate"="utf8mb4_general_ci", "charset"="utf8mb4"})
 */
class User
{
	/**
	 * @Id
	 * @GeneratedValue
	 * @Column(type="smallint")
	 */
	private $id;

	/**
	 * @Column(type="string")
	 */
	private $first_name;

	/**
	 * @Column(type="string")
	 */
	private $surname;

	/**
	 * @Column(type="datetime")
	 */
	private $created_at;

	/**
     *
     * @OneToMany(targetEntity="Phone", mappedBy="phone", cascade={"all"})
     * @var Doctrine\Common\Collection\ArrayCollection
     */
    private $phone;

    /**
     *
     * @OneToMany(targetEntity="Email", mappedBy="email", cascade={"all"})
     * @var Doctrine\Common\Collection\ArrayCollection
     */
    private $email;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->phone = new \Doctrine\Common\Collections\ArrayCollection();
        $this->email = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstName.
     *
     * @param string $firstName
     *
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;

        return $this;
    }

    /**
     * Get firstName.
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set surname.
     *
     * @param string $surname
     *
     * @return User
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname.
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime $createdAt
     *
     * @return User
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get createdAt.
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Add phone.
     *
     * @param \classes\Entities\Phone $phone
     *
     * @return User
     */
    public function addPhone(\classes\Entities\Phone $phone)
    {
        $this->phone[] = $phone;

        return $this;
    }

    /**
     * Remove phone.
     *
     * @param \classes\Entities\Phone $phone
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removePhone(\classes\Entities\Phone $phone)
    {
        return $this->phone->removeElement($phone);
    }

    /**
     * Get phone.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Add email.
     *
     * @param \classes\Entities\Email $email
     *
     * @return User
     */
    public function addEmail(\classes\Entities\Email $email)
    {
        $this->email[] = $email;

        return $this;
    }

    /**
     * Remove email.
     *
     * @param \classes\Entities\Email $email
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeEmail(\classes\Entities\Email $email)
    {
        return $this->email->removeElement($email);
    }

    /**
     * Get email.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEmail()
    {
        return $this->email;
    }
}

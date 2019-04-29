<?php
namespace classes\Entities;

use classes\Entities\User;
/**
 * @Entity
 * @ORM\Table(name="phone", options={"collate"="utf8mb4_general_ci", "charset"="utf8mb4"})
 */
class Phone
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
	private $number;

    /**
     *
     * @ManyToOne(targetEntity="Phone", inversedBy="phones")
     * @JoinColumn(name="phone_id", referencedColumnName="id", nullable=false)
     * @var User
     */
    private $user;

	/**
	 * @Column(type="datetime")
	 */
	private $created_at;


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
     * Set number.
     *
     * @param string $number
     *
     * @return Phone
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number.
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime $createdAt
     *
     * @return Phone
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
     * Set user.
     *
     * @param \classes\Entities\Phone $user
     *
     * @return Phone
     */
    public function setUser(\classes\Entities\Phone $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user.
     *
     * @return \classes\Entities\Phone
     */
    public function getUser()
    {
        return $this->user;
    }
}

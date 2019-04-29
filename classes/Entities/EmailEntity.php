<?php
namespace classes\Entities;

use classes\Entities\User;
/**
 * @Entity
 * @ORM\Table(name="email", options={"collate"="utf8mb4_general_ci", "charset"="utf8mb4"})
 */
class Email
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
	private $email;

    /**
     *
     * @ManyToOne(targetEntity="Email", inversedBy="emails")
     * @JoinColumn(name="email_id", referencedColumnName="id", nullable=false)
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
     * Set email.
     *
     * @param string $email
     *
     * @return Email
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime $createdAt
     *
     * @return Email
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
     * @param \classes\Entities\Email $user
     *
     * @return Email
     */
    public function setUser(\classes\Entities\Email $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user.
     *
     * @return \classes\Entities\Email
     */
    public function getUser()
    {
        return $this->user;
    }
}

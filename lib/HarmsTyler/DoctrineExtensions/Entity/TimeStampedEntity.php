<?php
/**
 * TimeStampedEntity.php
 */

namespace HarmsTyler\DoctrineExtensions\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TimeStampedEntity
 *
 * @ORM\MappedSuperclass
 * @ORM\HasLifecycleCallbacks
 */
abstract class TimeStampedEntity {

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetime")
     */
    private $updated;

    public function __construct()
    {
        $this->setCreated(new \DateTime());
        $this->setUpdated(new \DateTime());
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Post
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return Post
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Auto set the updated date
     *
     * @ORM\PreUpdate
     */
    public function setUpdatedValue()
    {
       $this->setUpdated(new \DateTime());
    }
}

<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * fred
 *
 * @ORM\Table(name="fred")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\fredRepository")
 */
class fred
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="coco", type="string", length=255)
     */
    private $coco;

    /**
     * @var string
     *
     * @ORM\Column(name="gg", type="string", length=255)
     */
    private $gg;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set coco
     *
     * @param string $coco
     *
     * @return fred
     */
    public function setCoco($coco)
    {
        $this->coco = $coco;

        return $this;
    }

    /**
     * Get coco
     *
     * @return string
     */
    public function getCoco()
    {
        return $this->coco;
    }

    /**
     * Set gg
     *
     * @param string $gg
     *
     * @return fred
     */
    public function setGg($gg)
    {
        $this->gg = $gg;

        return $this;
    }

    /**
     * Get gg
     *
     * @return string
     */
    public function getGg()
    {
        return $this->gg;
    }
}


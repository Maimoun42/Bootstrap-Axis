<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Items
 *
 * @ORM\Table(name="Items", indexes={@ORM\Index(name="Belonging", columns={"belong"})})
 * @ORM\Entity
 */
class Items
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
     *
     * @ORM\Column(name="type", type="string", length=300, nullable=false)
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $status = 'NULL';

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="belong", referencedColumnName="id")
     * })
     */
    private $belong;

    public function settype(string $text) {
        $this->type = $text;
    }

    public function getId() {
        return $this->id;
    }
    public function getType() {
        return $this->type;
    }
    public function getStatus() {
        return $this->status;
    }        
    public function getBelong() {
        return $this->belong;
    }
} 

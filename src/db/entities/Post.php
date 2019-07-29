<?php
namespace App\db\entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="posts")
 */
class Post extends Entity
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    public $id;

    /**
     * @ORM\Column(type="string")
     */
    public $titulo;

    /**
     * @ORM\Column(type="string")
     */
    public $descripcion;

    /**
     * @ORM\Column(type="string")
     */
    public $autor;

    /**
     * @ORM\column(type="datetime")
     */
    public $created_at;
    
    public function __construct() {
      $this->created_at = new \DateTime('now');   
    }
}
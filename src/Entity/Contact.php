<?php


namespace App\Entity;
use Doctrine;


class Contact
{
  /**
   * *@ORM\Id
   * @ORM\GeneratedValue
   * @ORM\Column
   */
  private $id;


    /**
     * @ORM\Column (type="string", length=100)
     */

    private $name;


    /**
     * @ORM\Column (type="string", length=150)
     */
    private $email;


    /**
     * @ORM\Column (type="string", length=250)
     */
    private $message;


    /**
     * @ORM\Column (type="boolean", nullable=true)
     */
    private $is_read;

    public function getId(): ?int{
    return  $this->id;
    }

    public  function getNmae(): ?string{
        return $this->name;
    }

    public function setName(string  $name): self{
        $this->name=$name;

        return $this;
    }

    public function getEmail(): ?string{

        return $this->email;
    }
    public function setEmail(string  $email): self{
        $this->email=$email;

        return $this;
    }
    public function getMessage(): ?string{
        return $this->message;
    }
    public function setMessage(string  $message): self{
        $this->message=$message;

        return $this;
    }
    public function setName(string  $name): self{
        $this->name=$name;

        return $this;
    }
    public function getIsRead(): ?{
        $this->getIsRead()=$getIsRead;

        return $this;
    }


}
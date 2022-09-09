<?php

namespace Model;

class Comments
{
    private ?int $id;
    private ?string $email;
    private ?string $comment;

    public function __construct($id = null, $email = null, $comment)
    {
        $this->id = $id;
        $this->email = $email;
        $this->comment = $comment;
    }

    // getter and setter 

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    // end of getter and setter
}

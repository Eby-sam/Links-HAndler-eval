<?php

namespace eby\Model\Entity;

class link {

    private ?int $id = null;
    private string $link;
    private string $link_user;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getLink(): string
    {
        return $this->link;
    }

    /**
     * @param string $link
     */
    public function setLink(string $link): self
    {
        $this->link = $link;
        return $this;
    }

    /**
     * @return string
     */
    public function getLinkUser(): string
    {
        return $this->link_user;
    }

    /**
     * @param string $link_user
     */
    public function setLinkUser(string $link_user): self
    {
        $this->link_user = $link_user;
        return $this;
    }

}
<?php

abstract class CoreModel {
    // Ça rend la propriété id privée de l'extérieur de la classe, mais accessible au enfant
    protected int $id;
    protected $dateCreated;
    protected $dateUpdated;

    abstract public function findAll();
    abstract public function update();
    abstract public function add();

    /**
     * Méthode générique qui fera soit un update soit un add
     *
     * @return void
     */
    public function save () {
        if($this->id) {
            $this->update();
        }
        else {
            $this->add();
        }
    }

    /* Getteurs / Setter */

    /**
     * Get the value of id
     * 
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     * 
     * @param int $id : id de ... 
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of dateCreated
     * 
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set the value of dateCreated
     * 
     * @param $dateCreated 
     * @return self
     */
    public function setDateCreated($dateCreated): self
    {
        $this->dateCreated = $dateCreated;
        return $this;
    }

    /**
     * Get the value of dateUpdated
     * 
     */
    public function getDateUpdated()
    {
        return $this->dateUpdated;
    }

    /**
     * Set the value of dateUpdated
     * 
     * @param $dateCreated 
     * @return self
     */
    public function setDateUpdated($dateUpdated): self
    {
        $this->dateUpdated = $dateUpdated;
        return $this;
    }

}
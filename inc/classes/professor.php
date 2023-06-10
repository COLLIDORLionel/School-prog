<?php

require_once(__DIR__ . '/../traits/log.php');

class Professor extends CoreModel {

    use Log;
    private string $firstName;
    private string $lastName;

    public function __construct($id, $firstName, $lastName)
    {
        $this->$id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->dateCreated = date('d-m-y h:i:s');
        $this->dateUpdated = date('d-m-y h:i:s');
    }

    public function getProfName (): string
    {
        return $this->firstName . " " . $this->lastName . " (" . $this->id . ")";
    }

    public function findAll()
    {
        echo "je fais rien mais j'existe";
    }
    public function update()
    {
        echo "je fais rien mais j'existe";
    }
    public function add()
    {
        echo "je fais rien mais j'existe";
    }

    /**
     * Get the value of firstName
     * 
     * @return string 
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     * 
     * @param string $firstName : id de ... 
     * @return self
     */
    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;
        $this->whriteLog("Le nom de famille à été modifié");
        return $this;
    }

    /**
     * Get the value of id
     * 
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }
    /**
     * Set the value of lastName
     * 
     * @param string $lastName 
     * @return self
     */
    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;
        $this->whriteLog("Le prénom à été modifié");
        return $this;
    }



}
<?php

class Course {
    // Définition des propriétés de notre cours
    private string $title;
    private string $image;
    private string $shortDescription;
    private string $description;
    private array $programContent;
    private int $numberOfHours;
    private int $price;
    private string $classDate;
    private string $professor;
    private string $modality;
    private string $requiredLevel;

    // Constructeur de la classe
    public function __construct (
        string $title = '',
        string $image = '',
        string $shortDescription = '',
        string $description = '',
        array $programContent = [],
        int $numberOfHours = 0,
        int $price = 0,
        string $classDate = '',
        string $professor = '',
        string $modality = '',
        string $requiredLevel = ''
    )
    {
        // Affectation des valeurs rentrée en paramètre du contructeur dans les propriétés de l'instance de la classe
        $this->title = $title;
        $this->image = $image;
        $this->shortDescription = $shortDescription;
        $this->description = $description;
        $this->programContent = $programContent;
        $this->numberOfHours = $numberOfHours;
        $this->price = $price;
        $this->classDate = $classDate;
        $this->professor = $professor;
        $this->modality = $modality;
        $this->requiredLevel = $requiredLevel;
    }

    // Assesseurs

     /**
     * Get the value of title
     * 
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @param string $title new title courses
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

}
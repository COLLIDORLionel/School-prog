<?php

class Course {
    // Définition des propriétés de notre cours
    public $title;
    public $image;
    public $shortDescription;
    public $description;
    public $programContent;
    public $numberOfHours;
    public $price;
    public $classDate;
    public $professor;
    public $modality;
    public $requiredLevel;

    // Constructeur de la classe
    public function __construct(
        $title = '',
        $image = '',
        $shortDescription = '',
        $description = '',
        $programContent = [],
        $numberOfHours = 0,
        $price = 0,
        $classDate = '',
        $professor = '',
        $modality = '',
        $requiredLevel = ''
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
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @param string $title new title courses
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

}
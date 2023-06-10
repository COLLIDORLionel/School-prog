<?php

class Course extends CoreModel {
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
        string $requiredLevel = '',
        int $id = 0
    )
    {
        // Affectation des valeurs rentrée en paramètre du contructeur dans les propriétés de l'instance de la classe
        $this->id = $id;
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
        $this->dateCreated = date('d-m-y h:i:s');
        $this->dateUpdated = date('d-m-y h:i:s');
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

    /**
     * Get the value of Image
     * 
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * Set the value of Image
     * 
     * @param string $image image's name
     * @return self
     */
    public function setImage(string $image): self
    {
        $this->image = $image;
        return $this;
    }

    /**
     * Get the value of shortDescription
     * 
     * @return string
     */
    public function getShortDescription(): string
    {
        return $this->shortDescription;
    }

    /**
     * Set the value of ShortDescription
     * 
     * @param string $shortDescription
     * @return self
     */
    public function setShortDescription(string $shortDescription): self
    {
        $this->shortDescription = $shortDescription;
        return $this;
    }

    /**
     * Get the value of Description
     * 
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set the value of Description
     * 
     * @param string $description
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Get the value of ProgramContent
     * 
     * @return array
     */
    public function getProgramContent(): array
    {
        return $this->programContent;
    }

    /**
     * Set the value of ProgramContent
     * 
     * @param array $programContent
     * @return self
     */
    public function setProgramContent(array $programContent): self
    {
        $this->programContent = $programContent;
        return $this;
    }

    /**
     * Get the value of NumberOfHours
     * 
     * @return int
     */
    public function getNumberOfHours(): int
    {
        return $this->numberOfHours;
    }

    /**
     * Set the value of NumberOfHours
     * Only if the parametter is a positif integer
     * 
     * @param int $numberOfHours
     * @return self
     */
    public function setNumberOfHours(int $numberOfHours): self
    {
        if ($numberOfHours > 0)
        {
            $this->numberOfHours = $numberOfHours;
        }
        return $this;
    }

    /**
     * Get the value of Price
     * 
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * Set the value of Price
     * Only if the parametter is a positif integer
     * 
     * @param int $price
     * @return self
     */
    public function setPrice(int $price): self
    {
        if ($price > 0)
        {
            $this->price = $price;
        }
        return $this;
    }

    /**
     * Get the value of ClassDate
     * 
     * @return string
     */
    public function getClassDate(): string
    {
        return $this->classDate;
    }

    /**
     * Set the value of ClassDate
     * 
     * @param string $classDate
     * @return self
     */
    public function setClassDate(string $classDate): self
    {
        $this->classDate = $classDate;
        return $this;
    }

    /**
     * Get the value of Professor
     * 
     * @return string
     */
    public function getProfessor(): string
    {
        return $this->professor;
    }

    /**
     * Set the value of Professor
     * 
     * @param string $professor
     * @return self
     */
    public function setProfessor(string $professor): self
    {
        $this->professor = $professor;
        return $this;
    }

    /**
     * Get the value of Modality
     * 
     * @return string
     */
    public function getModality(): string
    {
        return $this->modality;
    }

    /**
     * Set the value of Modality
     * 
     * @param string $modality
     * @return  self
     */
    public function setModality(string $modality): self
    {
        $this->modality = $modality;
        return $this;
    }

    /**
     * Get the value of RequiredLevel
     * 
     * @return string
     */
    public function getRequiredLevel(): string
    {
        return $this->requiredLevel;
    }

    /**
     * Set the value of RequiredLevel
     * 
     * @param string $requiredLevel
     * @return self
     */
    public function setRequiredLevel(string $requiredLevel): self
    {
        $this->requiredLevel = $requiredLevel;
        return $this;
    }

    // Méthodes
    /**
     * Add a new content in $programContent
     *
     * @param string $content
     * @return self
     */
    public function addToProgramContent(string $content): self
    {
        array_push($this->programContent, $content);
        return $this;
    }

}
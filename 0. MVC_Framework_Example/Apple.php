<?php


class Apple
{//Base Model Class

    private $id;
    private $name;
    private $age;

    /**
     * Apple constructor.
     */
    public function __construct()
    {
        $this->id = NULL;
        $this->name = NULL;
        $this->age = NULL;
    }

    /**
     * @return null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param null $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param null $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return null
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param null $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

}
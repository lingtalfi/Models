<?php


namespace Models\AdminSidebarMenu\Lee\Objects;


class Section
{

    private $items;
    private $name;
    private $label;

    public function __construct()
    {
        $this->items = [];
    }

    /**
     * @return array
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getLabel()
    {
        return $this->label;
    }

    //--------------------------------------------
    //
    //--------------------------------------------

    public function setItems($items)
    {
        $this->items = $items;
        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }


    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }


}
<?php


namespace Models\AdminSidebarMenu\Lee\Objects;


class Section
{

    /**
     * @var Item[]
     */
    private $items;
    private $name;
    private $label;

    public function __construct()
    {
        $this->items = [];
    }

    public static function create()
    {
        return new static();
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

    public function addItem(Item $item)
    {
        $this->items[] = $item;
        return $this;
    }

    /**
     * This might remove more than one item,
     * because in this implementation, it's possible
     * to have multiple items with the same name.
     */
    public function removeItem($name)
    {
        foreach ($this->items as $k => $item) {
            if ($name === $item->getName()) {
                unset($this->items[$k]);
            }
        }
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


    public function toArray()
    {

        $items = [];
        foreach ($this->items as $item) {
            $items[] = $item->toArray();
        }

        return [
            'name' => $this->name,
            'label' => $this->label,
            'items' => $items,
        ];
    }
}
<?php


namespace Models\AdminSidebarMenu\Lee\Objects;


class Item
{

    private $label;
    private $name;
    private $icon;
    private $link;

    /**
     * @var Badge
     */
    private $badge;
    /**
     * @var Item[]
     */
    private $items;


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

    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setIcon($icon)
    {
        $this->icon = $icon;
        return $this;
    }

    public function setLink($link)
    {
        $this->link = $link;
        return $this;
    }

    public function setBadge(Badge $badge)
    {
        $this->badge = $badge;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLabel()
    {
        return $this->label;
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
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @return Badge
     */
    public function getBadge()
    {
        return $this->badge;
    }


    public function toArray()
    {

        $items = [];
        foreach ($this->items as $item) {
            $items[] = $item->toArray();
        }

        $badge = null;
        if (null !== $this->badge) {
            $badge = $this->badge->toArray();
        }

        return [
            'name' => $this->name,
            'label' => $this->label,
            'icon' => $this->icon,
            'link' => $this->link,
            'badge' => $badge,
            'items' => $items,
        ];
    }

}
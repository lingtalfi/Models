<?php


namespace Models\AdminSidebarMenu\Lee\Objects;


class Item
{

    private $label;
    private $name;
    private $icon;
    private $link;
    private $badge;
    private $items;


    public function __construct()
    {
        $this->items = [];
    }
}
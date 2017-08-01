<?php


namespace Models\AdminSidebarMenu\Lee;


use Models\AdminSidebarMenu\AdminSidebarMenuModel;
use Models\AdminSidebarMenu\Lee\Objects\Section;

/**
 * Implementation recommended for small menus (10-30 items like the user account menu of an e-commerce
 * for instance).
 */
class LeeAdminSidebarMenuModel extends AdminSidebarMenuModel
{

    /**
     * @var Section[]
     */
    private $sections;


    public function __construct()
    {
        parent::__construct();
        $this->sections = [];
    }


    public function addSection(Section $section)
    {
        $this->sections[] = $section;
        return $this;
    }

    /**
     * This might remove more than one section,
     * because in this implementation, it's possible
     * to have multiple sections with the same name.
     */
    public function removeSection($name)
    {
        foreach ($this->sections as $k => $section) {
            if ($name === $section->getName()) {
                unset($this->sections[$k]);
            }
        }
        return $this;
    }

}
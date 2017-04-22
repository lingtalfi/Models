<?php

namespace Models\AdminSidebarMenu;


use Models\Model\AbstractModel;


/**
 * The AdminSidebarMenu model is an array which contains the following:
 *
 * - sections:
 * ----- -
 * --------- label: string, the label of the section
 * --------- items: array, contains the section items
 * ------------- -
 * ----------------- label: string, the label of the item
 * ----------------- link: string, a string used to generate the uri of the link
 * ----------------- icon: string|null, a string representing the item icon, or null if there is no icon
 * ----------------- items: array|null, an array of children items, or null if there is no children
 *
 *
 *
 * Note: this class is just used to hold the comment above, there is actually no implementation as for now,
 * since it's a very simple array.
 *
 *
 *
 */
abstract class AdminSidebarMenuModel extends AbstractModel
{

}
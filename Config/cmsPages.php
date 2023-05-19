<?php

return [
  'admin' => [
    "menus" => [
      "permission" => "menu.menus.manage",
      "activated" => true,
      "path" => "/menus",
      "name" => "qmenu.admin.menus",
      "crud" => "qmenu/_crud/menus",
      "page" => "qcrud/_pages/admin/crudPage",
      "layout" => "qsite/_layouts/master.vue",
      "title" => "menu.cms.sidebar.adminMenus",
      "icon" => "fas fa-stream",
      "authenticated" => true
    ],
    "menusShow" => [
      "permission" => "menu.menus.edit",
      "activated" => true,
      "path" => "/menus/menu/:id",
      "name" => "qmenu.admin.menus.show",
      "page" => "qmenu/_pages/admin/menus/show",
      "layout" => "qsite/_layouts/master.vue",
      "title" => "menu.cms.sidebar.adminMenus",
      "icon" => "fas fa-stream",
      "authenticated" => true
    ],
    "menuItemsCreate" => [
      "permission" => null,
      "activated" => true,
      "path" => "/menus/item/:menuId",
      "name" => "qmenu.admin.menu.create",
      "page" => "qmenu/_pages/admin/menuItems/form",
      "layout" => "qsite/_layouts/master.vue",
      "title" => "menu.cms.sidebar.adminMenuItems",
      "icon" => "fas fa-circle",
      "authenticated" => true
    ],
    "menuItemsUpdate" => [
      "permission" => null,
      "activated" => true,
      "path" => "/menus/menu/:menuId/item/:id",
      "name" => "qmenu.admin.menu.update",
      "page" => "qmenu/_pages/admin/menuItems/form",
      "layout" => "qsite/_layouts/master.vue",
      "title" => "menu.cms.sidebar.adminMenuItems",
      "icon" => "fas fa-circle",
      "authenticated" => true
    ]
  ],
  'panel' => [],
  'main' => []
];

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
*/

$route['admin-login']='admin';
$route['admin-login-check']='admin/admin_login_check';
$route['home-page']='home';

//Super Admin area secure Dashboard
$route['dashboard']='Super_admin/index';
$route['logout']='Super_admin/logout';

//ADD CATEGORY
$route['add-category']='Super_admin/add_category';

//SAVE CATEGORY
$route['save-category']='Super_admin/save_category';

//manage category
$route['manage-category']='Super_admin/manage_category';

//unpublished category
$route['unpublish-category/(.+)']='Super_admin/unpublish_category/$1';

//Publish category
$route['publish-category/(.+)']='Super_admin/publish_category/$1';
//delete category
$route['delete-category/(.+)']='Super_admin/delete_category/$1';
//edit category
$route['edit-category/(.+)']='Super_admin/edit_category/$1';
//Update category id hidden
$route['update-category']='Super_admin/update_category';

/* All of Sub category */
$route['add-sub-categroy']='super_admin/add_sub_category';
//save sub category
$route['save-sub-category']='super_admin/save_sub_category';



/* /All of Sub category */

//Add brand
$route['add-brand']="Super_admin/add_brand";

//Manage Brand
$route['manage-brand']='Super_admin/manage_brand';

//Save Brand
$route['save-brand']='Super_admin/save_brand_info';

//unpublished a brand
$route['unpublished-brand/(.+)']='Super_admin/unpublished_brand/$1';

//published a brand
$route['published-brand/(.+)']='Super_admin/published_brand/$1';

//Delete Brand
$route['delete-brand/(.+)']='Super_admin/delete_brand/$1';

//Edit brand param brand_id
$route['edit-brand/(.+)']='super_admin/edit_brand/$1';
//Update Brand
$route['update-brand']='Super_admin/update_brand';

//Add product
$route['add-product']='Super_admin/add_product';

//Save product
$route['save-product']='Super_admin/save_product';
//manage product
$route['manage-product']='Super_admin/manage_product';

//unpublised product
$route['unpublish-product/(.+)']='Super_admin/unpublished_product/$1';

//unpublised product
$route['publish-product/(.+)']='Super_admin/published_product/$1';

//delete product
$route['delete-product/(.+)']='Super_admin/delete_product/$1';

//Edit product
$route['edit-product/(.+)']='Super_admin/edit_product/$1';


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

<?php
/**
 * Presets class
 * generates some presets for different portions of the site.
 */
 
class presets {
  
  var $active = '';

  /**
   * generates the items inside the top navbar
   */
  function GenerateNavbar() {
      global $set, $user;
      $var = array();
      $var[] = array("item" ,
                      array("href" => $set->url."#Services",
                            "name" => "Home",
                            "class" => $this->isActive("home")),
                      "id" => "home");

$var[] = array("item",
                      array("href" => $set->url."#What_We_Offer",
                            "name" => "What we offer",
                            "class" => $this->isActive("What_We_Offer")),
                      "id" => "What_We_Offer");
$var[] = array("item",
                      array("href" => $set->url."#WhoWeAre",
                            "name" => "About Us",
                            "class" => $this->isActive("WhoWeAre")),
                      "id" => "WhoWeAre");




    $var[] = array("item",
                      array("href" => $set->url."/contact.php",
                            "name" => "Contact Us",
                            "class" => $this->isActive("contact us")),
                      "id" => "contact");

     

      
      if($user->group->type == 1)
        $var[] = array("item",
                      array("href" => $set->url."/index1.php",
                            "name" => "Shop Now",
                            "class" => $this->isActive("Shop Now")),
                      "id" => "Shop Now");

      if($user->group->type == 3) // we make it visible for admins only
      $var[] = array("item",
                      array("href" => $set->url."/admin",
                            "name" => "Admin Panel",
                            "class" => $this->isActive("adminpanel")),
                      "id" => "adminpanel");


if($user->group->type == 3) // we make it visible for admins only
 $var[] = array("item",
                      array("href" => $set->url."/users_list.php",
                            "name" => "User List",
                            "class" => $this->isActive("userslist")),
                      "id" => "userslist");
      // keep this always the last one or edit hrader.php:8
  if($user->group->type == 1)
      $var[] = array("dropdown",
                      array(  array("href" => $set->url."/profile.php?u=".$user->data->userid,
                                       "name" => "<i class=\"icon-user\"></i> My Profile",
                                       "class" => 0),
                              array("href" => $set->url."/user.php",
                                       "name" => "<i class=\"icon-cog\"></i> Account settings",
                                       "class" => 0),
                              

                              array("href" => $set->url."/logout.php",
                                         "name" => "LogOut",
                                         "class" => 0),
                          ),
                      "class" => 0,
                      "style" => 0,
                      "name" => $user->filter->username,
                      "id" => "user");

if($user->group->type == 3)
      $var[] = array("dropdown",
                      array(  array("href" => $set->url."/profile.php?u=".$user->data->userid,
                                       "name" => "<i class=\"icon-user\"></i> My Profile",
                                       "class" => 0),
                              array("href" => $set->url."/user.php",
                                       "name" => "<i class=\"icon-cog\"></i> Account settings",
                                       "class" => 0),
                              array("href" => $set->url."/privacy.php",
                                       "name" => "<i class=\"icon-lock\"></i> Privacy settings",
                                       "class" => 0),

                              array("href" => $set->url."/logout.php",
                                         "name" => "LogOut",
                                         "class" => 0),
                          ),
                      "class" => 0,
                      "style" => 0,
                      "name" => $user->filter->username,
                      "id" => "user");




          

      return $var;
  }

  function setActive($id) {
    $this->active = $id;
  }

  function isActive($id) {
    if($id == $this->active)
      return "active";
    return 0;
  }

}

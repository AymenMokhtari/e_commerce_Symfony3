<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Ecommerce\EcommerceBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class Users extends BaseUser

{

 /**

 * @ORM\Id

 * @ORM\Column(type="integer")

 * @ORM\GeneratedValue(strategy="AUTO")

 */

 protected $id;

 public function __construct()

 {

 parent::__construct();

 // your own logic

 }

}

?>
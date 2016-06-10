<?php
namespace Main\loginBundle\Modals;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Login
{
    private $password;
    private $username;
    function getPassword() {
        return $this->password;
    }

    function getUsername() {
        return $this->username;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setUsername($username) {
        $this->username = $username;
    }


     
}

?>
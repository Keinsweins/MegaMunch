<?php

class User {
    var $id;
    var $username = "";
    var $isSignedIn = false;

    function isSignedIn() {
        return $this->isSignedIn;
    }

    function signIn() {
        if (isSignedIn()) {
            return;
        }
    }
}

?>
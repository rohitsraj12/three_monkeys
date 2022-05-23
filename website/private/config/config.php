<?php

    function base_url(){
        if($_SERVER['SERVER_NAME'] == "localhost"){
            $url = "http://localhost/gopalan_git/three_monkeys/website/";
        } else {
            $url = "https://crm.gopalancoworks.com/";
        }
        return $url;
    }


?>
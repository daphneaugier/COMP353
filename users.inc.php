<?php

function getUserMail($id){

    $sql = "SELECT EMAIL_ID from users WHERE user_id='$id'";
    $result = my_query($sql);
    $return = $result->fetch();

    return $return[0];
}

function getUserPassword($id){

    $sql = "SELECT user_password from users WHERE user_id='$id'";
    $result = my_query($sql);
    $return = $result->fetch();

    return $return[0];
}
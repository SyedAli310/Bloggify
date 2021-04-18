<?php

function validatePost($post){

    $errors=array();
    $existingPost=selectOne('posts',['title'=>$post['title']]);
    if(empty($post['title'])){
        array_push($errors,'Title is required.');
    }
    else if(empty($post['body'])){
        array_push($errors,'Body is required.');
    }
    else if($existingPost){
        array_push($errors,'A similar post already exists.');
    }

    return $errors;
}
<?php

require_once "db.inc.php";
require_once "functions.inc.php";
require_once "validatePost.php";

$table='posts';

$posts=selectAll($table);
if(isset($_SESSION['username'])){
    $user_posts=selectAll($table,['userId'=>$_SESSION["username"]]);
}
$errors=array();

$id='';
$title='';
$body='';
$published='';


if(isset($_GET['id'])){

    $post= selectOne($table,['id'=>$_GET['id']]);

    $id=$post['id'];
    $title=$post['title'];
    $body=$post['body'];
    $published=$post['published'];
}
if(isset($_GET['delete_id'])){

    $count=delete($table,$_GET['delete_id']);
    if($count){
        $_SESSION['del-msg']="Post successfully deleted.";
    }
    header("location: ./profile.php");
     exit();
}

if(isset($_GET['published']) && isset($_GET['p_id'])){
    session_start();
    $published=$_GET['published'];
    $p_id=$_GET['p_id'];
    $count=update($table,$p_id,['published'=>$published]);
    if($count){
        $_SESSION['upd-msg']="Post publish state changed.";
    }else{
        $_SESSION['upd-msg']="Post publish state change failed.";
    }
    header("location: ../profile.php");
     exit();
}

if(isset($_POST['add-post'])){
    
    $errors=validatePost($_POST);

    if(isset($_FILES['image'])){
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        
        if($file_size > 2097152) {
           array_push($errors,'File size must be under 2 MB');
        }
        
        if(empty($errors)==true) {
           move_uploaded_file($file_tmp,"images/post-images/".$file_name);
        }
     }
   

    if(count($errors)==0){

        unset($_POST['add-post']);
        $_POST['userId']=$_SESSION['username'];
        $_POST['published']=isset($_POST['published']) ? 1 : 0;
        $_POST['body']= htmlentities($_POST['body']);
        $post=create($table,$_POST);
        header("location: ./posts.php");
        exit();
    }
    else{
        $title=$_POST['title'];
        $body=$_POST['body'];
        
    }

}

if(isset($_POST['update-post'])){

    $errors=validatePost($_POST);

    if(isset($_FILES['image'])){
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        
        if($file_size > 2097152) {
           array_push($errors,'File size must be under 2 MB');
        }
        
        if(empty($errors)==true) {
           move_uploaded_file($file_tmp,"images/post-images/".$file_name);
        }
     }
     
     if(count($errors)==0){
            session_start();
            $id=$_POST['id'];
            unset($_POST['update-post'], $_POST['id']);
            $_POST['published']=isset($_POST['published']) ? 1 : 0;
            $_POST['body']= htmlentities($_POST['body']);
            $post=update($table,$id,$_POST);
        if($post){
            $_SESSION['msg']="Post updated successfully.";
        }else{
            echo "Updation failed.";
        }
            header("location: ./profile.php");
            
    }
    else{
        $title=$_POST['title'];
        $body=$_POST['body'];
        
    }


}
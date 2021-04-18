<?php
    include_once 'header.php';    
?>
<?php
    include_once "./includes/addPost.inc.php";
?>

<link rel="stylesheet" href="./css/profile.css">

<title><?php echo $_SESSION['username'] ?></title>

<section class="profile-wrapper container">

<?php if(isset($_SESSION['useruid'])): ?>

<?php if(empty($user_posts)): ?>
    <div class="posts-msg">
        <h1>You have not added any posts yet.</h1>
        <img src="./images/empty-posts.png" alt="empty-error" style="height:200px; width:200px;"> 
    </div>
<?php else: ?>
   
    <div class="table-responsive">
    <?php
            if(isset($_SESSION['msg'])){
                echo "<h4 class='success-msg'>".$_SESSION['msg']."</h4>";
                unset($_SESSION['msg']);
            }
            if(isset($_SESSION['del-msg'])){
                echo "<h4 class='success-msg'>".$_SESSION['del-msg']."</h4>";
                unset($_SESSION['del-msg']); 
            }
            if(isset($_SESSION['upd-msg'])){
                echo "<h4 class='success-msg'>".$_SESSION['upd-msg']."</h4>";
                unset($_SESSION['upd-msg']); 
            }
            
    ?>
     
     

    <table class="blueTable">
        <thead>
            <h1 style="text-align: center;">Your posts</h1>
        </thead>
        <thead>
            <tr>
                <th>Post No.</th>
                <th>Title</th>
                <th>Action</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
    <?php foreach($user_posts as $key=>$post):?>
        <tbody>
            <tr>
                <td><?php echo $post['id'];?></td>
                <td><?php echo substr($post['title'],0,50);?></td>
                <td>
                <?php if($post['published']): ?>
                        <a href="./includes/addPost.inc.php?published=0&p_id=<?php echo $post['id'] ?>" class="buttons">Un-Publish</a>
                        <?php else: ?>
                        <a href="./includes/addPost.inc.php?published=1&p_id=<?php echo $post['id'] ?>" class="buttons">Publish</a>
                        <?php endif; ?>
                </td>
                <td><a class="buttons" href="editPost.php?id=<?php echo $post['id'];?>">Edit</a></td>
                <td><a class="buttons" href="editPost.php?delete_id=<?php echo $post['id'];?>">Delete</a></td>
            </tr>
        </tbody>
    <?php endforeach; ?>
    </table>
    </div>
<?php endif; ?>

<?php else: ?>
   <?php header("location: ./index.php") ?> 
<?php endif; ?>

</section>




<?php
    include_once 'footer.php';
?>
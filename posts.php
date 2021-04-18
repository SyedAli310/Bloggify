<?php
    include_once 'header.php';
?>
<?php
 require_once "./includes/addPost.inc.php";
?>

<link rel="stylesheet" href="./css/posts.css">
<title>Bloggify | Posts</title>

  
     
        
    <section class="main"> 
        
            <?php
                   if(isset($_SESSION["useruid"])){
                    echo " <div class='add-post-btn-container'> <a class='add-post-btn' href='./addPost.php'><i class='fa fa-plus'> </i></a>
                           <a class='add-post-btn' href='#'><i class='fa fa-search'></i> </a>
                           </div>
                           ";
                }//else{
                //   echo "<h4>Join today to share your thoughts with the community.</h4>";
                // }
            ?>
        <br>
        <h1 class="posts-head">  Posts </h1>

 <?php if(!empty($posts)): ?>       

<div class='card-container'>
<?php foreach($posts as $key=>$post):?>
  <div class='card'>
    <!-- <img src='https://source.unsplash.com/600x400/?book'> -->
    <div class="img" style="background: url('https://source.unsplash.com/600x400/?book');"></div>
    <div class='card-body'>
    <span><?php echo $post['userId']?></span>
      <div class='card-text'>
        <h3><?php echo substr($post['title'],0,40)."...";?></h3>
      </div>
      <a>Read More...</a>
      <p><?php echo  $post['createdAt'] ; ?></p>
    </div>
  </div>
  <?php endforeach; ?>
</div>


<?php else: ?>   
  <div class="empty-posts">
    <h1>Nothing to show here yet.</h1>
    <img src="./images/empty-posts.png" alt="empty-error" style="height:200px; width:200px;"> 
</div>
                     
  <?php endif; ?>

    </section>  
            


<?php
    include_once 'footer.php';
    
?>
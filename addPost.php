
<?php
    include_once 'header.php'; 

    include_once "./includes/addPost.inc.php";
?>

<title>Bloggify | Add Post</title>


<link rel="stylesheet" href="./css/posts.css">
<div class="add-post-form-wrapper">
 
 <?php if(isset($_SESSION['useruid'])): ?> 
 
 <?php if(count($errors)>0){

    foreach($errors as $error){
        echo "<div class='modal-bg'>
        <span class='err-modal'>$error<br>
        <button class='err-close'>X</button>
        </span>
        </div>
        ";
    }
    
 }
 ?>
    
    <form class='add-post-form' action='addPost.php' method='POST'  enctype='multipart/form-data'>

            <h1>Add Post</h1>
        
            <input type='text' name='title' value='<?php echo $title ?>' placeholder='Title' >
            <div style="overflow-y:scroll; height:40vh; width:75vw;">
            <textarea name='body' id='body' placeholder='Type content here'><?php echo $body ?></textarea>
            </div>
            <div id="img">
            <input  type='file' name='image'>
            </div>
            <?php if(empty($published)): ?>
            <label>
             <input type='checkbox' name='published'> 
             Publish 
             </label>
             <?php else: ?>
             <label>
             <input type='checkbox' name='published' checked> 
             Publish 
             </label>
             <?php endif; ?>

            <button type='submit' name='add-post' required>Add Post</button>
        

    </form>
   

    <?php else:  ?>
        <h1 class='err-msg'>Please Login to add posts.<br><img src='./images/error-gif.gif'></h1>
        <?php endif; ?>    
</div>
<br><br>

<script src="./js/errorHandler.js"></script>

<!-- <script src="./ckeditor/ckeditor.js"></script> -->
<script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>





<?php
    include_once 'footer.php';
?>
  

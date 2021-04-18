
<?php
    include_once 'header.php'; 

    include_once "./includes/addPost.inc.php";
?>

<title>Bloggify | Edit Post</title>

<link rel="stylesheet" href="./css/posts.css">
<div class="add-post-form-wrapper">
 
 <?php if(isset($_SESSION['useruid'])): ?>
 
 <?php
    if(count($errors)>0){

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
    
    <form class='add-post-form' action='editPost.php' method='POST'  enctype='multipart/form-data'>

            <h1>Edit Post</h1>
    
            <input type='hidden' name='id' value="<?php echo $id; ?>" >

            <input type='text' name='title' value="<?php echo $title; ?>" placeholder='Title' >
        
            <div style="overflow-y:scroll; height:40vh; width:75vw;">
            <textarea name='body' id='body'><?php echo $body ?></textarea>
            </div>
            <div id="img">
            <input  type='file' name='image'>
            </div>

            <?php if(empty($published) && $published == 0): ?>
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

            <button type='submit' name='update-post' required>Update Post</button>
        

    </form>
    
    

    <?php else:  ?>
        <h1 class='err-msg'>Please Login to Edit  posts.<br><img src='./images/error-gif.gif'></h1>
    
    <?php endif; ?>
</div>
<br><br>

<script src="./js/errorHandler.js"></script>

<!-- <script src="./ckeditor/ckeditor.js"></script> -->
<script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>




<?php
    include_once 'footer.php';
?>
  

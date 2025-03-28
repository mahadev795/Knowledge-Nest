<?php

include '../components/connect.php';

if(isset($_COOKIE['tutor_id'])){
   $tutor_id = $_COOKIE['tutor_id'];
}else{
   $tutor_id = '';
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Likes</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body>

<?php include '../components/admin_header.php'; ?>

<section class="likes">

   <h1 class="heading">User Likes</h1>

   <div class="show-likes">
      <?php
         $select_likes = $conn->prepare("SELECT * FROM `likes` WHERE tutor_id = ?");
         $select_likes->execute([$tutor_id]);
         if($select_likes->rowCount() > 0){
            while($fetch_like = $select_likes->fetch(PDO::FETCH_ASSOC)){
               $select_content = $conn->prepare("SELECT * FROM `content` WHERE id = ?");
               $select_content->execute([$fetch_like['content_id']]);
               $fetch_content = $select_content->fetch(PDO::FETCH_ASSOC);
      ?>
      <div class="box" style="<?php if($fetch_like['tutor_id'] == $tutor_id){echo 'order:-1;';} ?>">
         <div class="content"><p><?= $fetch_content['title']; ?> - </p><a href="view_content.php?get_id=<?= $fetch_content['id']; ?>">view content</a></div>
      </div>
      <?php
       }
      }else{
         echo '<p class="empty">No likes added yet!</p>';
      }
      ?>
   </div>

</section>

<?php include '../components/footer.php'; ?>

<script src="../js/admin_script.js"></script>

</body>
</html>
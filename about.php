<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Knowledge Nest empowers learners and educators worldwide. We offer diverse courses, interactive tools, and a
                seamless learning experience to help users achieve their goals. Driven by innovation and a passion for knowledge, we
                connect students with expert tutors, fostering growth, skill development, and lifelong learning opportunities for
                everyone.</p>
         <a href="courses.php" class="inline-btn">our courses</a>
      </div>

   </div>

   <div class="box-container">

      <div class="box">
         <i class="fas fa-graduation-cap"></i>
         <div>
            <h3>+1k</h3>
            <span>online courses</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-user-graduate"></i>
         <div>
            <h3>+25k</h3>
            <span>brilliants students</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-chalkboard-user"></i>
         <div>
            <h3>+5k</h3>
            <span>expert teachers</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-briefcase"></i>
         <div>
            <h3>100%</h3>
            <span>job placement</span>
         </div>
      </div>

   </div>

</section>

<!-- about section ends -->

 <!-- reviews section starts -->

   <section class="reviews">
    <h1 class="heading">Student's Reviews</h1>
      <div class="box-container">
            <div class="box">
               <p>"The video lectures were engaging and easy to understand."</p>
               <div class="user">
                <img src="images/pic-2.jpg" alt="">
                  <div>
                    <h3>Julie</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                     </div>
                  </div>
               </div>
            </div>

         <div class="box">
            <p>"I love how I can access the course materials anytime, anywhere."</p>
            <div class="user">
                <img src="images/pic-3.jpg" alt="">
                <div>
                    <h3>Parker</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="box">
            <p>"The discussion forums are a great way to get different perspectives on the topic."</p>
            <div class="user">
                <img src="images/pic-4.jpg" alt="">
                <div>
                    <h3>Stewart</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="box">
            <p>"The platform is very user-friendly and easy to navigate."</p>
            <div class="user">
                <img src="images/pic-5.jpg" alt="">
                <div>
                    <h3>Katherine</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="box">
            <p>"The instructor's explanations are clear and helpful."</p>
            <div class="user">
                <img src="images/pic-6.jpg" alt="">
                <div>
                    <h3>Samuel</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="box">
            <p>"This website is a great resource for additional learning beyond the classroom."</p>
            <div class="user">
                <img src="images/pic-7.jpg" alt="">
                  <div>
                    <h3>Rosa</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                     </div>
                  </div>
            </div>
        </div>
      </div>
   </section>
<!-- reviews section ends -->

<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>
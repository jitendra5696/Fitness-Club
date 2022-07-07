<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Fitness Club</title>
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <meta content="Free Website Template" name="keywords">
      <meta content="Free Website Template" name="description">
      <!-- Favicon -->
      <link href="<?= base_url('assets/frontend'); ?>/img/favicon.ico" rel="icon">
      <!-- Font Awesome -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
      <!-- Flaticon Font -->
      <link href="<?= base_url('assets/frontend'); ?>/lib/flaticon/font/flaticon.css" rel="stylesheet">
      <!-- Customized Bootstrap Stylesheet -->
      <link href="<?= base_url('assets/frontend'); ?>/css/style.min.css" rel="stylesheet">
      <link href="<?= base_url('assets/frontend'); ?>/css/style.css" rel="stylesheet">
      <link rel="shortcut icon" href="<?= base_url('assets/backend'); ?>/images/favicone-1.png"  sizes="32x32"/>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:weight@100;200;300;400;500;600;700;800&display=swap">
      <style media="screen">
         body{
         background-color:#545454;
         font-family: "Poppins", sans-serif;
         font-weight: 300;
         }
         .h-custom{
         height:100vh;
         }
         .container{
         height: auto;
         }
         .card{
         width: 380px;
         border: none;
         border-radius: 15px;
         padding: 8px;
         background-color: #fff;
         position: relative;
         height: auto;
         }
         .stats2{
           margin-right: 30px;
         }
         .stats3{
           margin-right: 15px;
         }
         .upper{
         height: auto;
         }
         .upper img{
         width: 100%;
         border-top-left-radius: 10px;
         border-top-right-radius: 10px;
         }
         .user{
         position: relative;
         }
         .profile img{
         height: 85px;
         width: 80px;
         margin-top:2px;
         }
         .profile{
         position: absolute;
         top:-50px;
         left: 38%;
         height: auto;
         width: 90px;
         border:3px solid #fff;
         border-radius: 50%;
         }
         .follow{
         background: red;
         border-radius: 15px;
         padding-left: 20px;
         padding-right: 20px;
         height: auto;
         color:white;
         }
         .follow:hover{
         background-color: white;
         border: 1px solid red;
         color:red;
         }
         .stats span{
         font-size: 15px;
         }
         @media (min-width: 992px) {
         .card{
         top:6rem;
         }
         /*.h-custom{*/
         /*  height:auto;*/
         /*}*/
         }
         @media (max-width: 480px) {
         .h-custom{
         height:auto;
         }
         .card{
         margin: 120px auto;
         }
         }
      </style>
   </head>
   <body class="bg-white">
      <!-- Navbar Start -->
      <div class="container-fluid p-0 nav-bar">
         <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="<?= base_url('home/index'); ?>" class="navbar-brand text-center">
               <h1 class="m-0 display-4 font-weight-bold text-uppercase text-white">Fitness Club</h1>
               <span class="m-0 font-weight-bold text-white">Home / Profile</span>
            </a>
         </nav>
      </div>
      <section class="h-custom" style="background-color: #293233;">
         <div class="container d-flex justify-content-center align-items-center">
            <div class="card">
               <div class="upper">
                  <img src="<?= base_url('assets/frontend'); ?>/img/3489281.jpg" class="img-fluid">
               </div>
               <div class="user text-center">
                  <div class="profile">
                     <img src="<?= base_url('assets/backend/images/'.session()->get('file')); ?>" class="rounded-circle" width="80">
                  </div>
               </div>
               <div class="mt-5 text-center">
                  <h4 class="mb-0"><?= session()->get('name'); ?></h4>
                  <span class="text-muted mb-2"><?= session()->get('gender'); ?></span>, <span class="text-muted  mb-2"><?= session()->get('age'); ?></span>
                  <div class="mt-3">
                     <a href="<?= base_url('home/edit_member/');  ?>"><button class="btn btn-sm follow font-weight-bold text-uppercase">Edit</button></a>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mt-4">
                     <div class="stats">
                        <h6 class="mb-0">Batch</h6>
                        <span><?= session()->get('batch'); ?></span>
                     </div>
                     <div class="stats2">
                        <h6 class="mb-0">Membership Expires at</h6>
                        <span><?= date("j M Y", (strtotime(session()->get('expire_date')))); ?></span>
                     </div>
                     <div class="stats3">
                        <h6 class="mb-0">Fees</h6>
                        <span><?= session()->get('fees'); ?></span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

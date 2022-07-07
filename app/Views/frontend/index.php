<!-- Carousel Start -->
   <div class="container-fluid p-0">
       <div id="blog-carousel" class="carousel slide" data-bs-ride="carousel">
           <div class="carousel-inner">
               <div class="carousel-item active">
                   <img class="w-100" src="<?= base_url('assets/frontend'); ?>/img/carousel-1.jpg" alt="Image">
                   <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                       <h3 class="text-primary text-capitalize m-0">Gym & Fitness Center</h3>
                       <h2 class="display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize">Best Gym In Town</h2>
                       <a href="<?= base_url('home/membership'); ?>" class="btn btn-lg btn-outline-light mt-3 mt-md-5 py-md-3 px-md-5">Join Us Now</a>
                   </div>
               </div>
               <div class="carousel-item">
                   <img class="w-100" src="<?= base_url('assets/frontend'); ?>/img/blog-1.jpg" alt="Image">
                   <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                       <h3 class="text-primary text-capitalize m-0">Gym & Fitness Center</h3>
                       <h2 class="display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize">Get Body In Shape</h2>
                       <a href="<?= base_url('home/membership'); ?>" class="btn btn-lg btn-outline-light mt-3 mt-md-5 py-md-3 px-md-5">Join Us Now</a>
                   </div>
               </div>
               <div class="carousel-item">
                   <img class="w-100" src="<?= base_url('assets/frontend'); ?>/img/blog-2.jpg" alt="Image">
                   <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                       <h3 class="text-primary text-capitalize m-0">Gym & Fitness Center</h3>
                       <h2 class="display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize">Get Body In Shape</h2>
                       <a href="<?= base_url('home/membership'); ?>" class="btn btn-lg btn-outline-light mt-3 mt-md-5 py-md-3 px-md-5">Join Us Now</a>
                   </div>
               </div>
           </div>
           <a class="carousel-control-prev" data-bs-target="#blog-carousel" href="#blog-carousel" data-bs-ride="prev">
               <span class="carousel-control-prev-icon"></span>
           </a>
           <a class="carousel-control-next" data-bs-target="#blog-carousel" href="#blog-carousel" data-bs-ride="next">
               <span class="carousel-control-next-icon"></span>
           </a>
       </div>
   </div>
   <!-- Carousel End -->


   <!-- Gym Class Start -->
   <div class="container gym-class mb-5">
       <div class="row px-3">
           <div class="col-md-6 p-0">
               <div class="gym-class-box d-flex flex-column align-items-end justify-content-center bg-primary text-right text-white py-5 px-5">
                   <i class="flaticon-six-pack"></i>
                   <h3 class="display-4 mb-3 text-white font-weight-bold">Body Building</h3>
                   <p>
                       Lorem justo tempor sit aliquyam invidunt, amet vero ea dolor ipsum ut diam sit dolores, dolor
                       sit eos sea sanctus erat lorem nonumy sanctus takimata. Kasd amet sit sadipscing at..
                   </p>
                   <a href="<?php echo base_url('home/membership'); ?>" class="btn btn-lg btn-outline-light mt-4 px-4">Join Now</a>
               </div>
           </div>
           <div class="col-md-6 p-0">
               <div class="gym-class-box d-flex flex-column align-items-start justify-content-center bg-secondary text-left text-white py-5 px-5">
                   <i class="flaticon-bodybuilding"></i>
                   <h3 class="display-4 mb-3 text-white font-weight-bold">Muscle Building</h3>
                   <p>
                       Lorem justo tempor sit aliquyam invidunt, amet vero ea dolor ipsum ut diam sit dolores, dolor
                       sit eos sea sanctus erat lorem nonumy sanctus takimata. Kasd amet sit sadipscing at..
                   </p>
                   <a href="<?= base_url('home/membership'); ?>" class="btn btn-lg btn-outline-light mt-4 px-4">Join Now</a>
               </div>
           </div>
       </div>
   </div>
   <!-- Gym Class End -->


   <!-- About Start -->
   <div class="container py-5" id="about">
       <div class="row align-items-center">
           <div class="col-lg-6">
               <img class="img-fluid mb-4 mb-lg-0" src="<?= base_url('assets/frontend'); ?>/img/about.jpg" alt="Image">
           </div>
           <div class="col-lg-6">
               <h2 class="display-4 font-weight-bold mb-4">10 Years Experience</h2>
               <p>Labore vero lorem eos sed aliquy ipsum aliquy sed. Vero dolore dolore takima ipsum lorem rebum</p>
               <div class="row py-2">
                   <div class="col-sm-6">
                       <i class="flaticon-barbell display-2 text-primary"></i>
                       <h4 class="font-weight-bold">Certified GYM Center</h4>
                       <p>Ipsum sanctu dolor ipsum dolore sit et kasd duo</p>
                   </div>
                   <div class="col-sm-6">
                       <i class="flaticon-medal display-2 text-primary"></i>
                       <h4 class="font-weight-bold">Award Winning</h4>
                       <p>Ipsum sanctu dolor ipsum dolore sit et kasd duo</p>
                   </div>
               </div>
               <a href="<?= base_url('home/amenities'); ?>" class="btn btn-lg px-4 btn-outline-primary">Learn More</a>
           </div>
       </div>
   </div>
   <!-- About End -->


   <!-- Features Start -->
   <div class="container-fluid my-5">
       <div class="row">
           <div class="col-lg-4 p-0">
               <div class="d-flex align-items-center bg-secondary text-white px-5" style="min-height: 300px;">
                   <i class="flaticon-training display-3 text-primary mr-3"></i>
                   <div class="">
                       <h2 class="text-white mb-3">Progression</h2>
                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu suscipit orci velit id libero
                       </p>
                   </div>
               </div>
           </div>
           <div class="col-lg-4 p-0">
               <div class="d-flex align-items-center bg-primary text-white px-5" style="min-height: 300px;">
                   <i class="flaticon-weightlifting display-3 text-secondary mr-3"></i>
                   <div class="">
                       <h2 class="text-white mb-3">Workout</h2>
                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu suscipit orci velit id libero
                       </p>
                   </div>
               </div>
           </div>
           <div class="col-lg-4 p-0">
               <div class="d-flex align-items-center bg-secondary text-white px-5" style="min-height: 300px;">
                   <i class="flaticon-treadmill display-3 text-primary mr-3"></i>
                   <div class="">
                       <h2 class="text-white mb-3">Nutrition</h2>
                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu suscipit orci velit id libero
                       </p>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- Features End -->


   <!-- GYM Feature Start -->
   <div class="container feature pt-5">
       <div class="d-flex flex-column text-center mb-5">
           <h4 class="text-primary font-weight-bold">Why Choose Us?</h4>
           <h4 class="display-4 font-weight-bold">Benifits of Joining Our GYM</h4>
       </div>
       <div class="row">
           <div class="col-md-6 mb-5">
               <div class="row align-items-center">
                   <div class="col-sm-5">
                       <img class="img-fluid mb-3 mb-sm-0" src="<?= base_url('assets/frontend'); ?>/img/feature-1.jpg" alt="Image">
                       <i class="flaticon-barbell"></i>
                   </div>
                   <div class="col-sm-7">
                       <h4 class="font-weight-bold">Videos Instruction</h4>
                       <p>Sit lorem ipsum et diam elitr est dolor sed duo. Guberg sea et et lorem dolor sed est sit invidunt, dolore tempor diam ipsum takima  erat tempor</p>
                   </div>
               </div>
           </div>
           <div class="col-md-6 mb-5">
               <div class="row align-items-center">
                   <div class="col-sm-5">
                       <img class="img-fluid mb-3 mb-sm-0" src="<?= base_url('assets/frontend'); ?>/img/feature-2.jpg" alt="Image">
                       <i class="flaticon-training"></i>
                   </div>
                   <div class="col-sm-7">
                       <h4 class="font-weight-bold">Training Calendar</h4>
                       <p>Sit lorem ipsum et diam elitr est dolor sed duo. Guberg sea et et lorem dolor sed est sit invidunt, dolore tempor diam ipsum takima  erat tempor</p>
                   </div>
               </div>
           </div>
           <div class="col-md-6 mb-5">
               <div class="row align-items-center">
                   <div class="col-sm-5">
                       <img class="img-fluid mb-3 mb-sm-0" src="<?= base_url('assets/frontend'); ?>/img/feature-3.jpg" alt="Image">
                       <i class="flaticon-trends"></i>
                   </div>
                   <div class="col-sm-7">
                       <h4 class="font-weight-bold">Free Apps & WiFi</h4>
                       <p>Sit lorem ipsum et diam elitr est dolor sed duo. Guberg sea et et lorem dolor sed est sit invidunt, dolore tempor diam ipsum takima  erat tempor</p>
                   </div>
               </div>
           </div>
           <div class="col-md-6 mb-5">
               <div class="row align-items-center">
                   <div class="col-sm-5">
                       <img class="img-fluid mb-3 mb-sm-0" src="<?= base_url('assets/frontend'); ?>/img/feature-4.jpg" alt="Image">
                       <i class="flaticon-support"></i>
                   </div>
                   <div class="col-sm-7">
                       <h4 class="font-weight-bold">Community Support</h4>
                       <p>Sit lorem ipsum et diam elitr est dolor sed duo. Guberg sea et et lorem dolor sed est sit invidunt, dolore tempor diam ipsum takima  erat tempor</p>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- GYM Feature End -->


   <!-- Subscribe Start -->
   <div class="subscribe container-fluid my-5 py-5 ">
       <h4 class="display-4 text-white font-weight-bold mt-5 mb-3 ">Shape Your Body</h4>
       <a href="<?php echo base_url('home/membership'); ?>" class="btn btn-lg btn-outline-light mt-3 mt-md-5 py-md-3  px-md-5">Join Us Now</a>
       <!-- <p class="text-white mb-4">Subscribe and get Our latest article in your inbox</p>
       <form class="form-inline justify-content-center mb-5">
           <div class="input-group">
               <input type="text" class="form-control-lg" placeholder="Your Email">
               <div class="input-group-append">
                   <button class="btn btn-primary" type="submit">Subscribe</button>
               </div>
           </div>
       </form> -->
   </div>
   <!-- Subscribe End -->


   <!-- Class Timetable Start -->
   <div class="container gym-feature py-5" id="schedule">
       <div class="d-flex flex-column text-center mb-5">
           <h4 class="display-4 font-weight-bold">Working Hours and Class Time</h4>
       </div>
       <div class="text-center mb-5">
         <h4 class="text-primary font-weight-bold">Class Timetable</h4>
       </div>
       <div class="tab-class">
           <div class="tab-content">
               <div id="class-all" class="container tab-pane p-0 active">
                   <div class="table-responsive">
                     <table class="table table-bordered table-lg m-0">
                         <thead class="bg-secondary text-white text-center">
                             <tr>
                                 <th>Time</th>
                                 <th>Monday</th>
                                 <th>Tuesday</th>
                                 <th>Wednesday</th>
                                 <th>Thursday</th>
                                 <th>Friday</th>
                                 <th>Saturday</th>
                             </tr>
                         </thead>
                         <tbody class="text-center">
                               <?php foreach ($schedule as $timing => $wday): ?>
                                 <tr>
                                   <th class="align-middle bg-secondary text-white text-center"><?= $timing; ?></th>
                                 <?php foreach (['Monday', 'Tuesday', 'Wednsday', 'Thursday', 'Friday', 'Saturday'] as $day):?>
                                   <td><?php if (isset($wday[$day])): ?>
                                     <?php foreach ($wday[$day] as $exercise => $trainer): ?>
                                       <h5 class="fw-bold"><?= $exercise; ?></h5>
                                       <?= $trainer; ?>
                                     <?php endforeach; ?>
                                     <?php else: ?>
                                       <?= ' ' ?>
                                   <?php endif; ?></td>
                                 <?php endforeach; ?>
                               </tr>
                               <?php endforeach; ?>
                         </tbody>
                     </table>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- Class Timetable End -->

   <!-- Team Start -->
   <div class="container pt-5 team">
       <div class="d-flex flex-column text-center mb-5">
           <h4 class="text-primary font-weight-bold">Our Trainers</h4>
           <h4 class="display-4 font-weight-bold">Meet Our Expert Trainers</h4>
       </div>
       <div class="row">
         <?php foreach ($trainers as $value) { ?>
           <div class="col-lg-3 col-md-6 mb-5">
               <div class="card border-0 bg-secondary text-center text-white">
                   <img class="card-img-top" src="<?= base_url('assets/backend/images/'.$value['img']); ?>" alt="Trainer pic">
                   <div class="card-social d-flex align-items-center justify-content-center">
                       <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-twitter"></i></a>
                       <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-facebook-f"></i></a>
                       <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                       <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-instagram"></i></a>
                   </div>
                   <div class="card-body bg-secondary">
                       <h4 class="card-title text-primary"><?= $value['fullname']; ?></h4>
                       <p class="card-text"><?= $value['specialty']; ?></p>
                   </div>
               </div>
           </div>
        <?php } ?>
       </div>
   </div>
   <!-- Team End -->


   <!-- Testimonial Start -->
   <div class="container-fluid position-relative testimonial my-5">
       <div class="container">
           <div class="row px-3 align-items-center">
               <div class="col-md-6 bg-secondary">
                   <div class="d-flex align-items-center px-3" style="min-height: 450px;">
                       <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                           <ol class="carousel-indicators">
                               <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                               <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                               <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                           </ol>
                           <div class="carousel-inner" role="listbox">
                               <div class="carousel-item active">
                                   <div class="d-flex align-items-center mb-4 text-white">
                                       <img width="80" height="80" class="rounded-circle bg-dark p-2" src="<?= base_url('assets/frontend'); ?>/img/testimonial-1.jpg" alt="Image">
                                       <div class="pl-4">
                                           <h4 class="text-primary">Client Name</h4>
                                           <p class="m-0">Profession</p>
                                       </div>
                                   </div>
                                   <div class="testimonial-text position-relative border bg-dark text-white mb-5 p-4">
                                       Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolores tempor voluptua ipsum sanctus clita
                                   </div>
                               </div>
                               <div class="carousel-item">
                                   <div class="d-flex align-items-center mb-4 text-white">
                                       <img width="80" height="80" class="rounded-circle bg-dark p-2" src="<?= base_url('assets/frontend'); ?>/img/testimonial-2.jpg" alt="Image">
                                       <div class="pl-4">
                                           <h4 class="text-primary">Client Name</h4>
                                           <p class="m-0">Profession</p>
                                       </div>
                                   </div>
                                   <div class="testimonial-text position-relative border bg-dark text-white mb-5 p-4">
                                       Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolores tempor voluptua ipsum sanctus clita
                                   </div>
                               </div>
                               <div class="carousel-item">
                                   <div class="d-flex align-items-center mb-4 text-white">
                                       <img width="80" height="80" class="rounded-circle bg-dark p-2" src="<?= base_url('assets/frontend'); ?>/img/testimonial-3.jpg" alt="Image">
                                       <div class="pl-4">
                                           <h4 class="text-primary">Client Name</h4>
                                           <p class="m-0">Profession</p>
                                       </div>
                                   </div>
                                   <div class="testimonial-text position-relative border bg-dark text-white mb-5 p-4">
                                       Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolores tempor voluptua ipsum sanctus clita
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-md-6">
                   <div class="pl-md-3 d-none d-md-block">
                       <h4 class="text-primary">Testimonial</h4>
                       <h4 class="display-4 mb-4 text-white font-weight-bold">What Our Clients Say?</h4>
                       <p class="m-0 text-white">Vero elitr lorem magna justo magna justo at justo est ipsum sed clita lorem dolor ipsum sed. Lorem sea lorem vero. Sanct dolor clita clita rebum kasd magna erat diam</p>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- Testimonial End -->


   <!-- Blog Start -->
   <div class="container pt-5">
       <div class="d-flex flex-column text-center mb-5">
           <h4 class="text-primary font-weight-bold">Our Blog</h4>
           <h4 class="display-4 font-weight-bold">Latest Article From Blog</h4>
       </div>
       <div class="row">
         <?php foreach ($blogs as $value) { ?>
           <div class="col-lg-4 mb-5 blog-item">
               <div class="text-center"><img class="img-fluid mb-4" src="<?= base_url('assets/backend/images/'.$value['img']); ?>" alt="Image"></div>
               <div class="d-flex align-items-center mb-4">
                   <div class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-primary text-white" style="width: 80px; height: 80px;">
                       <small><?= date("j",strtotime($value['date']))  ?></small>
                       <strong class="text-uppercase m-0 text-white"><?= date("M",strtotime($value['date']));  ?></strong>
                       <small><?= date("Y",strtotime($value['date']));  ?></small>
                   </div>
                   <div class="pl-3">
                       <h4 class="font-weight-bold"><?= $value['title'];  ?></h4>
                       <div class="d-flex">
                           <small class="mr-2 text-muted"><i class="fa fa-user"></i> Admin</small>
                           <small class="mr-2 text-muted"><i class="fa fa-folder"></i> Web Design</small>
                           <small class="mr-2 text-muted"><i class="fa fa-comments"></i> 15 Comments</small>
                       </div>
                   </div>
               </div>
               <p><?= $value['description'];  ?></p>
               <a class="btn btn-outline-primary mt-2 px-3" href="<?= base_url('blogs/read/'.$value['id']);  ?>">Read More <i class="fa fa-angle-right"></i></a>
           </div>
         <?php } ?>
       </div>
   </div>
   <!-- Blog End -->

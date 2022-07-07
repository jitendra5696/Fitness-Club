<!-- Footer Start -->
   <div class="footer container-fluid py-5 px-sm-3 px-md-5 text-white">
       <div class="row pt-5">
           <div class="col-lg-3 col-md-6 mb-5">
               <h4 class="text-primary mb-4">Get In Touch</h4>
               <p><i class="fa fa-map-marker-alt mr-2"></i><?= $detail['address'] ?></p>
               <p><i class="fa fa-phone-alt mr-2"></i><?= $detail['mobile'] ?></p>
               <p><i class="fa fa-envelope mr-2"></i><?= $detail['email'] ?></p>
               <div class="d-flex justify-content-start mt-4">
                   <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-twitter"></i></a>
                   <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-facebook-f"></i></a>
                   <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                   <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-instagram"></i></a>
               </div>
           </div>
           <div class="col-lg-3 col-md-6 mb-5">
               <h4 class="text-primary mb-4">Quick Links</h4>
               <div class="d-flex flex-column justify-content-start">
                   <a class="text-white mb-2" href="<?= base_url('home/index'); ?>"><i class="fa fa-angle-right mr-2"></i>Home</a>
                   <a href="<?= base_url('home/membership'); ?>" class="text-white mb-2"><i class="fa fa-angle-right mr-2"></i>Membership</a>
                   <a class="text-white" href="<?= base_url('home/contact'); ?>"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
               </div>
           </div>
           <div class="col-lg-3 col-md-6 mb-5">
               <h4 class="text-primary mb-4">Popular Links</h4>
               <div class="d-flex flex-column justify-content-start">
                 <a class="text-white mb-2" href="<?= base_url('home/index'); ?>"><i class="fa fa-angle-right mr-2"></i>Home</a>
                 <a href="<?= base_url('home/membership'); ?>" class="text-white mb-2"><i class="fa fa-angle-right mr-2"></i>Membership</a>
                 <a class="text-white" href="<?= base_url('home/contact'); ?>"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
               </div>
           </div>
           <div class="col-lg-3 col-md-6 mb-5">
               <h4 class="text-primary mb-4">Opening Hours</h4>
               <h5 class="text-white">Monday - Saturday</h5>
               <p><?= $detail['open_time'] ?> - <?= $detail['closing_time'] ?></p>
           </div>
       </div>
       <div class="container border-top border-dark pt-5">
           <p class="m-0 text-center text-white">
               &copy; <a class="text-white font-weight-bold" href="#">Fitness Club</a>. All Rights Reserved. Designed by
               <a class="text-white font-weight-bold" href="<?= base_url(); ?>"><?= $detail['name'] ?></a>
           </p>
       </div>
   </div>
   <!-- Footer End -->


   <!-- Back to Top -->
   <a href="#" class="btn btn-outline-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


   <!-- JavaScript Libraries -->
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script type='text/javascript'>var _base_url = "<?=  base_url() ?>"; </script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <!-- Template Javascript -->
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script src="<?= base_url('assets/frontend'); ?>/js/main.js"></script>
   <script src="<?= base_url('assets/frontend'); ?>/js/form-ajax.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.js"></script>

   <script src="<?= base_url('assets/frontend'); ?>/lib/easing/easing.min.js"></script>
   <script src="<?= base_url('assets/frontend'); ?>/lib/waypoints/waypoints.min.js"></script>

   <!-- Contact Javascript File -->
   <script src="<?= base_url('assets/frontend'); ?>/mail/jqBootstrapValidation.min.js"></script>

</body>

</html>

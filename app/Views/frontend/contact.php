<!-- Page Header Start -->
  <div class="container-fluid page-header mb-5">
      <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
          <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Contact Us</h4>
          <div class="d-inline-flex">
              <p class="m-0 text-white"><a class="text-white" href="<?= base_url('home/index'); ?>">Home</a></p>
              <p class="m-0 text-white px-2">/</p>
              <p class="m-0 text-white"><a class="text-white" href="<?= base_url('home/contact'); ?>">Contact us</a></p>
          </div>
      </div>
  </div>
  <!-- Page Header End -->

  <!-- Contact Start -->
  <div class="container pt-5">
      <div class="d-flex flex-column text-center mb-5">
          <h4 class="text-primary font-weight-bold">Get In Touch</h4>
          <h4 class="display-4 font-weight-bold">Email Us For Any Query</h4>
      </div>
      <div class="row px-3 pb-2">
          <div class="col-sm-4 text-center mb-3">
              <i class="fa fa-2x fa-map-marker-alt mb-3 text-primary"></i>
              <h4 class="font-weight-bold">Address</h4>
              <p>123 Street, New York, USA</p>
          </div>
          <div class="col-sm-4 text-center mb-3">
              <i class="fa fa-2x fa-phone-alt mb-3 text-primary"></i>
              <h4 class="font-weight-bold">Phone</h4>
              <p>+012 345 6789</p>
          </div>
          <div class="col-sm-4 text-center mb-3">
              <i class="far fa-2x fa-envelope mb-3 text-primary"></i>
              <h4 class="font-weight-bold">Email</h4>
              <p>info@example.com</p>
          </div>
      </div>
      <div class="row">
          <div class="col-md-6 pb-5">
              <iframe style="width: 100%; height: 392px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119981.26415139184!2d73.73343991924415!3d19.99111062124111!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddd290b09914b3%3A0xcb07845d9d28215c!2sNashik%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1654505026641!5m2!1sen!2sin" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
          <div class="col-md-6 pb-5">
              <div class="contact-form">
                <?php if(!empty(session()->getTempdata('invalid'))){ ?>
                  <div class="text-danger"><?= session()->getTempdata('invalid'); ?></div>
                <?php } ?>
                <form id="contactForm" action="" method="post">
                      <div class="control-group">
                          <input type="text" class="form-control" id="name" name="fullname" placeholder="Your Name"/>
                          <p class="text-danger"><?php if(isset($form_error) && $form_error->hasError('fullname')){ echo $form_error->getError('fullname'); }  ?></p>
                      </div>
                      <div class="control-group">
                          <input type="email" class="form-control" id="email" name="email" placeholder="Your Email"/>
                          <p class="text-danger" id="invalid_email"><?php if(isset($form_error) && $form_error->hasError('email')){ echo $form_error->getError('email'); }  ?></p>
                      </div>
                      <div class="control-group">
                          <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject"/>
                          <p class="text-danger"><?php if(isset($form_error) && $form_error->hasError('subject')){ echo $form_error->getError('subject'); }  ?></p>
                      </div>
                      <div class="control-group">
                          <textarea class="form-control" rows="6" id="message" name="message" placeholder="Message"></textarea>
                          <p class="text-danger"><?php if(isset($form_error) && $form_error->hasError('message')){ echo $form_error->getError('message'); }  ?></p>
                      </div>
                      <div>
                          <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Send Message</button>
                      </div>
                  </form>
              </div>
          </div>
        </div>
      </div>
  <!-- Contact End -->

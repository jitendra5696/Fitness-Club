<div class="main-panel">
       <div class="content-wrapper">
          <div class="row">
             <div class="col-md-10 offset-md-1 grid-margin stretch-card">
               <div class="card">
                 <div class="card-body">
                   <h4 class="card-title text-center">Weekly Schedule Management</h4>
                   <?php if (!empty(session()->getTempdata('added'))) { ?>
                   <div class="alert alert-success text-center"><?= session()->getTempdata('added'); ?></div>
                   <?php  }  ?>
                   <?php if (!empty(session()->getTempdata('existing'))) { ?>
                   <div class="alert alert-danger text-center"><?= session()->getTempdata('existing'); ?></div>
                   <?php  }  ?>
                   <form class="forms-sample" method="post" id="add_sch">
                     <div class="form-group">
                       <label for="exampleInputEmail3">Week-Day</label>
                       <select class="form-control" name="day" style="color: white;">
                           <option value="" style="color: white;">Select any Day here</option>
                           <option value="Monday" style="color: white;">Monday</option>
                           <option value="Tuesday" style="color: white;">Tuesday</option>
                           <option value="Wednsday" style="color: white;">Wednsday</option>
                           <option value="Thursday" style="color: white;">Thursday</option>
                           <option value="Friday" style="color: white;">Friday</option>
                           <option value="Saturday" style="color: white;">Saturday</option>
                       </select>
                     </div>
                     <div class="text-danger mb-3"><?php if(isset($form_error) && $form_error->hasError('day')){ echo $form_error->getError('day'); } ?></div>
                     <div class="form-group">
                       <label for="exampleInputEmail3">Time-Slot</label>
                       <select class="form-control" name="timing" style="color: white;">
                           <option value="" style="color: white;">Select any time-slot here</option>
                           <option value="6.00 am to 8.00 am" style="color: white;">6.00 am - 8.00 am</option>
                           <option value="8.00 am to 10.00 am" style="color: white;">8.00 am - 10.00 am</option>
                           <option value="10.00 am to 12.00 pm" style="color: white;">10.00 am - 12.00 pm</option>
                           <option value="12.00 pm to 2.00 pm" style="color: white;">12.00 pm - 2.00 pm</option>
                           <option value="6.00 pm to 8.00 pm" style="color: white;">6.00 pm - 8.00 pm</option>
                           <option value="8.00 pm to 10.00 pm" style="color: white;">8.00 pm - 10.00 pm</option>
                       </select>
                     </div>
                  <div class="text-danger mb-3"><?php if(isset($form_error) && $form_error->hasError('timing')){ echo $form_error->getError('timing'); } ?></div>
                     <div class="form-group">
                       <label for="exampleInputEmail3">Exercise</label>
                       <select class="form-control" name="exercise" style="color: white;">
                           <option value="" style="color: white;">Select any Exercise here</option>
                           <option value="Cardio" style="color: white;">Cardio</option>
                           <option value="Weight-Lifting" style="color: white;">Weight-Lifting</option>
                           <option value="Cross-Fit" style="color: white;">Cross-Fit</option>
                           <option value="Zumba" style="color: white;">Zumba</option>
                       </select>
                     </div>
                    <div class="text-danger mb-3"><?php if(isset($form_error) && $form_error->hasError('exercise')){ echo $form_error->getError('exercise'); } ?></div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Trainers</label>
                      <select class="form-control" name="trainer" style="color: white;">
                          <option value="" style="color: white;">Select any Trainer here</option>
                          <?php foreach ($trainer as $value): ?>
                            <option value="<?php echo $value['fullname']; ?>" style="color: white;"><?php echo $value['fullname']; ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                     <button type="submit" class="btn btn-primary me-2" id="add">Save</button>
                      <a href="<?= base_url('schedule/view_sch');  ?>" class="btn btn-dark">Cancel</a>
                   </form>
                 </div>
               </div>
             </div>
           </div>
         </div>

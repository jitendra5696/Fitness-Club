<div class="main-panel">
       <div class="content-wrapper">
          <div class="row">
             <div class="col-md-10 offset-md-1 grid-margin stretch-card">
               <div class="card">
                 <div class="card-body">
                   <h4 class="card-title text-center">Update Weekly Schedule</h4>
                   <?php if(!empty(session()->getTempdata('blank'))){ ?>
                     <div class="text-danger"><?php echo session()->getTempdata('blank'); ?></div>
                   <?php } ?>
                   <form class="forms-sample" method="post" id="edit_sch" action="<?= base_url('schedule/update_sch'); ?>">
                     <div class="container">
                       <div class="row">
                         <div class="col-md-6 form-group">
                             <label for="exampleInputEmail3">Week-Day</label>
                             <input type="text" class="form-control" name="day" value="<?= $schedule['day'] ?>" readonly style="color: white;">
                         </div>
                         <div class="col-md-6 form-group">
                           <label for="exampleInputEmail3">Time-Slot</label>
                           <input type="text" class="form-control" name="timing" value="<?= $schedule['timing'] ?>" readonly style="color: white;">
                         </div>
                         <div class="col-md-6 form-group">
                       <label for="exampleInputEmail3">Exercise</label>
                       <select class="form-control" name="exercise" style="color: white;">
                           <option value="" style="color: white;">Select any Exercise here</option>
                           <option value="Cardio" <?= $schedule['exercise'] == 'Cardio' ? 'selected' : '' ?> style="color: white;">Cardio</option>
                           <option value="Weight-Lifting" <?= $schedule['exercise'] == 'Weight-Lifting' ? 'selected' : '' ?> style="color: white;">Weight-Lifting</option>
                           <option value="Cross-Fit" <?= $schedule['exercise'] == 'Cross-Fit' ? 'selected' : '' ?> style="color: white;">Cross-Fit</option>
                           <option value="Zumba" <?= $schedule['exercise'] == 'Zumba' ? 'selected' : '' ?> style="color: white;">Zumba</option>
                           <option value="" <?= $schedule['exercise'] == '' ? 'selected' : '' ?> style="color: white;">Blank</option>
                       </select>
                     </div>
                      <div class="col-md-6 form-group">
                       <label for="exampleInputEmail3">Trainers</label>
                       <select class="form-control" name="trainer" style="color: white;">
                         <option value="" style="color: white;">Select any Trainer here</option>
                           <?php foreach ($trainer as $value): ?>
                             <option value="<?= $value['fullname'] ?>" <?= $schedule['trainer'] == $value['fullname'] ? 'selected' : '' ?> style="color: white;"><?php echo $value['fullname'] ?></option>
                         <?php endforeach; ?>
                         <option value="" style="color: white;">None</option>
                       </select>
                     </div>
                     <div class="col-md-6 offset-md-4">
                       <button type="submit" class="btn btn-success me-2 px-3 mt-4" id="update">Update</button>
                        <a href="<?= base_url('schedule/view_sch'); ?>" class="btn btn-dark me-2 px-3 mt-4">Cancel</a>
                        <a href="<?= base_url('schedule/delete_sch/'.$schedule['id']); ?>" id="delete_sch" class="btn btn-danger me-2 px-3 mt-4">Delete</a>
                     </div>
                       </div>
                     </div>
                   </form>
                 </div>
               </div>
             </div>
           </div>
         </div>

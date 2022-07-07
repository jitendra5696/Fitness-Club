<div class="main-panel">
       <div class="content-wrapper">
          <div class="row">
             <div class="col-md-10 offset-md-1 grid-margin stretch-card">
               <div class="card">
                 <div class="card-body">
                   <h4 class="card-title text-center">Search Weekly Schedule</h4>
                   <?php if(!empty(session()->getTempdata('null'))){ ?>
                     <div class="alert alert-danger text-center"><?php echo session()->getTempdata('null'); ?></div>
                   <?php } ?>
                   <form class="forms-sample" method="post" id="search_sch" action="<?= base_url('schedule/edit_sch'); ?>">
                     <div class="container">
                       <div class="row">
                         <div class="col-md-6 form-group">
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
                         <div class="col-md-6 form-group">
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
                     <div class="col-md-5 offset-md-4">
                       <button type="submit" class="btn btn-primary me-2 px-3 mt-4" id="find">Find</button>
                        <a href="<?= base_url('schedule/view_sch'); ?>" class="btn btn-dark me-2 px-3 mt-4">Cancel</a>
                     </div>
                       </div>
                     </div>
                   </form>
                 </div>
               </div>
             </div>
           </div>
         </div>

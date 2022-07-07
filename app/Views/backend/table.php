<div class="main-panel">
     <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="container">
                  <div class="row">
                    <div class="col-md-3 offset-md-5 fw-bold mb-3 display-5">
                      Weekly-Schedule
                    </div>
                    <div class="col-md-1 offset-md-3">
                      <a href="<?= base_url('schedule/search'); ?>" style="color:white!important;text-decoration:none;font-weight:bold;"> <i class="fa-solid fa-pen-to-square text-warning display-5"></i> Edit</a>
                    </div>
                  </div>
                </div>
              <div class="table-responsive">
                <table class="table table-bordered table-lg m-0" id="tbl">
                    <thead class="text-light align-middle text-center">
                        <tr class="">
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
                              <th><?= $timing; ?></th>
                            <?php foreach (['Monday', 'Tuesday', 'Wednsday', 'Thursday', 'Friday', 'Saturday'] as $day):?>
                              <td><?php if (isset($wday[$day])): ?>
                              <?php foreach ($wday[$day] as $exercise => $trainer): ?>
                                  <h5><?= $exercise; ?></h5>
                                  <?= $trainer; ?>
                                <?php endforeach; ?>
                                <?php else: ?>
                                  <?= '--' ?>
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
      </div>

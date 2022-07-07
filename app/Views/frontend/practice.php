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
                    <th>Sunday</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                  <th class="bg-secondary text-white align-middle">6.00am - 8.00am</th>
                  <?php foreach ($i as $abc): ?>
                    <td><h5><?= $abc['exercise'] ?></h5></td>
                  <?php endforeach; ?>
                </tr>
                <tr>
                  <th class="bg-secondary text-white align-middle">8.00am - 10.00am</th>
                  <?php foreach ($ii as $abc): ?>
                    <td><h5><?= $abc['exercise'] ?></h5></td>
                  <?php endforeach; ?>
                </tr>
                <tr>
                  <th class="bg-secondary text-white align-middle">10.00am - 12.00pm</th>
                  <?php foreach ($iii as $abc): ?>
                    <td><h5><?= $abc['exercise'] ?></h5></td>
                  <?php endforeach; ?>
                </tr>
                <tr>
                  <th class="bg-secondary text-white align-middle">12.00pm - 2.00pm</th>
                  <?php foreach ($iv as $abc): ?>
                    <td><h5><?= $abc['exercise'] ?></h5></td>
                  <?php endforeach; ?>
                </tr>
            </tbody>
        </table>
    </div>
</div>

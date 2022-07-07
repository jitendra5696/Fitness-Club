<div class="main-panel">
  <div class="content-wrapper">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title text-center">Send Replay</h4>
          <form class="forms-sample" method="post" action="" id="replay">
            <div class="form-group">
              <label for="exampleInputName1">Contact Id</label>
              <input type="text" class="form-control" id="id" name="id" placeholder="Contact Id" value="<?= $data['id']; ?>" readonly>
            </div>
            <div class="form-group">
              <label for="exampleInputName1">Fullname</label>
              <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Fullname" value="<?= $data['fullname']; ?>" readonly>
            </div>
            <div class="form-group">
              <label for="exampleInputName1">Email</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= $data['email']; ?>" readonly>
            </div>
            <div class="form-group">
              <label for="exampleInputName1">Subject</label>
              <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" value="<?= $data['subject']; ?>" readonly>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Replay</label>
              <textarea class="form-control" id="replay" name="admin_replay" rows="3" cols="50"><?= $data['admin_replay']; ?></textarea>
              </div>
            <button type="submit" class="btn btn-primary me-2 mt-4" id="feedback">Send</button>
            <a href="<?= site_url('contact/enquiries'); ?>" class="btn btn-dark mt-4">Cancel</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

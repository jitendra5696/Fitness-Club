<?php

  namespace App\Models;
  use CodeIgniter\Model;

  class ContactModel extends Model
  {
    protected $table = 'tbl_contact';
    protected $primaryKey = 'id';
    protected $allowedFields = ['fullname', 'email', 'subject', 'message', 'admin_replay'];

  }



 ?>

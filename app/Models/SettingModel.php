<?php

  namespace App\Models;

  use CodeIgniter\Model;

  class SettingModel extends Model
  {
    protected $table = 'tbl_setting';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name','email', 'address', 'mobile', 'open_time', 'closing_time'];
  }

 ?>

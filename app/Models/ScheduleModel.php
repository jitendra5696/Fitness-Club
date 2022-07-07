<?php

  namespace App\Models;
  use CodeIgniter\Model;

  class ScheduleModel extends Model
  {
    protected $table = 'tbl_schedule';
    protected $primaryKey = 'id';
    protected $allowedFields = ['day', 'timing', 'exercise', 'trainer'];
  }




 ?>

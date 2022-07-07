<?php

  namespace App\Models;

  use CodeIgniter\Model;

  class TrainerModel extends Model
  {
    protected $table = 'tbl_trainers';
    protected $primaryKey = 'trainer_id';
    protected $allowedFields = ['fullname','email', 'img', 'gender', 'experience', 'age', 'specialty'];
  }

 ?>

<?php

  namespace App\Models;

  use CodeIgniter\Model;

  class BlogsModel extends Model
  {
    protected $table = 'tbl_blogs';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'img', 'description', 'details', 'date'];
  }

 ?>

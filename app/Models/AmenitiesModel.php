<?php
namespace App\Models;

use CodeIgniter\Model;

class AmenitiesModel extends Model
{
  protected $table = 'tbl_amenities';
  protected $primaryKey = 'id';
  protected $allowedFields = ['heading', 'img', 'description'];
}


 ?>

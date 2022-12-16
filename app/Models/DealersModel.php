<?php

namespace App\Models;

use CodeIgniter\Model;

class DealersModel extends Model
{
    protected $table = 'dealers';
    protected $primarykey = 'id';
    
    protected $allowedFields = ['name', 'phone', 'company'];
    }
    ?>

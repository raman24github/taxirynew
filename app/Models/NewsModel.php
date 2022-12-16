<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = 'users';
   

    protected $allowedFields = ['email', 'password', 'cpassword'];
    public function getNews($email = false)
    {
        if ($email === false) {
            return $this->findAll();
            
        }

        return $this->where(['email' => $email])->first();
    }
}

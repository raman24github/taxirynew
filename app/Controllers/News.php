<?php

namespace App\Controllers;

use App\Models\NewsModel;

class News extends BaseController
{

    public function index()
    {
        $model = model(NewsModel::class);

        $data = [
            'users'  => $model->getNews()
            
        ];
helper(['form']);
        return //view ( 'abc' );
        view('templates/header', $data)
             . view('news/overview');
            //. view('news/nav');
    }

    // ...
    public function view($password = null)
    {
        $model = model(NewsModel::class);

        $data['users'] = $model->getNews($password);

        if (empty($data['users'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: ' . $password);
            //alert('Email already exists');
        }

        $data['email'] = $data['users']['email'];

        return view('templates/header', $data)
            . view('news/view')
            . view('templates/footer');
    }
    public function create()
    {
        $model = model(NewsModel::class);

        if ($this->request->getMethod() === 'post' && $this->validate([
            'email'         => 'required|min_length[8]|max_length[100]|valid_email|is_unique[users.email]',
            'password'      => 'required|min_length[4]|max_length[10]',
            'cpassword'  => 'matches[password]'
        ])) {
            $model->save([
                'email' => $this->request->getPost('email'),
                'password'  => url_title($this->request->getPost('password'), '-', true),
                'cpassword'  => $this->request->getPost('cpassword'),
            ]);

            return view('news/success');
        }

        return view('news/create');
        //view('templates/header', ['title' => 'Register'])
        //. view('news/success')
          
            //. view('templates/footer');
            
            
    }
 public function second(){
   //$session = session();
        $newsModel = new NewsModel();
       // $email = $this->request->getVar('email');
       // $password = $this->request->getVar('password');
        
        $data = $newsModel->where('email', $this->request->getPost('email'))->first();
        
        
        
        if($data){
          //  $email = $data['email'];
           
            if($data['email']==$this->request->getPost('email')){
              /*  $ses_data = [
                    'id' => $data['id'],
                    'email' => $data['email'],
                    'password' => $data['password'],
                    'isLoggedIn' => TRUE
                ];

                $session->set($ses_data);*/
                return view('dealers/second');
            
            }else{
                //$session->setFlashdata('msg', 'Password is incorrect.');
                 return view('templates/header')
             		.view('dealers/second');
            }

        }
        else{
           // $session->setFlashdata('msg', 'Email does not exist.');
            return view('templates/header')
             . view('dealers/second');
    }
}
public function nav()
{
return view('news/nav');
}
}

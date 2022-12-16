<?php
namespace App\Controllers;

use App\Models\DealersModel;
class AddDealer extends BaseController
{

public function store()
{
$dealers = new DealersModel();
$data =[
'name' => $this->request->getVar('name'),
'phone' => $this->request->getVar('phone'),
'company' => $this->request->getVar('company'),
];
$dealers->save($data);

return redirect()->to(base_url('dealers/second'))->with('status','ENTRY SUCCESSFULL!');
}
}

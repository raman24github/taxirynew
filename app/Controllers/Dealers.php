<?php
namespace App\Controllers;

use App\Models\DealersModel;
class Dealers extends BaseController
{
public function index()
{
$dealers = new DealersModel();
$data['dealers'] = $dealers->findAll();
return view('dealers/second', $data);
}
public function create()
{
return view('dealers/create');
}
public function store()
{
$dealers = new DealersModel();
$data =[
'name' => $this->request->getPost('name'),
'phone' => $this->request->getPost('phone'),
'company' => $this->request->getPost('company'),
];
$dealers->insert($data);

return redirect()->to(base_url('dealers/second'))->with('status','Done');
}
public function edit($id)
{
$dealers = new DealersModel();
$data['dealers'] = $dealers->find($id);
return view('dealers/edit', $data);
}
public function update($id)
{
$dealers = new DealersModel();
//$id = $this->request->getVar('id');
$data =[
'name' => $this->request->getVar('name'),
'phone' => $this->request->getVar('phone'),
'company' => $this->request->getVar('company'),
];
$dealers->update($id , $data);
return redirect()->to(base_url('dealers/second'))->with('status','Updated Successfully');
}
public function delete($id)
{
$dealers = new DealersModel();
$dealers->delete($id);

return $this->response->redirect(base_url('dealers/second'));

}}
?>

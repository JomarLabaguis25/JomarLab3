<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function index(): string
    {
        return view('www');
    }
    public function accounts()
    {
        return view('accounts');
    }
    public function notification()
    {
        return view('notification');
    }
    public function connections()
    {
        return view('connections');
    }
   /* public function login()
    {
        return view('login');
    }
    public function forgotpass()
    {
        return view('forgotpass');
    }
    public function register()
    {
        return view('register');
    }*/
    public function crud()
    {
        return view('crud');
    }
    /*public function save()
    {
        $id =$_POST['id'];
        $data = [
            'id' => $this->request->getPost('id'),
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'category' => $this->request->getPost('category'),
            'quantity' => $this->request->getPost('quantity'),
            'price' => $this->request->getPost('price'),
            'image URL' => $this->request->getPost('image '),
        ];
        if($id!= null){
            $this->table_data->set ($data)->where('id', $id)->update();
        }
        $this->table_data->save($data);
        return redirect()->to('/products');
    }*/
    public function save()
    {
        helper(['form']);

        if($this->request->getMethod()=== 'post'){
        $ProductModel = new ProductModel();
        $data =[

            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price' => $this->request->getPost('price'),
            'category' => $this->request->getPost('category'),
            'quantity' => $this->request->getPost('quantity'),
        ];
        $image = $this->request->getFile('image');
        if($image->isValid() && !$image->hasMoved()){
            $image = time() . $image->getClientName();
            $image->move('public/uploads', $imageName);

            $data['image']= $imageName;
        }
        if ($productModel->inser($data)){
            return redirect()->to('/crud')->with('success','Product added successfully');

        }else{
            return redirect()->back()->withInput()->with('error','Products insertion failed');
        }
        }
    }
}

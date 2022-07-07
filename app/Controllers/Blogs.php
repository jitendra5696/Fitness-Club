<?php

namespace App\Controllers;
use App\Models\BlogsModel;
use App\Models\ContactModel;
use App\Models\SettingModel;

class Blogs extends BaseController
{
  public function index()
  {
    $error = [];
    $validation = $this->validate([
      'title' => 'required',
      'date' => 'required',
      'description' => 'required',
      'details' => 'required'
    ]);
    if ($this->request->getMethod() =='post') {
      if ($validation) {
        $blogs = new BlogsModel();
        $title = $this->request->getPost('title');
        $img = $this->request->getFile('img');
        $date = $this->request->getPost('date');
        $date = date('d/m/Y',strtotime($date));
        $description = $this->request->getPost('description');
        $detail = $this->request->getPost('details');

        $newName = $img->getRandomName();
        $img->move('assets/backend/images', $newName);

        $value = [
          'title' => $title,
          'img' => $newName,
          'date' => $date,
          'description' => $description,
          'details' => $detail
        ];

        $blogs->insert($value);
        session()->setTempdata('added', "New Blog has been added Succesfully", 3);
        session()->markAsTempdata('added', 3);

      }else{
        $error['form_error'] = $this->validator;
      }
    }
    $data['user_data'] = session()->get();
    $contact = new ContactModel();
    $data['contact'] = $contact->findAll();
    echo view('backend/header', $data);
    echo view('backend/sidebar', $data);
    echo view('backend/add_blogs', $error);
    echo view('backend/footer');
  }
  public function read($id)
  {
    $blogs = new BlogsModel();
    $blog_data['blog'] = $blogs->where('id', $id)->first();
    $data['user_data'] = session()->get();
    $setting = new SettingModel();
    $data['detail'] = $setting->where('id', 11)->first();

    if(session()->has('fees')) {

      echo view('frontend/header1', $data);
      echo view('frontend/read_blog', $blog_data);
      echo view('frontend/footer', $data);
  }else{
    echo view('frontend/header', $data);
    echo view('frontend/read_blog', $blog_data);
    echo view('frontend/footer', $data);
  }
}
  public function view_blog()
  {
    $blogs = new BlogsModel();
    $view['blog'] = $blogs->findAll();
    $data['user_data'] = session()->get();
    $contact = new ContactModel();
    $data['contact'] = $contact->findAll();
    echo view('backend/header', $data);
    echo view('backend/sidebar', $data);
    echo view('backend/view_blogs', $view);
    echo view('backend/footer');
  }
  public function edit_blog($id)
  {
    $blogs = new BlogsModel();
    $blog['data'] = $blogs->where('id', $id)->first();

    $data['user_data'] = session()->get();
    $contact = new ContactModel();
    $data['contact'] = $contact->findAll();
    echo view('backend/header', $data);
    echo view('backend/sidebar', $data);
    echo view('backend/update_blog', $blog);
    echo view('backend/footer');
  }
  public function update_blog()
  {

    $blogs = new BlogsModel();
    $id = $this->request->getPost('id');
    $title = $this->request->getPost('title');
    $file = $this->request->getFile('img');
    $date = $this->request->getPost('date');
    $date = date('Y/m/d',strtotime($date));
    $description = $this->request->getPost('description');
    $detail = $this->request->getPost('details');

    $value = [
      'id' => $id,
      'title' => $title,
      'date' => $date,
      'description' => $description,
      'details' => $detail
    ];
    if( $file->getBasename() )
   {
     $newName = $file->getRandomName();
     $file->move('assets/backend/images', $newName);

     $value['img'] = $newName;
   }

      $blogs = new BlogsModel();
      $blogs->update($id, $value);
      return redirect()->to('Blogs/view_blog');
  }
  public function delete_blog($id)
  {
    $blogs = new BlogsModel();
    $blogs->where('id', $id)->delete();
    return redirect()->to('Blogs/view_blog');

  }

}


?>

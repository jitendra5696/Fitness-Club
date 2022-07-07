<?php
  namespace App\Controllers;
  use App\Models\MembersModel;
  use App\Models\ContactModel;

  class Members extends BaseController
  {
    public function add_member()
    {
      $error = [];
      $validation = $this->validate([
        'fullname' => 'required',
        'email' => 'required|is_unique[tbl_membership.email]',
        'password' => 'required',
        'mobile' => 'required|integer',
        'age' => 'required|numeric',
        'gender' => 'required',
        'date' => 'required',
        'current_weight' => 'required|numeric',
        'desired_weight' => 'required|numeric',
        'fees' => 'required',
        'batch' => 'required',
        'trainer' => 'required'
      ]);
  if($this->request->getMethod() == 'post'){
    if($validation){
      $member = new MembersModel();
      $fullname = $this->request->getPost('fullname');
      $email = $this->request->getPost('email');
      $password = md5($this->request->getPost('password'));
      $mobile = $this->request->getPost('mobile');
      $age = $this->request->getPost('age');
      $gender = $this->request->getPost('gender');
      $date = $this->request->getPost('date');
      $date = date('Y/m/d', strtotime($date));
      $expire_date = date("Y/m/d", strtotime("+6 months", strtotime($date)));
      $current_weight = $this->request->getPost('current_weight');
      $desired_weight = $this->request->getPost('desired_weight');
      $fees = $this->request->getPost('fees');
      $batch = $this->request->getPost('batch');
      $trainer = $this->request->getPost('trainer');

      $file = $this->request->getFile('img');
      $newFileName = $file->getRandomName();
      $file->move('assets/backend/images', $newFileName);

      $value = [
        'name' => $fullname,
        'email' => $email,
        'password' => $password,
        'mobile' => $mobile,
        'age' => $age,
        'gender' => $gender,
        'date' => $date,
        'expire_date' => $expire_date,
        'current_weight' => $current_weight,
        'desired_weight' => $desired_weight,
        'fees' => $fees,
        'batch' => $batch,
        'trainer' => $trainer,
        'file' => $newFileName
      ];
      $member->insert($value);
      session()->setTempdata('added', 'New Member Added Succesfully', 1);

    }else{
      $error['form_error'] = $this->validator;
    }
  }
      $data['user_data'] = session()->get();
      $contact = new ContactModel();
      $data['contact'] = $contact->findAll();

      echo view('backend/header', $data);
      echo view('backend/sidebar');
      echo view('backend/add_member', $error);
      echo view('backend/footer');
    }

    public function membership()
    {
      $member = new MembersModel();
      $Members_data['memebrs'] = $member->findAll();

      $data['user_data'] = session()->get();
      $contact = new ContactModel();
      $data['contact'] = $contact->findAll();

      echo view('backend/header', $data);
      echo view('backend/sidebar');
      echo view('backend/membership', $Members_data);
      echo view('backend/footer');
    }
    public function check_email()
    {
      $member = new MembersModel();
      $email = $this->request->getPost('email');
      $check = $member->where('email', $email)->first();
      if ($check > 0) {
        return 'false';
      }else{
        echo 'true';
      }
    }
    public function edit_member($id)
    {
      $member = new MembersModel();
      $deatils['members'] = $member->where('id', $id)->first();

      if($this->request->getMethod() =='post'){

      $id = $this->request->getPost('id');
      $fullname = $this->request->getPost('fullname');
      $email = $this->request->getPost('email');
      $mobile = $this->request->getPost('mobile');
      $age = $this->request->getPost('age');
      $gender = $this->request->getPost('gender');
      $date = $this->request->getPost('date');
      $date = date('Y/m/d', strtotime($date));
      $expire_date = $this->request->getPost('expire_date');
      $expire_date = date("Y/m/d", strtotime($expire_date));
      $current_weight = $this->request->getPost('current_weight');
      $desired_weight = $this->request->getPost('desired_weight');
      $fees = $this->request->getPost('fees');
      $batch = $this->request->getPost('batch');
      $trainer = $this->request->getPost('trainer');

      $file = $this->request->getFile('img');

      $value = [
        'name' => $fullname,
        'email' => $email,
        'mobile' => $mobile,
        'age' => $age,
        'gender' => $gender,
        'date' => $date,
        'expire_date' => $expire_date,
        'current_weight' => $current_weight,
        'desired_weight' => $desired_weight,
        'fees' => $fees,
        'batch' => $batch,
        'trainer' => $trainer
      ];
      if( $file->getBasename() )
     {
       $newName = $file->getRandomName();
       $file->move('assets/backend/images', $newName);

       $value['file'] = $newName;
     }

      $member->update($id, $value);
        session()->setTempdata('updated', 'Member Details Updated.....', 1);
        return redirect()->to('members/membership');
      }

      $data['user_data'] = session()->get();
      $contact = new ContactModel();
      $data['contact'] = $contact->findAll();

      echo view('backend/header', $data);
      echo view('backend/sidebar');
      echo view('backend/edit_member', $deatils);
      echo view('backend/footer');
    }

    public function delete($id)
    {
      $member = new MembersModel();
      $member->where('id', $id)->delete();
      return redirect()->to('members/membership');
    }
  }




 ?>

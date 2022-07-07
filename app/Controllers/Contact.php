<?php
  namespace App\Controllers;
  use App\Models\ContactModel;

  class Contact extends BaseController
  {

    public function enquiries()
    {
      $details = new ContactModel();
      $data['contact'] = $details->findAll();

      $data['user_data'] = session()->get();

      echo view('backend/header', $data);
      echo view('backend/sidebar');
      echo view('backend/view_enquiries', $data);
      echo view('backend/footer');
    }
    public function replay($id)
    {
      $details = new ContactModel();

      $contact_data['data'] = $details->where('id', $id)->first();
      $contact = new ContactModel();
      $data['contact'] = $contact->findAll();

      $data['user_data'] = session()->get();
      echo view('backend/header', $data);
      echo view('backend/sidebar');
      echo view('backend/replay', $contact_data);
      echo view('backend/footer');
    }
    public function sent()
    {
      $to = $this->request->getPost('email');
      $subject = $this->request->getPost('subject');
      $message = $this->request->getPost('admin_replay');

      $email = \Config\Services::email();
      $email->setTo($to);
      $email->setFrom('pawarsai74@gmail.com', 'Replay From Admin');
      $email->setSubject($subject);
      $email->setMessage($message);
    if ($email->send()) {
      $details = new ContactModel();

      $id = $this->request->getPost('id');
      $subject = $this->request->getPost('subject');
      $email = $this->request->getPost('email');
      $message = $this->request->getPost('message');
      $admin_replay = $this->request->getPost('admin_replay');


      $values = [
        'id' => $id,
        'subject' => $subject,
        'email' => $email,
        'admin_replay' => $admin_replay
      ];
      print_r($values); die();

      $details = new ContactModel();
      $details->update($id, $values);
      session()->setTempdata('sent', 'Replay has been sent to'.' '.$email, 3);
      return redirect()->to('contact/enquiries');
    }else{
      $data = $email->printDebugger(['headers']);
      print_r($data);
    }

  }

    public function delete($id)
    {
      $contact = new ContactModel();
      $contact->where('id', $id)->delete();

      return redirect()->to('contact/enquiries');
    }
  }




 ?>

<?php
namespace App\Controllers;
use App\Models\AmenitiesModel;
use App\Models\MembersModel;
use App\Models\ContactModel;
use App\Models\TrainerModel;
use App\Models\SettingModel;
use App\Models\BlogsModel;
use App\Models\ScheduleModel;
class Home extends BaseController {
    public function __construct() {
        helper('form', 'url');
    }
    public function index() {
        $trainers = new TrainerModel();
        $details['trainers'] = $trainers->findAll();
        $blog = new BlogsModel();
        $details['blogs'] = $blog->findAll();
        $settings = new SettingModel();
        $data['detail'] = $settings->where('id', 11)->first();
        $date1 = strtotime(date('j M Y'));
        $date2 = strtotime(session()->get('expire_date'));
        $schedule = new ScheduleModel();
        $schedules_data = $schedule->findAll();
        $details['schedule'] = [];
        foreach ($schedules_data as $value) {
            $details['schedule'][$value['timing']][$value['day']][$value['exercise']] = $value['trainer'];
        }
        if (session()->get('fees') == 'Paid' && $date1 <= $date2) {
            echo view('frontend/header1');
            echo view('frontend/index', $details);
            echo view('frontend/footer', $data);
        }else {
            echo view('frontend/header2');
            echo view('frontend/index', $details);
            echo view('frontend/footer', $data);
        }
    }
    public function login() {
        $data = [];
        $validation = $this->validate(['username' => ['rules' => 'required|valid_email|is_not_unique[tbl_membership.email]', 'errors' => ['required' => 'Please Insert your Username', 'valid_email' => 'Unvalid Username', 'is_not_unique' => 'Username not register']], 'pass' => ['rules' => 'required', 'errors' => ['required' => 'Please Insert your Password']]]);
        if ($this->request->getMethod() == 'post') {
            if ($validation) {
                $session = session();
                $membership = new MembersModel();
                $email = $this->request->getPost('username');
                $password = md5($this->request->getPost('pass'));
                $user_details = $membership->where('email', $email)->first();
                // print_r(); die();
                if ($user_details) {
                    $db_password = $user_details['password'];
                    $verify = password_verify($password, $db_password);
                    if ($password == $db_password) {
                        if ($user_details['fees'] == 'Paid') {
                            $date1 = strtotime(date('j M Y'));
                            $date2 = strtotime($user_details['expire_date']);
                            if ($date1 <= $date2) {
                                $sess_data = ['id' => $user_details['id'], 'email' => $user_details['email'], 'name' => $user_details['name'], 'gender' => $user_details['gender'], 'mobile' => $user_details['mobile'], 'file' => $user_details['file'], 'age' => $user_details['age'], 'date' => date('j M Y', strtotime($user_details['date'])), 'expire_date' => date('j M Y', strtotime($user_details['expire_date'])), 'batch' => $user_details['batch'], 'fees' => $user_details['fees']];

                                $session->set($sess_data);
                                return redirect()->to('home/index');

                            }else{
                                $session->setTempdata('wrong', 'Membership Expired.....!!!', 3);
                            }
                        }else{
                            $session->setTempdata('wrong', 'Fees Pending, Not allowed to Log-in.....!!!', 3);
                        }
                    }else{
                        $session->setTempdata('wrong', 'Incorrect Password.....!!!', 3);
                    }
                }
            }else{
                $data['form_error'] = $this->validator;
            }
        }
        echo view('frontend/members_login', $data);
    }
    public function membership() {
        if ($this->request->getMethod() == 'post') {
            if ($this->request->getPost('name') != '') {
                $membership = new MembersModel();
                $name = $this->request->getPost('name');
                $email = $this->request->getPost('email');
                $password = md5($this->request->getPost('password'));
                $mobile = $this->request->getPost('mobile');
                $age = $this->request->getPost('age');
                $date = $this->request->getPost('date');
                $date = date('Y/m/d', strtotime($date));
                $expire_date = date("Y/m/d", strtotime("+6 months", strtotime($date)));
                $gender = $this->request->getPost('gender');
                $current_weight = $this->request->getPost('current_weight');
                $desired_weight = $this->request->getPost('desired_weight');
                $batch = $this->request->getPost('batch');
                $trainer = $this->request->getPost('trainer');
                $value = ['name' => $name, 'email' => $email, 'mobile' => $mobile, 'age' => $age, 'password' => $password, 'date' => $date, 'expire_date' => $expire_date, 'current_weight' => $current_weight, 'desired_weight' => $desired_weight, 'batch' => $batch, 'fees' => 'Pending', 'gender' => $gender, 'trainer' => $trainer];

                $membership->insert($value);
            }
        }
        $settings = new SettingModel();
        $data['detail'] = $settings->where('id', 11)->first();
        echo view('frontend/membership_form');
        echo view('frontend/footer', $data);
    }
    public function contact() {
        $from = $this->request->getPost('email');
        $subject = $this->request->getPost('subject');
        $message = $this->request->getPost('admin_replay');
        $email = \Config\Services::email();
        $email->setTo('pawarsai74@gmail.com');
        $email->setFrom($from, 'User Enquiry');
        $email->setSubject($subject);
        $email->setMessage($message);
        if ($email->send()) {
            $data = [];
            $session = session();
            $validation = $this->validate(['fullname' => 'required', 'email' => 'required|valid_email', 'subject' => 'required']);
            if ($this->request->getMethod() == 'post') {
                if ($validation) {
                    $cmodel = new ContactModel();
                    $name = $this->request->getPost('fullname');
                    $email = $this->request->getPost('email');
                    $subject = $this->request->getPost('subject');
                    $message = $this->request->getPost('message');
                    $value = ['fullname' => $name, 'email' => $email, 'subject' => $subject, 'message' => $message];
                    $cmodel->insert($value);
                } else {
                    $data['form_error'] = $this->validator;
                }
            }
        } else {
            session()->setTempdata('invalid', 'No such Mail-Id exist to send Email', 1);
        }
        $settings = new SettingModel();
        $data['detail'] = $settings->where('id', 11)->first();
        if (session()->has('fees')) {
            echo view('frontend/header1');
            echo view('frontend/contact');
            echo view('frontend/footer', $data);
        } else {
            echo view('frontend/header');
            echo view('frontend/contact', $data);
            echo view('frontend/footer', $data);
        }
    }
    public function amenities() {
        $amenities = new AmenitiesModel();
        $details['data'] = $amenities->findAll();
        $settings = new SettingModel();
        $data['detail'] = $settings->where('id', 11)->first();
        if (session()->has('fees')) {
            echo view('frontend/header1');
            echo view('frontend/amenities', $details);
            echo view('frontend/footer', $data);
        } else {
            echo view('frontend/header');
            echo view('frontend/amenities', $details);
            echo view('frontend/footer', $data);
        }
    }
    public function profile() {
        $membership = new MembersModel();
        $data['member'] = $membership->findAll();
        $settings = new SettingModel();
        $data['detail'] = $settings->where('id', 11)->first();
        echo view('frontend/profile', $data);
        echo view('frontend/footer', $data);
    }
    public function edit_member() {
        $id = session()->get('id');
        $membership = new MembersModel();
        $details['member'] = $membership->where('id', $id)->first();
        $settings = new SettingModel();
        $data['detail'] = $settings->where('id', 11)->first();
        echo view('frontend/edit_member', $details);
        echo view('frontend/footer', $data);
    }
    public function update_member() {
        $id = $this->request->getPost('id');
        $file = $this->request->getFile('file');
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $mobile = $this->request->getPost('mobile');
        $age = $this->request->getPost('age');
        $date = $this->request->getPost('date');
        $date = date('Y/m/d', strtotime($date));
        $expire_date = date('Y/m/d', strtotime("+6 months", strtotime($date)));
        $gender = $this->request->getPost('gender');
        $current_weight = $this->request->getPost('current_weight');
        $desired_weight = $this->request->getPost('desired_weight');
        $batch = $this->request->getPost('batch');
        $fees = $this->request->getPost('fees');
        $trainer = $this->request->getPost('trainer');
        $value = ['name' => $name, 'email' => $email, 'mobile' => $mobile, 'age' => $age, 'date' => $date, 'expire_date' => $expire_date, 'current_weight' => $current_weight, 'desired_weight' => $desired_weight, 'batch' => $batch, 'fees' => $fees, 'gender' => $gender, 'trainer' => $trainer];
        // echo '<pre>';
        // print_r($value);
        // die();
        if ($file->getBasename()) {
            $newName = $file->getRandomName();
            $file->move('assets/backend/images', $newName);
            $value['file'] = $newName;
        }
        session()->set($value);
        $membership = new MembersModel();
        $membership->update($id, $value);
        return redirect()->to('home/profile');
    }
    public function logout() {
        $session = session();
        $session->destroy();
        return redirect()->to('home/index');
    }
}

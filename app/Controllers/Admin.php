<?php
      namespace App\Controllers;
      use App\Models\UserModel;
      use App\Models\SettingModel;
      use App\Models\ContactModel;
      use App\Libraries\Hash;
      use CodeIgniter\I18n\Time;

  class Admin extends BaseController
  {
    public function __construct()
    {
      helper('form', 'url');
    }

      public function index()
    {
      $data = [];
          $validation = $this->validate([
            'email' =>[
              'rules' => 'required|valid_email|is_not_unique[tbl_user.email]',
              'errors' =>[
                'required' => 'Email is required to log-in',
                'valid_email' => 'This Email id is not valid',
                'is_not_unique' => 'Email id is not Registered'
              ]

            ],
            'password' =>[
              'rules' => 'required|min_length[3]|max_length[30]',
              'errors' =>[
                'required' => 'Password is required to log-in',
                'min_length' => 'Password is not Correct',
                'max_length' => 'Password lenght is not more than 8'
              ]

            ]
          ]);

          if ($this->request->getMethod() == 'post') {

            if ($validation) {
                $session = session();
                $usermodel = new UserModel();
                $email = $this->request->getPost('email');
                $password = md5($this->request->getPost('password'));
                $role = $this->request->getPost('role');
                $profile_pic = $this->request->getPost('profile_pic');

                $user_details = $usermodel->where('email', $email)->first();

                if($user_details){
                  $db_password = $user_details['password'];
                    $check_pass = password_verify($password, $db_password);
                    if($password == $db_password){

                      $file = $this->request->getFile('profile_pic');

                      $sess_data = [
                        'user_id' => $user_details['user_id'],
                        'fullname' => $user_details['fullname'],
                        'email' => $user_details['email'],
                        'password' => $user_details['password'],
                        'role' => $user_details['role'],
                        'profile_pic' => $user_details['profile_pic']
                      ];
                        $session->set($sess_data);
                        return redirect()->to('admin/dashboard');
                    }else{
                    session()->setTempdata('fail', 'Invalid Password', 1);
                    }
                }

            }else{
              $data['form_error'] = $this->validator;
            }
          }
            return view('backend/login', $data);
    }
    public function dashboard()
    {
      $session = session();

      $contact = new ContactModel();
      $data['contact']  = $contact->findAll();
      if ($session->has('role')){
        $data['user_data'] = session()->get();
        echo view('backend/header', $data);
        echo view('backend/sidebar');
        echo view('backend/dashboard');
        echo view('backend/footer');
      }else{
        return view('backend/login');
      }
    }
    public function logout()
   {
       $session = session();
       $session->destroy();
       return redirect()->to('admin/index');
   }
    public function Admin_register()
    {
      $error = [];
      $validation = $this->validate([
        'fullname' =>[
          'rules' => 'required|min_length[3]',
          'errors' =>[
            'required' => 'Fullname is required to log-in',
            'min_length' => 'Min 3 characters are required'
          ]

        ],
        'email' =>[
          'rules' => 'required|valid_email|is_unique[tbl_user.email]',
          'errors' =>[
            'required' => 'Email is required to log-in',
            'valid_email' => 'This Email id is not valid',
            'is_unique' => 'Email id is already Registered'
          ]

        ],
        'password' =>[
          'rules' => 'required|min_length[3]|max_length[30]',
          'errors' =>[
            'required' => 'Password is required to log-in',
            'min_length' => 'Password is not Correct',
            'max_length' => 'Password lenght is not more than 8'
          ]

        ],
        'role' =>[
          'rules' => 'required',
          'errors' =>[
            'required' => 'Insert your role'
          ]
        ]
      ]);

      if ($this->request->getMethod() == 'post') {

        if ($validation) {
            $usermodel = new UserModel();
            $fullname = $this->request->getPost('fullname');
            $email = $this->request->getPost('email');
            $password = md5($this->request->getPost('password'));
            $role = $this->request->getPost('role');

            $file = $this->request->getFile('profile_pic');
            $newFileName = $file->getRandomName();
            $file->move('assets/backend/images', $newFileName);

            $values = [
              'fullname' => $fullname,
              'email' => $email,
              'password' => $password,
              'role' => $role,
              'profile_pic' => $newFileName
            ];
            $usermodel->insert($values);
            session()->setTempdata('added', 'Registration done', 1);
        }else{
          $error['form_error'] = $this->validator;
        }
      }

      $data['user_data'] = session()->get();
      $contact = new ContactModel();
      $data['contact']  = $contact->findAll();

      echo view('backend/header', $data);
      echo view('backend/sidebar', $data);
      echo view('backend/register_admin', $error);
      echo view('backend/footer');
    }
    public function display()
    {
      $session = session();
      $usermodel = new UserModel();
      $admin['admin_details'] = $usermodel->findAll();
      $contact = new ContactModel();
      $data['contact']  = $contact->findAll();

    $data['user_data'] = session()->get();

      echo view('backend/header', $data);
      echo view('backend/sidebar', $data);
      echo view('backend/admin_data', $admin);
      echo view('backend/footer');
    }
    public function edit($id)
    {
      $usermodel = new UserModel();
      $admin_details['admin'] = $usermodel->where('user_id', $id)->first();

      $data['user_data'] = session()->get();
      $contact = new ContactModel();
      $data['contact']  = $contact->findAll();

      echo view('backend/header', $data);
      echo view('backend/sidebar');
      echo view('backend/edit_admin', $admin_details);
      echo view('backend/footer');
    }
    public function update()
      {

            $id = $this->request->getPost('user_id');
            $fullname = $this->request->getPost('fullname');
            $email = $this->request->getPost('email');
            $role = $this->request->getPost('role');
            $file = $this->request->getFile('profile_pic');


            $values = [
              'fullname' => $fullname,
              'email' => $email,
              'role' => $role
            ];

             if( $file->getBasename() )
            {
              $newName = $file->getRandomName();
              $file->move('assets/backend/images', $newName);

              $values['profile_pic'] = $newName;
            }

            $usermodel = new UserModel();
            $usermodel->update($id, $values);
            return redirect()->to('admin/display');
    }
    public function delete($id)
    {
      $usermodel = new UserModel();
      $usermodel->where('user_id', $id)->delete();
      return redirect()->to('admin/display');
    }
    
    public function view()
    {
      $setting = new SettingModel();
      $view['details'] = $setting->findAll();
      $data['user_data'] = session()->get();
      $contact = new ContactModel();
      $data['contact'] = $contact->findAll();

      echo view('backend/header', $data);
      echo view('backend/sidebar');
      echo view('backend/view_data', $view);
      echo view('backend/footer');
    }
    public function edit_data($id)
    {
      $setting = new SettingModel();
      $details['data'] = $setting->where('id', $id)->first();
      // print_r($details); die();

      $data['user_data'] = session()->get();
      $contact = new ContactModel();
      $data['contact'] = $contact->findAll();

      echo view('backend/header', $data);
      echo view('backend/sidebar');
      echo view('backend/edit_data', $details);
      echo view('backend/footer', $details);
    }
    public function update_data()
    {

      if($this->request->getMethod() =='post'){
        $id = $this->request->getPost('id');
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $mobile = $this->request->getPost('mobile');
        $opening_timing = $this->request->getPost('open_time');
        $opening_timing = date('h:i a', strtotime($opening_timing));
        $closing_timing = $this->request->getPost('closing_time');
        $closing_timing = date('h:i a', strtotime($closing_timing));
        $address = $this->request->getPost('address');

        $value = [
          'name' => $name,
          'email' => $email,
          'mobile' => $mobile,
          'open_time' => $opening_timing,
          'closing_time' => $closing_timing,
          'address' => $address
        ];

        $setting = new SettingModel();
        if($setting->update($id, $value)){
          session()->setTempdata('added', 'New Setting Added', 1);
          return redirect()->to('admin/view');
          }
        }
    }
    public function delete_data($id)
    {
      $setting = new SettingModel();
      $setting->where('id', $id)->delete();
      return redirect()->to('admin/view');
    }
  }
?>

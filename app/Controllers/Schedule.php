<?php
namespace App\Controllers;
use App\Models\ScheduleModel;
use App\Models\SettingModel;
use App\Models\ContactModel;
use App\Models\TrainerModel;
class Schedule extends BaseController {
    public function add_sch() {
        $error = [];
        $validation = $this->validate(['day' => ['rules' => 'required', 'error' => ['required' => 'Please Select any on the day']], 'timing' => ['rules' => 'required', 'error' => ['required' => 'Please select any of the Exercise']], 'exercise' => ['rules' => 'required', 'error' => ['required' => 'Please select any of the Exercise']]]);
        if ($this->request->getMethod() == 'post') {
            if ($validation) {
                $schedule = new ScheduleModel();
                $day = $this->request->getPost('day');
                $timing = $this->request->getPost('timing');
                $exercise = $this->request->getPost('exercise');
                $trainer = $this->request->getPost('trainer');
                $value = ['day' => $day, 'timing' => $timing, 'exercise' => $exercise, 'trainer' => $trainer];
                $data = array('timing' => $timing, 'day' => $day);
                $existing_data = $schedule->where($data)->findAll();
                if (!empty($existing_data)) {
                    session()->setTempdata('existing', 'Schedule already Set, Please Update it', 3);
                } else {
                    $schedule->insert($value);
                    session()->setTempdata('added', 'Schedule Fixed', 3);
                }
            } else {
                $error['form_error'] = $this->validator;
            }
        }
        $data['user_data'] = session()->get();
        $contact = new ContactModel();
        $data['contact'] = $contact->findAll();
        $trainer = new TrainerModel();
        $data['trainer'] = $trainer->findAll();
        echo view('backend/header', $data);
        echo view('backend/sidebar');
        echo view('backend/schedule', $data);
        echo view('backend/footer');
    }
    public function view_sch() {
        $schedule = new ScheduleModel();
        $schedules_data = $schedule->findAll();

        $data['schedule'] = [];

       foreach($schedules_data as $value){
         $data['schedule'][$value['timing']][$value['day']][$value['exercise']] = $value['trainer'];
       }
       // echo '<pre>';
       // print_r($data['schedule']);
       // die();


        $settings = new SettingModel();
        $data['value'] = $settings->where('id', 11)->first();
        $data['user_data'] = session()->get();
        $contact = new ContactModel();
        $data['contact'] = $contact->findAll();

        echo view('backend/header', $data);
        echo view('backend/sidebar');
        echo view('backend/table', $data);
        echo view('backend/footer');
    }
    public function search() {

        $settings = new SettingModel();
        $data['value'] = $settings->where('id', 11)->first();

        $data['user_data'] = session()->get();

        $contact = new ContactModel();
        $data['contact'] = $contact->findAll();

        $trainer = new TrainerModel();
        $data['trainer'] = $trainer->findAll();

        echo view('backend/header', $data);
        echo view('backend/sidebar');
        echo view('backend/search_sch');
        echo view('backend/footer');
    }
    public function edit_sch() {
        $day = $this->request->getPost('day');
        $timing = $this->request->getPost('timing');

        $schedule = new ScheduleModel();
        $abc = array('timing' => $timing, 'day' => $day);
        $sch['schedule'] = $schedule->where($abc)->first();

        if (empty($sch['schedule'])) {

            session()->setTempdata('null', 'No schedule Available', 1);

            $settings = new SettingModel();
            $data['value'] = $settings->where('id', 11)->first();

            $data['user_data'] = session()->get();

            $contact = new ContactModel();
            $data['contact'] = $contact->findAll();

            $trainer = new TrainerModel();
            $data['trainer'] = $trainer->findAll();

            echo view('backend/header', $data);
            echo view('backend/sidebar');
            echo view('backend/search_sch');
            echo view('backend/footer');
            die();
        }

        $settings = new SettingModel();
        $data['value'] = $settings->where('id', 11)->first();

        $data['user_data'] = session()->get();

        $contact = new ContactModel();
        $data['contact'] = $contact->findAll();

        $trainer = new TrainerModel();
        $data['trainer'] = $trainer->findAll();

        echo view('backend/header', $data);
        echo view('backend/sidebar');
        echo view('backend/update_sch', $sch);
        echo view('backend/footer');
    }
    public function update_sch() {
        $schedule = new ScheduleModel();
        $day = $this->request->getPost('day');
        $timing = $this->request->getPost('timing');
        $exercise = $this->request->getPost('exercise');
        $trainer = $this->request->getPost('trainer');
        $value = ['day' => $day, 'timing' => $timing, 'exercise' => $exercise, 'trainer' => $trainer];
        $abc = array('timing' => $timing, 'day' => $day);
        $xyz = $schedule->where($abc)->first();
        $abc = $schedule->update($xyz, $value);
    }
    public function delete_sch($id)
    {
      $schedule = new ScheduleModel();
      $schedule->where('id', $id)->delete();
      return redirect()->to('schedule/view_sch');


    }
}
?>

<?php

namespace App\Controllers;

use App\Models\CitizenModel;

class Home extends BaseController
{
//     $config = array([
//         array(
//                 'field' => 'username',
//                 'label' => 'Username',
//                 'rules' => 'required'
//                 'errors' => array(
//                     'required' => 'You must provide a %s.',
//             ),
//         ),
//         array(
//                 'field' => 'password',
//                 'label' => 'Password',
//                 'rules' => 'required',
//                 'errors' => array(
//                         'required' => 'You must provide a %s.',
//                 ),
//         ),
//         array(
//                 'field' => 'passconf',
//                 'label' => 'Password Confirmation',
//                 'rules' => 'required'
//                 'errors' => array(
//                     'required' => 'You must provide a %s.',
//             ),
//         ),
//         array(
//                 'field' => 'email',
//                 'label' => 'Email',
//                 'rules' => 'required'
//                 'errors' => array(
//                     'required' => 'You must provide a %s.',
//             ),
//         )
//     ]);

// $this->form_validation->set_rules($config);

    public function index()
    {
        $modelObject = new CitizenModel();
        $data['citizenData']= $modelObject->findAll();
        return view('index',$data);
    }

    public function register(){

        $modelObject = new CitizenModel();
        $session = session();
        try{
        $data=[
            'national_id'=>$this-> request->getPost('national_id'),
            'names'=>$this -> request->getPost('names'),
            'height'=>$this -> request->getPost('height'),
            'weight'=>$this -> request->getPost('weight'),
            'dob'=>$this -> request->getPost('dob'),
        ];
        $modelObject -> insert($data);
        $session->setFlashdata('saved successfully');
    }catch(\Exception $e){
        $session->setFlashdata('Data not saved');
    }
        return redirect()->to('/');
    }
   public function deleteCitizen($national_id){
    $modelObject = new CitizenModel();
    $modelObject ->delete($national_id);
    return redirect()->to('/');

   }
   public function UpdateCitizen($national_id){
        $modelObject = new CitizenModel();
        $data['citizenData'] = $modelObject->find($national_id);
        return view('update',$data);
   }
   public function updateDataCitizen($national_id){
    $modelObject = new CitizenModel();
    $data=[
        'national_id'=>$this-> request->getPost('national_id'),
        'names'=>$this -> request->getPost('names'),
        'height'=>$this -> request->getPost('height'),
        'weight'=>$this -> request->getPost('weight'),
        'dob'=>$this -> request->getPost('dob'),
    ];
    $modelObject->update($national_id, $data);
    return redirect()->to('/');
   }
  
}

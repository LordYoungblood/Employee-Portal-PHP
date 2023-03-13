<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      $data = [
        'title' => 'Employee Portal',
        'description' => 'Manage employees'
      ];
     
      $this->view('pages/index', $data);
    }

    public function contact(){
      $data = [
        'title' => 'Contact Us',
        'description' => 'Fill out form to contact our support team.'
      ];

      $this->view('pages/contact', $data);
    }
  }
<?php
  class Pages extends Controller {
    public function __construct(){

    }

    public function index(){
      $data = [
        'title' => 'Shareposts',
        'description' => 'Simple social network build on the alooshMVC PHP framwork'
      ];

      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'about',
        'description' => 'App to share posts with other users'
      ];
      $this->view('pages/about', $data);
    }
  }

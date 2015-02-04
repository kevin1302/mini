<?php

class game extends Controller
{

  public function index()
	 {
	  $this->game_model = $this->loadModel("game");

	  $this->view->game = $this->game_model->getAllPhotos();

	  $this->view->render("game/index");
	 }



  public function play()
  {
  	$this->game_model = $this->loadModel("game");

  	$this->view->game = $this->game_model->selectPhoto();

	$this->view->render("game/play");
  }

  public function score()
    { 
        $this->game_model = $this->loadModel("game");

        $this->view->game = $this->game_model->getDistance();

        $this->view->render("game/score");
    }
}



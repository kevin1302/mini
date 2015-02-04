<?php

class gameModel extends Controller
{
public function play($id=null)
{
if($id=null){

}else {
	render('game/play');
	}
	}
	public function getlonglat($id)
	{


	}
  public function getAllPhotos()
    {
        $query = $this->db->prepare('SELECT * FROM photo');
        $query->execute();
        return $query->fetchAll();
    }
    public function selectPhoto()
    {
     $query = $this->db->prepare("SELECT name
           FROM photo
           WHERE id = :id");
  $query->execute(array(':id' => $_GET['id']));
  return $query->fetchAll();
    }
}
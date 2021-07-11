<?php
class user {
	private $id;
	private $nom;
	private $prenom;
	private $age;




	function __construct($nom,$prenom,$age){
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->age=$age;
	



	}
	function getId(){
		return $this->id;
	}
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getage(){
		return $this->age;
	}
	
	function setId($id){
		$this->id=$id;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom;
	}
	function setage($age){
		$this->age=$age;
	}

	
}
?>
	
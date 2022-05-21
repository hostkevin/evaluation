<?php
defined('BASEPATH') or exit('no direct script allowed'); 

class Backoffice_model extends CI_Model {

	 public function __construct() {        
    parent::__construct();
}
 function ajouter($data){
 	 return $this->db->insert('voiture',$data);
 }

function allVoiture(){
	return $this->db->get('voiture');
}


function chauffeur(){
	 return $this->db->get('utilisateur');
      
}
function disponibiliter($voiture,$status){
	 $query=$this->db->query("UPDATE voiture SET disponibiliter='$status' where modele='".$voiture."'");
         return $query;
}

function allVoitureDisponible($disponibiliter){
	$this->db->select('*');
    $this->db->from('voiture');
    $this->db->where('disponibiliter',$disponibiliter);
    $query=$this->db->get();
    return $query;
}
}
?>
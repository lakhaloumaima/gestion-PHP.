<?php
require_once("mysql.php");
class destributeur extends mysql
{
       private $id;

       private $nom;
       
       private $adresse;
        

    public function getId()
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom(String $nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }

    public function setAdresse(String $adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    
    public function editAll(){  
    $res =$this->connexion()->query("SELECT * from destributeur");
 // Extraire (fetch) toutes les lignes (enregistrement, rows)
 $les_destributeurs = $res->fetchAll(); 
 
        return $les_destributeurs;
    }
    public function ajouter()
	{	 if (!isset($this->nom) || 
	    	!isset($this->adresse) )
            return false;
            
	    $q = "INSERT INTO destributeur (nom, adresse) 
		      VALUES
		  	('$this->nom' ,
			'$this->adresse'
			)";		
		$stmt = $this->connexion()->exec($q);
        if(!$stmt)
        echo('echec insertion'.$this->connexion()->errorInfo());
        else{
    $r= 1;	// Renvoi l'id de l'enregistrement ajouté	
    return $r;}	
    }
    public function supprimer($id) {
        $q= "delete from destributeur where id=$id" ;
        $stmt=$this->connexion()->exec($q) ;
        if(!$stmt)
        {
            echo("echec de suppression".$this->connexion()->errorInfo()) ;
        }
        else 
            return $stmt ;
    }
    public function edit($id){
        $res = $this->connexion()->query("SELECT * from destributeur WHERE id=$id");
        $le_des = $res->fetch();
        return $le_des;
    }
}
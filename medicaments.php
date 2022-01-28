<?php
require_once("mysql.php");
class medicaments extends mysql
{
       private $idm;

       private $nom;

        private $prix;

        private $categorie;

    public function getIdm()
    {
        return $this->idm;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom(string $nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix(int $prix)
    {
        $this->prix = $prix;

        return $this;
    }

    public function getCategorie()
    {
        return $this->categorie;
    }

    public function setCategorie(String $categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    
    public function editAll(){  
    $res =$this->connexion()->query("SELECT * from medicaments");
 // Extraire (fetch) toutes les lignes (enregistrement, rows)
 $les_medicaments = $res->fetchAll(); 
 
        return $les_medicaments;
    }
    public function ajouter()
	{	 if (!isset($this->nom) || 
	    	!isset($this->prix) || 
            !isset($this->categorie))
            return false;
            
	    $q = "INSERT INTO medicaments (nom, prix, categorie) 
		      VALUES 
		  	('$this->nom' ,
			'$this->prix'  , 
            '$this->categorie'
			)";		
		$stmt = $this->connexion()->exec($q);
        if(!$stmt)
        echo('echec insertion'.$this->connexion()->errorInfo());
        else{
    $r= 1;	// Renvoi l'id de l'enregistrement ajouté	
    return $r;}	
    }
    public function supprimer($idm) {
        $q= "delete from medicaments where idm=$idm" ;
        $stmt=$this->connexion()->exec($q) ;
        if(!$stmt)
        {
            echo("echec de suppression".$this->connexion()->errorInfo()) ;
        }
        else 
            return $stmt ;
    }
     //function editBy($id)
    public function editBy($id){
        $res =$this->connexion()->query("SELECT * from medicaments where idm=$id");
        // Extraire (fetch) toutes les lignes (enregistrement, rows)
        $le_med = $res->fetch(); 
    
           return $le_med;  
}
public function modif($idm)
{	 if (!isset($this->nom) || 
        !isset($this->prix) || 
        !isset($this->categorie))
        return false;
        
    $q = "update medicaments set nom='$this->nom' and prix='$this->prix' and categorie='$this->categorie' ";		
    $stmt = $this->connexion()->exec($q);
    if(!$stmt)
    echo('echec insertion'.$this->connexion()->errorInfo());
    else{
$r= 1;	// Renvoi l'id de l'enregistrement ajouté	
return $r;}	
}
public function edit($id){
    $res = $this->connexion()->query("SELECT * from medicaments WHERE idm=$id");
    $le_med = $res->fetch();
    return $le_med;
}
}
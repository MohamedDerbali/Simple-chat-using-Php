<?PHP
include_once "config.php";
class UserC {
	
	function Adduser($user){
		$sql="insert into user (nom,prenom,age) 
		values (:nom,:prenom,:age)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
	
        $nom=$user->getNom();
        $prenom=$user->getPrenom();
        $age=$user->getAge();
      
		
		
		
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':age',$age);
		
        $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficheruser(){
		$sql="select * From user";
		$db = config::getConnexion();
		try{
			$sth = $db->prepare($sql);
			$sth->execute();
			$liste = $sth->fetchAll();
			return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
    function affiche($haha)
    {$sql="select * From user where nom='$haha'";
		$db = config::getConnexion();
		try{
			$sth = $db->prepare($sql);
			$sth->execute();
			$liste = $sth->fetchAll();
			return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}/*function trieruser(){
		$sql="select * From user Order by nom ASC";
		$db = config::getConnexion();
		try{
			$sth = $db->prepare($sql);
			$sth->execute();
			$liste = $sth->fetchAll();
			return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
     	function rechercheruser($HI){
		$sql="SELECT * from user where nom='$HI'  or prix='$HI' or quantite='$HI' or description='$HI'";
		$db = config::getConnexion();
		try{
		    $sth = $db->prepare($sql);
			$sth->execute();
			$liste = $sth->fetchAll();
			return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function supprimeruser($id){
		$sql="DELETE FROM user where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifieruser($user,$id){
		$sql="UPDATE user SET nom = :nom, image = :image, prix = :prix , quantite = :quantite, description = :description 
        		 WHERE id=:id";
		$db = config::getConnexion();
	try{		
        $req=$db->prepare($sql);
		
	    $nom=$user->getNom();
        $image=$user->getImage();
        $prix=$user->getPrix();
        $quantite=$user->getQuantite();
        $description=$user->getDescription();
	
		
		$req->bindValue(':nom',$nom);
		$req->bindValue(':image',$image);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':description',$description);
		
		$req->bindValue(':id',$id);
	
    	$s=$req->execute();
	
    }
    catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
    }
		
	}
	function recupereruser($id){
		$sql="SELECT * from user where id= $id";
		$db = config::getConnexion();
		try{
		    $sth = $db->prepare($sql);
			$sth->execute();
			$liste = $sth->fetch();
			return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	*/

}

?>
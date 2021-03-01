<?php 

use Doctrine\ORM\Annotation as ORM;

/**
*@Entity @Table(name="personne")
**/

class Personne
{
	/** @Id @Column(type="integer") @GeneratedValue **/
	private $id;
	/** @Column(type="string") **/
	private $nom;
	/** @Column(type="string") **/
	private $prenom;
	/** @Column(type="integer") **/
	private $age;
	/** @Column(type="string") **/
	private $sexe;

	function __construct()
	{

	}

	public function getId()
	{
		return $this->id;
	}
	public function setId($id)
	{
		$this->id = $id;
	}

	public function getNom()
	{
		return $this->nom;
	}
	public function setNom($name)
	{
		$this->nom = $name;
	}

	public function getPrenom()
	{
		return $this->prenom;
	}
	public function setPrenom($first_name)
	{
		$this->prenom = $first_name;
	}

	public function getAge()
	{
		return $this->age;
	}
	public function setAge($age)
	{
		$this->age = $age;
	}

	public function getSexe()
	{
		return $this->sexe;
	}
	public function setSexe($sexe)
	{
		$this->sexe = $sexe;
	}
}

?>
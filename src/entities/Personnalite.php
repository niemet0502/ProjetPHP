<?php

use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
*@Entity @Table(name="personnalite")
**/

class Personnalite extends Personne
{
	/** @Id @Column(type="integer") @GeneratedValue **/
	private $idPersonnalite;
	/** @Column(type="string") **/
	private $nationalite;
	/**
     * Many Personnalite have Many Journaliste.
     * @ManyToMany(targetEntity="Journaliste", inversedBy="personnalites")
     * @JoinTable(name="journaliste_personnalite")
     */
	private $journalistes;

	public function __construct()
	{
		$this->articles = new ArrayCollection();
		$this->journalistes = new ArrayCollection();
   
	}

	public function getIdPersonnalite()
	{
		return $this->idPersonnalite;
	}
	public function setIdPersonnalite($idPers)
	{
		$this->idPersonnalite = $idPers;
	}

	public function getNationalite()
	{
		return $this->nationalite;
	}
	public function setNationalite($nationality)
	{
		$this->nationalite = $nationality;
	}

	public function getJournaliste()
	{
		return $this->journaliste;
	}
	public function setJournaliste($journ)
	{
		$this->journaliste = $journ;
	}
}

?>
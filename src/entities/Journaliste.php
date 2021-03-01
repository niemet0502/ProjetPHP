<?php

use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
* @Entity @Table(name="journaliste")
**/

class Journaliste extends Personne
{
	/** @Id @Column(type="integer") @GeneratedValue **/
	private $idJournaliste;
	/** @Column(type="string") **/
	private $email;
	/** @Column(type="string") **/
	private $password;
	/** @Column(type="string") **/
	private $signature;
	/**
     * One journaliste has many articles. This is the inverse side.
     * @OneToMany(targetEntity="Article", mappedBy="journaliste")
     */
	private $articles;
	/**
     * Many Journaliste have Many Journal.
     * @ManyToMany(targetEntity="Journal", mappedBy="journalistes")
     */
	private $journaux;
	/**
     * Many Journaliste have Many Personnalite.
     * @ManyToMany(targetEntity="Personnalite", mappedBy="journalistes")
     */
	private $personnalites;

	public function __construct()
	{
		$this->articles = new ArrayCollection();
		$this->journaux = new ArrayCollection();
		$this->personnalites = new ArrayCollection();
	}

	public function getIdJournaliste()
	{
		return $this->idJournaliste;
	}
	public function setIdJournaliste($id)
	{
		$this->idJournaliste = $id;
	}

	public function getEmail()
	{
		return $this->email;
	}
	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getPassword()
	{
		return $this->password;
	}
	public function setPassword($mdp)
	{
		$this->password = $mdp;
	}

	public function getSignature()
	{
		return $this->signature;
	}
	public function setSignature($signature)
	{
		$this->signature = $signature;
	}

	public function getArticles()
	{
		return $this->articles;
	}
	public function setArticles($art)
	{
		$this->articles = $art;
	}

	public function getJournaux()
	{
		return $this->journaux;
	}
	public function setJournaux($newsPaper)
	{
		$this->journaux = $newsPaper;
	}

	public function getPersonnalites()
	{
		return $this->personnalites;
	}
	public function setPersonnalites($pers)
	{
		$this->personnalites = $pers;
	}
}

?>
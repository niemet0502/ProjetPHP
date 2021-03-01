<?php

use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
*@Entity @Table(name="journal")
**/

class Journal
{
	/** @Id @Column(type="integer") @GeneratedValue **/
	private $numJournal;
	/** @Column(type="string") **/
	private $titre;
	/** @Column(type="string") **/
	private $adresse;
	/**
     * Many Journal have Many Journaliste.
     * @ManyToMany(targetEntity="Journaliste", inversedBy="personnalites")
     * @JoinTable(name="journaliste_journaux")
     */
	private $journalistes;

	public function __construct()
	{
		$this->journalistes = new ArrayCollection();
	}

	public function getNumJournal()
	{
		return $this->numJournal;
	}
	public function setNumJournal($num)
	{
		$this->numJournal = $num;
	}

	public function getTitre()
	{
		return $this->titre;
	}
	public function setTitre($title)
	{
		$this->titre = $title;
	}

	public function getAdresse()
	{
		return $this->adresse;
	}
	public function setAdresse($address)
	{
		$this->adresse = $address;
	}

	public function getJournalistes()
	{
		return $this->journalistes;
	}
	public function setJournalistes($journ)
	{
		$this->journalistes = $journ;
	}
}

?>
<?php

use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
*@Entity @Table(name="article")
**/

class Article
{
	/** @Id @Column(type="integer") @GeneratedValue **/
	private $numArticle;
	/** @Column(type="string") **/
	private $titreArticle;
	/** @Column(type="string") **/
	private $contenu;
	/**
     * Many article have one journaliste. This is the owning side.
     * @ManyToOne(targetEntity="Journaliste", inversedBy="articles")
     * @JoinColumn(name="journaliste_id", referencedColumnName="idJournaliste")
     */
	private $journalistes;
	/**
     * Many article have one sujet. This is the owning side.
     * @ManyToOne(targetEntity="Sujet", inversedBy="articles")
     * @JoinColumn(name="journaliste_id", referencedColumnName="numSujet")
     */
	private $sujets;

	public function __construct()
	{
		
	}

	public function getNumArticle()
	{
		return $this->numArticle;
	}
	public function setNumArticle($num)
	{
		$this->numArticle = $num;
	}

	public function getTitreArticle()
	{
		return $this->titreArticle;
	}
	public function setTitreArticle($title)
	{
		$this->titreArticle = $title;
	}

	public function getContenu()
	{
		return $this->contenu;
	}
	public function setContenu($content)
	{
		$this->contenu = $content;
	}

	public function getJournalistes()
	{
		return $this->journalistes;
	}
	public function setJournalistes($journ)
	{
		$this->journalistes = $journ;
	}

	public function getSujets()
	{
		return $this->sujets;
	}
	public function setSujets($subject)
	{
		$this->sujets = $subject;
	}
}

?>
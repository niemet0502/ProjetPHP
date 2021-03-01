<?php

use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
*@Entity @Table(name="sujet")
**/

class Sujet
{
	/** @Id @Column(type="integer") @GeneratedValue **/
	private $numSujet;
	/** @Column(type="string") **/
	private $libelle;
	/**
     * One sujet has many articles. $this is the inverse side.
     * @OneToMany(targetEntity="Article", mappedBy="sujets")
     */
	private $articles;

	public function __construct()
	{
		$this->articles = new ArrayCollection();
	}

	public function getNumSujet()
	{
		return $this->numSujet;
	}
	public function setSujet($subject)
	{
		$this->sujet = $subject;
	}

	public function getLibelle()
	{
		return $this->libelle;
	}
	public function setLibelle($libelle)
	{
		$this->libelle = $libelle;
	}

	public function getArticles()
	{
		return $this->articles;
	}
	public function setArticles($article)
	{
		$this->articles = $article;
	}
}

?>
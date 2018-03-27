<?php

require_once ("Model.php");

class Post extends Model {

// OBJECT ATTRIBUTES
	/**
	 * Post id
	 * @var [int]
	 */
	private $id;

	/**
	 * Post title
	 * @var [string]
	 */
	private $title;

	/**
	 * Post content
	 * @var [string]
	 */
	private $content;

	/**
	 * Post author
	 * @var [string]
	 */
	private $author;

	/**
	 * Post date of creation
	 * @var [int]
	 */
	private $post_date;

// GETTERS

	/**
	 * Id getter
	 * @return [int]
	 */
	public function getId()
	{
		return $this->id;
	}

    /**
     * Title getter
     * @return [string]
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return [string]
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return [string]
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @return [int]
     */
    public function getPost_date()
    {
        return $this->post_date;
    }

// SETTERS

    /**
     * [setId of post function]
     * @param [int] $id [post id]
     */
   public function setId($id)
    {
        //if (is_numeric($id)) {
            $this->id = $id;
            return $this;

        //} else {
            //throw new Exception("L'identifiant de l'article est invalide");
            
        //}
    }

    /**
     * [setPost_date of post function]
     * @param [int] $postDate [post creation date]
     */
    public function setPost_date($postDate)
    {
        //if (is_int("$postDate")) {
            $this->post_date = $postDate;
            return $this;

        //} else {
            //throw new Exception("La date est invalide");
            
        //}
    }


    /**
     * Title setter
     * @param [string] $title
     *
     * @return $this
     */
    public function setTitle($title)
    {
    	if (is_string("$title")) {
    		$this->title = $title;

    		return $this;
    	} else {
    		throw new Exception("Le titre n'est pas valide");
    		
    	}
    }

    /**
     * @param [string] $content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @param [string] $author
     *
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    
}









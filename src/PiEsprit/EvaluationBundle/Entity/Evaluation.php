<?php
/**
 * Created by PhpStorm.
 * User: azizx
 * Date: 25/06/2017
 * Time: 20:02
 */

namespace PiEsprit\EvaluationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**

 * @ORM\Entity
 *
 * @ORM\Table(name="evaluation")
 *
 */


class Evaluation
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(name="id",type="integer")
     */
    public $id;

    /**
     *
     * @ORM\Column(name="note",type="integer")
     */
    public $note;


    /**
     *
     * @ORM\Column(name="comment",type="string",length=255)
     */
    public $comment;

    /**
     * @ORM\Column(name="posted_by_id",type="integer")
     */
    public $posted_by_id;
    /**
     * @ORM\Column(name="posted_to_id",type="integer")
     */
    public $posted_to_id;

    /**
     * @ORM\Column(name="posted_about_id",type="integer")
     */
    public $posted_about_id;

    /**
     * Evaluation constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param mixed $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param mixed $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return mixed
     */
    public function getPostedById()
    {
        return $this->posted_by_id;
    }

    /**
     * @param mixed $posted_by_id
     */
    public function setPostedById($posted_by_id)
    {
        $this->posted_by_id = $posted_by_id;
    }

    /**
     * @return mixed
     */
    public function getPostedToId()
    {
        return $this->posted_to_id;
    }

    /**
     * @param mixed $posted_to_id
     */
    public function setPostedToId($posted_to_id)
    {
        $this->posted_to_id = $posted_to_id;
    }

    /**
     * @return mixed
     */
    public function getPostedAboutId()
    {
        return $this->posted_about_id;
    }


    /**
     * @param mixed $posted_about_id
     */
    public function setPostedAboutId($posted_about_id)
    {
        $this->posted_about_id = $posted_about_id;
    }




}
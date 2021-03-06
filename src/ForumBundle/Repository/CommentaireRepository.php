<?php

namespace ForumBundle\Repository;

/**
 * CommentaireRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CommentaireRepository extends \Doctrine\ORM\EntityRepository
{
    public function findByIdPost($id){
        $q=$this->getEntityManager()
            ->createQuery("select c from ForumBundle:Commentaire c WHERE c.topic=:id ")
            ->setParameter(":id",$id);
        return $q->getResult();
    }
}

<?php

namespace AppBundle\Repository;

/**
 * chargeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class chargeRepository extends \Doctrine\ORM\EntityRepository
{

    public function getAllLateCharges(){
        //instanciation queryBuilder
        $queryBuilder = $this->createQueryBuilder('a');
        //On récupère la date actuelle
        $time = new \DateTime();
        //on formate la date pour être cohérent avec SQL
        $time->format('Y-m-d H:i:s');//2013-01-04 06:00:00
        //On ajoute des contraintes et paramètres
        $queryBuilder
            ->where('a.date_echeance < :date_now')
            ->setParameter('date_now', $time)
            ->andWhere('a.statut = :stat')
            ->setParameter('stat', "A payer");
        //on récup la requête
        $query = $queryBuilder->getQuery();
        $res = $query->getResult();
        return $res;
    }
}
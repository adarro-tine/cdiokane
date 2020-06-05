<?php

namespace App\Repository;

use App\Entity\Cours;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Cours|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cours|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cours[]    findAll()
 * @method Cours[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CoursRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Cours::class);
    }

                    //methode qui permet de rechercher un cours a travers le formulaire de recherche
    public function findCoursByName($str){
     return $this->getEntityManager()
                  ->createQuery(
                                'SELECT c
                                FROM App\Entity\Cours c
                                WHERE c.titreCours LIKE :str'
                            )
                            ->setParameter('str', '%'.$str.'%')
                            ->getResult();
                    }

  
            function findArray($array){

                return $this->createQueryBuilder('c')
                    ->andWhere('c.id IN(:array)')
                    ->setParameter('array', $array)
                    ->orderBy('c.id', 'ASC')
                    ->getQuery()
                    ->getResult();
            
            }
            function produitsByCategorie($categorie){
                return $this->createQueryBuilder('c')
                ->where('c.categorie = :categorie')
                ->andWhere('c.visibilite= 1')
                ->setParameter('categorie', $categorie)
                ->orderBy('c.id', 'ASC')
                ->getQuery()
                ->getResult();   
            }
            function produitsBySousCategorie($souscat){
                return $this->createQueryBuilder('c')
                ->where('c.souscategorie = :souscategorie')
                ->andWhere('c.visibilite= 1')
                ->setParameter('souscategorie', $souscat)
                ->orderBy('c.id', 'ASC')
                ->getQuery()
                ->getResult();   
            }
            function courCommande($commande){
                return $this->createQueryBuilder('c')
                ->where('c.commande = :commande')
                ->andWhere('c.visibilite= 1' || 'c.visibilte = 0')
                ->setParameter('commande', $commande)
                ->orderBy('c.id', 'ASC')
                ->getQuery()
                ->getResult();   
            }
            
            
}

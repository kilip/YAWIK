<?php

namespace Auth\Repository;

use Core\Entity\EntityInterface;
use Core\Repository\AbstractRepository;



class User extends AbstractRepository
{
    
    
    public function create($data = array())
    {
        $entity = $this->getMapper('user')->create($data);
        return $entity;
    }
    
    public function findByProfileIdentifier($identifier)
    {
        $entity = $this->getMapper('user')->findByProfileIdentifier($identifier);
        return $entity;
    }
    
    public function findByLogin($login) {
        $entity = $this->getMapper('user')->findByLogin($login);
        return $entity;
    }
    
    public function find ($id)
    {
        $entity = $this->getMapper('user')->find($id, array('info'), true);
        return $entity;
    }
    
    public function save(EntityInterface $user)
    {
        $this->getMapper('user')->save($user);
    }
    
     
}
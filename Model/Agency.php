<?php

/*
 * This file is part of the NIM package.
 *
 * (c) Langlade Arnaud
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NIM\WorkerBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;
use NIM\WorkerBundle\Model\AbstractEntity;
use NIM\WorkerBundle\Model\Core\AgencyInterface;

class Agency extends AbstractEntity implements AgencyInterface
{
    protected $name;
    protected $workers;

    /**
     * constructor
     */
    public function __construct()
    {
        parent::__construct();

        $this->workers = new ArrayCollection();
    }

    /**
     * {@inheritdoc}
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $workers
     */
    public function setWorkers(ArrayCollection $workers = null)
    {
        $this->workers = $workers;
    }

    /**
     * @return mixed
     */
    public function getWorkers()
    {
        return $this->workers;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getName();
    }
}

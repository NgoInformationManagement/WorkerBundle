<?php

/*
 * This file is part of the NIM package.
 *
 * (c) Langlade Arnaud
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NIM\WorkerBundle\Model\Contactable;

use Doctrine\Common\Collections\ArrayCollection;
use NIM\WorkerBundle\Model\Email;
use NIM\WorkerBundle\Model\Phone;

trait ContactableTrait
{
    protected $phones;
    protected $emails;

    /**
     * @param ArrayCollection $emails
     */
    public function setEmails(ArrayCollection $emails = null)
    {
        $this->emails = $emails;
    }

    /**
     * @return ArrayCollection
     */
    public function getEmails()
    {
        return $this->emails;
    }

    /**
     * @param \NIM\WorkerBundle\Model\Email $email
     */
    public function addEmail(Email $email)
    {
        if (!$this->getEmails()->contains($email)) {
            $this->getEmails()->add($email);
        }
    }

    /**
     * @param \NIM\WorkerBundle\Model\Email $email
     */
    public function removeEmail(Email $email)
    {
        if ($this->getEmails()->contains($email)) {
            $this->getEmails()->removeElement($email);
        }
    }

    /**
     * @param ArrayCollection $phones
     */
    public function setPhones(ArrayCollection $phones = null)
    {
        $this->phones = $phones;
    }

    /**
     * @return ArrayCollection
     */
    public function getPhones()
    {
        return $this->phones;
    }

    /**
     * @param Phone $phone
     */
    public function addPhone(Phone $phone)
    {
        if (!$this->getPhones()->contains($phone)) {
            $this->getPhones()->add($phone);
        }
    }

    /**
     * @param Phone $phone
     */
    public function removePhone(Phone $phone)
    {
        if ($this->getPhones()->contains($phone)) {
            $this->getPhones()->removeElement($phone);
        }
    }
}

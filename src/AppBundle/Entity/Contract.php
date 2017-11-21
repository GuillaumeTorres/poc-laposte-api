<?php
/**
 * Contract entity file
 *
 * PHP Version 5.6
 *
 * @category Entity
 *
 * @package  AppBundle\Entity
 *
 * @author   Guillaume <guillaume.torres@soprasteria.com>
 */
namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints\Date;

/**
 * Contract class
 *
 * @category Entity
 */
class Contract
{
    /** @var bool optional */
    private $isDead;

    /** @var string */
    private $homeIsFull;

    /** @var bool */
    private $broadcastingAuthorizationCnil;

    /** @var Date */
    private $startDate;

    /** @var Date */
    private $endDate;

    /** @var string */
    private $offer;

    /** @var bool */
    private $mobility;

    /** @var string */
    private $contractAddressState;

    /** @var string optional */
    private $comment;

    /** @var bool */
    private $completeJustifiedPieces;

    /** @var bool optional */
    private $activate;

    /** @var string */
    private $depositDate;

    /** @var string optional */
    private $issuingEntityCode;

    /** @var string optional */
    private $depositEntityCode;

    /**
     * @return bool
     */
    public function isDead()
    {
        return $this->isDead;
    }

    /**
     * @param bool $isDead
     */
    public function setIsDead($isDead)
    {
        $this->isDead = $isDead;
    }

    /**
     * @return string
     */
    public function getHomeIsFull()
    {
        return $this->homeIsFull;
    }

    /**
     * @param string $homeIsFull
     */
    public function setHomeIsFull($homeIsFull)
    {
        $this->homeIsFull = $homeIsFull;
    }

    /**
     * @return bool
     */
    public function isBroadcastingAuthorizationCnil()
    {
        return $this->broadcastingAuthorizationCnil;
    }

    /**
     * @param bool $broadcastingAuthorizationCnil
     */
    public function setBroadcastingAuthorizationCnil($broadcastingAuthorizationCnil)
    {
        $this->broadcastingAuthorizationCnil = $broadcastingAuthorizationCnil;
    }

    /**
     * @return Date
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param Date $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @return Date
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param Date $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * @return string
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * @param string $offer
     */
    public function setOffer($offer)
    {
        $this->offer = $offer;
    }

    /**
     * @return bool
     */
    public function isMobility()
    {
        return $this->mobility;
    }

    /**
     * @param bool $mobility
     */
    public function setMobility($mobility)
    {
        $this->mobility = $mobility;
    }

    /**
     * @return string
     */
    public function getContractAddressState()
    {
        return $this->contractAddressState;
    }

    /**
     * @param string $contractAddressState
     */
    public function setContractAddressState($contractAddressState)
    {
        $this->contractAddressState = $contractAddressState;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return bool
     */
    public function isCompleteJustifiedPieces()
    {
        return $this->completeJustifiedPieces;
    }

    /**
     * @param bool $completeJustifiedPieces
     */
    public function setCompleteJustifiedPieces($completeJustifiedPieces)
    {
        $this->completeJustifiedPieces = $completeJustifiedPieces;
    }

    /**
     * @return bool
     */
    public function isActivate()
    {
        return $this->activate;
    }

    /**
     * @param bool $activate
     */
    public function setActivate($activate)
    {
        $this->activate = $activate;
    }

    /**
     * @return string
     */
    public function getDepositDate()
    {
        return $this->depositDate;
    }

    /**
     * @param string $depositDate
     */
    public function setDepositDate($depositDate)
    {
        $this->depositDate = $depositDate;
    }

    /**
     * @return string
     */
    public function getIssuingEntityCode()
    {
        return $this->issuingEntityCode;
    }

    /**
     * @param string $issuingEntityCode
     */
    public function setIssuingEntityCode($issuingEntityCode)
    {
        $this->issuingEntityCode = $issuingEntityCode;
    }

    /**
     * @return string
     */
    public function getDepositEntityCode()
    {
        return $this->depositEntityCode;
    }

    /**
     * @param string $depositEntityCode
     */
    public function setDepositEntityCode($depositEntityCode)
    {
        $this->depositEntityCode = $depositEntityCode;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return '/recif/resources/contrats/v1';
    }

}
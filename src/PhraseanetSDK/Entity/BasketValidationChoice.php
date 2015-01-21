<?php

/*
 * This file is part of Phraseanet SDK.
 *
 * (c) Alchemy <info@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PhraseanetSDK\Entity;

use PhraseanetSDK\Annotation\ApiField as ApiField;
use PhraseanetSDK\Annotation\ApiRelation as ApiRelation;
use JMS\Serializer\Annotation\ExclusionPolicy as ExclusionPolicy;
use JMS\Serializer\Annotation\Expose as Expose;
use JMS\Serializer\Annotation\VirtualProperty as VirtualProperty;
use JMS\Serializer\Annotation\SerializedName as SerializedName;
use JMS\Serializer\Annotation\Type as Type;

/**
 * @ExclusionPolicy("all")
 */
class BasketValidationChoice
{
    /**
     * @Expose
     * @Type("boolean")
     * @ApiField(bind_to="agreement", type="boolean")
     */
    protected $agreement;
    /**
     * @Expose
     * @Type("DateTime<'Y-m-d H:i:s'>")
     * @ApiField(bind_to="updated_on", type="date")
     */
    protected $updatedOn;
    /**
     * @Expose
     * @Type("integer")
     * @ApiField(bind_to="note", type="int")
     */
    protected $note;
    /**
     * @Expose
     * @Type("PhraseanetSDK\Entity\BasketValidationParticipant")
     * @ApiField(bind_to="validation_user", type="relation")
     * @ApiRelation(type="one_to_one", target_entity="BasketValidationParticipant")
     */
    protected $participant;

    /**
     * Get the validation user
     *
     * @return BasketValidationParticipant
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    public function setParticipant(BasketValidationParticipant $participant)
    {
        $this->participant = $participant;
    }

    /**
     * Get last update date
     *
     * @return \DateTime
     */
    public function getUpdatedOn()
    {
        return $this->updatedOn;
    }

    public function setUpdatedOn(\DateTime $updatedOn)
    {
        $this->updatedOn = $updatedOn;
    }

    /**
     * Get the annotation about the validation of the current authenticated user
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    public function setNote($note)
    {
        $this->note = $note;
    }

    /**
     * Get the agreement of the current authenticated user
     *
     * - null : no response yet
     * - true : accepted
     * - false: rejected
     *
     * @return null|boolean
     */
    public function getAgreement()
    {
        return $this->agreement;
    }

    public function setAgreement($agreement)
    {
        $this->agreement = $agreement;
    }
}

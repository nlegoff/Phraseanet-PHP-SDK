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
use PhraseanetSDK\Annotation\Id as Id;
use JMS\Serializer\Annotation\ExclusionPolicy as ExclusionPolicy;
use JMS\Serializer\Annotation\Expose as Expose;
use JMS\Serializer\Annotation\VirtualProperty as VirtualProperty;
use JMS\Serializer\Annotation\SerializedName as SerializedName;
use JMS\Serializer\Annotation\Type as Type;

/**
 * @ExclusionPolicy("all")
 */
class DataboxCollection
{
    /**
     * @Expose
     * @Id
     * @Type("integer")
     * @ApiField(bind_to="base_id", type="int")
     */
    protected $baseId;
    /**
     * @Expose
     * @Type("integer")
     * @ApiField(bind_to="collection_id", type="int")
     */
    protected $collectionId;
    /**
     * @Expose
     * @Type("string")
     * @ApiField(bind_to="name", type="string")
     */
    protected $name;
    /**
     * @Expose
     * @Type("integer")
     * @ApiField(bind_to="record_amount", type="int")
     */
    protected $recordAmount;
    /**
     * @Expose
     * @Type("array<string, string>")
     * @ApiField(bind_to="labels", type="array")
     */
    protected $labels;

    /**
     * The collection base id
     *
     * @return integer
     */
    public function getBaseId()
    {
        return $this->baseId;
    }

    public function setBaseId($baseId)
    {
        $this->baseId = $baseId;
    }

    /**
     * The collection id
     *
     * @return integer
     */
    public function getCollectionId()
    {
        return $this->collectionId;
    }

    public function setCollectionId($collId)
    {
        $this->collectionId = $collId;
    }

    /**
     * The collection name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * The total record in the collection
     *
     * @return integer
     */
    public function getRecordAmount()
    {
        return $this->recordAmount;
    }

    public function setRecordAmount($recordAmount)
    {
        $this->recordAmount = $recordAmount;
    }

    /**
     * @return mixed
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * @param mixed $labels
     */
    public function setLabels($labels)
    {
        $this->labels = $labels;
    }
}

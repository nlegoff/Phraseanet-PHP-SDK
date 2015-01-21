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

use Doctrine\Common\Collections\ArrayCollection;
use PhraseanetSDK\Annotation\ApiField as ApiField;
use PhraseanetSDK\Annotation\ApiRelation as ApiRelation;
use PhraseanetSDK\Annotation\ApiObject as ApiObject;
use JMS\Serializer\Annotation\ExclusionPolicy as ExclusionPolicy;
use JMS\Serializer\Annotation\Expose as Expose;
use JMS\Serializer\Annotation\VirtualProperty as VirtualProperty;
use JMS\Serializer\Annotation\SerializedName as SerializedName;
use JMS\Serializer\Annotation\Type as Type;

/**
 * @ApiObject(extended="1")
 * @ExclusionPolicy("all")
 */
class Record
{
    /**
     * @Expose
     * @Type("integer")
     * @ApiField(bind_to="record_id", type="int")
     */
    protected $recordId;
    /**
     * @Expose
     * @Type("integer")
     * @ApiField(bind_to="databox_id", type="int")
     */
    protected $databoxId;
    /**
     * @Expose
     * @Type("string")
     * @ApiField(bind_to="title", type="string")
     */
    protected $title;
    /**
     * @Expose
     * @Type("string")
     * @ApiField(bind_to="mime_type", type="string")
     */
    protected $mimeType;
    /**
     * @Expose
     * @Type("string")
     * @ApiField(bind_to="original_name", type="string")
     */
    protected $originalName;
    /**
     * @Expose
     * @Type("DateTime<'Y-m-d H:i:s'>")
     * @ApiField(bind_to="updated_on", type="date")
     */
    protected $updatedOn;
    /**
     * @Expose
     * @Type("DateTime<'Y-m-d H:i:s'>")
     * @ApiField(bind_to="created_on", type="date")
     */
    protected $createdOn;
    /**
     * @Expose
     * @Type("integer")
     * @ApiField(bind_to="collection_id", type="int")
     */
    protected $collectionId;
    /**
     * @Expose
     * @Type("string")
     * @ApiField(bind_to="sha256", type="string")
     */
    protected $sha256;
    /**
     * @Expose
     * @Type("PhraseanetSDK\Entity\Subdef")
     * @ApiField(bind_to="thumbnail", type="relation")
     * @ApiRelation(type="one_to_one", target_entity="Subdef")
     */
    protected $thumbnail;
    /**
     * @Expose
     * @Type("ArrayCollection<PhraseanetSDK\Entity\Technical>")
     * @ApiField(bind_to="technical_informations", type="relation")
     * @ApiRelation(type="one_to_many", target_entity="Technical")
     */
    protected $technicalInformation;
    /**
     * @Expose
     * @Type("string")
     * @ApiField(bind_to="phrasea_type", type="string")
     */
    protected $phraseaType;
    /**
     * @Expose
     * @Type("string")
     * @ApiField(bind_to="uuid", type="string")
     */
    protected $uuid;
    /**
     * @Expose
     * @Type("ArrayCollection<PhraseanetSDK\Entity\Metadata>")
     * @ApiField(bind_to="metadata", type="relation")
     * @ApiRelation(type="one_to_many", target_entity="Metadata")
     */
    protected $metadata;
    /**
     * @Expose
     * @Type("ArrayCollection<PhraseanetSDK\Entity\Subdef>")
     * @ApiField(bind_to="subdefs", type="relation")
     * @ApiRelation(type="one_to_many", target_entity="Subdef")
     */
    protected $subdefs;
    /**
     * @Expose
     * @Type("ArrayCollection<PhraseanetSDK\Entity\RecordStatus>")
     * @ApiField(bind_to="status", type="relation")
     * @ApiRelation(type="one_to_many", target_entity="RecordStatus")
     */
    protected $status;
    /**
     * @Expose
     * @Type("ArrayCollection<PhraseanetSDK\Entity\RecordCaption>")
     * @ApiField(bind_to="caption", type="relation")
     * @ApiRelation(type="one_to_many", target_entity="RecordCaption")
     */
    protected $caption;

    /**
     * @VirtualProperty
     * @SerializedName("id")
     *
     * Get unique id
     *
     * @return string
     */
    public function getId()
    {
        if ($this->getDataboxId() && $this->getRecordId()) {
            return $this->getDataboxId().'_'.$this->getRecordId();
        }
    }
    /**
     * Get the record id
     *
     * @return integer
     */
    public function getRecordId()
    {
        return $this->recordId;
    }

    public function setRecordId($recordId)
    {
        $this->recordId = $recordId;
    }

    /**
     * Get the databox id
     *
     * @return integer
     */
    public function getDataboxId()
    {
        return $this->databoxId;
    }

    public function setDataboxId($databoxId)
    {
        $this->databoxId = $databoxId;
    }

    /**
     * Get the record title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get the record mime type
     *
     * @return string
     */
    public function getMimeType()
    {
        return $this->mimeType;
    }

    public function setMimeType($mimeType)
    {
        $this->mimeType = $mimeType;
    }

    /**
     * Get the record original name
     *
     * @return string
     */
    public function getOriginalName()
    {
        return $this->originalName;
    }

    public function setOriginalName($originalName)
    {
        $this->originalName = $originalName;
    }

    /**
     * Last updated date
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
     * Creation date
     *
     * @return \DateTime
     */
    public function getCreatedOn()
    {
        return $this->createdOn;
    }

    public function setCreatedOn(\DateTime $createdOn)
    {
        $this->createdOn = $createdOn;
    }

    /**
     * Get the record collection id
     *
     * @return integer
     */
    public function getCollectionId()
    {
        return $this->collectionId;
    }

    public function setCollectionId($collectionId)
    {
        $this->collectionId = $collectionId;
    }

    /**
     * Get the record SHA256 hash
     *
     * @return string
     */
    public function getSha256()
    {
        return $this->sha256;
    }

    public function setSha256($sha256)
    {
        $this->sha256 = $sha256;
    }

    /**
     * Return the thumbnail of the record as a PhraseanetSDK\Entity\Subdef object
     * if the thumbnail exists null otherwise
     *
     * @return Subdef|null
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    public function setThumbnail(Subdef $thumbnail = null)
    {
        $this->thumbnail = $thumbnail;
    }

    /**
     * Get the Record phraseaType IMAGE|VIDEO|DOCUMENT etc..
     *
     * @return string
     */
    public function getPhraseaType()
    {
        return $this->phraseaType;
    }

    public function setPhraseaType($phraseaType)
    {
        $this->phraseaType = $phraseaType;
    }

    /**
     * Get the record UUID
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
    }

    /**
     * Get a collection of Phraseanet\Entity\Technical data objects
     *
     * @return ArrayCollection
     */
    public function getTechnicalInformation()
    {
        return $this->technicalInformation;
    }

    public function setTechnicalInformation(ArrayCollection $technicalInformations)
    {
        $this->technicalInformation = $technicalInformations;
    }

    /**
     * Return a collection of PhraseanetSDK\Entity\Subdef for the record
     *
     * /!\ This method requests the API
     *
     * @param  string|null            $name The desired subdef name
     * @return ArrayCollection|Subdef
     *
     * @throws NotFoundException In case the subdef name could not be found
     */
    public function getSubdefs()
    {
        return $this->subdefs;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getCaption()
    {
        return $this->caption;
    }

    public function getMetadata()
    {
        return $this->metadata;
    }

    public function setCaption($caption)
    {
        $this->caption = $caption;
    }

    public function setMetadata($metadata)
    {
        $this->metadata = $metadata;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function setSubdefs($subdefs)
    {
        $this->subdefs = $subdefs;
    }
}

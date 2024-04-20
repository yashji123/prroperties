<?php
/**
 * EnvelopeTransferRuleRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   Swagger Codegen team <apihelp@docusign.com>
 * @license  The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign REST API
 *
 * The DocuSign REST API provides you with a powerful, convenient, and simple Web services API for interacting with DocuSign.
 *
 * OpenAPI spec version: v2.1
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\eSign\Model;

use \ArrayAccess;
use DocuSign\eSign\ObjectSerializer;

/**
 * EnvelopeTransferRuleRequest Class Doc Comment
 *
 * @category    Class
 * @description This object contains details about the envelope transfer rule that you want to create.
 * @package     DocuSign\eSign
 * @author      Swagger Codegen team <apihelp@docusign.com>
 * @license     The DocuSign PHP Client SDK is licensed under the MIT License.
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class EnvelopeTransferRuleRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'envelopeTransferRuleRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'carbon_copy_original_owner' => '?string',
        'enabled' => '?string',
        'envelope_transfer_rule_id' => '?string',
        'event_type' => '?string',
        'from_groups' => '\DocuSign\eSign\Model\Group[]',
        'from_users' => '\DocuSign\eSign\Model\UserInformation[]',
        'modified_date' => '?string',
        'modified_user' => '\DocuSign\eSign\Model\UserInformation',
        'to_folder' => '\DocuSign\eSign\Model\Folder',
        'to_user' => '\DocuSign\eSign\Model\UserInformation'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'carbon_copy_original_owner' => null,
        'enabled' => null,
        'envelope_transfer_rule_id' => null,
        'event_type' => null,
        'from_groups' => null,
        'from_users' => null,
        'modified_date' => null,
        'modified_user' => null,
        'to_folder' => null,
        'to_user' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'carbon_copy_original_owner' => 'carbonCopyOriginalOwner',
        'enabled' => 'enabled',
        'envelope_transfer_rule_id' => 'envelopeTransferRuleId',
        'event_type' => 'eventType',
        'from_groups' => 'fromGroups',
        'from_users' => 'fromUsers',
        'modified_date' => 'modifiedDate',
        'modified_user' => 'modifiedUser',
        'to_folder' => 'toFolder',
        'to_user' => 'toUser'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'carbon_copy_original_owner' => 'setCarbonCopyOriginalOwner',
        'enabled' => 'setEnabled',
        'envelope_transfer_rule_id' => 'setEnvelopeTransferRuleId',
        'event_type' => 'setEventType',
        'from_groups' => 'setFromGroups',
        'from_users' => 'setFromUsers',
        'modified_date' => 'setModifiedDate',
        'modified_user' => 'setModifiedUser',
        'to_folder' => 'setToFolder',
        'to_user' => 'setToUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'carbon_copy_original_owner' => 'getCarbonCopyOriginalOwner',
        'enabled' => 'getEnabled',
        'envelope_transfer_rule_id' => 'getEnvelopeTransferRuleId',
        'event_type' => 'getEventType',
        'from_groups' => 'getFromGroups',
        'from_users' => 'getFromUsers',
        'modified_date' => 'getModifiedDate',
        'modified_user' => 'getModifiedUser',
        'to_folder' => 'getToFolder',
        'to_user' => 'getToUser'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['carbon_copy_original_owner'] = isset($data['carbon_copy_original_owner']) ? $data['carbon_copy_original_owner'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['envelope_transfer_rule_id'] = isset($data['envelope_transfer_rule_id']) ? $data['envelope_transfer_rule_id'] : null;
        $this->container['event_type'] = isset($data['event_type']) ? $data['event_type'] : null;
        $this->container['from_groups'] = isset($data['from_groups']) ? $data['from_groups'] : null;
        $this->container['from_users'] = isset($data['from_users']) ? $data['from_users'] : null;
        $this->container['modified_date'] = isset($data['modified_date']) ? $data['modified_date'] : null;
        $this->container['modified_user'] = isset($data['modified_user']) ? $data['modified_user'] : null;
        $this->container['to_folder'] = isset($data['to_folder']) ? $data['to_folder'] : null;
        $this->container['to_user'] = isset($data['to_user']) ? $data['to_user'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets carbon_copy_original_owner
     *
     * @return ?string
     */
    public function getCarbonCopyOriginalOwner()
    {
        return $this->container['carbon_copy_original_owner'];
    }

    /**
     * Sets carbon_copy_original_owner
     *
     * @param ?string $carbon_copy_original_owner 
     *
     * @return $this
     */
    public function setCarbonCopyOriginalOwner($carbon_copy_original_owner)
    {
        $this->container['carbon_copy_original_owner'] = $carbon_copy_original_owner;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return ?string
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param ?string $enabled 
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets envelope_transfer_rule_id
     *
     * @return ?string
     */
    public function getEnvelopeTransferRuleId()
    {
        return $this->container['envelope_transfer_rule_id'];
    }

    /**
     * Sets envelope_transfer_rule_id
     *
     * @param ?string $envelope_transfer_rule_id 
     *
     * @return $this
     */
    public function setEnvelopeTransferRuleId($envelope_transfer_rule_id)
    {
        $this->container['envelope_transfer_rule_id'] = $envelope_transfer_rule_id;

        return $this;
    }

    /**
     * Gets event_type
     *
     * @return ?string
     */
    public function getEventType()
    {
        return $this->container['event_type'];
    }

    /**
     * Sets event_type
     *
     * @param ?string $event_type 
     *
     * @return $this
     */
    public function setEventType($event_type)
    {
        $this->container['event_type'] = $event_type;

        return $this;
    }

    /**
     * Gets from_groups
     *
     * @return \DocuSign\eSign\Model\Group[]
     */
    public function getFromGroups()
    {
        return $this->container['from_groups'];
    }

    /**
     * Sets from_groups
     *
     * @param \DocuSign\eSign\Model\Group[] $from_groups 
     *
     * @return $this
     */
    public function setFromGroups($from_groups)
    {
        $this->container['from_groups'] = $from_groups;

        return $this;
    }

    /**
     * Gets from_users
     *
     * @return \DocuSign\eSign\Model\UserInformation[]
     */
    public function getFromUsers()
    {
        return $this->container['from_users'];
    }

    /**
     * Sets from_users
     *
     * @param \DocuSign\eSign\Model\UserInformation[] $from_users 
     *
     * @return $this
     */
    public function setFromUsers($from_users)
    {
        $this->container['from_users'] = $from_users;

        return $this;
    }

    /**
     * Gets modified_date
     *
     * @return ?string
     */
    public function getModifiedDate()
    {
        return $this->container['modified_date'];
    }

    /**
     * Sets modified_date
     *
     * @param ?string $modified_date 
     *
     * @return $this
     */
    public function setModifiedDate($modified_date)
    {
        $this->container['modified_date'] = $modified_date;

        return $this;
    }

    /**
     * Gets modified_user
     *
     * @return \DocuSign\eSign\Model\UserInformation
     */
    public function getModifiedUser()
    {
        return $this->container['modified_user'];
    }

    /**
     * Sets modified_user
     *
     * @param \DocuSign\eSign\Model\UserInformation $modified_user Information about the user who last modified the envelope transfer rule.
     *
     * @return $this
     */
    public function setModifiedUser($modified_user)
    {
        $this->container['modified_user'] = $modified_user;

        return $this;
    }

    /**
     * Gets to_folder
     *
     * @return \DocuSign\eSign\Model\Folder
     */
    public function getToFolder()
    {
        return $this->container['to_folder'];
    }

    /**
     * Sets to_folder
     *
     * @param \DocuSign\eSign\Model\Folder $to_folder Information about the destination folder to which the envelope is transferred.
     *
     * @return $this
     */
    public function setToFolder($to_folder)
    {
        $this->container['to_folder'] = $to_folder;

        return $this;
    }

    /**
     * Gets to_user
     *
     * @return \DocuSign\eSign\Model\UserInformation
     */
    public function getToUser()
    {
        return $this->container['to_user'];
    }

    /**
     * Sets to_user
     *
     * @param \DocuSign\eSign\Model\UserInformation $to_user Information about the user to which the envelope is transferred.
     *
     * @return $this
     */
    public function setToUser($to_user)
    {
        $this->container['to_user'] = $to_user;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


<?php
/**
 * Context93
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Moosend API
 *
 * TODO: Add a description
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * Context93 Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Context93 implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Context93';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ab_campaign_data' => '\Swagger\Client\Model\ABCampaignData',
        'confirmation_to' => 'string',
        'created_on' => 'string',
        'delivered_on' => 'string',
        'format_type' => 'double',
        'html_content' => 'string',
        'id' => 'string',
        'is_transactional' => 'bool',
        'mailing_lists' => '\Swagger\Client\Model\MailingList85[]',
        'name' => 'string',
        'plain_content' => 'string',
        'reply_to_email' => '\Swagger\Client\Model\ReplyToEmail',
        'scheduled_for' => 'string',
        'sender' => '\Swagger\Client\Model\Sender',
        'status' => 'double',
        'subject' => 'string',
        'timezone' => 'string',
        'updated_on' => 'string',
        'web_location' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ab_campaign_data' => null,
        'confirmation_to' => null,
        'created_on' => null,
        'delivered_on' => null,
        'format_type' => 'double',
        'html_content' => null,
        'id' => null,
        'is_transactional' => null,
        'mailing_lists' => null,
        'name' => null,
        'plain_content' => null,
        'reply_to_email' => null,
        'scheduled_for' => null,
        'sender' => null,
        'status' => 'double',
        'subject' => null,
        'timezone' => null,
        'updated_on' => null,
        'web_location' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'ab_campaign_data' => 'ABCampaignData',
        'confirmation_to' => 'ConfirmationTo',
        'created_on' => 'CreatedOn',
        'delivered_on' => 'DeliveredOn',
        'format_type' => 'FormatType',
        'html_content' => 'HTMLContent',
        'id' => 'ID',
        'is_transactional' => 'IsTransactional',
        'mailing_lists' => 'MailingLists',
        'name' => 'Name',
        'plain_content' => 'PlainContent',
        'reply_to_email' => 'ReplyToEmail',
        'scheduled_for' => 'ScheduledFor',
        'sender' => 'Sender',
        'status' => 'Status',
        'subject' => 'Subject',
        'timezone' => 'Timezone',
        'updated_on' => 'UpdatedOn',
        'web_location' => 'WebLocation'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'ab_campaign_data' => 'setAbCampaignData',
        'confirmation_to' => 'setConfirmationTo',
        'created_on' => 'setCreatedOn',
        'delivered_on' => 'setDeliveredOn',
        'format_type' => 'setFormatType',
        'html_content' => 'setHtmlContent',
        'id' => 'setId',
        'is_transactional' => 'setIsTransactional',
        'mailing_lists' => 'setMailingLists',
        'name' => 'setName',
        'plain_content' => 'setPlainContent',
        'reply_to_email' => 'setReplyToEmail',
        'scheduled_for' => 'setScheduledFor',
        'sender' => 'setSender',
        'status' => 'setStatus',
        'subject' => 'setSubject',
        'timezone' => 'setTimezone',
        'updated_on' => 'setUpdatedOn',
        'web_location' => 'setWebLocation'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'ab_campaign_data' => 'getAbCampaignData',
        'confirmation_to' => 'getConfirmationTo',
        'created_on' => 'getCreatedOn',
        'delivered_on' => 'getDeliveredOn',
        'format_type' => 'getFormatType',
        'html_content' => 'getHtmlContent',
        'id' => 'getId',
        'is_transactional' => 'getIsTransactional',
        'mailing_lists' => 'getMailingLists',
        'name' => 'getName',
        'plain_content' => 'getPlainContent',
        'reply_to_email' => 'getReplyToEmail',
        'scheduled_for' => 'getScheduledFor',
        'sender' => 'getSender',
        'status' => 'getStatus',
        'subject' => 'getSubject',
        'timezone' => 'getTimezone',
        'updated_on' => 'getUpdatedOn',
        'web_location' => 'getWebLocation'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['ab_campaign_data'] = isset($data['ab_campaign_data']) ? $data['ab_campaign_data'] : null;
        $this->container['confirmation_to'] = isset($data['confirmation_to']) ? $data['confirmation_to'] : null;
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
        $this->container['delivered_on'] = isset($data['delivered_on']) ? $data['delivered_on'] : null;
        $this->container['format_type'] = isset($data['format_type']) ? $data['format_type'] : null;
        $this->container['html_content'] = isset($data['html_content']) ? $data['html_content'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['is_transactional'] = isset($data['is_transactional']) ? $data['is_transactional'] : null;
        $this->container['mailing_lists'] = isset($data['mailing_lists']) ? $data['mailing_lists'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['plain_content'] = isset($data['plain_content']) ? $data['plain_content'] : null;
        $this->container['reply_to_email'] = isset($data['reply_to_email']) ? $data['reply_to_email'] : null;
        $this->container['scheduled_for'] = isset($data['scheduled_for']) ? $data['scheduled_for'] : null;
        $this->container['sender'] = isset($data['sender']) ? $data['sender'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['updated_on'] = isset($data['updated_on']) ? $data['updated_on'] : null;
        $this->container['web_location'] = isset($data['web_location']) ? $data['web_location'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets ab_campaign_data
     * @return \Swagger\Client\Model\ABCampaignData
     */
    public function getAbCampaignData()
    {
        return $this->container['ab_campaign_data'];
    }

    /**
     * Sets ab_campaign_data
     * @param \Swagger\Client\Model\ABCampaignData $ab_campaign_data
     * @return $this
     */
    public function setAbCampaignData($ab_campaign_data)
    {
        $this->container['ab_campaign_data'] = $ab_campaign_data;

        return $this;
    }

    /**
     * Gets confirmation_to
     * @return string
     */
    public function getConfirmationTo()
    {
        return $this->container['confirmation_to'];
    }

    /**
     * Sets confirmation_to
     * @param string $confirmation_to 
     * @return $this
     */
    public function setConfirmationTo($confirmation_to)
    {
        $this->container['confirmation_to'] = $confirmation_to;

        return $this;
    }

    /**
     * Gets created_on
     * @return string
     */
    public function getCreatedOn()
    {
        return $this->container['created_on'];
    }

    /**
     * Sets created_on
     * @param string $created_on 
     * @return $this
     */
    public function setCreatedOn($created_on)
    {
        $this->container['created_on'] = $created_on;

        return $this;
    }

    /**
     * Gets delivered_on
     * @return string
     */
    public function getDeliveredOn()
    {
        return $this->container['delivered_on'];
    }

    /**
     * Sets delivered_on
     * @param string $delivered_on 
     * @return $this
     */
    public function setDeliveredOn($delivered_on)
    {
        $this->container['delivered_on'] = $delivered_on;

        return $this;
    }

    /**
     * Gets format_type
     * @return double
     */
    public function getFormatType()
    {
        return $this->container['format_type'];
    }

    /**
     * Sets format_type
     * @param double $format_type 
     * @return $this
     */
    public function setFormatType($format_type)
    {
        $this->container['format_type'] = $format_type;

        return $this;
    }

    /**
     * Gets html_content
     * @return string
     */
    public function getHtmlContent()
    {
        return $this->container['html_content'];
    }

    /**
     * Sets html_content
     * @param string $html_content 
     * @return $this
     */
    public function setHtmlContent($html_content)
    {
        $this->container['html_content'] = $html_content;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id 
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets is_transactional
     * @return bool
     */
    public function getIsTransactional()
    {
        return $this->container['is_transactional'];
    }

    /**
     * Sets is_transactional
     * @param bool $is_transactional 
     * @return $this
     */
    public function setIsTransactional($is_transactional)
    {
        $this->container['is_transactional'] = $is_transactional;

        return $this;
    }

    /**
     * Gets mailing_lists
     * @return \Swagger\Client\Model\MailingList85[]
     */
    public function getMailingLists()
    {
        return $this->container['mailing_lists'];
    }

    /**
     * Sets mailing_lists
     * @param \Swagger\Client\Model\MailingList85[] $mailing_lists 
     * @return $this
     */
    public function setMailingLists($mailing_lists)
    {
        $this->container['mailing_lists'] = $mailing_lists;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name 
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets plain_content
     * @return string
     */
    public function getPlainContent()
    {
        return $this->container['plain_content'];
    }

    /**
     * Sets plain_content
     * @param string $plain_content 
     * @return $this
     */
    public function setPlainContent($plain_content)
    {
        $this->container['plain_content'] = $plain_content;

        return $this;
    }

    /**
     * Gets reply_to_email
     * @return \Swagger\Client\Model\ReplyToEmail
     */
    public function getReplyToEmail()
    {
        return $this->container['reply_to_email'];
    }

    /**
     * Sets reply_to_email
     * @param \Swagger\Client\Model\ReplyToEmail $reply_to_email
     * @return $this
     */
    public function setReplyToEmail($reply_to_email)
    {
        $this->container['reply_to_email'] = $reply_to_email;

        return $this;
    }

    /**
     * Gets scheduled_for
     * @return string
     */
    public function getScheduledFor()
    {
        return $this->container['scheduled_for'];
    }

    /**
     * Sets scheduled_for
     * @param string $scheduled_for 
     * @return $this
     */
    public function setScheduledFor($scheduled_for)
    {
        $this->container['scheduled_for'] = $scheduled_for;

        return $this;
    }

    /**
     * Gets sender
     * @return \Swagger\Client\Model\Sender
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     * @param \Swagger\Client\Model\Sender $sender
     * @return $this
     */
    public function setSender($sender)
    {
        $this->container['sender'] = $sender;

        return $this;
    }

    /**
     * Gets status
     * @return double
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param double $status 
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets subject
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     * @param string $subject 
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets timezone
     * @return string
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     * @param string $timezone 
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets updated_on
     * @return string
     */
    public function getUpdatedOn()
    {
        return $this->container['updated_on'];
    }

    /**
     * Sets updated_on
     * @param string $updated_on 
     * @return $this
     */
    public function setUpdatedOn($updated_on)
    {
        $this->container['updated_on'] = $updated_on;

        return $this;
    }

    /**
     * Gets web_location
     * @return string
     */
    public function getWebLocation()
    {
        return $this->container['web_location'];
    }

    /**
     * Sets web_location
     * @param string $web_location 
     * @return $this
     */
    public function setWebLocation($web_location)
    {
        $this->container['web_location'] = $web_location;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}



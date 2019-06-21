<?php
/**
 * Template
 *
 * PHP version 5
 *
 * @category Class
 * @package  FormAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * API v1
 *
 * FormAPI is a service that helps you fill out and sign PDF templates.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FormAPI\Model;

use \ArrayAccess;
use \FormAPI\ObjectSerializer;

/**
 * Template Class Doc Comment
 *
 * @category Class
 * @package  FormAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Template implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'template';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'expiration_interval' => 'string',
        'webhook_url' => 'string',
        'expire_after' => 'float',
        'allow_additional_properties' => 'bool',
        'public_submissions' => 'bool',
        'slack_webhook_url' => 'string',
        'public_web_form' => 'bool',
        'editable_submissions' => 'bool',
        'expire_submissions' => 'bool',
        'name' => 'string',
        'template_type' => 'string',
        'id' => 'string',
        'page_dimensions' => 'float[][]',
        'redirect_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'expiration_interval' => null,
        'webhook_url' => null,
        'expire_after' => null,
        'allow_additional_properties' => null,
        'public_submissions' => null,
        'slack_webhook_url' => null,
        'public_web_form' => null,
        'editable_submissions' => null,
        'expire_submissions' => null,
        'name' => null,
        'template_type' => null,
        'id' => null,
        'page_dimensions' => null,
        'redirect_url' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'expiration_interval' => 'expiration_interval',
        'webhook_url' => 'webhook_url',
        'expire_after' => 'expire_after',
        'allow_additional_properties' => 'allow_additional_properties',
        'public_submissions' => 'public_submissions',
        'slack_webhook_url' => 'slack_webhook_url',
        'public_web_form' => 'public_web_form',
        'editable_submissions' => 'editable_submissions',
        'expire_submissions' => 'expire_submissions',
        'name' => 'name',
        'template_type' => 'template_type',
        'id' => 'id',
        'page_dimensions' => 'page_dimensions',
        'redirect_url' => 'redirect_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'expiration_interval' => 'setExpirationInterval',
        'webhook_url' => 'setWebhookUrl',
        'expire_after' => 'setExpireAfter',
        'allow_additional_properties' => 'setAllowAdditionalProperties',
        'public_submissions' => 'setPublicSubmissions',
        'slack_webhook_url' => 'setSlackWebhookUrl',
        'public_web_form' => 'setPublicWebForm',
        'editable_submissions' => 'setEditableSubmissions',
        'expire_submissions' => 'setExpireSubmissions',
        'name' => 'setName',
        'template_type' => 'setTemplateType',
        'id' => 'setId',
        'page_dimensions' => 'setPageDimensions',
        'redirect_url' => 'setRedirectUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'expiration_interval' => 'getExpirationInterval',
        'webhook_url' => 'getWebhookUrl',
        'expire_after' => 'getExpireAfter',
        'allow_additional_properties' => 'getAllowAdditionalProperties',
        'public_submissions' => 'getPublicSubmissions',
        'slack_webhook_url' => 'getSlackWebhookUrl',
        'public_web_form' => 'getPublicWebForm',
        'editable_submissions' => 'getEditableSubmissions',
        'expire_submissions' => 'getExpireSubmissions',
        'name' => 'getName',
        'template_type' => 'getTemplateType',
        'id' => 'getId',
        'page_dimensions' => 'getPageDimensions',
        'redirect_url' => 'getRedirectUrl'
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
        return self::$openAPIModelName;
    }

    const EXPIRATION_INTERVAL_MINUTES = 'minutes';
    const EXPIRATION_INTERVAL_HOURS = 'hours';
    const EXPIRATION_INTERVAL_DAYS = 'days';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getExpirationIntervalAllowableValues()
    {
        return [
            self::EXPIRATION_INTERVAL_MINUTES,
            self::EXPIRATION_INTERVAL_HOURS,
            self::EXPIRATION_INTERVAL_DAYS,
        ];
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
        $this->container['expiration_interval'] = isset($data['expiration_interval']) ? $data['expiration_interval'] : null;
        $this->container['webhook_url'] = isset($data['webhook_url']) ? $data['webhook_url'] : null;
        $this->container['expire_after'] = isset($data['expire_after']) ? $data['expire_after'] : null;
        $this->container['allow_additional_properties'] = isset($data['allow_additional_properties']) ? $data['allow_additional_properties'] : null;
        $this->container['public_submissions'] = isset($data['public_submissions']) ? $data['public_submissions'] : null;
        $this->container['slack_webhook_url'] = isset($data['slack_webhook_url']) ? $data['slack_webhook_url'] : null;
        $this->container['public_web_form'] = isset($data['public_web_form']) ? $data['public_web_form'] : null;
        $this->container['editable_submissions'] = isset($data['editable_submissions']) ? $data['editable_submissions'] : null;
        $this->container['expire_submissions'] = isset($data['expire_submissions']) ? $data['expire_submissions'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['template_type'] = isset($data['template_type']) ? $data['template_type'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['page_dimensions'] = isset($data['page_dimensions']) ? $data['page_dimensions'] : null;
        $this->container['redirect_url'] = isset($data['redirect_url']) ? $data['redirect_url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getExpirationIntervalAllowableValues();
        if (!is_null($this->container['expiration_interval']) && !in_array($this->container['expiration_interval'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'expiration_interval', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets expiration_interval
     *
     * @return string|null
     */
    public function getExpirationInterval()
    {
        return $this->container['expiration_interval'];
    }

    /**
     * Sets expiration_interval
     *
     * @param string|null $expiration_interval expiration_interval
     *
     * @return $this
     */
    public function setExpirationInterval($expiration_interval)
    {
        $allowedValues = $this->getExpirationIntervalAllowableValues();
        if (!is_null($expiration_interval) && !in_array($expiration_interval, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'expiration_interval', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['expiration_interval'] = $expiration_interval;

        return $this;
    }

    /**
     * Gets webhook_url
     *
     * @return string|null
     */
    public function getWebhookUrl()
    {
        return $this->container['webhook_url'];
    }

    /**
     * Sets webhook_url
     *
     * @param string|null $webhook_url webhook_url
     *
     * @return $this
     */
    public function setWebhookUrl($webhook_url)
    {
        $this->container['webhook_url'] = $webhook_url;

        return $this;
    }

    /**
     * Gets expire_after
     *
     * @return float|null
     */
    public function getExpireAfter()
    {
        return $this->container['expire_after'];
    }

    /**
     * Sets expire_after
     *
     * @param float|null $expire_after expire_after
     *
     * @return $this
     */
    public function setExpireAfter($expire_after)
    {
        $this->container['expire_after'] = $expire_after;

        return $this;
    }

    /**
     * Gets allow_additional_properties
     *
     * @return bool|null
     */
    public function getAllowAdditionalProperties()
    {
        return $this->container['allow_additional_properties'];
    }

    /**
     * Sets allow_additional_properties
     *
     * @param bool|null $allow_additional_properties allow_additional_properties
     *
     * @return $this
     */
    public function setAllowAdditionalProperties($allow_additional_properties)
    {
        $this->container['allow_additional_properties'] = $allow_additional_properties;

        return $this;
    }

    /**
     * Gets public_submissions
     *
     * @return bool|null
     */
    public function getPublicSubmissions()
    {
        return $this->container['public_submissions'];
    }

    /**
     * Sets public_submissions
     *
     * @param bool|null $public_submissions public_submissions
     *
     * @return $this
     */
    public function setPublicSubmissions($public_submissions)
    {
        $this->container['public_submissions'] = $public_submissions;

        return $this;
    }

    /**
     * Gets slack_webhook_url
     *
     * @return string|null
     */
    public function getSlackWebhookUrl()
    {
        return $this->container['slack_webhook_url'];
    }

    /**
     * Sets slack_webhook_url
     *
     * @param string|null $slack_webhook_url slack_webhook_url
     *
     * @return $this
     */
    public function setSlackWebhookUrl($slack_webhook_url)
    {
        $this->container['slack_webhook_url'] = $slack_webhook_url;

        return $this;
    }

    /**
     * Gets public_web_form
     *
     * @return bool|null
     */
    public function getPublicWebForm()
    {
        return $this->container['public_web_form'];
    }

    /**
     * Sets public_web_form
     *
     * @param bool|null $public_web_form public_web_form
     *
     * @return $this
     */
    public function setPublicWebForm($public_web_form)
    {
        $this->container['public_web_form'] = $public_web_form;

        return $this;
    }

    /**
     * Gets editable_submissions
     *
     * @return bool|null
     */
    public function getEditableSubmissions()
    {
        return $this->container['editable_submissions'];
    }

    /**
     * Sets editable_submissions
     *
     * @param bool|null $editable_submissions editable_submissions
     *
     * @return $this
     */
    public function setEditableSubmissions($editable_submissions)
    {
        $this->container['editable_submissions'] = $editable_submissions;

        return $this;
    }

    /**
     * Gets expire_submissions
     *
     * @return bool|null
     */
    public function getExpireSubmissions()
    {
        return $this->container['expire_submissions'];
    }

    /**
     * Sets expire_submissions
     *
     * @param bool|null $expire_submissions expire_submissions
     *
     * @return $this
     */
    public function setExpireSubmissions($expire_submissions)
    {
        $this->container['expire_submissions'] = $expire_submissions;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets template_type
     *
     * @return string|null
     */
    public function getTemplateType()
    {
        return $this->container['template_type'];
    }

    /**
     * Sets template_type
     *
     * @param string|null $template_type template_type
     *
     * @return $this
     */
    public function setTemplateType($template_type)
    {
        $this->container['template_type'] = $template_type;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets page_dimensions
     *
     * @return float[][]|null
     */
    public function getPageDimensions()
    {
        return $this->container['page_dimensions'];
    }

    /**
     * Sets page_dimensions
     *
     * @param float[][]|null $page_dimensions page_dimensions
     *
     * @return $this
     */
    public function setPageDimensions($page_dimensions)
    {
        $this->container['page_dimensions'] = $page_dimensions;

        return $this;
    }

    /**
     * Gets redirect_url
     *
     * @return string|null
     */
    public function getRedirectUrl()
    {
        return $this->container['redirect_url'];
    }

    /**
     * Sets redirect_url
     *
     * @param string|null $redirect_url redirect_url
     *
     * @return $this
     */
    public function setRedirectUrl($redirect_url)
    {
        $this->container['redirect_url'] = $redirect_url;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}



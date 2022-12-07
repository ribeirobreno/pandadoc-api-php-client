<?php
/**
 * WebhookEventDetailsResponse
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  PandaDoc\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * PandaDoc Public API
 *
 * PandaDoc Public API documentation
 *
 * Generated by: https://openapi-generator.tech
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace PandaDoc\Client\Model;

use \ArrayAccess;
use \PandaDoc\Client\ObjectSerializer;

/**
 * WebhookEventDetailsResponse Class Doc Comment
 *
 * @category Class
 * @package  PandaDoc\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WebhookEventDetailsResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WebhookEventDetailsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'uuid' => 'string',
        'name' => 'string',
        'type' => '\PandaDoc\Client\Model\WebhookEventTriggerEnum',
        'httpStatusCode' => 'int',
        'error' => '\PandaDoc\Client\Model\WebhookEventErrorEnum',
        'deliveryTime' => '\DateTime',
        'url' => 'string',
        'signature' => 'string',
        'requestBody' => 'string',
        'responseBody' => 'string',
        'responseHeaders' => 'string',
        'eventTime' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'uuid' => 'uuid',
        'name' => null,
        'type' => null,
        'httpStatusCode' => 'int32',
        'error' => null,
        'deliveryTime' => 'date-time',
        'url' => null,
        'signature' => null,
        'requestBody' => null,
        'responseBody' => null,
        'responseHeaders' => null,
        'eventTime' => 'date-time'
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
        'uuid' => 'uuid',
        'name' => 'name',
        'type' => 'type',
        'httpStatusCode' => 'http_status_code',
        'error' => 'error',
        'deliveryTime' => 'delivery_time',
        'url' => 'url',
        'signature' => 'signature',
        'requestBody' => 'request_body',
        'responseBody' => 'response_body',
        'responseHeaders' => 'response_headers',
        'eventTime' => 'event_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uuid' => 'setUuid',
        'name' => 'setName',
        'type' => 'setType',
        'httpStatusCode' => 'setHttpStatusCode',
        'error' => 'setError',
        'deliveryTime' => 'setDeliveryTime',
        'url' => 'setUrl',
        'signature' => 'setSignature',
        'requestBody' => 'setRequestBody',
        'responseBody' => 'setResponseBody',
        'responseHeaders' => 'setResponseHeaders',
        'eventTime' => 'setEventTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uuid' => 'getUuid',
        'name' => 'getName',
        'type' => 'getType',
        'httpStatusCode' => 'getHttpStatusCode',
        'error' => 'getError',
        'deliveryTime' => 'getDeliveryTime',
        'url' => 'getUrl',
        'signature' => 'getSignature',
        'requestBody' => 'getRequestBody',
        'responseBody' => 'getResponseBody',
        'responseHeaders' => 'getResponseHeaders',
        'eventTime' => 'getEventTime'
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
        $this->container['uuid'] = $data['uuid'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['httpStatusCode'] = $data['httpStatusCode'] ?? null;
        $this->container['error'] = $data['error'] ?? null;
        $this->container['deliveryTime'] = $data['deliveryTime'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
        $this->container['signature'] = $data['signature'] ?? null;
        $this->container['requestBody'] = $data['requestBody'] ?? null;
        $this->container['responseBody'] = $data['responseBody'] ?? null;
        $this->container['responseHeaders'] = $data['responseHeaders'] ?? null;
        $this->container['eventTime'] = $data['eventTime'] ?? null;
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
     * Gets uuid
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string|null $uuid Unique webhook subscription event identifier
     *
     * @return self
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

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
     * @param string|null $name Webhook subscription name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \PandaDoc\Client\Model\WebhookEventTriggerEnum|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \PandaDoc\Client\Model\WebhookEventTriggerEnum|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets httpStatusCode
     *
     * @return int|null
     */
    public function getHttpStatusCode()
    {
        return $this->container['httpStatusCode'];
    }

    /**
     * Sets httpStatusCode
     *
     * @param int|null $httpStatusCode Webhook subscription event response http status code
     *
     * @return self
     */
    public function setHttpStatusCode($httpStatusCode)
    {
        $this->container['httpStatusCode'] = $httpStatusCode;

        return $this;
    }

    /**
     * Gets error
     *
     * @return \PandaDoc\Client\Model\WebhookEventErrorEnum|null
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param \PandaDoc\Client\Model\WebhookEventErrorEnum|null $error error
     *
     * @return self
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

        return $this;
    }

    /**
     * Gets deliveryTime
     *
     * @return \DateTime|null
     */
    public function getDeliveryTime()
    {
        return $this->container['deliveryTime'];
    }

    /**
     * Sets deliveryTime
     *
     * @param \DateTime|null $deliveryTime Webhook subscription event delivery time
     *
     * @return self
     */
    public function setDeliveryTime($deliveryTime)
    {
        $this->container['deliveryTime'] = $deliveryTime;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url Webhook subscription event destination url
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets signature
     *
     * @return string|null
     */
    public function getSignature()
    {
        return $this->container['signature'];
    }

    /**
     * Sets signature
     *
     * @param string|null $signature Webhook subscription event digital signature
     *
     * @return self
     */
    public function setSignature($signature)
    {
        $this->container['signature'] = $signature;

        return $this;
    }

    /**
     * Gets requestBody
     *
     * @return string|null
     */
    public function getRequestBody()
    {
        return $this->container['requestBody'];
    }

    /**
     * Sets requestBody
     *
     * @param string|null $requestBody Webhook subscription event request body
     *
     * @return self
     */
    public function setRequestBody($requestBody)
    {
        $this->container['requestBody'] = $requestBody;

        return $this;
    }

    /**
     * Gets responseBody
     *
     * @return string|null
     */
    public function getResponseBody()
    {
        return $this->container['responseBody'];
    }

    /**
     * Sets responseBody
     *
     * @param string|null $responseBody Webhook subscription response body
     *
     * @return self
     */
    public function setResponseBody($responseBody)
    {
        $this->container['responseBody'] = $responseBody;

        return $this;
    }

    /**
     * Gets responseHeaders
     *
     * @return string|null
     */
    public function getResponseHeaders()
    {
        return $this->container['responseHeaders'];
    }

    /**
     * Sets responseHeaders
     *
     * @param string|null $responseHeaders Webhook subscription response headers
     *
     * @return self
     */
    public function setResponseHeaders($responseHeaders)
    {
        $this->container['responseHeaders'] = $responseHeaders;

        return $this;
    }

    /**
     * Gets eventTime
     *
     * @return \DateTime|null
     */
    public function getEventTime()
    {
        return $this->container['eventTime'];
    }

    /**
     * Sets eventTime
     *
     * @param \DateTime|null $eventTime Webhook subscription event trigger time
     *
     * @return self
     */
    public function setEventTime($eventTime)
    {
        $this->container['eventTime'] = $eventTime;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    #[ReturnTypeWillChange]
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
    #[ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

<?php
/**
 * WebhookSubscriptionItemResponse
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
 * WebhookSubscriptionItemResponse Class Doc Comment
 *
 * @category Class
 * @package  PandaDoc\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WebhookSubscriptionItemResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WebhookSubscriptionItemResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'uuid' => 'string',
        'name' => 'string',
        'url' => 'string',
        'active' => 'bool',
        'payload' => '\PandaDoc\Client\Model\WebhookSubscriptionPayloadEnum[]',
        'triggers' => '\PandaDoc\Client\Model\WebhookSubscriptionTriggerEnum[]',
        'workspaceId' => 'string',
        'sharedKey' => 'string',
        'status' => '\PandaDoc\Client\Model\WebhookSubscriptionStatusEnum'
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
        'url' => 'url',
        'active' => null,
        'payload' => null,
        'triggers' => null,
        'workspaceId' => null,
        'sharedKey' => null,
        'status' => null
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
        'url' => 'url',
        'active' => 'active',
        'payload' => 'payload',
        'triggers' => 'triggers',
        'workspaceId' => 'workspace_id',
        'sharedKey' => 'shared_key',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uuid' => 'setUuid',
        'name' => 'setName',
        'url' => 'setUrl',
        'active' => 'setActive',
        'payload' => 'setPayload',
        'triggers' => 'setTriggers',
        'workspaceId' => 'setWorkspaceId',
        'sharedKey' => 'setSharedKey',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uuid' => 'getUuid',
        'name' => 'getName',
        'url' => 'getUrl',
        'active' => 'getActive',
        'payload' => 'getPayload',
        'triggers' => 'getTriggers',
        'workspaceId' => 'getWorkspaceId',
        'sharedKey' => 'getSharedKey',
        'status' => 'getStatus'
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
        $this->container['url'] = $data['url'] ?? null;
        $this->container['active'] = $data['active'] ?? null;
        $this->container['payload'] = $data['payload'] ?? null;
        $this->container['triggers'] = $data['triggers'] ?? null;
        $this->container['workspaceId'] = $data['workspaceId'] ?? null;
        $this->container['sharedKey'] = $data['sharedKey'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
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
     * @param string|null $uuid uuid
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
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string|null $url url
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active active
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets payload
     *
     * @return \PandaDoc\Client\Model\WebhookSubscriptionPayloadEnum[]|null
     */
    public function getPayload()
    {
        return $this->container['payload'];
    }

    /**
     * Sets payload
     *
     * @param \PandaDoc\Client\Model\WebhookSubscriptionPayloadEnum[]|null $payload payload
     *
     * @return self
     */
    public function setPayload($payload)
    {
        $this->container['payload'] = $payload;

        return $this;
    }

    /**
     * Gets triggers
     *
     * @return \PandaDoc\Client\Model\WebhookSubscriptionTriggerEnum[]|null
     */
    public function getTriggers()
    {
        return $this->container['triggers'];
    }

    /**
     * Sets triggers
     *
     * @param \PandaDoc\Client\Model\WebhookSubscriptionTriggerEnum[]|null $triggers triggers
     *
     * @return self
     */
    public function setTriggers($triggers)
    {
        $this->container['triggers'] = $triggers;

        return $this;
    }

    /**
     * Gets workspaceId
     *
     * @return string|null
     */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
     * Sets workspaceId
     *
     * @param string|null $workspaceId workspaceId
     *
     * @return self
     */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;

        return $this;
    }

    /**
     * Gets sharedKey
     *
     * @return string|null
     */
    public function getSharedKey()
    {
        return $this->container['sharedKey'];
    }

    /**
     * Sets sharedKey
     *
     * @param string|null $sharedKey sharedKey
     *
     * @return self
     */
    public function setSharedKey($sharedKey)
    {
        $this->container['sharedKey'] = $sharedKey;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \PandaDoc\Client\Model\WebhookSubscriptionStatusEnum|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \PandaDoc\Client\Model\WebhookSubscriptionStatusEnum|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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

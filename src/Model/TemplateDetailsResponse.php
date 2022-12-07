<?php
/**
 * TemplateDetailsResponse
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
 * TemplateDetailsResponse Class Doc Comment
 *
 * @category Class
 * @package  PandaDoc\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TemplateDetailsResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TemplateDetailsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'dateCreated' => 'string',
        'dateModified' => 'string',
        'createdBy' => '\PandaDoc\Client\Model\ContentLibraryItemResponseCreatedBy',
        'metadata' => 'object',
        'tokens' => '\PandaDoc\Client\Model\TemplateDetailsResponseTokens[]',
        'fields' => 'object[]',
        'pricing' => '\PandaDoc\Client\Model\PricingTablesResponse',
        'tags' => 'string[]',
        'roles' => '\PandaDoc\Client\Model\TemplateDetailsResponseRoles[]',
        'version' => 'string',
        'contentPlaceholders' => '\PandaDoc\Client\Model\TemplateDetailsResponseContentPlaceholders[]',
        'images' => '\PandaDoc\Client\Model\TemplateDetailsResponseImages[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'dateCreated' => null,
        'dateModified' => null,
        'createdBy' => null,
        'metadata' => null,
        'tokens' => null,
        'fields' => null,
        'pricing' => null,
        'tags' => null,
        'roles' => null,
        'version' => null,
        'contentPlaceholders' => null,
        'images' => null
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
        'id' => 'id',
        'name' => 'name',
        'dateCreated' => 'date_created',
        'dateModified' => 'date_modified',
        'createdBy' => 'created_by',
        'metadata' => 'metadata',
        'tokens' => 'tokens',
        'fields' => 'fields',
        'pricing' => 'pricing',
        'tags' => 'tags',
        'roles' => 'roles',
        'version' => 'version',
        'contentPlaceholders' => 'content_placeholders',
        'images' => 'images'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'dateCreated' => 'setDateCreated',
        'dateModified' => 'setDateModified',
        'createdBy' => 'setCreatedBy',
        'metadata' => 'setMetadata',
        'tokens' => 'setTokens',
        'fields' => 'setFields',
        'pricing' => 'setPricing',
        'tags' => 'setTags',
        'roles' => 'setRoles',
        'version' => 'setVersion',
        'contentPlaceholders' => 'setContentPlaceholders',
        'images' => 'setImages'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'dateCreated' => 'getDateCreated',
        'dateModified' => 'getDateModified',
        'createdBy' => 'getCreatedBy',
        'metadata' => 'getMetadata',
        'tokens' => 'getTokens',
        'fields' => 'getFields',
        'pricing' => 'getPricing',
        'tags' => 'getTags',
        'roles' => 'getRoles',
        'version' => 'getVersion',
        'contentPlaceholders' => 'getContentPlaceholders',
        'images' => 'getImages'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['dateCreated'] = $data['dateCreated'] ?? null;
        $this->container['dateModified'] = $data['dateModified'] ?? null;
        $this->container['createdBy'] = $data['createdBy'] ?? null;
        $this->container['metadata'] = $data['metadata'] ?? null;
        $this->container['tokens'] = $data['tokens'] ?? null;
        $this->container['fields'] = $data['fields'] ?? null;
        $this->container['pricing'] = $data['pricing'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['roles'] = $data['roles'] ?? null;
        $this->container['version'] = $data['version'] ?? null;
        $this->container['contentPlaceholders'] = $data['contentPlaceholders'] ?? null;
        $this->container['images'] = $data['images'] ?? null;
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
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * Gets dateCreated
     *
     * @return string|null
     */
    public function getDateCreated()
    {
        return $this->container['dateCreated'];
    }

    /**
     * Sets dateCreated
     *
     * @param string|null $dateCreated dateCreated
     *
     * @return self
     */
    public function setDateCreated($dateCreated)
    {
        $this->container['dateCreated'] = $dateCreated;

        return $this;
    }

    /**
     * Gets dateModified
     *
     * @return string|null
     */
    public function getDateModified()
    {
        return $this->container['dateModified'];
    }

    /**
     * Sets dateModified
     *
     * @param string|null $dateModified dateModified
     *
     * @return self
     */
    public function setDateModified($dateModified)
    {
        $this->container['dateModified'] = $dateModified;

        return $this;
    }

    /**
     * Gets createdBy
     *
     * @return \PandaDoc\Client\Model\ContentLibraryItemResponseCreatedBy|null
     */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
     * Sets createdBy
     *
     * @param \PandaDoc\Client\Model\ContentLibraryItemResponseCreatedBy|null $createdBy createdBy
     *
     * @return self
     */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return object|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param object|null $metadata metadata
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets tokens
     *
     * @return \PandaDoc\Client\Model\TemplateDetailsResponseTokens[]|null
     */
    public function getTokens()
    {
        return $this->container['tokens'];
    }

    /**
     * Sets tokens
     *
     * @param \PandaDoc\Client\Model\TemplateDetailsResponseTokens[]|null $tokens tokens
     *
     * @return self
     */
    public function setTokens($tokens)
    {
        $this->container['tokens'] = $tokens;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return object[]|null
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param object[]|null $fields fields
     *
     * @return self
     */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets pricing
     *
     * @return \PandaDoc\Client\Model\PricingTablesResponse|null
     */
    public function getPricing()
    {
        return $this->container['pricing'];
    }

    /**
     * Sets pricing
     *
     * @param \PandaDoc\Client\Model\PricingTablesResponse|null $pricing pricing
     *
     * @return self
     */
    public function setPricing($pricing)
    {
        $this->container['pricing'] = $pricing;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[]|null $tags tags
     *
     * @return self
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets roles
     *
     * @return \PandaDoc\Client\Model\TemplateDetailsResponseRoles[]|null
     */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
     * Sets roles
     *
     * @param \PandaDoc\Client\Model\TemplateDetailsResponseRoles[]|null $roles roles
     *
     * @return self
     */
    public function setRoles($roles)
    {
        $this->container['roles'] = $roles;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string|null $version version
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets contentPlaceholders
     *
     * @return \PandaDoc\Client\Model\TemplateDetailsResponseContentPlaceholders[]|null
     */
    public function getContentPlaceholders()
    {
        return $this->container['contentPlaceholders'];
    }

    /**
     * Sets contentPlaceholders
     *
     * @param \PandaDoc\Client\Model\TemplateDetailsResponseContentPlaceholders[]|null $contentPlaceholders contentPlaceholders
     *
     * @return self
     */
    public function setContentPlaceholders($contentPlaceholders)
    {
        $this->container['contentPlaceholders'] = $contentPlaceholders;

        return $this;
    }

    /**
     * Gets images
     *
     * @return \PandaDoc\Client\Model\TemplateDetailsResponseImages[]|null
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param \PandaDoc\Client\Model\TemplateDetailsResponseImages[]|null $images images
     *
     * @return self
     */
    public function setImages($images)
    {
        $this->container['images'] = $images;

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

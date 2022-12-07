<?php
/**
 * DocumentCreateByTemplateRequest
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
 * DocumentCreateByTemplateRequest Class Doc Comment
 *
 * @category Class
 * @package  PandaDoc\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DocumentCreateByTemplateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DocumentCreateByTemplateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'templateUuid' => 'string',
        'folderUuid' => 'string',
        'recipients' => '\PandaDoc\Client\Model\DocumentCreateByTemplateRequestRecipients[]',
        'tokens' => '\PandaDoc\Client\Model\DocumentCreateByTemplateRequestTokens[]',
        'fields' => 'object',
        'metadata' => 'object',
        'tags' => 'string[]',
        'images' => '\PandaDoc\Client\Model\DocumentCreateByTemplateRequestImages[]',
        'pricingTables' => '\PandaDoc\Client\Model\PricingTableRequest[]',
        'contentPlaceholders' => '\PandaDoc\Client\Model\DocumentCreateByTemplateRequestContentPlaceholders[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'templateUuid' => null,
        'folderUuid' => null,
        'recipients' => null,
        'tokens' => null,
        'fields' => null,
        'metadata' => null,
        'tags' => null,
        'images' => null,
        'pricingTables' => null,
        'contentPlaceholders' => null
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
        'name' => 'name',
        'templateUuid' => 'template_uuid',
        'folderUuid' => 'folder_uuid',
        'recipients' => 'recipients',
        'tokens' => 'tokens',
        'fields' => 'fields',
        'metadata' => 'metadata',
        'tags' => 'tags',
        'images' => 'images',
        'pricingTables' => 'pricing_tables',
        'contentPlaceholders' => 'content_placeholders'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'templateUuid' => 'setTemplateUuid',
        'folderUuid' => 'setFolderUuid',
        'recipients' => 'setRecipients',
        'tokens' => 'setTokens',
        'fields' => 'setFields',
        'metadata' => 'setMetadata',
        'tags' => 'setTags',
        'images' => 'setImages',
        'pricingTables' => 'setPricingTables',
        'contentPlaceholders' => 'setContentPlaceholders'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'templateUuid' => 'getTemplateUuid',
        'folderUuid' => 'getFolderUuid',
        'recipients' => 'getRecipients',
        'tokens' => 'getTokens',
        'fields' => 'getFields',
        'metadata' => 'getMetadata',
        'tags' => 'getTags',
        'images' => 'getImages',
        'pricingTables' => 'getPricingTables',
        'contentPlaceholders' => 'getContentPlaceholders'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['templateUuid'] = $data['templateUuid'] ?? null;
        $this->container['folderUuid'] = $data['folderUuid'] ?? null;
        $this->container['recipients'] = $data['recipients'] ?? null;
        $this->container['tokens'] = $data['tokens'] ?? null;
        $this->container['fields'] = $data['fields'] ?? null;
        $this->container['metadata'] = $data['metadata'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['images'] = $data['images'] ?? null;
        $this->container['pricingTables'] = $data['pricingTables'] ?? null;
        $this->container['contentPlaceholders'] = $data['contentPlaceholders'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['templateUuid'] === null) {
            $invalidProperties[] = "'templateUuid' can't be null";
        }
        if ($this->container['recipients'] === null) {
            $invalidProperties[] = "'recipients' can't be null";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name the document you are creating.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets templateUuid
     *
     * @return string
     */
    public function getTemplateUuid()
    {
        return $this->container['templateUuid'];
    }

    /**
     * Sets templateUuid
     *
     * @param string $templateUuid The ID of a template you want to use. You can copy it from an in app template url such as `https://app.pandadoc.com/a/#/templates/{ID}/content`. A template ID is also obtained by listing templates.
     *
     * @return self
     */
    public function setTemplateUuid($templateUuid)
    {
        $this->container['templateUuid'] = $templateUuid;

        return $this;
    }

    /**
     * Gets folderUuid
     *
     * @return string|null
     */
    public function getFolderUuid()
    {
        return $this->container['folderUuid'];
    }

    /**
     * Sets folderUuid
     *
     * @param string|null $folderUuid folderUuid
     *
     * @return self
     */
    public function setFolderUuid($folderUuid)
    {
        $this->container['folderUuid'] = $folderUuid;

        return $this;
    }

    /**
     * Gets recipients
     *
     * @return \PandaDoc\Client\Model\DocumentCreateByTemplateRequestRecipients[]
     */
    public function getRecipients()
    {
        return $this->container['recipients'];
    }

    /**
     * Sets recipients
     *
     * @param \PandaDoc\Client\Model\DocumentCreateByTemplateRequestRecipients[] $recipients The list of recipients you're sending the document to. Every object must contain the email parameter. The `role`, `first_name` and `last_name` parameters are optional. If the `role` parameter passed, a person is assigned all fields matching their corresponding role. If not passed, a person will receive a read-only link to view the document. If the `first_name` and `last_name` not passed the system 1. creates a new contact, if none exists with the given `email`; or 2. gets the existing contact with the given `email` that already exists.
     *
     * @return self
     */
    public function setRecipients($recipients)
    {
        $this->container['recipients'] = $recipients;

        return $this;
    }

    /**
     * Gets tokens
     *
     * @return \PandaDoc\Client\Model\DocumentCreateByTemplateRequestTokens[]|null
     */
    public function getTokens()
    {
        return $this->container['tokens'];
    }

    /**
     * Sets tokens
     *
     * @param \PandaDoc\Client\Model\DocumentCreateByTemplateRequestTokens[]|null $tokens You can pass a list of tokens/values to pre-fill tokens used in a template. Name is a token name in a template. Value is a real value you would like to replace a token with.
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
     * @return object|null
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param object|null $fields You can pass a list of fields/values to pre-fill fields used in a template. Note that the Signature field can't be pre-filled.
     *
     * @return self
     */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;

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
     * @param object|null $metadata You can pass arbitrary data in the key-value format to associate custom information with a document. This information is returned in any API requests for the document details by id.
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

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
     * @param string[]|null $tags Mark your document with one or several tags.
     *
     * @return self
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets images
     *
     * @return \PandaDoc\Client\Model\DocumentCreateByTemplateRequestImages[]|null
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param \PandaDoc\Client\Model\DocumentCreateByTemplateRequestImages[]|null $images You can pass a list of images to image blocks (one image in one block) for replacement.
     *
     * @return self
     */
    public function setImages($images)
    {
        $this->container['images'] = $images;

        return $this;
    }

    /**
     * Gets pricingTables
     *
     * @return \PandaDoc\Client\Model\PricingTableRequest[]|null
     */
    public function getPricingTables()
    {
        return $this->container['pricingTables'];
    }

    /**
     * Sets pricingTables
     *
     * @param \PandaDoc\Client\Model\PricingTableRequest[]|null $pricingTables Information to construct or populate a pricing table can be passed when creating a document. All product information must be passed when creating a new document. Products stored in PandaDoc cannot be used to populate table rows at this time. Keep in mind that this is an array, so multiple table objects can be passed to a document. Make sure that \"Automatically add products to this table\" is enabled in the PandaDoc template pricing tables you wish to populate via API.
     *
     * @return self
     */
    public function setPricingTables($pricingTables)
    {
        $this->container['pricingTables'] = $pricingTables;

        return $this;
    }

    /**
     * Gets contentPlaceholders
     *
     * @return \PandaDoc\Client\Model\DocumentCreateByTemplateRequestContentPlaceholders[]|null
     */
    public function getContentPlaceholders()
    {
        return $this->container['contentPlaceholders'];
    }

    /**
     * Sets contentPlaceholders
     *
     * @param \PandaDoc\Client\Model\DocumentCreateByTemplateRequestContentPlaceholders[]|null $contentPlaceholders You may replace Content Library Item Placeholders with a few content library items each and pre-fill fields/variables values, pricing table items, and assign recipients to roles from there.
     *
     * @return self
     */
    public function setContentPlaceholders($contentPlaceholders)
    {
        $this->container['contentPlaceholders'] = $contentPlaceholders;

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

<?php
/**
 * DocumentCreateRequest
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
 * DocumentCreateRequest Class Doc Comment
 *
 * @category Class
 * @package  PandaDoc\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DocumentCreateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DocumentCreateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'templateUuid' => 'string',
        'folderUuid' => 'string',
        'owner' => 'array<string,string>',
        'recipients' => '\PandaDoc\Client\Model\DocumentCreateRequestRecipients[]',
        'tokens' => '\PandaDoc\Client\Model\DocumentCreateByTemplateRequestTokens[]',
        'fields' => 'object',
        'metadata' => 'object',
        'tags' => 'string[]',
        'images' => '\PandaDoc\Client\Model\DocumentCreateRequestImages[]',
        'pricingTables' => '\PandaDoc\Client\Model\PricingTableRequest[]',
        'contentPlaceholders' => '\PandaDoc\Client\Model\DocumentCreateRequestContentPlaceholders[]',
        'url' => 'string',
        'parseFormFields' => 'bool'
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
        'owner' => null,
        'recipients' => null,
        'tokens' => null,
        'fields' => null,
        'metadata' => null,
        'tags' => null,
        'images' => null,
        'pricingTables' => null,
        'contentPlaceholders' => null,
        'url' => null,
        'parseFormFields' => null
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
        'owner' => 'owner',
        'recipients' => 'recipients',
        'tokens' => 'tokens',
        'fields' => 'fields',
        'metadata' => 'metadata',
        'tags' => 'tags',
        'images' => 'images',
        'pricingTables' => 'pricing_tables',
        'contentPlaceholders' => 'content_placeholders',
        'url' => 'url',
        'parseFormFields' => 'parse_form_fields'
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
        'owner' => 'setOwner',
        'recipients' => 'setRecipients',
        'tokens' => 'setTokens',
        'fields' => 'setFields',
        'metadata' => 'setMetadata',
        'tags' => 'setTags',
        'images' => 'setImages',
        'pricingTables' => 'setPricingTables',
        'contentPlaceholders' => 'setContentPlaceholders',
        'url' => 'setUrl',
        'parseFormFields' => 'setParseFormFields'
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
        'owner' => 'getOwner',
        'recipients' => 'getRecipients',
        'tokens' => 'getTokens',
        'fields' => 'getFields',
        'metadata' => 'getMetadata',
        'tags' => 'getTags',
        'images' => 'getImages',
        'pricingTables' => 'getPricingTables',
        'contentPlaceholders' => 'getContentPlaceholders',
        'url' => 'getUrl',
        'parseFormFields' => 'getParseFormFields'
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
        $this->container['owner'] = $data['owner'] ?? null;
        $this->container['recipients'] = $data['recipients'] ?? null;
        $this->container['tokens'] = $data['tokens'] ?? null;
        $this->container['fields'] = $data['fields'] ?? null;
        $this->container['metadata'] = $data['metadata'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['images'] = $data['images'] ?? null;
        $this->container['pricingTables'] = $data['pricingTables'] ?? null;
        $this->container['contentPlaceholders'] = $data['contentPlaceholders'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
        $this->container['parseFormFields'] = $data['parseFormFields'] ?? null;
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
     * @param string|null $name Name the document you are creating.
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
     * @return string|null
     */
    public function getTemplateUuid()
    {
        return $this->container['templateUuid'];
    }

    /**
     * Sets templateUuid
     *
     * @param string|null $templateUuid ID of the template you want to use. You can copy it from an in-app template URL such as `https://app.pandadoc.com/a/#/templates/{ID}/content`. A template ID is also obtained by listing templates.
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
     * @param string|null $folderUuid ID of the folder where the created document should be stored.
     *
     * @return self
     */
    public function setFolderUuid($folderUuid)
    {
        $this->container['folderUuid'] = $folderUuid;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return array<string,string>|null
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param array<string,string>|null $owner You can set an owner of a document as an `email` or `membership_id`
     *
     * @return self
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets recipients
     *
     * @return \PandaDoc\Client\Model\DocumentCreateRequestRecipients[]|null
     */
    public function getRecipients()
    {
        return $this->container['recipients'];
    }

    /**
     * Sets recipients
     *
     * @param \PandaDoc\Client\Model\DocumentCreateRequestRecipients[]|null $recipients The list of recipients you're sending the document to. Every object must contain the `email` parameter. The `role`, `first_name` and `last_name` parameters are optional. If the `role` parameter is passed, a person is assigned all fields matching their corresponding role. If a role was not passed, a person receives a read-only link to view the document. If the `first_name` and `last_name` are not passed, the system does this 1. Creates a new contact, if none exists with the given `email`; or 2. Gets the existing contact with the given `email` that already exists.
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
     * @param object|null $fields You can pass a list of fields/values to pre-fill fields used in a template. Please note Signature field can't be pre-filled.
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
     * @return \PandaDoc\Client\Model\DocumentCreateRequestImages[]|null
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param \PandaDoc\Client\Model\DocumentCreateRequestImages[]|null $images You can pass a list of images to image blocks (one image in one block) for replacement.
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
     * @param \PandaDoc\Client\Model\PricingTableRequest[]|null $pricingTables Information to construct or populate a pricing table can be passed when creating a document. All product information must be passed when creating a new document. Products stored in PandaDoc cannot be used to populate table rows at this time. Keep in mind that this is an array, so multiple table objects can be passed to a document.
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
     * @return \PandaDoc\Client\Model\DocumentCreateRequestContentPlaceholders[]|null
     */
    public function getContentPlaceholders()
    {
        return $this->container['contentPlaceholders'];
    }

    /**
     * Sets contentPlaceholders
     *
     * @param \PandaDoc\Client\Model\DocumentCreateRequestContentPlaceholders[]|null $contentPlaceholders You may replace Content Library Item Placeholders with a few content library items each and pre-fill fields/variables values, pricing table items, and assign recipients to roles from there.
     *
     * @return self
     */
    public function setContentPlaceholders($contentPlaceholders)
    {
        $this->container['contentPlaceholders'] = $contentPlaceholders;

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
     * @param string|null $url Use a URL to specify the PDF. We support only URLs starting with https.
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets parseFormFields
     *
     * @return bool|null
     */
    public function getParseFormFields()
    {
        return $this->container['parseFormFields'];
    }

    /**
     * Sets parseFormFields
     *
     * @param bool|null $parseFormFields Set this parameter as true if you create a document from a PDF with form fields and as false if you upload a PDF with field tags.
     *
     * @return self
     */
    public function setParseFormFields($parseFormFields)
    {
        $this->container['parseFormFields'] = $parseFormFields;

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
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
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

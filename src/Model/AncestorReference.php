<?php
/**
 * AncestorReference
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  macropage\SDKs\ebay\rest\taxonomy
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Taxonomy API
 *
 * Use the Taxonomy API to discover the most appropriate eBay categories under which sellers can offer inventory items for sale, and the most likely categories under which buyers can browse or search for items to purchase. In addition, the Taxonomy API provides metadata about the required and recommended category aspects to include in listings, and also has two operations to retrieve parts compatibility information.
 *
 * The version of the OpenAPI document: v1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace macropage\SDKs\ebay\rest\taxonomy\Model;

use \ArrayAccess;
use \macropage\SDKs\ebay\rest\taxonomy\ObjectSerializer;

/**
 * AncestorReference Class Doc Comment
 *
 * @category Class
 * @description This type contains information about one of the ancestors of a suggested category. An ordered list of these references describes the path from the suggested category to the root of the category tree it belongs to.
 * @package  macropage\SDKs\ebay\rest\taxonomy
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AncestorReference implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AncestorReference';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'categoryId' => 'string',
        'categoryName' => 'string',
        'categorySubtreeNodeHref' => 'string',
        'categoryTreeNodeLevel' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'categoryId' => null,
        'categoryName' => null,
        'categorySubtreeNodeHref' => null,
        'categoryTreeNodeLevel' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'categoryId' => false,
		'categoryName' => false,
		'categorySubtreeNodeHref' => false,
		'categoryTreeNodeLevel' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'categoryId' => 'categoryId',
        'categoryName' => 'categoryName',
        'categorySubtreeNodeHref' => 'categorySubtreeNodeHref',
        'categoryTreeNodeLevel' => 'categoryTreeNodeLevel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'categoryId' => 'setCategoryId',
        'categoryName' => 'setCategoryName',
        'categorySubtreeNodeHref' => 'setCategorySubtreeNodeHref',
        'categoryTreeNodeLevel' => 'setCategoryTreeNodeLevel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'categoryId' => 'getCategoryId',
        'categoryName' => 'getCategoryName',
        'categorySubtreeNodeHref' => 'getCategorySubtreeNodeHref',
        'categoryTreeNodeLevel' => 'getCategoryTreeNodeLevel'
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
        $this->setIfExists('categoryId', $data ?? [], null);
        $this->setIfExists('categoryName', $data ?? [], null);
        $this->setIfExists('categorySubtreeNodeHref', $data ?? [], null);
        $this->setIfExists('categoryTreeNodeLevel', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets categoryId
     *
     * @return string|null
     */
    public function getCategoryId()
    {
        return $this->container['categoryId'];
    }

    /**
     * Sets categoryId
     *
     * @param string|null $categoryId The unique identifier of the eBay ancestor category.      <br /><br />     <span class=\"tablenote\"> <strong>Note:</strong> The root node of a full default category tree includes the <b>categoryId</b> field, but its value should not be relied upon. It provides no useful information for application development. </span>
     *
     * @return self
     */
    public function setCategoryId($categoryId)
    {
        if (is_null($categoryId)) {
            throw new \InvalidArgumentException('non-nullable categoryId cannot be null');
        }
        $this->container['categoryId'] = $categoryId;

        return $this;
    }

    /**
     * Gets categoryName
     *
     * @return string|null
     */
    public function getCategoryName()
    {
        return $this->container['categoryName'];
    }

    /**
     * Sets categoryName
     *
     * @param string|null $categoryName The name of the ancestor category identified by <b>categoryId</b>.
     *
     * @return self
     */
    public function setCategoryName($categoryName)
    {
        if (is_null($categoryName)) {
            throw new \InvalidArgumentException('non-nullable categoryName cannot be null');
        }
        $this->container['categoryName'] = $categoryName;

        return $this;
    }

    /**
     * Gets categorySubtreeNodeHref
     *
     * @return string|null
     */
    public function getCategorySubtreeNodeHref()
    {
        return $this->container['categorySubtreeNodeHref'];
    }

    /**
     * Sets categorySubtreeNodeHref
     *
     * @param string|null $categorySubtreeNodeHref The href portion of the <b>getCategorySubtree</b> call that retrieves the subtree below the ancestor category node.
     *
     * @return self
     */
    public function setCategorySubtreeNodeHref($categorySubtreeNodeHref)
    {
        if (is_null($categorySubtreeNodeHref)) {
            throw new \InvalidArgumentException('non-nullable categorySubtreeNodeHref cannot be null');
        }
        $this->container['categorySubtreeNodeHref'] = $categorySubtreeNodeHref;

        return $this;
    }

    /**
     * Gets categoryTreeNodeLevel
     *
     * @return int|null
     */
    public function getCategoryTreeNodeLevel()
    {
        return $this->container['categoryTreeNodeLevel'];
    }

    /**
     * Sets categoryTreeNodeLevel
     *
     * @param int|null $categoryTreeNodeLevel The absolute level of the ancestor category node in the hierarchy of its category tree.<br /><br /><span class=\"tablenote\"> <strong>Note:</strong> The root node of any full category tree is always at level <code><b>0</b></code>. </span>
     *
     * @return self
     */
    public function setCategoryTreeNodeLevel($categoryTreeNodeLevel)
    {
        if (is_null($categoryTreeNodeLevel)) {
            throw new \InvalidArgumentException('non-nullable categoryTreeNodeLevel cannot be null');
        }
        $this->container['categoryTreeNodeLevel'] = $categoryTreeNodeLevel;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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



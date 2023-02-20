<?php
/**
 * AspectConstraint
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
 * AspectConstraint Class Doc Comment
 *
 * @category Class
 * @description This type contains information about the formatting, occurrence, and support of an aspect.
 * @package  macropage\SDKs\ebay\rest\taxonomy
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AspectConstraint implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AspectConstraint';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'aspectApplicableTo' => 'string[]',
        'aspectDataType' => 'string',
        'aspectEnabledForVariations' => 'bool',
        'aspectFormat' => 'string',
        'aspectMaxLength' => 'int',
        'aspectMode' => 'string',
        'aspectRequired' => 'bool',
        'aspectUsage' => 'string',
        'expectedRequiredByDate' => 'string',
        'itemToAspectCardinality' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'aspectApplicableTo' => null,
        'aspectDataType' => null,
        'aspectEnabledForVariations' => null,
        'aspectFormat' => null,
        'aspectMaxLength' => 'int32',
        'aspectMode' => null,
        'aspectRequired' => null,
        'aspectUsage' => null,
        'expectedRequiredByDate' => null,
        'itemToAspectCardinality' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'aspectApplicableTo' => false,
		'aspectDataType' => false,
		'aspectEnabledForVariations' => false,
		'aspectFormat' => false,
		'aspectMaxLength' => false,
		'aspectMode' => false,
		'aspectRequired' => false,
		'aspectUsage' => false,
		'expectedRequiredByDate' => false,
		'itemToAspectCardinality' => false
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
        'aspectApplicableTo' => 'aspectApplicableTo',
        'aspectDataType' => 'aspectDataType',
        'aspectEnabledForVariations' => 'aspectEnabledForVariations',
        'aspectFormat' => 'aspectFormat',
        'aspectMaxLength' => 'aspectMaxLength',
        'aspectMode' => 'aspectMode',
        'aspectRequired' => 'aspectRequired',
        'aspectUsage' => 'aspectUsage',
        'expectedRequiredByDate' => 'expectedRequiredByDate',
        'itemToAspectCardinality' => 'itemToAspectCardinality'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aspectApplicableTo' => 'setAspectApplicableTo',
        'aspectDataType' => 'setAspectDataType',
        'aspectEnabledForVariations' => 'setAspectEnabledForVariations',
        'aspectFormat' => 'setAspectFormat',
        'aspectMaxLength' => 'setAspectMaxLength',
        'aspectMode' => 'setAspectMode',
        'aspectRequired' => 'setAspectRequired',
        'aspectUsage' => 'setAspectUsage',
        'expectedRequiredByDate' => 'setExpectedRequiredByDate',
        'itemToAspectCardinality' => 'setItemToAspectCardinality'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aspectApplicableTo' => 'getAspectApplicableTo',
        'aspectDataType' => 'getAspectDataType',
        'aspectEnabledForVariations' => 'getAspectEnabledForVariations',
        'aspectFormat' => 'getAspectFormat',
        'aspectMaxLength' => 'getAspectMaxLength',
        'aspectMode' => 'getAspectMode',
        'aspectRequired' => 'getAspectRequired',
        'aspectUsage' => 'getAspectUsage',
        'expectedRequiredByDate' => 'getExpectedRequiredByDate',
        'itemToAspectCardinality' => 'getItemToAspectCardinality'
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
        $this->setIfExists('aspectApplicableTo', $data ?? [], null);
        $this->setIfExists('aspectDataType', $data ?? [], null);
        $this->setIfExists('aspectEnabledForVariations', $data ?? [], null);
        $this->setIfExists('aspectFormat', $data ?? [], null);
        $this->setIfExists('aspectMaxLength', $data ?? [], null);
        $this->setIfExists('aspectMode', $data ?? [], null);
        $this->setIfExists('aspectRequired', $data ?? [], null);
        $this->setIfExists('aspectUsage', $data ?? [], null);
        $this->setIfExists('expectedRequiredByDate', $data ?? [], null);
        $this->setIfExists('itemToAspectCardinality', $data ?? [], null);
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
     * Gets aspectApplicableTo
     *
     * @return string[]|null
     */
    public function getAspectApplicableTo()
    {
        return $this->container['aspectApplicableTo'];
    }

    /**
     * Sets aspectApplicableTo
     *
     * @param string[]|null $aspectApplicableTo This value indicate if the aspect identified by the <b>aspects.localizedAspectName</b> field is a product aspect (relevant to catalog products in the category) or an item/instance aspect, which is an aspect whose value will vary based on a particular instance of the product.
     *
     * @return self
     */
    public function setAspectApplicableTo($aspectApplicableTo)
    {
        if (is_null($aspectApplicableTo)) {
            throw new \InvalidArgumentException('non-nullable aspectApplicableTo cannot be null');
        }
        $this->container['aspectApplicableTo'] = $aspectApplicableTo;

        return $this;
    }

    /**
     * Gets aspectDataType
     *
     * @return string|null
     */
    public function getAspectDataType()
    {
        return $this->container['aspectDataType'];
    }

    /**
     * Sets aspectDataType
     *
     * @param string|null $aspectDataType The data type of this aspect. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/taxonomy/types/txn:AspectDataTypeEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setAspectDataType($aspectDataType)
    {
        if (is_null($aspectDataType)) {
            throw new \InvalidArgumentException('non-nullable aspectDataType cannot be null');
        }
        $this->container['aspectDataType'] = $aspectDataType;

        return $this;
    }

    /**
     * Gets aspectEnabledForVariations
     *
     * @return bool|null
     */
    public function getAspectEnabledForVariations()
    {
        return $this->container['aspectEnabledForVariations'];
    }

    /**
     * Sets aspectEnabledForVariations
     *
     * @param bool|null $aspectEnabledForVariations A value of <code>true</code> indicates that this aspect can be used to help identify item variations.
     *
     * @return self
     */
    public function setAspectEnabledForVariations($aspectEnabledForVariations)
    {
        if (is_null($aspectEnabledForVariations)) {
            throw new \InvalidArgumentException('non-nullable aspectEnabledForVariations cannot be null');
        }
        $this->container['aspectEnabledForVariations'] = $aspectEnabledForVariations;

        return $this;
    }

    /**
     * Gets aspectFormat
     *
     * @return string|null
     */
    public function getAspectFormat()
    {
        return $this->container['aspectFormat'];
    }

    /**
     * Sets aspectFormat
     *
     * @param string|null $aspectFormat <i>Returned only if</i> the value of <b>aspectDataType</b> identifies a data type that requires specific formatting. Currently, this field provides formatting hints as follows: <ul> <li><b>DATE</b>: <code>YYYY</code>, <code>YYYYMM</code>, <code>YYYYMMDD</code></li> <li><b>NUMBER</b>: <code>int32</code>, <code>double</code></li> </ul>
     *
     * @return self
     */
    public function setAspectFormat($aspectFormat)
    {
        if (is_null($aspectFormat)) {
            throw new \InvalidArgumentException('non-nullable aspectFormat cannot be null');
        }
        $this->container['aspectFormat'] = $aspectFormat;

        return $this;
    }

    /**
     * Gets aspectMaxLength
     *
     * @return int|null
     */
    public function getAspectMaxLength()
    {
        return $this->container['aspectMaxLength'];
    }

    /**
     * Sets aspectMaxLength
     *
     * @param int|null $aspectMaxLength The maximum length of the item/instance aspect's value. The seller must make sure not to exceed this length when specifying the instance aspect's value for a product. This field is only returned for instance aspects.
     *
     * @return self
     */
    public function setAspectMaxLength($aspectMaxLength)
    {
        if (is_null($aspectMaxLength)) {
            throw new \InvalidArgumentException('non-nullable aspectMaxLength cannot be null');
        }
        $this->container['aspectMaxLength'] = $aspectMaxLength;

        return $this;
    }

    /**
     * Gets aspectMode
     *
     * @return string|null
     */
    public function getAspectMode()
    {
        return $this->container['aspectMode'];
    }

    /**
     * Sets aspectMode
     *
     * @param string|null $aspectMode The manner in which values of this aspect must be specified by the seller (as free text or by selecting from available options).  For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/taxonomy/types/txn:AspectModeEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setAspectMode($aspectMode)
    {
        if (is_null($aspectMode)) {
            throw new \InvalidArgumentException('non-nullable aspectMode cannot be null');
        }
        $this->container['aspectMode'] = $aspectMode;

        return $this;
    }

    /**
     * Gets aspectRequired
     *
     * @return bool|null
     */
    public function getAspectRequired()
    {
        return $this->container['aspectRequired'];
    }

    /**
     * Sets aspectRequired
     *
     * @param bool|null $aspectRequired A value of <code>true</code> indicates that this aspect is required when offering items in the specified category.
     *
     * @return self
     */
    public function setAspectRequired($aspectRequired)
    {
        if (is_null($aspectRequired)) {
            throw new \InvalidArgumentException('non-nullable aspectRequired cannot be null');
        }
        $this->container['aspectRequired'] = $aspectRequired;

        return $this;
    }

    /**
     * Gets aspectUsage
     *
     * @return string|null
     */
    public function getAspectUsage()
    {
        return $this->container['aspectUsage'];
    }

    /**
     * Sets aspectUsage
     *
     * @param string|null $aspectUsage The enumeration value returned in this field will indicate if the corresponding aspect is recommended or optional. <br /><br /><span class=\"tablenote\"> <strong>Note:</strong> This field is always returned, even for hard-mandated/required aspects (where <code><strong>aspectRequired</strong>: true</code>). The value returned for required aspects will be <code>RECOMMENDED</code>, but they are actually required and a seller will be blocked from listing or revising an item without these aspects. </span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/taxonomy/types/txn:AspectUsageEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setAspectUsage($aspectUsage)
    {
        if (is_null($aspectUsage)) {
            throw new \InvalidArgumentException('non-nullable aspectUsage cannot be null');
        }
        $this->container['aspectUsage'] = $aspectUsage;

        return $this;
    }

    /**
     * Gets expectedRequiredByDate
     *
     * @return string|null
     */
    public function getExpectedRequiredByDate()
    {
        return $this->container['expectedRequiredByDate'];
    }

    /**
     * Sets expectedRequiredByDate
     *
     * @param string|null $expectedRequiredByDate The expected date after which the aspect will be required.<br /><br /><span class=\"tablenote\"> <strong>Note:</strong> The value returned in this field specifies only an approximate date, which may not reflect the actual date after which the aspect is required.</span>
     *
     * @return self
     */
    public function setExpectedRequiredByDate($expectedRequiredByDate)
    {
        if (is_null($expectedRequiredByDate)) {
            throw new \InvalidArgumentException('non-nullable expectedRequiredByDate cannot be null');
        }
        $this->container['expectedRequiredByDate'] = $expectedRequiredByDate;

        return $this;
    }

    /**
     * Gets itemToAspectCardinality
     *
     * @return string|null
     */
    public function getItemToAspectCardinality()
    {
        return $this->container['itemToAspectCardinality'];
    }

    /**
     * Sets itemToAspectCardinality
     *
     * @param string|null $itemToAspectCardinality Indicates whether this aspect can accept single or multiple values for items in the specified category.<br /><br /><span class=\"tablenote\"> <strong>Note:</strong> Up to 30 values can be supplied for aspects that accept multiple values.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/commerce/taxonomy/types/txn:ItemToAspectCardinalityEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setItemToAspectCardinality($itemToAspectCardinality)
    {
        if (is_null($itemToAspectCardinality)) {
            throw new \InvalidArgumentException('non-nullable itemToAspectCardinality cannot be null');
        }
        $this->container['itemToAspectCardinality'] = $itemToAspectCardinality;

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



<?php
/**
 * AffordabilityExpenseEvent
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Finances
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\Finances;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * AffordabilityExpenseEvent Class Doc Comment
 *
 * @category Class
 * @description An expense related to an affordability promotion.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class AffordabilityExpenseEvent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AffordabilityExpenseEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amazon_order_id' => 'string',
        'posted_date' => '\DateTime',
        'marketplace_id' => 'string',
        'transaction_type' => 'string',
        'base_expense' => '\SellingPartnerApi\Model\Finances\Currency',
        'tax_type_cgst' => '\SellingPartnerApi\Model\Finances\Currency',
        'tax_type_sgst' => '\SellingPartnerApi\Model\Finances\Currency',
        'tax_type_igst' => '\SellingPartnerApi\Model\Finances\Currency',
        'total_expense' => '\SellingPartnerApi\Model\Finances\Currency'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amazon_order_id' => null,
        'posted_date' => 'date-time',
        'marketplace_id' => null,
        'transaction_type' => null,
        'base_expense' => null,
        'tax_type_cgst' => null,
        'tax_type_sgst' => null,
        'tax_type_igst' => null,
        'total_expense' => null
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
        'amazon_order_id' => 'AmazonOrderId',
        'posted_date' => 'PostedDate',
        'marketplace_id' => 'MarketplaceId',
        'transaction_type' => 'TransactionType',
        'base_expense' => 'BaseExpense',
        'tax_type_cgst' => 'TaxTypeCGST',
        'tax_type_sgst' => 'TaxTypeSGST',
        'tax_type_igst' => 'TaxTypeIGST',
        'total_expense' => 'TotalExpense'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amazon_order_id' => 'setAmazonOrderId',
        'posted_date' => 'setPostedDate',
        'marketplace_id' => 'setMarketplaceId',
        'transaction_type' => 'setTransactionType',
        'base_expense' => 'setBaseExpense',
        'tax_type_cgst' => 'setTaxTypeCgst',
        'tax_type_sgst' => 'setTaxTypeSgst',
        'tax_type_igst' => 'setTaxTypeIgst',
        'total_expense' => 'setTotalExpense'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amazon_order_id' => 'getAmazonOrderId',
        'posted_date' => 'getPostedDate',
        'marketplace_id' => 'getMarketplaceId',
        'transaction_type' => 'getTransactionType',
        'base_expense' => 'getBaseExpense',
        'tax_type_cgst' => 'getTaxTypeCgst',
        'tax_type_sgst' => 'getTaxTypeSgst',
        'tax_type_igst' => 'getTaxTypeIgst',
        'total_expense' => 'getTotalExpense'
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
        $this->container['amazon_order_id'] = $data['amazon_order_id'] ?? null;
        $this->container['posted_date'] = $data['posted_date'] ?? null;
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['transaction_type'] = $data['transaction_type'] ?? null;
        $this->container['base_expense'] = $data['base_expense'] ?? null;
        $this->container['tax_type_cgst'] = $data['tax_type_cgst'] ?? null;
        $this->container['tax_type_sgst'] = $data['tax_type_sgst'] ?? null;
        $this->container['tax_type_igst'] = $data['tax_type_igst'] ?? null;
        $this->container['total_expense'] = $data['total_expense'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['tax_type_cgst'] === null) {
            $invalidProperties[] = "'tax_type_cgst' can't be null";
        }
        if ($this->container['tax_type_sgst'] === null) {
            $invalidProperties[] = "'tax_type_sgst' can't be null";
        }
        if ($this->container['tax_type_igst'] === null) {
            $invalidProperties[] = "'tax_type_igst' can't be null";
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
     * Gets amazon_order_id
     *
     * @return string|null
     */
    public function getAmazonOrderId()
    {
        return $this->container['amazon_order_id'];
    }

    /**
     * Sets amazon_order_id
     *
     * @param string|null $amazon_order_id An Amazon-defined identifier for an order.
     *
     * @return self
     */
    public function setAmazonOrderId($amazon_order_id)
    {
        $this->container['amazon_order_id'] = $amazon_order_id;

        return $this;
    }

    /**
     * Gets posted_date
     *
     * @return \DateTime|null
     */
    public function getPostedDate()
    {
        return $this->container['posted_date'];
    }

    /**
     * Sets posted_date
     *
     * @param \DateTime|null $posted_date posted_date
     *
     * @return self
     */
    public function setPostedDate($posted_date)
    {
        $this->container['posted_date'] = $posted_date;

        return $this;
    }

    /**
     * Gets marketplace_id
     *
     * @return string|null
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id
     *
     * @param string|null $marketplace_id An encrypted, Amazon-defined marketplace identifier.
     *
     * @return self
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets transaction_type
     *
     * @return string|null
     */
    public function getTransactionType()
    {
        return $this->container['transaction_type'];
    }

    /**
     * Sets transaction_type
     *
     * @param string|null $transaction_type Indicates the type of transaction.  Possible values: * Charge - For an affordability promotion expense. * Refund - For an affordability promotion expense reversal.
     *
     * @return self
     */
    public function setTransactionType($transaction_type)
    {
        $this->container['transaction_type'] = $transaction_type;

        return $this;
    }

    /**
     * Gets base_expense
     *
     * @return \SellingPartnerApi\Model\Finances\Currency|null
     */
    public function getBaseExpense()
    {
        return $this->container['base_expense'];
    }

    /**
     * Sets base_expense
     *
     * @param \SellingPartnerApi\Model\Finances\Currency|null $base_expense base_expense
     *
     * @return self
     */
    public function setBaseExpense($base_expense)
    {
        $this->container['base_expense'] = $base_expense;

        return $this;
    }

    /**
     * Gets tax_type_cgst
     *
     * @return \SellingPartnerApi\Model\Finances\Currency
     */
    public function getTaxTypeCgst()
    {
        return $this->container['tax_type_cgst'];
    }

    /**
     * Sets tax_type_cgst
     *
     * @param \SellingPartnerApi\Model\Finances\Currency $tax_type_cgst tax_type_cgst
     *
     * @return self
     */
    public function setTaxTypeCgst($tax_type_cgst)
    {
        $this->container['tax_type_cgst'] = $tax_type_cgst;

        return $this;
    }

    /**
     * Gets tax_type_sgst
     *
     * @return \SellingPartnerApi\Model\Finances\Currency
     */
    public function getTaxTypeSgst()
    {
        return $this->container['tax_type_sgst'];
    }

    /**
     * Sets tax_type_sgst
     *
     * @param \SellingPartnerApi\Model\Finances\Currency $tax_type_sgst tax_type_sgst
     *
     * @return self
     */
    public function setTaxTypeSgst($tax_type_sgst)
    {
        $this->container['tax_type_sgst'] = $tax_type_sgst;

        return $this;
    }

    /**
     * Gets tax_type_igst
     *
     * @return \SellingPartnerApi\Model\Finances\Currency
     */
    public function getTaxTypeIgst()
    {
        return $this->container['tax_type_igst'];
    }

    /**
     * Sets tax_type_igst
     *
     * @param \SellingPartnerApi\Model\Finances\Currency $tax_type_igst tax_type_igst
     *
     * @return self
     */
    public function setTaxTypeIgst($tax_type_igst)
    {
        $this->container['tax_type_igst'] = $tax_type_igst;

        return $this;
    }

    /**
     * Gets total_expense
     *
     * @return \SellingPartnerApi\Model\Finances\Currency|null
     */
    public function getTotalExpense()
    {
        return $this->container['total_expense'];
    }

    /**
     * Sets total_expense
     *
     * @param \SellingPartnerApi\Model\Finances\Currency|null $total_expense total_expense
     *
     * @return self
     */
    public function setTotalExpense($total_expense)
    {
        $this->container['total_expense'] = $total_expense;

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
     * @return mixed|null
     */
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
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



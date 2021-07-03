<?php
/**
 * InvoiceItem
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Retail Procurement Payments
 *
 * The Selling Partner API for Retail Procurement Payments provides programmatic access to vendors payments data.
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\VendorInvoices;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * InvoiceItem Class Doc Comment
 *
 * @category Class
 * @description Details of the item being invoiced.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InvoiceItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InvoiceItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'item_sequence_number' => 'int',
        'amazon_product_identifier' => 'string',
        'vendor_product_identifier' => 'string',
        'invoiced_quantity' => '\SellingPartnerApi\Model\VendorInvoices\ItemQuantity',
        'net_cost' => '\SellingPartnerApi\Model\VendorInvoices\Money',
        'purchase_order_number' => 'string',
        'hsn_code' => 'string',
        'credit_note_details' => '\SellingPartnerApi\Model\VendorInvoices\CreditNoteDetails',
        'tax_details' => '\SellingPartnerApi\Model\VendorInvoices\TaxDetails[]',
        'charge_details' => '\SellingPartnerApi\Model\VendorInvoices\ChargeDetails[]',
        'allowance_details' => '\SellingPartnerApi\Model\VendorInvoices\AllowanceDetails[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'item_sequence_number' => null,
        'amazon_product_identifier' => null,
        'vendor_product_identifier' => null,
        'invoiced_quantity' => null,
        'net_cost' => null,
        'purchase_order_number' => null,
        'hsn_code' => null,
        'credit_note_details' => null,
        'tax_details' => null,
        'charge_details' => null,
        'allowance_details' => null
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
        'item_sequence_number' => 'itemSequenceNumber',
        'amazon_product_identifier' => 'amazonProductIdentifier',
        'vendor_product_identifier' => 'vendorProductIdentifier',
        'invoiced_quantity' => 'invoicedQuantity',
        'net_cost' => 'netCost',
        'purchase_order_number' => 'purchaseOrderNumber',
        'hsn_code' => 'hsnCode',
        'credit_note_details' => 'creditNoteDetails',
        'tax_details' => 'taxDetails',
        'charge_details' => 'chargeDetails',
        'allowance_details' => 'allowanceDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'item_sequence_number' => 'setItemSequenceNumber',
        'amazon_product_identifier' => 'setAmazonProductIdentifier',
        'vendor_product_identifier' => 'setVendorProductIdentifier',
        'invoiced_quantity' => 'setInvoicedQuantity',
        'net_cost' => 'setNetCost',
        'purchase_order_number' => 'setPurchaseOrderNumber',
        'hsn_code' => 'setHsnCode',
        'credit_note_details' => 'setCreditNoteDetails',
        'tax_details' => 'setTaxDetails',
        'charge_details' => 'setChargeDetails',
        'allowance_details' => 'setAllowanceDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'item_sequence_number' => 'getItemSequenceNumber',
        'amazon_product_identifier' => 'getAmazonProductIdentifier',
        'vendor_product_identifier' => 'getVendorProductIdentifier',
        'invoiced_quantity' => 'getInvoicedQuantity',
        'net_cost' => 'getNetCost',
        'purchase_order_number' => 'getPurchaseOrderNumber',
        'hsn_code' => 'getHsnCode',
        'credit_note_details' => 'getCreditNoteDetails',
        'tax_details' => 'getTaxDetails',
        'charge_details' => 'getChargeDetails',
        'allowance_details' => 'getAllowanceDetails'
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
        $this->container['item_sequence_number'] = $data['item_sequence_number'] ?? null;
        $this->container['amazon_product_identifier'] = $data['amazon_product_identifier'] ?? null;
        $this->container['vendor_product_identifier'] = $data['vendor_product_identifier'] ?? null;
        $this->container['invoiced_quantity'] = $data['invoiced_quantity'] ?? null;
        $this->container['net_cost'] = $data['net_cost'] ?? null;
        $this->container['purchase_order_number'] = $data['purchase_order_number'] ?? null;
        $this->container['hsn_code'] = $data['hsn_code'] ?? null;
        $this->container['credit_note_details'] = $data['credit_note_details'] ?? null;
        $this->container['tax_details'] = $data['tax_details'] ?? null;
        $this->container['charge_details'] = $data['charge_details'] ?? null;
        $this->container['allowance_details'] = $data['allowance_details'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['item_sequence_number'] === null) {
            $invalidProperties[] = "'item_sequence_number' can't be null";
        }
        if ($this->container['invoiced_quantity'] === null) {
            $invalidProperties[] = "'invoiced_quantity' can't be null";
        }
        if ($this->container['net_cost'] === null) {
            $invalidProperties[] = "'net_cost' can't be null";
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
     * Gets item_sequence_number
     *
     * @return int
     */
    public function getItemSequenceNumber()
    {
        return $this->container['item_sequence_number'];
    }

    /**
     * Sets item_sequence_number
     *
     * @param int $item_sequence_number Unique number related to this line item.
     *
     * @return self
     */
    public function setItemSequenceNumber($item_sequence_number)
    {
        $this->container['item_sequence_number'] = $item_sequence_number;

        return $this;
    }

    /**
     * Gets amazon_product_identifier
     *
     * @return string|null
     */
    public function getAmazonProductIdentifier()
    {
        return $this->container['amazon_product_identifier'];
    }

    /**
     * Sets amazon_product_identifier
     *
     * @param string|null $amazon_product_identifier Amazon Standard Identification Number (ASIN) of an item.
     *
     * @return self
     */
    public function setAmazonProductIdentifier($amazon_product_identifier)
    {
        $this->container['amazon_product_identifier'] = $amazon_product_identifier;

        return $this;
    }

    /**
     * Gets vendor_product_identifier
     *
     * @return string|null
     */
    public function getVendorProductIdentifier()
    {
        return $this->container['vendor_product_identifier'];
    }

    /**
     * Sets vendor_product_identifier
     *
     * @param string|null $vendor_product_identifier The vendor selected product identifier of the item. Should be the same as was provided in the purchase order.
     *
     * @return self
     */
    public function setVendorProductIdentifier($vendor_product_identifier)
    {
        $this->container['vendor_product_identifier'] = $vendor_product_identifier;

        return $this;
    }

    /**
     * Gets invoiced_quantity
     *
     * @return \SellingPartnerApi\Model\VendorInvoices\ItemQuantity
     */
    public function getInvoicedQuantity()
    {
        return $this->container['invoiced_quantity'];
    }

    /**
     * Sets invoiced_quantity
     *
     * @param \SellingPartnerApi\Model\VendorInvoices\ItemQuantity $invoiced_quantity invoiced_quantity
     *
     * @return self
     */
    public function setInvoicedQuantity($invoiced_quantity)
    {
        $this->container['invoiced_quantity'] = $invoiced_quantity;

        return $this;
    }

    /**
     * Gets net_cost
     *
     * @return \SellingPartnerApi\Model\VendorInvoices\Money
     */
    public function getNetCost()
    {
        return $this->container['net_cost'];
    }

    /**
     * Sets net_cost
     *
     * @param \SellingPartnerApi\Model\VendorInvoices\Money $net_cost net_cost
     *
     * @return self
     */
    public function setNetCost($net_cost)
    {
        $this->container['net_cost'] = $net_cost;

        return $this;
    }

    /**
     * Gets purchase_order_number
     *
     * @return string|null
     */
    public function getPurchaseOrderNumber()
    {
        return $this->container['purchase_order_number'];
    }

    /**
     * Sets purchase_order_number
     *
     * @param string|null $purchase_order_number The Amazon purchase order number for this invoiced line item. Formatting Notes: 8-character alpha-numeric code. This value is mandatory only when invoiceType is Invoice, and is not required when invoiceType is CreditNote.
     *
     * @return self
     */
    public function setPurchaseOrderNumber($purchase_order_number)
    {
        $this->container['purchase_order_number'] = $purchase_order_number;

        return $this;
    }

    /**
     * Gets hsn_code
     *
     * @return string|null
     */
    public function getHsnCode()
    {
        return $this->container['hsn_code'];
    }

    /**
     * Sets hsn_code
     *
     * @param string|null $hsn_code HSN Tax code. The HSN number cannot contain alphabets.
     *
     * @return self
     */
    public function setHsnCode($hsn_code)
    {
        $this->container['hsn_code'] = $hsn_code;

        return $this;
    }

    /**
     * Gets credit_note_details
     *
     * @return \SellingPartnerApi\Model\VendorInvoices\CreditNoteDetails|null
     */
    public function getCreditNoteDetails()
    {
        return $this->container['credit_note_details'];
    }

    /**
     * Sets credit_note_details
     *
     * @param \SellingPartnerApi\Model\VendorInvoices\CreditNoteDetails|null $credit_note_details credit_note_details
     *
     * @return self
     */
    public function setCreditNoteDetails($credit_note_details)
    {
        $this->container['credit_note_details'] = $credit_note_details;

        return $this;
    }

    /**
     * Gets tax_details
     *
     * @return \SellingPartnerApi\Model\VendorInvoices\TaxDetails[]|null
     */
    public function getTaxDetails()
    {
        return $this->container['tax_details'];
    }

    /**
     * Sets tax_details
     *
     * @param \SellingPartnerApi\Model\VendorInvoices\TaxDetails[]|null $tax_details Individual tax details per line item.
     *
     * @return self
     */
    public function setTaxDetails($tax_details)
    {
        $this->container['tax_details'] = $tax_details;

        return $this;
    }

    /**
     * Gets charge_details
     *
     * @return \SellingPartnerApi\Model\VendorInvoices\ChargeDetails[]|null
     */
    public function getChargeDetails()
    {
        return $this->container['charge_details'];
    }

    /**
     * Sets charge_details
     *
     * @param \SellingPartnerApi\Model\VendorInvoices\ChargeDetails[]|null $charge_details Individual charge details per line item.
     *
     * @return self
     */
    public function setChargeDetails($charge_details)
    {
        $this->container['charge_details'] = $charge_details;

        return $this;
    }

    /**
     * Gets allowance_details
     *
     * @return \SellingPartnerApi\Model\VendorInvoices\AllowanceDetails[]|null
     */
    public function getAllowanceDetails()
    {
        return $this->container['allowance_details'];
    }

    /**
     * Sets allowance_details
     *
     * @param \SellingPartnerApi\Model\VendorInvoices\AllowanceDetails[]|null $allowance_details Individual allowance details per line item.
     *
     * @return self
     */
    public function setAllowanceDetails($allowance_details)
    {
        $this->container['allowance_details'] = $allowance_details;

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



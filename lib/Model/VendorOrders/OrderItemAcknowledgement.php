<?php
/**
 * OrderItemAcknowledgement
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Retail Procurement Orders
 *
 * The Selling Partner API for Retail Procurement Orders provides programmatic access to vendor orders data.
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

namespace SellingPartnerApi\Model\VendorOrders;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * OrderItemAcknowledgement Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class OrderItemAcknowledgement implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderItemAcknowledgement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'acknowledgement_code' => 'string',
        'acknowledged_quantity' => '\SellingPartnerApi\Model\VendorOrders\ItemQuantity',
        'scheduled_ship_date' => '\DateTime',
        'scheduled_delivery_date' => '\DateTime',
        'rejection_reason' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'acknowledgement_code' => null,
        'acknowledged_quantity' => null,
        'scheduled_ship_date' => 'date-time',
        'scheduled_delivery_date' => 'date-time',
        'rejection_reason' => null
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
        'acknowledgement_code' => 'acknowledgementCode',
        'acknowledged_quantity' => 'acknowledgedQuantity',
        'scheduled_ship_date' => 'scheduledShipDate',
        'scheduled_delivery_date' => 'scheduledDeliveryDate',
        'rejection_reason' => 'rejectionReason'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'acknowledgement_code' => 'setAcknowledgementCode',
        'acknowledged_quantity' => 'setAcknowledgedQuantity',
        'scheduled_ship_date' => 'setScheduledShipDate',
        'scheduled_delivery_date' => 'setScheduledDeliveryDate',
        'rejection_reason' => 'setRejectionReason'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'acknowledgement_code' => 'getAcknowledgementCode',
        'acknowledged_quantity' => 'getAcknowledgedQuantity',
        'scheduled_ship_date' => 'getScheduledShipDate',
        'scheduled_delivery_date' => 'getScheduledDeliveryDate',
        'rejection_reason' => 'getRejectionReason'
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

    const ACKNOWLEDGEMENT_CODE_ACCEPTED = 'Accepted';
    const ACKNOWLEDGEMENT_CODE_BACKORDERED = 'Backordered';
    const ACKNOWLEDGEMENT_CODE_REJECTED = 'Rejected';
    const REJECTION_REASON_TEMPORARILY_UNAVAILABLE = 'TemporarilyUnavailable';
    const REJECTION_REASON_INVALID_PRODUCT_IDENTIFIER = 'InvalidProductIdentifier';
    const REJECTION_REASON_OBSOLETE_PRODUCT = 'ObsoleteProduct';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAcknowledgementCodeAllowableValues()
    {
        return [
            self::ACKNOWLEDGEMENT_CODE_ACCEPTED,
            self::ACKNOWLEDGEMENT_CODE_BACKORDERED,
            self::ACKNOWLEDGEMENT_CODE_REJECTED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRejectionReasonAllowableValues()
    {
        return [
            self::REJECTION_REASON_TEMPORARILY_UNAVAILABLE,
            self::REJECTION_REASON_INVALID_PRODUCT_IDENTIFIER,
            self::REJECTION_REASON_OBSOLETE_PRODUCT,
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
        $this->container['acknowledgement_code'] = $data['acknowledgement_code'] ?? null;
        $this->container['acknowledged_quantity'] = $data['acknowledged_quantity'] ?? null;
        $this->container['scheduled_ship_date'] = $data['scheduled_ship_date'] ?? null;
        $this->container['scheduled_delivery_date'] = $data['scheduled_delivery_date'] ?? null;
        $this->container['rejection_reason'] = $data['rejection_reason'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['acknowledgement_code'] === null) {
            $invalidProperties[] = "'acknowledgement_code' can't be null";
        }
        $allowedValues = $this->getAcknowledgementCodeAllowableValues();
        if (!is_null($this->container['acknowledgement_code']) && !in_array($this->container['acknowledgement_code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'acknowledgement_code', must be one of '%s'",
                $this->container['acknowledgement_code'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['acknowledged_quantity'] === null) {
            $invalidProperties[] = "'acknowledged_quantity' can't be null";
        }
        $allowedValues = $this->getRejectionReasonAllowableValues();
        if (!is_null($this->container['rejection_reason']) && !in_array($this->container['rejection_reason'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'rejection_reason', must be one of '%s'",
                $this->container['rejection_reason'],
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
     * Gets acknowledgement_code
     *
     * @return string
     */
    public function getAcknowledgementCode()
    {
        return $this->container['acknowledgement_code'];
    }

    /**
     * Sets acknowledgement_code
     *
     * @param string $acknowledgement_code This indicates the acknowledgement code.
     *
     * @return self
     */
    public function setAcknowledgementCode($acknowledgement_code)
    {
        $allowedValues = $this->getAcknowledgementCodeAllowableValues();
        if (!in_array($acknowledgement_code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'acknowledgement_code', must be one of '%s'",
                    $acknowledgement_code,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['acknowledgement_code'] = $acknowledgement_code;

        return $this;
    }

    /**
     * Gets acknowledged_quantity
     *
     * @return \SellingPartnerApi\Model\VendorOrders\ItemQuantity
     */
    public function getAcknowledgedQuantity()
    {
        return $this->container['acknowledged_quantity'];
    }

    /**
     * Sets acknowledged_quantity
     *
     * @param \SellingPartnerApi\Model\VendorOrders\ItemQuantity $acknowledged_quantity acknowledged_quantity
     *
     * @return self
     */
    public function setAcknowledgedQuantity($acknowledged_quantity)
    {
        $this->container['acknowledged_quantity'] = $acknowledged_quantity;

        return $this;
    }

    /**
     * Gets scheduled_ship_date
     *
     * @return \DateTime|null
     */
    public function getScheduledShipDate()
    {
        return $this->container['scheduled_ship_date'];
    }

    /**
     * Sets scheduled_ship_date
     *
     * @param \DateTime|null $scheduled_ship_date Estimated ship date per line item. Must be in ISO-8601 date/time format.
     *
     * @return self
     */
    public function setScheduledShipDate($scheduled_ship_date)
    {
        $this->container['scheduled_ship_date'] = $scheduled_ship_date;

        return $this;
    }

    /**
     * Gets scheduled_delivery_date
     *
     * @return \DateTime|null
     */
    public function getScheduledDeliveryDate()
    {
        return $this->container['scheduled_delivery_date'];
    }

    /**
     * Sets scheduled_delivery_date
     *
     * @param \DateTime|null $scheduled_delivery_date Estimated delivery date per line item. Must be in ISO-8601 date/time format.
     *
     * @return self
     */
    public function setScheduledDeliveryDate($scheduled_delivery_date)
    {
        $this->container['scheduled_delivery_date'] = $scheduled_delivery_date;

        return $this;
    }

    /**
     * Gets rejection_reason
     *
     * @return string|null
     */
    public function getRejectionReason()
    {
        return $this->container['rejection_reason'];
    }

    /**
     * Sets rejection_reason
     *
     * @param string|null $rejection_reason Indicates the reason for rejection.
     *
     * @return self
     */
    public function setRejectionReason($rejection_reason)
    {
        $allowedValues = $this->getRejectionReasonAllowableValues();
        if (!is_null($rejection_reason) && !in_array($rejection_reason, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'rejection_reason', must be one of '%s'",
                    $rejection_reason,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['rejection_reason'] = $rejection_reason;

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



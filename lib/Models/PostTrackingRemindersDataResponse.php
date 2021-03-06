<?php
/**
 * PostTrackingRemindersDataResponse
 *
 */



namespace CureDAO\Client\Models;

use ArrayAccess;
use CureDAO\Client\ObjectSerializer;

/**
 * PostTrackingRemindersDataResponse Class 
 */
class PostTrackingRemindersDataResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PostTrackingRemindersDataResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tracking_reminder_notifications' => '\CureDAO\Client\Models\TrackingReminderNotification[]',
        'tracking_reminders' => '\CureDAO\Client\Models\TrackingReminder[]',
        'user_variables' => '\CureDAO\Client\Models\Variable[]',
        'description' => 'string',
        'summary' => 'string',
        'errors' => '\CureDAO\Client\Models\Error[]',
        'status' => 'string',
        'success' => 'bool',
        'code' => 'float',
        'link' => 'string',
        'card' => '\CureDAO\Client\Models\Card'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'tracking_reminder_notifications' => null,
        'tracking_reminders' => null,
        'user_variables' => null,
        'description' => null,
        'summary' => null,
        'errors' => null,
        'status' => null,
        'success' => null,
        'code' => null,
        'link' => null,
        'card' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'tracking_reminder_notifications' => 'trackingReminderNotifications',
        'tracking_reminders' => 'trackingReminders',
        'user_variables' => 'userVariables',
        'description' => 'description',
        'summary' => 'summary',
        'errors' => 'errors',
        'status' => 'status',
        'success' => 'success',
        'code' => 'code',
        'link' => 'link',
        'card' => 'card'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tracking_reminder_notifications' => 'setTrackingReminderNotifications',
        'tracking_reminders' => 'setTrackingReminders',
        'user_variables' => 'setUserVariables',
        'description' => 'setDescription',
        'summary' => 'setSummary',
        'errors' => 'setErrors',
        'status' => 'setStatus',
        'success' => 'setSuccess',
        'code' => 'setCode',
        'link' => 'setLink',
        'card' => 'setCard'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tracking_reminder_notifications' => 'getTrackingReminderNotifications',
        'tracking_reminders' => 'getTrackingReminders',
        'user_variables' => 'getUserVariables',
        'description' => 'getDescription',
        'summary' => 'getSummary',
        'errors' => 'getErrors',
        'status' => 'getStatus',
        'success' => 'getSuccess',
        'code' => 'getCode',
        'link' => 'getLink',
        'card' => 'getCard'
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
        return self::$swaggerModelName;
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
        $this->container['tracking_reminder_notifications'] = isset($data['tracking_reminder_notifications']) ? $data['tracking_reminder_notifications'] : null;
        $this->container['tracking_reminders'] = isset($data['tracking_reminders']) ? $data['tracking_reminders'] : null;
        $this->container['user_variables'] = isset($data['user_variables']) ? $data['user_variables'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['summary'] = isset($data['summary']) ? $data['summary'] : null;
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['card'] = isset($data['card']) ? $data['card'] : null;
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
     * Gets tracking_reminder_notifications
     *
     * @return \CureDAO\Client\Models\TrackingReminderNotification[]
     */
    public function getTrackingReminderNotifications()
    {
        return $this->container['tracking_reminder_notifications'];
    }

    /**
     * Sets tracking_reminder_notifications
     *
     * @param \CureDAO\Client\Models\TrackingReminderNotification[] $tracking_reminder_notifications tracking_reminder_notifications
     *
     * @return $this
     */
    public function setTrackingReminderNotifications($tracking_reminder_notifications)
    {
        $this->container['tracking_reminder_notifications'] = $tracking_reminder_notifications;

        return $this;
    }

    /**
     * Gets tracking_reminders
     *
     * @return \CureDAO\Client\Models\TrackingReminder[]
     */
    public function getTrackingReminders()
    {
        return $this->container['tracking_reminders'];
    }

    /**
     * Sets tracking_reminders
     *
     * @param \CureDAO\Client\Models\TrackingReminder[] $tracking_reminders tracking_reminders
     *
     * @return $this
     */
    public function setTrackingReminders($tracking_reminders)
    {
        $this->container['tracking_reminders'] = $tracking_reminders;

        return $this;
    }

    /**
     * Gets user_variables
     *
     * @return \CureDAO\Client\Models\Variable[]
     */
    public function getUserVariables()
    {
        return $this->container['user_variables'];
    }

    /**
     * Sets user_variables
     *
     * @param \CureDAO\Client\Models\Variable[] $user_variables user_variables
     *
     * @return $this
     */
    public function setUserVariables($user_variables)
    {
        $this->container['user_variables'] = $user_variables;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Can be used as body of help info popup
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets summary
     *
     * @return string
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     *
     * @param string $summary Can be used as title in help info popup
     *
     * @return $this
     */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;

        return $this;
    }

    /**
     * Gets errors
     *
     * @return \CureDAO\Client\Models\Error[]
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \CureDAO\Client\Models\Error[] $errors Array of error objects with message property
     *
     * @return $this
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status ex. OK or ERROR
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets success
     *
     * @return bool
     */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
     * Sets success
     *
     * @param bool $success true or false
     *
     * @return $this
     */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;

        return $this;
    }

    /**
     * Gets code
     *
     * @return float
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param float $code Response code such as 200
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     *
     * @param string $link A super neat url you might want to share with your users!
     *
     * @return $this
     */
    public function setLink($link)
    {
        $this->container['link'] = $link;

        return $this;
    }

    /**
     * Gets card
     *
     * @return \CureDAO\Client\Models\Card
     */
    public function getCard()
    {
        return $this->container['card'];
    }

    /**
     * Sets card
     *
     * @param \CureDAO\Client\Models\Card $card A super neat card with buttons and HTML that you can use in your app!
     *
     * @return $this
     */
    public function setCard($card)
    {
        $this->container['card'] = $card;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

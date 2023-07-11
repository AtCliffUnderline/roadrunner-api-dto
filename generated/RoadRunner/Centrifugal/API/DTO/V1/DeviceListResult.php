<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: centrifugo/api/v1/api.proto

namespace RoadRunner\Centrifugal\API\DTO\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>centrifugal.centrifugo.api.DeviceListResult</code>
 */
class DeviceListResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .centrifugal.centrifugo.api.Device items = 1;</code>
     */
    private $items;
    /**
     * Generated from protobuf field <code>bool has_more = 2;</code>
     */
    protected $has_more = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\RoadRunner\Centrifugal\API\DTO\V1\Device>|\Google\Protobuf\Internal\RepeatedField $items
     *     @type bool $has_more
     * }
     */
    public function __construct($data = NULL) {
        \RoadRunner\Centrifugal\API\DTO\V1\GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .centrifugal.centrifugo.api.Device items = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Generated from protobuf field <code>repeated .centrifugal.centrifugo.api.Device items = 1;</code>
     * @param array<\RoadRunner\Centrifugal\API\DTO\V1\Device>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \RoadRunner\Centrifugal\API\DTO\V1\Device::class);
        $this->items = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool has_more = 2;</code>
     * @return bool
     */
    public function getHasMore()
    {
        return $this->has_more;
    }

    /**
     * Generated from protobuf field <code>bool has_more = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setHasMore($var)
    {
        GPBUtil::checkBool($var);
        $this->has_more = $var;

        return $this;
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: centrifugo/api/v1/api.proto

namespace RoadRunner\Centrifugal\API\DTO\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>centrifugal.centrifugo.api.DeviceRemoveRequest</code>
 */
class DeviceRemoveRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string ids = 1;</code>
     */
    private $ids;
    /**
     * Generated from protobuf field <code>repeated string users = 2;</code>
     */
    private $users;
    /**
     * Generated from protobuf field <code>repeated .centrifugal.centrifugo.api.DeviceProviderTokens provider_tokens = 3;</code>
     */
    private $provider_tokens;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $ids
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $users
     *     @type array<\RoadRunner\Centrifugal\API\DTO\V1\DeviceProviderTokens>|\Google\Protobuf\Internal\RepeatedField $provider_tokens
     * }
     */
    public function __construct($data = NULL) {
        \RoadRunner\Centrifugal\API\DTO\V1\GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string ids = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIds()
    {
        return $this->ids;
    }

    /**
     * Generated from protobuf field <code>repeated string ids = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->ids = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string users = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Generated from protobuf field <code>repeated string users = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUsers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->users = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .centrifugal.centrifugo.api.DeviceProviderTokens provider_tokens = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProviderTokens()
    {
        return $this->provider_tokens;
    }

    /**
     * Generated from protobuf field <code>repeated .centrifugal.centrifugo.api.DeviceProviderTokens provider_tokens = 3;</code>
     * @param array<\RoadRunner\Centrifugal\API\DTO\V1\DeviceProviderTokens>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProviderTokens($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \RoadRunner\Centrifugal\API\DTO\V1\DeviceProviderTokens::class);
        $this->provider_tokens = $arr;

        return $this;
    }

}


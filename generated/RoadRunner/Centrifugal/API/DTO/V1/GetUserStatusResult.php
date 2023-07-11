<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: centrifugo/api/v1/api.proto

namespace RoadRunner\Centrifugal\API\DTO\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>centrifugal.centrifugo.api.GetUserStatusResult</code>
 */
class GetUserStatusResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .centrifugal.centrifugo.api.UserStatus statuses = 1;</code>
     */
    private $statuses;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\RoadRunner\Centrifugal\API\DTO\V1\UserStatus>|\Google\Protobuf\Internal\RepeatedField $statuses
     * }
     */
    public function __construct($data = NULL) {
        \RoadRunner\Centrifugal\API\DTO\V1\GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .centrifugal.centrifugo.api.UserStatus statuses = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStatuses()
    {
        return $this->statuses;
    }

    /**
     * Generated from protobuf field <code>repeated .centrifugal.centrifugo.api.UserStatus statuses = 1;</code>
     * @param array<\RoadRunner\Centrifugal\API\DTO\V1\UserStatus>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStatuses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \RoadRunner\Centrifugal\API\DTO\V1\UserStatus::class);
        $this->statuses = $arr;

        return $this;
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: centrifugo/api/v1/api.proto

namespace RoadRunner\Centrifugal\API\DTO\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>centrifugal.centrifugo.api.UserTopicListRequest</code>
 */
class UserTopicListRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.UserTopicFilter filter = 1;</code>
     */
    protected $filter = null;
    /**
     * Generated from protobuf field <code>bool include_total_count = 2;</code>
     */
    protected $include_total_count = false;
    /**
     * Generated from protobuf field <code>string cursor = 10;</code>
     */
    protected $cursor = '';
    /**
     * Generated from protobuf field <code>int32 limit = 11;</code>
     */
    protected $limit = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\UserTopicFilter $filter
     *     @type bool $include_total_count
     *     @type string $cursor
     *     @type int $limit
     * }
     */
    public function __construct($data = NULL) {
        \RoadRunner\Centrifugal\API\DTO\V1\GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.UserTopicFilter filter = 1;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\UserTopicFilter|null
     */
    public function getFilter()
    {
        return $this->filter;
    }

    public function hasFilter()
    {
        return isset($this->filter);
    }

    public function clearFilter()
    {
        unset($this->filter);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.UserTopicFilter filter = 1;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\UserTopicFilter $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\UserTopicFilter::class);
        $this->filter = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool include_total_count = 2;</code>
     * @return bool
     */
    public function getIncludeTotalCount()
    {
        return $this->include_total_count;
    }

    /**
     * Generated from protobuf field <code>bool include_total_count = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeTotalCount($var)
    {
        GPBUtil::checkBool($var);
        $this->include_total_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string cursor = 10;</code>
     * @return string
     */
    public function getCursor()
    {
        return $this->cursor;
    }

    /**
     * Generated from protobuf field <code>string cursor = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setCursor($var)
    {
        GPBUtil::checkString($var, True);
        $this->cursor = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 limit = 11;</code>
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * Generated from protobuf field <code>int32 limit = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setLimit($var)
    {
        GPBUtil::checkInt32($var);
        $this->limit = $var;

        return $this;
    }

}


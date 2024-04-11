<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.DescribeTaskQueueResponse</code>
 */
class DescribeTaskQueueResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Deprecated. Use `versions_info.types_info.pollers` with `ENHANCED` mode instead.
     * Not set in `ENHANCED` mode.
     *
     * Generated from protobuf field <code>repeated .temporal.api.taskqueue.v1.PollerInfo pollers = 1;</code>
     */
    private $pollers;
    /**
     * Deprecated. Not set in `ENHANCED` mode.
     *
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.TaskQueueStatus task_queue_status = 2;</code>
     */
    protected $task_queue_status = null;
    /**
     * This map contains Task Queue information for each Build ID. Empty string as key value means unversioned.
     * Only set in `ENHANCED` mode.
     *
     * Generated from protobuf field <code>map<string, .temporal.api.taskqueue.v1.TaskQueueVersionInfo> versions_info = 3;</code>
     */
    private $versions_info;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Temporal\Api\Taskqueue\V1\PollerInfo>|\Google\Protobuf\Internal\RepeatedField $pollers
     *           Deprecated. Use `versions_info.types_info.pollers` with `ENHANCED` mode instead.
     *           Not set in `ENHANCED` mode.
     *     @type \Temporal\Api\Taskqueue\V1\TaskQueueStatus $task_queue_status
     *           Deprecated. Not set in `ENHANCED` mode.
     *     @type array|\Google\Protobuf\Internal\MapField $versions_info
     *           This map contains Task Queue information for each Build ID. Empty string as key value means unversioned.
     *           Only set in `ENHANCED` mode.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Deprecated. Use `versions_info.types_info.pollers` with `ENHANCED` mode instead.
     * Not set in `ENHANCED` mode.
     *
     * Generated from protobuf field <code>repeated .temporal.api.taskqueue.v1.PollerInfo pollers = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPollers()
    {
        return $this->pollers;
    }

    /**
     * Deprecated. Use `versions_info.types_info.pollers` with `ENHANCED` mode instead.
     * Not set in `ENHANCED` mode.
     *
     * Generated from protobuf field <code>repeated .temporal.api.taskqueue.v1.PollerInfo pollers = 1;</code>
     * @param array<\Temporal\Api\Taskqueue\V1\PollerInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPollers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Temporal\Api\Taskqueue\V1\PollerInfo::class);
        $this->pollers = $arr;

        return $this;
    }

    /**
     * Deprecated. Not set in `ENHANCED` mode.
     *
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.TaskQueueStatus task_queue_status = 2;</code>
     * @return \Temporal\Api\Taskqueue\V1\TaskQueueStatus|null
     */
    public function getTaskQueueStatus()
    {
        return $this->task_queue_status;
    }

    public function hasTaskQueueStatus()
    {
        return isset($this->task_queue_status);
    }

    public function clearTaskQueueStatus()
    {
        unset($this->task_queue_status);
    }

    /**
     * Deprecated. Not set in `ENHANCED` mode.
     *
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.TaskQueueStatus task_queue_status = 2;</code>
     * @param \Temporal\Api\Taskqueue\V1\TaskQueueStatus $var
     * @return $this
     */
    public function setTaskQueueStatus($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Taskqueue\V1\TaskQueueStatus::class);
        $this->task_queue_status = $var;

        return $this;
    }

    /**
     * This map contains Task Queue information for each Build ID. Empty string as key value means unversioned.
     * Only set in `ENHANCED` mode.
     *
     * Generated from protobuf field <code>map<string, .temporal.api.taskqueue.v1.TaskQueueVersionInfo> versions_info = 3;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getVersionsInfo()
    {
        return $this->versions_info;
    }

    /**
     * This map contains Task Queue information for each Build ID. Empty string as key value means unversioned.
     * Only set in `ENHANCED` mode.
     *
     * Generated from protobuf field <code>map<string, .temporal.api.taskqueue.v1.TaskQueueVersionInfo> versions_info = 3;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setVersionsInfo($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Temporal\Api\Taskqueue\V1\TaskQueueVersionInfo::class);
        $this->versions_info = $arr;

        return $this;
    }

}


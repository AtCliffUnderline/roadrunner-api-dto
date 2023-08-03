<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.ListTaskQueuePartitionsResponse</code>
 */
class ListTaskQueuePartitionsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .temporal.api.taskqueue.v1.TaskQueuePartitionMetadata activity_task_queue_partitions = 1;</code>
     */
    private $activity_task_queue_partitions;
    /**
     * Generated from protobuf field <code>repeated .temporal.api.taskqueue.v1.TaskQueuePartitionMetadata workflow_task_queue_partitions = 2;</code>
     */
    private $workflow_task_queue_partitions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Temporal\Api\Taskqueue\V1\TaskQueuePartitionMetadata>|\Google\Protobuf\Internal\RepeatedField $activity_task_queue_partitions
     *     @type array<\Temporal\Api\Taskqueue\V1\TaskQueuePartitionMetadata>|\Google\Protobuf\Internal\RepeatedField $workflow_task_queue_partitions
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .temporal.api.taskqueue.v1.TaskQueuePartitionMetadata activity_task_queue_partitions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getActivityTaskQueuePartitions()
    {
        return $this->activity_task_queue_partitions;
    }

    /**
     * Generated from protobuf field <code>repeated .temporal.api.taskqueue.v1.TaskQueuePartitionMetadata activity_task_queue_partitions = 1;</code>
     * @param array<\Temporal\Api\Taskqueue\V1\TaskQueuePartitionMetadata>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setActivityTaskQueuePartitions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Temporal\Api\Taskqueue\V1\TaskQueuePartitionMetadata::class);
        $this->activity_task_queue_partitions = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .temporal.api.taskqueue.v1.TaskQueuePartitionMetadata workflow_task_queue_partitions = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWorkflowTaskQueuePartitions()
    {
        return $this->workflow_task_queue_partitions;
    }

    /**
     * Generated from protobuf field <code>repeated .temporal.api.taskqueue.v1.TaskQueuePartitionMetadata workflow_task_queue_partitions = 2;</code>
     * @param array<\Temporal\Api\Taskqueue\V1\TaskQueuePartitionMetadata>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWorkflowTaskQueuePartitions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Temporal\Api\Taskqueue\V1\TaskQueuePartitionMetadata::class);
        $this->workflow_task_queue_partitions = $arr;

        return $this;
    }

}

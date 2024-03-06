<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/command/v1/message.proto

namespace Temporal\Api\Command\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.command.v1.ScheduleActivityTaskCommandAttributes</code>
 */
class ScheduleActivityTaskCommandAttributes extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string activity_id = 1;</code>
     */
    protected $activity_id = '';
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.ActivityType activity_type = 2;</code>
     */
    protected $activity_type = null;
    /**
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.TaskQueue task_queue = 4;</code>
     */
    protected $task_queue = null;
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Header header = 5;</code>
     */
    protected $header = null;
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads input = 6;</code>
     */
    protected $input = null;
    /**
     * Indicates how long the caller is willing to wait for activity completion. The "schedule" time
     * is when the activity is initially scheduled, not when the most recent retry is scheduled.
     * Limits how long retries will be attempted. Either this or `start_to_close_timeout` must be
     * specified. When not specified, defaults to the workflow execution timeout.
     * (-- api-linter: core::0140::prepositions=disabled
     *     aip.dev/not-precedent: "to" is used to indicate interval. --)
     *
     * Generated from protobuf field <code>.google.protobuf.Duration schedule_to_close_timeout = 7;</code>
     */
    protected $schedule_to_close_timeout = null;
    /**
     * Limits the time an activity task can stay in a task queue before a worker picks it up. The
     * "schedule" time is when the most recent retry is scheduled. This timeout should usually not
     * be set: it's useful in specific scenarios like worker-specific task queues. This timeout is
     * always non retryable, as all a retry would achieve is to put it back into the same queue.
     * Defaults to `schedule_to_close_timeout` or workflow execution timeout if that is not
     * specified. More info:
     * https://docs.temporal.io/docs/content/what-is-a-schedule-to-start-timeout/
     * (-- api-linter: core::0140::prepositions=disabled
     *     aip.dev/not-precedent: "to" is used to indicate interval. --)
     *
     * Generated from protobuf field <code>.google.protobuf.Duration schedule_to_start_timeout = 8;</code>
     */
    protected $schedule_to_start_timeout = null;
    /**
     * Maximum time an activity is allowed to execute after being picked up by a worker. This
     * timeout is always retryable. Either this or `schedule_to_close_timeout` must be specified.
     * (-- api-linter: core::0140::prepositions=disabled
     *     aip.dev/not-precedent: "to" is used to indicate interval. --)
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_to_close_timeout = 9;</code>
     */
    protected $start_to_close_timeout = null;
    /**
     * Maximum permitted time between successful worker heartbeats.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration heartbeat_timeout = 10;</code>
     */
    protected $heartbeat_timeout = null;
    /**
     * Activities are provided by a default retry policy which is controlled through the service's
     * dynamic configuration. Retries will be attempted until `schedule_to_close_timeout` has
     * elapsed. To disable retries set retry_policy.maximum_attempts to 1.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.RetryPolicy retry_policy = 11;</code>
     */
    protected $retry_policy = null;
    /**
     * Request to start the activity directly bypassing matching service and worker polling
     * The slot for executing the activity should be reserved when setting this field to true.
     *
     * Generated from protobuf field <code>bool request_eager_execution = 12;</code>
     */
    protected $request_eager_execution = false;
    /**
     * If this is set, the workflow executing this command wishes to start the activity using
     * a version compatible with the version that this workflow most recently ran on, if such
     * behavior is possible.
     *
     * Generated from protobuf field <code>bool use_compatible_version = 13;</code>
     */
    protected $use_compatible_version = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $activity_id
     *     @type \Temporal\Api\Common\V1\ActivityType $activity_type
     *     @type \Temporal\Api\Taskqueue\V1\TaskQueue $task_queue
     *     @type \Temporal\Api\Common\V1\Header $header
     *     @type \Temporal\Api\Common\V1\Payloads $input
     *     @type \Google\Protobuf\Duration $schedule_to_close_timeout
     *           Indicates how long the caller is willing to wait for activity completion. The "schedule" time
     *           is when the activity is initially scheduled, not when the most recent retry is scheduled.
     *           Limits how long retries will be attempted. Either this or `start_to_close_timeout` must be
     *           specified. When not specified, defaults to the workflow execution timeout.
     *           (-- api-linter: core::0140::prepositions=disabled
     *               aip.dev/not-precedent: "to" is used to indicate interval. --)
     *     @type \Google\Protobuf\Duration $schedule_to_start_timeout
     *           Limits the time an activity task can stay in a task queue before a worker picks it up. The
     *           "schedule" time is when the most recent retry is scheduled. This timeout should usually not
     *           be set: it's useful in specific scenarios like worker-specific task queues. This timeout is
     *           always non retryable, as all a retry would achieve is to put it back into the same queue.
     *           Defaults to `schedule_to_close_timeout` or workflow execution timeout if that is not
     *           specified. More info:
     *           https://docs.temporal.io/docs/content/what-is-a-schedule-to-start-timeout/
     *           (-- api-linter: core::0140::prepositions=disabled
     *               aip.dev/not-precedent: "to" is used to indicate interval. --)
     *     @type \Google\Protobuf\Duration $start_to_close_timeout
     *           Maximum time an activity is allowed to execute after being picked up by a worker. This
     *           timeout is always retryable. Either this or `schedule_to_close_timeout` must be specified.
     *           (-- api-linter: core::0140::prepositions=disabled
     *               aip.dev/not-precedent: "to" is used to indicate interval. --)
     *     @type \Google\Protobuf\Duration $heartbeat_timeout
     *           Maximum permitted time between successful worker heartbeats.
     *     @type \Temporal\Api\Common\V1\RetryPolicy $retry_policy
     *           Activities are provided by a default retry policy which is controlled through the service's
     *           dynamic configuration. Retries will be attempted until `schedule_to_close_timeout` has
     *           elapsed. To disable retries set retry_policy.maximum_attempts to 1.
     *     @type bool $request_eager_execution
     *           Request to start the activity directly bypassing matching service and worker polling
     *           The slot for executing the activity should be reserved when setting this field to true.
     *     @type bool $use_compatible_version
     *           If this is set, the workflow executing this command wishes to start the activity using
     *           a version compatible with the version that this workflow most recently ran on, if such
     *           behavior is possible.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Command\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string activity_id = 1;</code>
     * @return string
     */
    public function getActivityId()
    {
        return $this->activity_id;
    }

    /**
     * Generated from protobuf field <code>string activity_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setActivityId($var)
    {
        GPBUtil::checkString($var, True);
        $this->activity_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.ActivityType activity_type = 2;</code>
     * @return \Temporal\Api\Common\V1\ActivityType|null
     */
    public function getActivityType()
    {
        return $this->activity_type;
    }

    public function hasActivityType()
    {
        return isset($this->activity_type);
    }

    public function clearActivityType()
    {
        unset($this->activity_type);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.ActivityType activity_type = 2;</code>
     * @param \Temporal\Api\Common\V1\ActivityType $var
     * @return $this
     */
    public function setActivityType($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\ActivityType::class);
        $this->activity_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.TaskQueue task_queue = 4;</code>
     * @return \Temporal\Api\Taskqueue\V1\TaskQueue|null
     */
    public function getTaskQueue()
    {
        return $this->task_queue;
    }

    public function hasTaskQueue()
    {
        return isset($this->task_queue);
    }

    public function clearTaskQueue()
    {
        unset($this->task_queue);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.TaskQueue task_queue = 4;</code>
     * @param \Temporal\Api\Taskqueue\V1\TaskQueue $var
     * @return $this
     */
    public function setTaskQueue($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Taskqueue\V1\TaskQueue::class);
        $this->task_queue = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Header header = 5;</code>
     * @return \Temporal\Api\Common\V1\Header|null
     */
    public function getHeader()
    {
        return $this->header;
    }

    public function hasHeader()
    {
        return isset($this->header);
    }

    public function clearHeader()
    {
        unset($this->header);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Header header = 5;</code>
     * @param \Temporal\Api\Common\V1\Header $var
     * @return $this
     */
    public function setHeader($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\Header::class);
        $this->header = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads input = 6;</code>
     * @return \Temporal\Api\Common\V1\Payloads|null
     */
    public function getInput()
    {
        return $this->input;
    }

    public function hasInput()
    {
        return isset($this->input);
    }

    public function clearInput()
    {
        unset($this->input);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads input = 6;</code>
     * @param \Temporal\Api\Common\V1\Payloads $var
     * @return $this
     */
    public function setInput($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\Payloads::class);
        $this->input = $var;

        return $this;
    }

    /**
     * Indicates how long the caller is willing to wait for activity completion. The "schedule" time
     * is when the activity is initially scheduled, not when the most recent retry is scheduled.
     * Limits how long retries will be attempted. Either this or `start_to_close_timeout` must be
     * specified. When not specified, defaults to the workflow execution timeout.
     * (-- api-linter: core::0140::prepositions=disabled
     *     aip.dev/not-precedent: "to" is used to indicate interval. --)
     *
     * Generated from protobuf field <code>.google.protobuf.Duration schedule_to_close_timeout = 7;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getScheduleToCloseTimeout()
    {
        return $this->schedule_to_close_timeout;
    }

    public function hasScheduleToCloseTimeout()
    {
        return isset($this->schedule_to_close_timeout);
    }

    public function clearScheduleToCloseTimeout()
    {
        unset($this->schedule_to_close_timeout);
    }

    /**
     * Indicates how long the caller is willing to wait for activity completion. The "schedule" time
     * is when the activity is initially scheduled, not when the most recent retry is scheduled.
     * Limits how long retries will be attempted. Either this or `start_to_close_timeout` must be
     * specified. When not specified, defaults to the workflow execution timeout.
     * (-- api-linter: core::0140::prepositions=disabled
     *     aip.dev/not-precedent: "to" is used to indicate interval. --)
     *
     * Generated from protobuf field <code>.google.protobuf.Duration schedule_to_close_timeout = 7;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setScheduleToCloseTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->schedule_to_close_timeout = $var;

        return $this;
    }

    /**
     * Limits the time an activity task can stay in a task queue before a worker picks it up. The
     * "schedule" time is when the most recent retry is scheduled. This timeout should usually not
     * be set: it's useful in specific scenarios like worker-specific task queues. This timeout is
     * always non retryable, as all a retry would achieve is to put it back into the same queue.
     * Defaults to `schedule_to_close_timeout` or workflow execution timeout if that is not
     * specified. More info:
     * https://docs.temporal.io/docs/content/what-is-a-schedule-to-start-timeout/
     * (-- api-linter: core::0140::prepositions=disabled
     *     aip.dev/not-precedent: "to" is used to indicate interval. --)
     *
     * Generated from protobuf field <code>.google.protobuf.Duration schedule_to_start_timeout = 8;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getScheduleToStartTimeout()
    {
        return $this->schedule_to_start_timeout;
    }

    public function hasScheduleToStartTimeout()
    {
        return isset($this->schedule_to_start_timeout);
    }

    public function clearScheduleToStartTimeout()
    {
        unset($this->schedule_to_start_timeout);
    }

    /**
     * Limits the time an activity task can stay in a task queue before a worker picks it up. The
     * "schedule" time is when the most recent retry is scheduled. This timeout should usually not
     * be set: it's useful in specific scenarios like worker-specific task queues. This timeout is
     * always non retryable, as all a retry would achieve is to put it back into the same queue.
     * Defaults to `schedule_to_close_timeout` or workflow execution timeout if that is not
     * specified. More info:
     * https://docs.temporal.io/docs/content/what-is-a-schedule-to-start-timeout/
     * (-- api-linter: core::0140::prepositions=disabled
     *     aip.dev/not-precedent: "to" is used to indicate interval. --)
     *
     * Generated from protobuf field <code>.google.protobuf.Duration schedule_to_start_timeout = 8;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setScheduleToStartTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->schedule_to_start_timeout = $var;

        return $this;
    }

    /**
     * Maximum time an activity is allowed to execute after being picked up by a worker. This
     * timeout is always retryable. Either this or `schedule_to_close_timeout` must be specified.
     * (-- api-linter: core::0140::prepositions=disabled
     *     aip.dev/not-precedent: "to" is used to indicate interval. --)
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_to_close_timeout = 9;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getStartToCloseTimeout()
    {
        return $this->start_to_close_timeout;
    }

    public function hasStartToCloseTimeout()
    {
        return isset($this->start_to_close_timeout);
    }

    public function clearStartToCloseTimeout()
    {
        unset($this->start_to_close_timeout);
    }

    /**
     * Maximum time an activity is allowed to execute after being picked up by a worker. This
     * timeout is always retryable. Either this or `schedule_to_close_timeout` must be specified.
     * (-- api-linter: core::0140::prepositions=disabled
     *     aip.dev/not-precedent: "to" is used to indicate interval. --)
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_to_close_timeout = 9;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setStartToCloseTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->start_to_close_timeout = $var;

        return $this;
    }

    /**
     * Maximum permitted time between successful worker heartbeats.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration heartbeat_timeout = 10;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getHeartbeatTimeout()
    {
        return $this->heartbeat_timeout;
    }

    public function hasHeartbeatTimeout()
    {
        return isset($this->heartbeat_timeout);
    }

    public function clearHeartbeatTimeout()
    {
        unset($this->heartbeat_timeout);
    }

    /**
     * Maximum permitted time between successful worker heartbeats.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration heartbeat_timeout = 10;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setHeartbeatTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->heartbeat_timeout = $var;

        return $this;
    }

    /**
     * Activities are provided by a default retry policy which is controlled through the service's
     * dynamic configuration. Retries will be attempted until `schedule_to_close_timeout` has
     * elapsed. To disable retries set retry_policy.maximum_attempts to 1.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.RetryPolicy retry_policy = 11;</code>
     * @return \Temporal\Api\Common\V1\RetryPolicy|null
     */
    public function getRetryPolicy()
    {
        return $this->retry_policy;
    }

    public function hasRetryPolicy()
    {
        return isset($this->retry_policy);
    }

    public function clearRetryPolicy()
    {
        unset($this->retry_policy);
    }

    /**
     * Activities are provided by a default retry policy which is controlled through the service's
     * dynamic configuration. Retries will be attempted until `schedule_to_close_timeout` has
     * elapsed. To disable retries set retry_policy.maximum_attempts to 1.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.RetryPolicy retry_policy = 11;</code>
     * @param \Temporal\Api\Common\V1\RetryPolicy $var
     * @return $this
     */
    public function setRetryPolicy($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\RetryPolicy::class);
        $this->retry_policy = $var;

        return $this;
    }

    /**
     * Request to start the activity directly bypassing matching service and worker polling
     * The slot for executing the activity should be reserved when setting this field to true.
     *
     * Generated from protobuf field <code>bool request_eager_execution = 12;</code>
     * @return bool
     */
    public function getRequestEagerExecution()
    {
        return $this->request_eager_execution;
    }

    /**
     * Request to start the activity directly bypassing matching service and worker polling
     * The slot for executing the activity should be reserved when setting this field to true.
     *
     * Generated from protobuf field <code>bool request_eager_execution = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setRequestEagerExecution($var)
    {
        GPBUtil::checkBool($var);
        $this->request_eager_execution = $var;

        return $this;
    }

    /**
     * If this is set, the workflow executing this command wishes to start the activity using
     * a version compatible with the version that this workflow most recently ran on, if such
     * behavior is possible.
     *
     * Generated from protobuf field <code>bool use_compatible_version = 13;</code>
     * @return bool
     */
    public function getUseCompatibleVersion()
    {
        return $this->use_compatible_version;
    }

    /**
     * If this is set, the workflow executing this command wishes to start the activity using
     * a version compatible with the version that this workflow most recently ran on, if such
     * behavior is possible.
     *
     * Generated from protobuf field <code>bool use_compatible_version = 13;</code>
     * @param bool $var
     * @return $this
     */
    public function setUseCompatibleVersion($var)
    {
        GPBUtil::checkBool($var);
        $this->use_compatible_version = $var;

        return $this;
    }

}


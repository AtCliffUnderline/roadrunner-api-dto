<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.PollWorkflowTaskQueueResponse</code>
 */
class PollWorkflowTaskQueueResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A unique identifier for this task
     *
     * Generated from protobuf field <code>bytes task_token = 1;</code>
     */
    protected $task_token = '';
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution workflow_execution = 2;</code>
     */
    protected $workflow_execution = null;
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowType workflow_type = 3;</code>
     */
    protected $workflow_type = null;
    /**
     * The last workflow task started event which was processed by some worker for this execution.
     * Will be zero if no task has ever started.
     *
     * Generated from protobuf field <code>int64 previous_started_event_id = 4;</code>
     */
    protected $previous_started_event_id = 0;
    /**
     * The id of the most recent workflow task started event, which will have been generated as a
     * result of this poll request being served. Will be zero if the task
     * does not contain any events which would advance history (no new WFT started).
     * Currently this can happen for queries.
     *
     * Generated from protobuf field <code>int64 started_event_id = 5;</code>
     */
    protected $started_event_id = 0;
    /**
     * Starting at 1, the number of attempts to complete this task by any worker.
     *
     * Generated from protobuf field <code>int32 attempt = 6;</code>
     */
    protected $attempt = 0;
    /**
     * A hint that there are more tasks already present in this task queue. Can be used to
     * prioritize draining a sticky queue before polling from a normal queue.
     *
     * Generated from protobuf field <code>int64 backlog_count_hint = 7;</code>
     */
    protected $backlog_count_hint = 0;
    /**
     * The history for this workflow, which will either be complete or partial. Partial histories
     * are sent to workers who have signaled that they are using a sticky queue when completing
     * a workflow task.
     *
     * Generated from protobuf field <code>.temporal.api.history.v1.History history = 8;</code>
     */
    protected $history = null;
    /**
     * Will be set if there are more history events than were included in this response. Such events
     * should be fetched via `GetWorkflowExecutionHistory`.
     *
     * Generated from protobuf field <code>bytes next_page_token = 9;</code>
     */
    protected $next_page_token = '';
    /**
     * Legacy queries appear in this field. The query must be responded to via
     * `RespondQueryTaskCompleted`. If the workflow is already closed (queries are permitted on
     * closed workflows) then the `history` field will be populated with the entire history. It
     * may also be populated if this task originates on a non-sticky queue.
     *
     * Generated from protobuf field <code>.temporal.api.query.v1.WorkflowQuery query = 10;</code>
     */
    protected $query = null;
    /**
     * The task queue this task originated from, which will always be the original non-sticky name
     * for the queue, even if this response came from polling a sticky queue.
     *
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.TaskQueue workflow_execution_task_queue = 11;</code>
     */
    protected $workflow_execution_task_queue = null;
    /**
     * When this task was scheduled by the server
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp scheduled_time = 12;</code>
     */
    protected $scheduled_time = null;
    /**
     * When the current workflow task started event was generated, meaning the current attempt.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp started_time = 13;</code>
     */
    protected $started_time = null;
    /**
     * Queries that should be executed after applying the history in this task. Responses should be
     * attached to `RespondWorkflowTaskCompletedRequest::query_results`
     *
     * Generated from protobuf field <code>map<string, .temporal.api.query.v1.WorkflowQuery> queries = 14;</code>
     */
    private $queries;
    /**
     * Protocol messages piggybacking on a WFT as a transport
     *
     * Generated from protobuf field <code>repeated .temporal.api.protocol.v1.Message messages = 15;</code>
     */
    private $messages;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $task_token
     *           A unique identifier for this task
     *     @type \Temporal\Api\Common\V1\WorkflowExecution $workflow_execution
     *     @type \Temporal\Api\Common\V1\WorkflowType $workflow_type
     *     @type int|string $previous_started_event_id
     *           The last workflow task started event which was processed by some worker for this execution.
     *           Will be zero if no task has ever started.
     *     @type int|string $started_event_id
     *           The id of the most recent workflow task started event, which will have been generated as a
     *           result of this poll request being served. Will be zero if the task
     *           does not contain any events which would advance history (no new WFT started).
     *           Currently this can happen for queries.
     *     @type int $attempt
     *           Starting at 1, the number of attempts to complete this task by any worker.
     *     @type int|string $backlog_count_hint
     *           A hint that there are more tasks already present in this task queue. Can be used to
     *           prioritize draining a sticky queue before polling from a normal queue.
     *     @type \Temporal\Api\History\V1\History $history
     *           The history for this workflow, which will either be complete or partial. Partial histories
     *           are sent to workers who have signaled that they are using a sticky queue when completing
     *           a workflow task.
     *     @type string $next_page_token
     *           Will be set if there are more history events than were included in this response. Such events
     *           should be fetched via `GetWorkflowExecutionHistory`.
     *     @type \Temporal\Api\Query\V1\WorkflowQuery $query
     *           Legacy queries appear in this field. The query must be responded to via
     *           `RespondQueryTaskCompleted`. If the workflow is already closed (queries are permitted on
     *           closed workflows) then the `history` field will be populated with the entire history. It
     *           may also be populated if this task originates on a non-sticky queue.
     *     @type \Temporal\Api\Taskqueue\V1\TaskQueue $workflow_execution_task_queue
     *           The task queue this task originated from, which will always be the original non-sticky name
     *           for the queue, even if this response came from polling a sticky queue.
     *     @type \Google\Protobuf\Timestamp $scheduled_time
     *           When this task was scheduled by the server
     *     @type \Google\Protobuf\Timestamp $started_time
     *           When the current workflow task started event was generated, meaning the current attempt.
     *     @type array|\Google\Protobuf\Internal\MapField $queries
     *           Queries that should be executed after applying the history in this task. Responses should be
     *           attached to `RespondWorkflowTaskCompletedRequest::query_results`
     *     @type array<\Temporal\Api\Protocol\V1\Message>|\Google\Protobuf\Internal\RepeatedField $messages
     *           Protocol messages piggybacking on a WFT as a transport
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * A unique identifier for this task
     *
     * Generated from protobuf field <code>bytes task_token = 1;</code>
     * @return string
     */
    public function getTaskToken()
    {
        return $this->task_token;
    }

    /**
     * A unique identifier for this task
     *
     * Generated from protobuf field <code>bytes task_token = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTaskToken($var)
    {
        GPBUtil::checkString($var, False);
        $this->task_token = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution workflow_execution = 2;</code>
     * @return \Temporal\Api\Common\V1\WorkflowExecution|null
     */
    public function getWorkflowExecution()
    {
        return $this->workflow_execution;
    }

    public function hasWorkflowExecution()
    {
        return isset($this->workflow_execution);
    }

    public function clearWorkflowExecution()
    {
        unset($this->workflow_execution);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution workflow_execution = 2;</code>
     * @param \Temporal\Api\Common\V1\WorkflowExecution $var
     * @return $this
     */
    public function setWorkflowExecution($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\WorkflowExecution::class);
        $this->workflow_execution = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowType workflow_type = 3;</code>
     * @return \Temporal\Api\Common\V1\WorkflowType|null
     */
    public function getWorkflowType()
    {
        return $this->workflow_type;
    }

    public function hasWorkflowType()
    {
        return isset($this->workflow_type);
    }

    public function clearWorkflowType()
    {
        unset($this->workflow_type);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowType workflow_type = 3;</code>
     * @param \Temporal\Api\Common\V1\WorkflowType $var
     * @return $this
     */
    public function setWorkflowType($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\WorkflowType::class);
        $this->workflow_type = $var;

        return $this;
    }

    /**
     * The last workflow task started event which was processed by some worker for this execution.
     * Will be zero if no task has ever started.
     *
     * Generated from protobuf field <code>int64 previous_started_event_id = 4;</code>
     * @return int|string
     */
    public function getPreviousStartedEventId()
    {
        return $this->previous_started_event_id;
    }

    /**
     * The last workflow task started event which was processed by some worker for this execution.
     * Will be zero if no task has ever started.
     *
     * Generated from protobuf field <code>int64 previous_started_event_id = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPreviousStartedEventId($var)
    {
        GPBUtil::checkInt64($var);
        $this->previous_started_event_id = $var;

        return $this;
    }

    /**
     * The id of the most recent workflow task started event, which will have been generated as a
     * result of this poll request being served. Will be zero if the task
     * does not contain any events which would advance history (no new WFT started).
     * Currently this can happen for queries.
     *
     * Generated from protobuf field <code>int64 started_event_id = 5;</code>
     * @return int|string
     */
    public function getStartedEventId()
    {
        return $this->started_event_id;
    }

    /**
     * The id of the most recent workflow task started event, which will have been generated as a
     * result of this poll request being served. Will be zero if the task
     * does not contain any events which would advance history (no new WFT started).
     * Currently this can happen for queries.
     *
     * Generated from protobuf field <code>int64 started_event_id = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStartedEventId($var)
    {
        GPBUtil::checkInt64($var);
        $this->started_event_id = $var;

        return $this;
    }

    /**
     * Starting at 1, the number of attempts to complete this task by any worker.
     *
     * Generated from protobuf field <code>int32 attempt = 6;</code>
     * @return int
     */
    public function getAttempt()
    {
        return $this->attempt;
    }

    /**
     * Starting at 1, the number of attempts to complete this task by any worker.
     *
     * Generated from protobuf field <code>int32 attempt = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setAttempt($var)
    {
        GPBUtil::checkInt32($var);
        $this->attempt = $var;

        return $this;
    }

    /**
     * A hint that there are more tasks already present in this task queue. Can be used to
     * prioritize draining a sticky queue before polling from a normal queue.
     *
     * Generated from protobuf field <code>int64 backlog_count_hint = 7;</code>
     * @return int|string
     */
    public function getBacklogCountHint()
    {
        return $this->backlog_count_hint;
    }

    /**
     * A hint that there are more tasks already present in this task queue. Can be used to
     * prioritize draining a sticky queue before polling from a normal queue.
     *
     * Generated from protobuf field <code>int64 backlog_count_hint = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBacklogCountHint($var)
    {
        GPBUtil::checkInt64($var);
        $this->backlog_count_hint = $var;

        return $this;
    }

    /**
     * The history for this workflow, which will either be complete or partial. Partial histories
     * are sent to workers who have signaled that they are using a sticky queue when completing
     * a workflow task.
     *
     * Generated from protobuf field <code>.temporal.api.history.v1.History history = 8;</code>
     * @return \Temporal\Api\History\V1\History|null
     */
    public function getHistory()
    {
        return $this->history;
    }

    public function hasHistory()
    {
        return isset($this->history);
    }

    public function clearHistory()
    {
        unset($this->history);
    }

    /**
     * The history for this workflow, which will either be complete or partial. Partial histories
     * are sent to workers who have signaled that they are using a sticky queue when completing
     * a workflow task.
     *
     * Generated from protobuf field <code>.temporal.api.history.v1.History history = 8;</code>
     * @param \Temporal\Api\History\V1\History $var
     * @return $this
     */
    public function setHistory($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\History\V1\History::class);
        $this->history = $var;

        return $this;
    }

    /**
     * Will be set if there are more history events than were included in this response. Such events
     * should be fetched via `GetWorkflowExecutionHistory`.
     *
     * Generated from protobuf field <code>bytes next_page_token = 9;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Will be set if there are more history events than were included in this response. Such events
     * should be fetched via `GetWorkflowExecutionHistory`.
     *
     * Generated from protobuf field <code>bytes next_page_token = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, False);
        $this->next_page_token = $var;

        return $this;
    }

    /**
     * Legacy queries appear in this field. The query must be responded to via
     * `RespondQueryTaskCompleted`. If the workflow is already closed (queries are permitted on
     * closed workflows) then the `history` field will be populated with the entire history. It
     * may also be populated if this task originates on a non-sticky queue.
     *
     * Generated from protobuf field <code>.temporal.api.query.v1.WorkflowQuery query = 10;</code>
     * @return \Temporal\Api\Query\V1\WorkflowQuery|null
     */
    public function getQuery()
    {
        return $this->query;
    }

    public function hasQuery()
    {
        return isset($this->query);
    }

    public function clearQuery()
    {
        unset($this->query);
    }

    /**
     * Legacy queries appear in this field. The query must be responded to via
     * `RespondQueryTaskCompleted`. If the workflow is already closed (queries are permitted on
     * closed workflows) then the `history` field will be populated with the entire history. It
     * may also be populated if this task originates on a non-sticky queue.
     *
     * Generated from protobuf field <code>.temporal.api.query.v1.WorkflowQuery query = 10;</code>
     * @param \Temporal\Api\Query\V1\WorkflowQuery $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Query\V1\WorkflowQuery::class);
        $this->query = $var;

        return $this;
    }

    /**
     * The task queue this task originated from, which will always be the original non-sticky name
     * for the queue, even if this response came from polling a sticky queue.
     *
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.TaskQueue workflow_execution_task_queue = 11;</code>
     * @return \Temporal\Api\Taskqueue\V1\TaskQueue|null
     */
    public function getWorkflowExecutionTaskQueue()
    {
        return $this->workflow_execution_task_queue;
    }

    public function hasWorkflowExecutionTaskQueue()
    {
        return isset($this->workflow_execution_task_queue);
    }

    public function clearWorkflowExecutionTaskQueue()
    {
        unset($this->workflow_execution_task_queue);
    }

    /**
     * The task queue this task originated from, which will always be the original non-sticky name
     * for the queue, even if this response came from polling a sticky queue.
     *
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.TaskQueue workflow_execution_task_queue = 11;</code>
     * @param \Temporal\Api\Taskqueue\V1\TaskQueue $var
     * @return $this
     */
    public function setWorkflowExecutionTaskQueue($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Taskqueue\V1\TaskQueue::class);
        $this->workflow_execution_task_queue = $var;

        return $this;
    }

    /**
     * When this task was scheduled by the server
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp scheduled_time = 12;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getScheduledTime()
    {
        return $this->scheduled_time;
    }

    public function hasScheduledTime()
    {
        return isset($this->scheduled_time);
    }

    public function clearScheduledTime()
    {
        unset($this->scheduled_time);
    }

    /**
     * When this task was scheduled by the server
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp scheduled_time = 12;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setScheduledTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->scheduled_time = $var;

        return $this;
    }

    /**
     * When the current workflow task started event was generated, meaning the current attempt.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp started_time = 13;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartedTime()
    {
        return $this->started_time;
    }

    public function hasStartedTime()
    {
        return isset($this->started_time);
    }

    public function clearStartedTime()
    {
        unset($this->started_time);
    }

    /**
     * When the current workflow task started event was generated, meaning the current attempt.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp started_time = 13;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartedTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->started_time = $var;

        return $this;
    }

    /**
     * Queries that should be executed after applying the history in this task. Responses should be
     * attached to `RespondWorkflowTaskCompletedRequest::query_results`
     *
     * Generated from protobuf field <code>map<string, .temporal.api.query.v1.WorkflowQuery> queries = 14;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getQueries()
    {
        return $this->queries;
    }

    /**
     * Queries that should be executed after applying the history in this task. Responses should be
     * attached to `RespondWorkflowTaskCompletedRequest::query_results`
     *
     * Generated from protobuf field <code>map<string, .temporal.api.query.v1.WorkflowQuery> queries = 14;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setQueries($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Temporal\Api\Query\V1\WorkflowQuery::class);
        $this->queries = $arr;

        return $this;
    }

    /**
     * Protocol messages piggybacking on a WFT as a transport
     *
     * Generated from protobuf field <code>repeated .temporal.api.protocol.v1.Message messages = 15;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * Protocol messages piggybacking on a WFT as a transport
     *
     * Generated from protobuf field <code>repeated .temporal.api.protocol.v1.Message messages = 15;</code>
     * @param array<\Temporal\Api\Protocol\V1\Message>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMessages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Temporal\Api\Protocol\V1\Message::class);
        $this->messages = $arr;

        return $this;
    }

}


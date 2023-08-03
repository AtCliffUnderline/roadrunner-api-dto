<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/history/v1/message.proto

namespace Temporal\Api\History\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.history.v1.WorkflowPropertiesModifiedExternallyEventAttributes</code>
 */
class WorkflowPropertiesModifiedExternallyEventAttributes extends \Google\Protobuf\Internal\Message
{
    /**
     * If set to a nonempty string, future workflow tasks for this workflow shall be dispatched on
     * the provided queue.
     *
     * Generated from protobuf field <code>string new_task_queue = 1;</code>
     */
    protected $new_task_queue = '';
    /**
     * If set, update the workflow task timeout to this value.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration new_workflow_task_timeout = 2 [(.gogoproto.stdduration) = true];</code>
     */
    protected $new_workflow_task_timeout = null;
    /**
     * If set, update the workflow run timeout to this value. May be set to 0 for no timeout.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration new_workflow_run_timeout = 3 [(.gogoproto.stdduration) = true];</code>
     */
    protected $new_workflow_run_timeout = null;
    /**
     * If set, update the workflow execution timeout to this value. May be set to 0 for no timeout.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration new_workflow_execution_timeout = 4 [(.gogoproto.stdduration) = true];</code>
     */
    protected $new_workflow_execution_timeout = null;
    /**
     * If set, update the workflow memo with the provided values. The values will be merged with
     * the existing memo. If the user wants to delete values, a default/empty Payload should be
     * used as the value for the key being deleted.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Memo upserted_memo = 5;</code>
     */
    protected $upserted_memo = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $new_task_queue
     *           If set to a nonempty string, future workflow tasks for this workflow shall be dispatched on
     *           the provided queue.
     *     @type \Google\Protobuf\Duration $new_workflow_task_timeout
     *           If set, update the workflow task timeout to this value.
     *     @type \Google\Protobuf\Duration $new_workflow_run_timeout
     *           If set, update the workflow run timeout to this value. May be set to 0 for no timeout.
     *     @type \Google\Protobuf\Duration $new_workflow_execution_timeout
     *           If set, update the workflow execution timeout to this value. May be set to 0 for no timeout.
     *     @type \Temporal\Api\Common\V1\Memo $upserted_memo
     *           If set, update the workflow memo with the provided values. The values will be merged with
     *           the existing memo. If the user wants to delete values, a default/empty Payload should be
     *           used as the value for the key being deleted.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\History\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * If set to a nonempty string, future workflow tasks for this workflow shall be dispatched on
     * the provided queue.
     *
     * Generated from protobuf field <code>string new_task_queue = 1;</code>
     * @return string
     */
    public function getNewTaskQueue()
    {
        return $this->new_task_queue;
    }

    /**
     * If set to a nonempty string, future workflow tasks for this workflow shall be dispatched on
     * the provided queue.
     *
     * Generated from protobuf field <code>string new_task_queue = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNewTaskQueue($var)
    {
        GPBUtil::checkString($var, True);
        $this->new_task_queue = $var;

        return $this;
    }

    /**
     * If set, update the workflow task timeout to this value.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration new_workflow_task_timeout = 2 [(.gogoproto.stdduration) = true];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getNewWorkflowTaskTimeout()
    {
        return $this->new_workflow_task_timeout;
    }

    public function hasNewWorkflowTaskTimeout()
    {
        return isset($this->new_workflow_task_timeout);
    }

    public function clearNewWorkflowTaskTimeout()
    {
        unset($this->new_workflow_task_timeout);
    }

    /**
     * If set, update the workflow task timeout to this value.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration new_workflow_task_timeout = 2 [(.gogoproto.stdduration) = true];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setNewWorkflowTaskTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->new_workflow_task_timeout = $var;

        return $this;
    }

    /**
     * If set, update the workflow run timeout to this value. May be set to 0 for no timeout.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration new_workflow_run_timeout = 3 [(.gogoproto.stdduration) = true];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getNewWorkflowRunTimeout()
    {
        return $this->new_workflow_run_timeout;
    }

    public function hasNewWorkflowRunTimeout()
    {
        return isset($this->new_workflow_run_timeout);
    }

    public function clearNewWorkflowRunTimeout()
    {
        unset($this->new_workflow_run_timeout);
    }

    /**
     * If set, update the workflow run timeout to this value. May be set to 0 for no timeout.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration new_workflow_run_timeout = 3 [(.gogoproto.stdduration) = true];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setNewWorkflowRunTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->new_workflow_run_timeout = $var;

        return $this;
    }

    /**
     * If set, update the workflow execution timeout to this value. May be set to 0 for no timeout.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration new_workflow_execution_timeout = 4 [(.gogoproto.stdduration) = true];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getNewWorkflowExecutionTimeout()
    {
        return $this->new_workflow_execution_timeout;
    }

    public function hasNewWorkflowExecutionTimeout()
    {
        return isset($this->new_workflow_execution_timeout);
    }

    public function clearNewWorkflowExecutionTimeout()
    {
        unset($this->new_workflow_execution_timeout);
    }

    /**
     * If set, update the workflow execution timeout to this value. May be set to 0 for no timeout.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration new_workflow_execution_timeout = 4 [(.gogoproto.stdduration) = true];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setNewWorkflowExecutionTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->new_workflow_execution_timeout = $var;

        return $this;
    }

    /**
     * If set, update the workflow memo with the provided values. The values will be merged with
     * the existing memo. If the user wants to delete values, a default/empty Payload should be
     * used as the value for the key being deleted.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Memo upserted_memo = 5;</code>
     * @return \Temporal\Api\Common\V1\Memo|null
     */
    public function getUpsertedMemo()
    {
        return $this->upserted_memo;
    }

    public function hasUpsertedMemo()
    {
        return isset($this->upserted_memo);
    }

    public function clearUpsertedMemo()
    {
        unset($this->upserted_memo);
    }

    /**
     * If set, update the workflow memo with the provided values. The values will be merged with
     * the existing memo. If the user wants to delete values, a default/empty Payload should be
     * used as the value for the key being deleted.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Memo upserted_memo = 5;</code>
     * @param \Temporal\Api\Common\V1\Memo $var
     * @return $this
     */
    public function setUpsertedMemo($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\Memo::class);
        $this->upserted_memo = $var;

        return $this;
    }

}


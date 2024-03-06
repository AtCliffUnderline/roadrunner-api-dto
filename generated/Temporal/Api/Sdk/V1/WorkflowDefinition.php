<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/sdk/v1/workflow_metadata.proto

namespace Temporal\Api\Sdk\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * (-- api-linter: core::0203::optional=disabled --)
 *
 * Generated from protobuf message <code>temporal.api.sdk.v1.WorkflowDefinition</code>
 */
class WorkflowDefinition extends \Google\Protobuf\Internal\Message
{
    /**
     * A name scoped by the task queue that maps to this workflow definition.
     * If missing, this workflow is a dynamic workflow.
     *
     * Generated from protobuf field <code>string type = 1;</code>
     */
    protected $type = '';
    /**
     * An optional workflow description provided by the application.
     * By convention, external tools may interpret its first part,
     * i.e., ending with a line break, as a summary of the description.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    protected $description = '';
    /**
     * Generated from protobuf field <code>repeated .temporal.api.sdk.v1.WorkflowInteractionDefinition query_definitions = 3;</code>
     */
    private $query_definitions;
    /**
     * Generated from protobuf field <code>repeated .temporal.api.sdk.v1.WorkflowInteractionDefinition signal_definitions = 4;</code>
     */
    private $signal_definitions;
    /**
     * Generated from protobuf field <code>repeated .temporal.api.sdk.v1.WorkflowInteractionDefinition update_definitions = 5;</code>
     */
    private $update_definitions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $type
     *           A name scoped by the task queue that maps to this workflow definition.
     *           If missing, this workflow is a dynamic workflow.
     *     @type string $description
     *           An optional workflow description provided by the application.
     *           By convention, external tools may interpret its first part,
     *           i.e., ending with a line break, as a summary of the description.
     *     @type array<\Temporal\Api\Sdk\V1\WorkflowInteractionDefinition>|\Google\Protobuf\Internal\RepeatedField $query_definitions
     *     @type array<\Temporal\Api\Sdk\V1\WorkflowInteractionDefinition>|\Google\Protobuf\Internal\RepeatedField $signal_definitions
     *     @type array<\Temporal\Api\Sdk\V1\WorkflowInteractionDefinition>|\Google\Protobuf\Internal\RepeatedField $update_definitions
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Sdk\V1\WorkflowMetadata::initOnce();
        parent::__construct($data);
    }

    /**
     * A name scoped by the task queue that maps to this workflow definition.
     * If missing, this workflow is a dynamic workflow.
     *
     * Generated from protobuf field <code>string type = 1;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A name scoped by the task queue that maps to this workflow definition.
     * If missing, this workflow is a dynamic workflow.
     *
     * Generated from protobuf field <code>string type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * An optional workflow description provided by the application.
     * By convention, external tools may interpret its first part,
     * i.e., ending with a line break, as a summary of the description.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * An optional workflow description provided by the application.
     * By convention, external tools may interpret its first part,
     * i.e., ending with a line break, as a summary of the description.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .temporal.api.sdk.v1.WorkflowInteractionDefinition query_definitions = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQueryDefinitions()
    {
        return $this->query_definitions;
    }

    /**
     * Generated from protobuf field <code>repeated .temporal.api.sdk.v1.WorkflowInteractionDefinition query_definitions = 3;</code>
     * @param array<\Temporal\Api\Sdk\V1\WorkflowInteractionDefinition>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQueryDefinitions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Temporal\Api\Sdk\V1\WorkflowInteractionDefinition::class);
        $this->query_definitions = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .temporal.api.sdk.v1.WorkflowInteractionDefinition signal_definitions = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSignalDefinitions()
    {
        return $this->signal_definitions;
    }

    /**
     * Generated from protobuf field <code>repeated .temporal.api.sdk.v1.WorkflowInteractionDefinition signal_definitions = 4;</code>
     * @param array<\Temporal\Api\Sdk\V1\WorkflowInteractionDefinition>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSignalDefinitions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Temporal\Api\Sdk\V1\WorkflowInteractionDefinition::class);
        $this->signal_definitions = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .temporal.api.sdk.v1.WorkflowInteractionDefinition update_definitions = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUpdateDefinitions()
    {
        return $this->update_definitions;
    }

    /**
     * Generated from protobuf field <code>repeated .temporal.api.sdk.v1.WorkflowInteractionDefinition update_definitions = 5;</code>
     * @param array<\Temporal\Api\Sdk\V1\WorkflowInteractionDefinition>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUpdateDefinitions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Temporal\Api\Sdk\V1\WorkflowInteractionDefinition::class);
        $this->update_definitions = $arr;

        return $this;
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/workflow/v1/message.proto

namespace Temporal\Api\Workflow\V1\CallbackInfo;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Trigger for when the workflow is closed.
 *
 * Generated from protobuf message <code>temporal.api.workflow.v1.CallbackInfo.WorkflowClosed</code>
 */
class WorkflowClosed extends \Google\Protobuf\Internal\Message
{

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflow\V1\Message::initOnce();
        parent::__construct($data);
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(WorkflowClosed::class, \Temporal\Api\Workflow\V1\CallbackInfo_WorkflowClosed::class);


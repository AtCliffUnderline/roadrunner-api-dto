<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/export/v1/message.proto

namespace GPBMetadata\Temporal\Api\Export\V1;

class Message
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Temporal\Api\History\V1\Message::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
$temporal/api/export/v1/message.prototemporal.api.export.v1"F
WorkflowExecution1
history (2 .temporal.api.history.v1.History"N
WorkflowExecutions8
items (2).temporal.api.export.v1.WorkflowExecutionB�
io.temporal.api.export.v1BMessageProtoPZ#go.temporal.io/api/export/v1;export�Temporalio.Api.Export.V1�Temporalio::Api::Export::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

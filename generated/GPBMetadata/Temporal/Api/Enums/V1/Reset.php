<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/enums/v1/reset.proto

namespace GPBMetadata\Temporal\Api\Enums\V1;

class Reset
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
!temporal/api/enums/v1/reset.prototemporal.api.enums.v1*r
ResetReapplyType"
RESET_REAPPLY_TYPE_UNSPECIFIED 
RESET_REAPPLY_TYPE_SIGNAL
RESET_REAPPLY_TYPE_NONE*n
	ResetType
RESET_TYPE_UNSPECIFIED "
RESET_TYPE_FIRST_WORKFLOW_TASK!
RESET_TYPE_LAST_WORKFLOW_TASKB�
io.temporal.api.enums.v1B
ResetProtoPZ!go.temporal.io/api/enums/v1;enums�Temporalio.Api.Enums.V1�Temporalio::Api::Enums::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}


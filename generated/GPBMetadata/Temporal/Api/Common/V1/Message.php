<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/common/v1/message.proto

namespace GPBMetadata\Temporal\Api\Common\V1;

class Message
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Temporal\Api\Enums\V1\Common::initOnce();
        \GPBMetadata\Temporal\Api\Enums\V1\Reset::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xA8\x11\x0A\$temporal/api/common/v1/message.proto\x12\x16temporal.api.common.v1\x1A\x1Bgoogle/protobuf/empty.proto\x1A\"temporal/api/enums/v1/common.proto\x1A!temporal/api/enums/v1/reset.proto\"T\x0A\x08DataBlob\x12:\x0A\x0Dencoding_type\x18\x01 \x01(\x0E2#.temporal.api.enums.v1.EncodingType\x12\x0C\x0A\x04data\x18\x02 \x01(\x0C\"=\x0A\x08Payloads\x121\x0A\x08payloads\x18\x01 \x03(\x0B2\x1F.temporal.api.common.v1.Payload\"\x89\x01\x0A\x07Payload\x12?\x0A\x08metadata\x18\x01 \x03(\x0B2-.temporal.api.common.v1.Payload.MetadataEntry\x12\x0C\x0A\x04data\x18\x02 \x01(\x0C\x1A/\x0A\x0DMetadataEntry\x12\x0B\x0A\x03key\x18\x01 \x01(\x09\x12\x0D\x0A\x05value\x18\x02 \x01(\x0C:\x028\x01\"\xBE\x01\x0A\x10SearchAttributes\x12S\x0A\x0Eindexed_fields\x18\x01 \x03(\x0B2;.temporal.api.common.v1.SearchAttributes.IndexedFieldsEntry\x1AU\x0A\x12IndexedFieldsEntry\x12\x0B\x0A\x03key\x18\x01 \x01(\x09\x12.\x0A\x05value\x18\x02 \x01(\x0B2\x1F.temporal.api.common.v1.Payload:\x028\x01\"\x90\x01\x0A\x04Memo\x128\x0A\x06fields\x18\x01 \x03(\x0B2(.temporal.api.common.v1.Memo.FieldsEntry\x1AN\x0A\x0BFieldsEntry\x12\x0B\x0A\x03key\x18\x01 \x01(\x09\x12.\x0A\x05value\x18\x02 \x01(\x0B2\x1F.temporal.api.common.v1.Payload:\x028\x01\"\x94\x01\x0A\x06Header\x12:\x0A\x06fields\x18\x01 \x03(\x0B2*.temporal.api.common.v1.Header.FieldsEntry\x1AN\x0A\x0BFieldsEntry\x12\x0B\x0A\x03key\x18\x01 \x01(\x09\x12.\x0A\x05value\x18\x02 \x01(\x0B2\x1F.temporal.api.common.v1.Payload:\x028\x01\"8\x0A\x11WorkflowExecution\x12\x13\x0A\x0Bworkflow_id\x18\x01 \x01(\x09\x12\x0E\x0A\x06run_id\x18\x02 \x01(\x09\"\x1C\x0A\x0CWorkflowType\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\"\x1C\x0A\x0CActivityType\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\"\xD1\x01\x0A\x0BRetryPolicy\x123\x0A\x10initial_interval\x18\x01 \x01(\x0B2\x19.google.protobuf.Duration\x12\x1B\x0A\x13backoff_coefficient\x18\x02 \x01(\x01\x123\x0A\x10maximum_interval\x18\x03 \x01(\x0B2\x19.google.protobuf.Duration\x12\x18\x0A\x10maximum_attempts\x18\x04 \x01(\x05\x12!\x0A\x19non_retryable_error_types\x18\x05 \x03(\x09\"F\x0A\x10MeteringMetadata\x122\x0A*nonfirst_local_activity_execution_attempts\x18\x0D \x01(\x0D\">\x0A\x12WorkerVersionStamp\x12\x10\x0A\x08build_id\x18\x01 \x01(\x09\x12\x16\x0A\x0Euse_versioning\x18\x03 \x01(\x08\"E\x0A\x19WorkerVersionCapabilities\x12\x10\x0A\x08build_id\x18\x01 \x01(\x09\x12\x16\x0A\x0Euse_versioning\x18\x02 \x01(\x08\"\xE9\x02\x0A\x0CResetOptions\x125\x0A\x13first_workflow_task\x18\x01 \x01(\x0B2\x16.google.protobuf.EmptyH\x00\x124\x0A\x12last_workflow_task\x18\x02 \x01(\x0B2\x16.google.protobuf.EmptyH\x00\x12\x1A\x0A\x10workflow_task_id\x18\x03 \x01(\x03H\x00\x12\x12\x0A\x08build_id\x18\x04 \x01(\x09H\x00\x12C\x0A\x12reset_reapply_type\x18\x0A \x01(\x0E2'.temporal.api.enums.v1.ResetReapplyType\x12\x18\x0A\x10current_run_only\x18\x0B \x01(\x08\x12S\x0A\x1Breset_reapply_exclude_types\x18\x0C \x03(\x0E2..temporal.api.enums.v1.ResetReapplyExcludeTypeB\x08\x0A\x06target\"\xDE\x01\x0A\x08Callback\x127\x0A\x05nexus\x18\x02 \x01(\x0B2&.temporal.api.common.v1.Callback.NexusH\x00\x1A\x87\x01\x0A\x05Nexus\x12\x0B\x0A\x03url\x18\x01 \x01(\x09\x12B\x0A\x06header\x18\x02 \x03(\x0B22.temporal.api.common.v1.Callback.Nexus.HeaderEntry\x1A-\x0A\x0BHeaderEntry\x12\x0B\x0A\x03key\x18\x01 \x01(\x09\x12\x0D\x0A\x05value\x18\x02 \x01(\x09:\x028\x01B\x09\x0A\x07variantJ\x04\x08\x01\x10\x02B\x89\x01\x0A\x19io.temporal.api.common.v1B\x0CMessageProtoP\x01Z#go.temporal.io/api/common/v1;common\xAA\x02\x18Temporalio.Api.Common.V1\xEA\x02\x1BTemporalio::Api::Common::V1b\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}


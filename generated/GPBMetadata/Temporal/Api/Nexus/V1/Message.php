<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/nexus/v1/message.proto

namespace GPBMetadata\Temporal\Api\Nexus\V1;

class Message
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Temporal\Api\Common\V1\Message::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
#temporal/api/nexus/v1/message.prototemporal.api.nexus.v1google/protobuf/struct.protogoogle/protobuf/timestamp.proto$temporal/api/common/v1/message.proto"�
Failure
message (	>
metadata (2,.temporal.api.nexus.v1.Failure.MetadataEntry\'
details (2.google.protobuf.Value/
MetadataEntry
key (	
value (	:8"S
HandlerError

error_type (	/
failure (2.temporal.api.nexus.v1.Failure"f
UnsuccessfulOperationError
operation_state (	/
failure (2.temporal.api.nexus.v1.Failure"�
StartOperationRequest
	operation (	

request_id (	
callback (	0
payload (2.temporal.api.common.v1.Payload"A
CancelOperationRequest
	operation (	
operation_id (	"�
Request:
header (2*.temporal.api.nexus.v1.Request.HeaderEntryG
start_operation (2,.temporal.api.nexus.v1.StartOperationRequestH I
cancel_operation (2-.temporal.api.nexus.v1.CancelOperationRequestH -
HeaderEntry
key (	
value (	:8B	
variant"�
StartOperationResponseJ
sync_success (22.temporal.api.nexus.v1.StartOperationResponse.SyncH L
async_success (23.temporal.api.nexus.v1.StartOperationResponse.AsyncH L
operation_error (21.temporal.api.nexus.v1.UnsuccessfulOperationErrorH 8
Sync0
payload (2.temporal.api.common.v1.Payload
Async
operation_id (	B	
variant"
CancelOperationResponse"�
ResponseH
start_operation (2-.temporal.api.nexus.v1.StartOperationResponseH J
cancel_operation (2..temporal.api.nexus.v1.CancelOperationResponseH B	
variant"�
IncomingService
version (

id (	8
spec (2*.temporal.api.nexus.v1.IncomingServiceSpec0
created_time (2.google.protobuf.Timestamp6
last_modified_time (2.google.protobuf.Timestamp

url_prefix (	"�
IncomingServiceSpec
name (	
	namespace (	

task_queue (	J
metadata (28.temporal.api.nexus.v1.IncomingServiceSpec.MetadataEntryE
MetadataEntry
key (	#
value (2.google.protobuf.Any:8"�
OutgoingService
version (
name (	8
spec (2*.temporal.api.nexus.v1.OutgoingServiceSpec0
created_time (2.google.protobuf.Timestamp6
last_modified_time (2.google.protobuf.Timestamp""
OutgoingServiceSpec
url (	B�
io.temporal.api.nexus.v1BMessageProtoPZ!go.temporal.io/api/nexus/v1;nexus�Temporalio.Api.Nexus.V1�Temporalio::Api::Nexus::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}


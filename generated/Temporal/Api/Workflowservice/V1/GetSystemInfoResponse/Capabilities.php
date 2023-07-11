<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1\GetSystemInfoResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * System capability details.
 *
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.GetSystemInfoResponse.Capabilities</code>
 */
class Capabilities extends \Google\Protobuf\Internal\Message
{
    /**
     * True if signal and query headers are supported.
     *
     * Generated from protobuf field <code>bool signal_and_query_header = 1;</code>
     */
    protected $signal_and_query_header = false;
    /**
     * True if internal errors are differentiated from other types of errors for purposes of
     * retrying non-internal errors.
     * When unset/false, clients retry all failures. When true, clients should only retry
     * non-internal errors.
     *
     * Generated from protobuf field <code>bool internal_error_differentiation = 2;</code>
     */
    protected $internal_error_differentiation = false;
    /**
     * True if RespondActivityTaskFailed API supports including heartbeat details
     *
     * Generated from protobuf field <code>bool activity_failure_include_heartbeat = 3;</code>
     */
    protected $activity_failure_include_heartbeat = false;
    /**
     * Supports scheduled workflow features.
     *
     * Generated from protobuf field <code>bool supports_schedules = 4;</code>
     */
    protected $supports_schedules = false;
    /**
     * True if server uses protos that include temporal.api.failure.v1.Failure.encoded_attributes
     *
     * Generated from protobuf field <code>bool encoded_failure_attributes = 5;</code>
     */
    protected $encoded_failure_attributes = false;
    /**
     * True if server supports dispatching Workflow and Activity tasks based on a worker's build_id
     * (see:
     * https://github.com/temporalio/proposals/blob/a123af3b559f43db16ea6dd31870bfb754c4dc5e/versioning/worker-versions.md)
     *
     * Generated from protobuf field <code>bool build_id_based_versioning = 6;</code>
     */
    protected $build_id_based_versioning = false;
    /**
     * True if server supports upserting workflow memo
     *
     * Generated from protobuf field <code>bool upsert_memo = 7;</code>
     */
    protected $upsert_memo = false;
    /**
     * True if server supports eager workflow task dispatching for the StartWorkflowExecution API
     *
     * Generated from protobuf field <code>bool eager_workflow_start = 8;</code>
     */
    protected $eager_workflow_start = false;
    /**
     * True if the server knows about the sdk metadata field on WFT completions and will record
     * it in history
     *
     * Generated from protobuf field <code>bool sdk_metadata = 9;</code>
     */
    protected $sdk_metadata = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $signal_and_query_header
     *           True if signal and query headers are supported.
     *     @type bool $internal_error_differentiation
     *           True if internal errors are differentiated from other types of errors for purposes of
     *           retrying non-internal errors.
     *           When unset/false, clients retry all failures. When true, clients should only retry
     *           non-internal errors.
     *     @type bool $activity_failure_include_heartbeat
     *           True if RespondActivityTaskFailed API supports including heartbeat details
     *     @type bool $supports_schedules
     *           Supports scheduled workflow features.
     *     @type bool $encoded_failure_attributes
     *           True if server uses protos that include temporal.api.failure.v1.Failure.encoded_attributes
     *     @type bool $build_id_based_versioning
     *           True if server supports dispatching Workflow and Activity tasks based on a worker's build_id
     *           (see:
     *           https://github.com/temporalio/proposals/blob/a123af3b559f43db16ea6dd31870bfb754c4dc5e/versioning/worker-versions.md)
     *     @type bool $upsert_memo
     *           True if server supports upserting workflow memo
     *     @type bool $eager_workflow_start
     *           True if server supports eager workflow task dispatching for the StartWorkflowExecution API
     *     @type bool $sdk_metadata
     *           True if the server knows about the sdk metadata field on WFT completions and will record
     *           it in history
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * True if signal and query headers are supported.
     *
     * Generated from protobuf field <code>bool signal_and_query_header = 1;</code>
     * @return bool
     */
    public function getSignalAndQueryHeader()
    {
        return $this->signal_and_query_header;
    }

    /**
     * True if signal and query headers are supported.
     *
     * Generated from protobuf field <code>bool signal_and_query_header = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setSignalAndQueryHeader($var)
    {
        GPBUtil::checkBool($var);
        $this->signal_and_query_header = $var;

        return $this;
    }

    /**
     * True if internal errors are differentiated from other types of errors for purposes of
     * retrying non-internal errors.
     * When unset/false, clients retry all failures. When true, clients should only retry
     * non-internal errors.
     *
     * Generated from protobuf field <code>bool internal_error_differentiation = 2;</code>
     * @return bool
     */
    public function getInternalErrorDifferentiation()
    {
        return $this->internal_error_differentiation;
    }

    /**
     * True if internal errors are differentiated from other types of errors for purposes of
     * retrying non-internal errors.
     * When unset/false, clients retry all failures. When true, clients should only retry
     * non-internal errors.
     *
     * Generated from protobuf field <code>bool internal_error_differentiation = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setInternalErrorDifferentiation($var)
    {
        GPBUtil::checkBool($var);
        $this->internal_error_differentiation = $var;

        return $this;
    }

    /**
     * True if RespondActivityTaskFailed API supports including heartbeat details
     *
     * Generated from protobuf field <code>bool activity_failure_include_heartbeat = 3;</code>
     * @return bool
     */
    public function getActivityFailureIncludeHeartbeat()
    {
        return $this->activity_failure_include_heartbeat;
    }

    /**
     * True if RespondActivityTaskFailed API supports including heartbeat details
     *
     * Generated from protobuf field <code>bool activity_failure_include_heartbeat = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setActivityFailureIncludeHeartbeat($var)
    {
        GPBUtil::checkBool($var);
        $this->activity_failure_include_heartbeat = $var;

        return $this;
    }

    /**
     * Supports scheduled workflow features.
     *
     * Generated from protobuf field <code>bool supports_schedules = 4;</code>
     * @return bool
     */
    public function getSupportsSchedules()
    {
        return $this->supports_schedules;
    }

    /**
     * Supports scheduled workflow features.
     *
     * Generated from protobuf field <code>bool supports_schedules = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setSupportsSchedules($var)
    {
        GPBUtil::checkBool($var);
        $this->supports_schedules = $var;

        return $this;
    }

    /**
     * True if server uses protos that include temporal.api.failure.v1.Failure.encoded_attributes
     *
     * Generated from protobuf field <code>bool encoded_failure_attributes = 5;</code>
     * @return bool
     */
    public function getEncodedFailureAttributes()
    {
        return $this->encoded_failure_attributes;
    }

    /**
     * True if server uses protos that include temporal.api.failure.v1.Failure.encoded_attributes
     *
     * Generated from protobuf field <code>bool encoded_failure_attributes = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setEncodedFailureAttributes($var)
    {
        GPBUtil::checkBool($var);
        $this->encoded_failure_attributes = $var;

        return $this;
    }

    /**
     * True if server supports dispatching Workflow and Activity tasks based on a worker's build_id
     * (see:
     * https://github.com/temporalio/proposals/blob/a123af3b559f43db16ea6dd31870bfb754c4dc5e/versioning/worker-versions.md)
     *
     * Generated from protobuf field <code>bool build_id_based_versioning = 6;</code>
     * @return bool
     */
    public function getBuildIdBasedVersioning()
    {
        return $this->build_id_based_versioning;
    }

    /**
     * True if server supports dispatching Workflow and Activity tasks based on a worker's build_id
     * (see:
     * https://github.com/temporalio/proposals/blob/a123af3b559f43db16ea6dd31870bfb754c4dc5e/versioning/worker-versions.md)
     *
     * Generated from protobuf field <code>bool build_id_based_versioning = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setBuildIdBasedVersioning($var)
    {
        GPBUtil::checkBool($var);
        $this->build_id_based_versioning = $var;

        return $this;
    }

    /**
     * True if server supports upserting workflow memo
     *
     * Generated from protobuf field <code>bool upsert_memo = 7;</code>
     * @return bool
     */
    public function getUpsertMemo()
    {
        return $this->upsert_memo;
    }

    /**
     * True if server supports upserting workflow memo
     *
     * Generated from protobuf field <code>bool upsert_memo = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setUpsertMemo($var)
    {
        GPBUtil::checkBool($var);
        $this->upsert_memo = $var;

        return $this;
    }

    /**
     * True if server supports eager workflow task dispatching for the StartWorkflowExecution API
     *
     * Generated from protobuf field <code>bool eager_workflow_start = 8;</code>
     * @return bool
     */
    public function getEagerWorkflowStart()
    {
        return $this->eager_workflow_start;
    }

    /**
     * True if server supports eager workflow task dispatching for the StartWorkflowExecution API
     *
     * Generated from protobuf field <code>bool eager_workflow_start = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setEagerWorkflowStart($var)
    {
        GPBUtil::checkBool($var);
        $this->eager_workflow_start = $var;

        return $this;
    }

    /**
     * True if the server knows about the sdk metadata field on WFT completions and will record
     * it in history
     *
     * Generated from protobuf field <code>bool sdk_metadata = 9;</code>
     * @return bool
     */
    public function getSdkMetadata()
    {
        return $this->sdk_metadata;
    }

    /**
     * True if the server knows about the sdk metadata field on WFT completions and will record
     * it in history
     *
     * Generated from protobuf field <code>bool sdk_metadata = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setSdkMetadata($var)
    {
        GPBUtil::checkBool($var);
        $this->sdk_metadata = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Capabilities::class, \Temporal\Api\Workflowservice\V1\GetSystemInfoResponse_Capabilities::class);


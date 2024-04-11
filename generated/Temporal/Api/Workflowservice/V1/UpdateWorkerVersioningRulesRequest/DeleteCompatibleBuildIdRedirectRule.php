<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1\UpdateWorkerVersioningRulesRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.UpdateWorkerVersioningRulesRequest.DeleteCompatibleBuildIdRedirectRule</code>
 */
class DeleteCompatibleBuildIdRedirectRule extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string source_build_id = 1;</code>
     */
    protected $source_build_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $source_build_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string source_build_id = 1;</code>
     * @return string
     */
    public function getSourceBuildId()
    {
        return $this->source_build_id;
    }

    /**
     * Generated from protobuf field <code>string source_build_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceBuildId($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_build_id = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DeleteCompatibleBuildIdRedirectRule::class, \Temporal\Api\Workflowservice\V1\UpdateWorkerVersioningRulesRequest_DeleteCompatibleBuildIdRedirectRule::class);


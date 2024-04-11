<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/operatorservice/v1/request_response.proto

namespace Temporal\Api\Operatorservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.operatorservice.v1.DeleteNamespaceRequest</code>
 */
class DeleteNamespaceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Only one of namespace or namespace_id must be specified to identify namespace.
     *
     * Generated from protobuf field <code>string namespace = 1;</code>
     */
    protected $namespace = '';
    /**
     * Generated from protobuf field <code>string namespace_id = 2;</code>
     */
    protected $namespace_id = '';
    /**
     * If provided, the deletion of namespace info will be delayed for the given duration (0 means no delay).
     * If not provided, the default delay configured in the cluster will be used.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration namespace_delete_delay = 3;</code>
     */
    protected $namespace_delete_delay = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $namespace
     *           Only one of namespace or namespace_id must be specified to identify namespace.
     *     @type string $namespace_id
     *     @type \Google\Protobuf\Duration $namespace_delete_delay
     *           If provided, the deletion of namespace info will be delayed for the given duration (0 means no delay).
     *           If not provided, the default delay configured in the cluster will be used.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Operatorservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Only one of namespace or namespace_id must be specified to identify namespace.
     *
     * Generated from protobuf field <code>string namespace = 1;</code>
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Only one of namespace or namespace_id must be specified to identify namespace.
     *
     * Generated from protobuf field <code>string namespace = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNamespace($var)
    {
        GPBUtil::checkString($var, True);
        $this->namespace = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string namespace_id = 2;</code>
     * @return string
     */
    public function getNamespaceId()
    {
        return $this->namespace_id;
    }

    /**
     * Generated from protobuf field <code>string namespace_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNamespaceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->namespace_id = $var;

        return $this;
    }

    /**
     * If provided, the deletion of namespace info will be delayed for the given duration (0 means no delay).
     * If not provided, the default delay configured in the cluster will be used.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration namespace_delete_delay = 3;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getNamespaceDeleteDelay()
    {
        return $this->namespace_delete_delay;
    }

    public function hasNamespaceDeleteDelay()
    {
        return isset($this->namespace_delete_delay);
    }

    public function clearNamespaceDeleteDelay()
    {
        unset($this->namespace_delete_delay);
    }

    /**
     * If provided, the deletion of namespace info will be delayed for the given duration (0 means no delay).
     * If not provided, the default delay configured in the cluster will be used.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration namespace_delete_delay = 3;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setNamespaceDeleteDelay($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->namespace_delete_delay = $var;

        return $this;
    }

}


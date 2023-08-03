<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.GetWorkerTaskReachabilityRequest</code>
 */
class GetWorkerTaskReachabilityRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string namespace = 1;</code>
     */
    protected $namespace = '';
    /**
     * Build ids to retrieve reachability for. An empty string will be interpreted as an unversioned worker.
     * The number of build ids that can be queried in a single API call is limited.
     * Open source users can adjust this limit by setting the server's dynamic config value for
     * `limit.reachabilityQueryBuildIds` with the caveat that this call can strain the visibility store.
     *
     * Generated from protobuf field <code>repeated string build_ids = 2;</code>
     */
    private $build_ids;
    /**
     * Task queues to retrieve reachability for. Leave this empty to query for all task queues associated with given
     * build ids in the namespace.
     * Must specify at least one task queue if querying for an unversioned worker.
     * The number of task queues that the server will fetch reachability information for is limited.
     * See the `GetWorkerTaskReachabilityResponse` documentation for more information.
     *
     * Generated from protobuf field <code>repeated string task_queues = 3;</code>
     */
    private $task_queues;
    /**
     * Type of reachability to query for.
     * `TASK_REACHABILITY_NEW_WORKFLOWS` is always returned in the response.
     * Use `TASK_REACHABILITY_EXISTING_WORKFLOWS` if your application needs to respond to queries on closed workflows.
     * Otherwise, use `TASK_REACHABILITY_OPEN_WORKFLOWS`. Default is `TASK_REACHABILITY_EXISTING_WORKFLOWS` if left
     * unspecified.
     * See the TaskReachability docstring for information about each enum variant.
     *
     * Generated from protobuf field <code>.temporal.api.enums.v1.TaskReachability reachability = 4;</code>
     */
    protected $reachability = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $namespace
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $build_ids
     *           Build ids to retrieve reachability for. An empty string will be interpreted as an unversioned worker.
     *           The number of build ids that can be queried in a single API call is limited.
     *           Open source users can adjust this limit by setting the server's dynamic config value for
     *           `limit.reachabilityQueryBuildIds` with the caveat that this call can strain the visibility store.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $task_queues
     *           Task queues to retrieve reachability for. Leave this empty to query for all task queues associated with given
     *           build ids in the namespace.
     *           Must specify at least one task queue if querying for an unversioned worker.
     *           The number of task queues that the server will fetch reachability information for is limited.
     *           See the `GetWorkerTaskReachabilityResponse` documentation for more information.
     *     @type int $reachability
     *           Type of reachability to query for.
     *           `TASK_REACHABILITY_NEW_WORKFLOWS` is always returned in the response.
     *           Use `TASK_REACHABILITY_EXISTING_WORKFLOWS` if your application needs to respond to queries on closed workflows.
     *           Otherwise, use `TASK_REACHABILITY_OPEN_WORKFLOWS`. Default is `TASK_REACHABILITY_EXISTING_WORKFLOWS` if left
     *           unspecified.
     *           See the TaskReachability docstring for information about each enum variant.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string namespace = 1;</code>
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
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
     * Build ids to retrieve reachability for. An empty string will be interpreted as an unversioned worker.
     * The number of build ids that can be queried in a single API call is limited.
     * Open source users can adjust this limit by setting the server's dynamic config value for
     * `limit.reachabilityQueryBuildIds` with the caveat that this call can strain the visibility store.
     *
     * Generated from protobuf field <code>repeated string build_ids = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBuildIds()
    {
        return $this->build_ids;
    }

    /**
     * Build ids to retrieve reachability for. An empty string will be interpreted as an unversioned worker.
     * The number of build ids that can be queried in a single API call is limited.
     * Open source users can adjust this limit by setting the server's dynamic config value for
     * `limit.reachabilityQueryBuildIds` with the caveat that this call can strain the visibility store.
     *
     * Generated from protobuf field <code>repeated string build_ids = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBuildIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->build_ids = $arr;

        return $this;
    }

    /**
     * Task queues to retrieve reachability for. Leave this empty to query for all task queues associated with given
     * build ids in the namespace.
     * Must specify at least one task queue if querying for an unversioned worker.
     * The number of task queues that the server will fetch reachability information for is limited.
     * See the `GetWorkerTaskReachabilityResponse` documentation for more information.
     *
     * Generated from protobuf field <code>repeated string task_queues = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTaskQueues()
    {
        return $this->task_queues;
    }

    /**
     * Task queues to retrieve reachability for. Leave this empty to query for all task queues associated with given
     * build ids in the namespace.
     * Must specify at least one task queue if querying for an unversioned worker.
     * The number of task queues that the server will fetch reachability information for is limited.
     * See the `GetWorkerTaskReachabilityResponse` documentation for more information.
     *
     * Generated from protobuf field <code>repeated string task_queues = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTaskQueues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->task_queues = $arr;

        return $this;
    }

    /**
     * Type of reachability to query for.
     * `TASK_REACHABILITY_NEW_WORKFLOWS` is always returned in the response.
     * Use `TASK_REACHABILITY_EXISTING_WORKFLOWS` if your application needs to respond to queries on closed workflows.
     * Otherwise, use `TASK_REACHABILITY_OPEN_WORKFLOWS`. Default is `TASK_REACHABILITY_EXISTING_WORKFLOWS` if left
     * unspecified.
     * See the TaskReachability docstring for information about each enum variant.
     *
     * Generated from protobuf field <code>.temporal.api.enums.v1.TaskReachability reachability = 4;</code>
     * @return int
     */
    public function getReachability()
    {
        return $this->reachability;
    }

    /**
     * Type of reachability to query for.
     * `TASK_REACHABILITY_NEW_WORKFLOWS` is always returned in the response.
     * Use `TASK_REACHABILITY_EXISTING_WORKFLOWS` if your application needs to respond to queries on closed workflows.
     * Otherwise, use `TASK_REACHABILITY_OPEN_WORKFLOWS`. Default is `TASK_REACHABILITY_EXISTING_WORKFLOWS` if left
     * unspecified.
     * See the TaskReachability docstring for information about each enum variant.
     *
     * Generated from protobuf field <code>.temporal.api.enums.v1.TaskReachability reachability = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setReachability($var)
    {
        GPBUtil::checkEnum($var, \Temporal\Api\Enums\V1\TaskReachability::class);
        $this->reachability = $var;

        return $this;
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/schedule/v1/message.proto

namespace Temporal\Api\Schedule\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.schedule.v1.Schedule</code>
 */
class Schedule extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.temporal.api.schedule.v1.ScheduleSpec spec = 1;</code>
     */
    protected $spec = null;
    /**
     * Generated from protobuf field <code>.temporal.api.schedule.v1.ScheduleAction action = 2;</code>
     */
    protected $action = null;
    /**
     * Generated from protobuf field <code>.temporal.api.schedule.v1.SchedulePolicies policies = 3;</code>
     */
    protected $policies = null;
    /**
     * Generated from protobuf field <code>.temporal.api.schedule.v1.ScheduleState state = 4;</code>
     */
    protected $state = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Temporal\Api\Schedule\V1\ScheduleSpec $spec
     *     @type \Temporal\Api\Schedule\V1\ScheduleAction $action
     *     @type \Temporal\Api\Schedule\V1\SchedulePolicies $policies
     *     @type \Temporal\Api\Schedule\V1\ScheduleState $state
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Schedule\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.schedule.v1.ScheduleSpec spec = 1;</code>
     * @return \Temporal\Api\Schedule\V1\ScheduleSpec|null
     */
    public function getSpec()
    {
        return $this->spec;
    }

    public function hasSpec()
    {
        return isset($this->spec);
    }

    public function clearSpec()
    {
        unset($this->spec);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.schedule.v1.ScheduleSpec spec = 1;</code>
     * @param \Temporal\Api\Schedule\V1\ScheduleSpec $var
     * @return $this
     */
    public function setSpec($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Schedule\V1\ScheduleSpec::class);
        $this->spec = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.schedule.v1.ScheduleAction action = 2;</code>
     * @return \Temporal\Api\Schedule\V1\ScheduleAction|null
     */
    public function getAction()
    {
        return $this->action;
    }

    public function hasAction()
    {
        return isset($this->action);
    }

    public function clearAction()
    {
        unset($this->action);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.schedule.v1.ScheduleAction action = 2;</code>
     * @param \Temporal\Api\Schedule\V1\ScheduleAction $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Schedule\V1\ScheduleAction::class);
        $this->action = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.schedule.v1.SchedulePolicies policies = 3;</code>
     * @return \Temporal\Api\Schedule\V1\SchedulePolicies|null
     */
    public function getPolicies()
    {
        return $this->policies;
    }

    public function hasPolicies()
    {
        return isset($this->policies);
    }

    public function clearPolicies()
    {
        unset($this->policies);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.schedule.v1.SchedulePolicies policies = 3;</code>
     * @param \Temporal\Api\Schedule\V1\SchedulePolicies $var
     * @return $this
     */
    public function setPolicies($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Schedule\V1\SchedulePolicies::class);
        $this->policies = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.schedule.v1.ScheduleState state = 4;</code>
     * @return \Temporal\Api\Schedule\V1\ScheduleState|null
     */
    public function getState()
    {
        return $this->state;
    }

    public function hasState()
    {
        return isset($this->state);
    }

    public function clearState()
    {
        unset($this->state);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.schedule.v1.ScheduleState state = 4;</code>
     * @param \Temporal\Api\Schedule\V1\ScheduleState $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Schedule\V1\ScheduleState::class);
        $this->state = $var;

        return $this;
    }

}


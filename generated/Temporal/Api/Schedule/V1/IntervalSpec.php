<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/schedule/v1/message.proto

namespace Temporal\Api\Schedule\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * IntervalSpec matches times that can be expressed as:
 * epoch + n * interval + phase
 * where n is an integer.
 * phase defaults to zero if missing. interval is required.
 * Both interval and phase must be non-negative and are truncated to the nearest
 * second before any calculations.
 * For example, an interval of 1 hour with phase of zero would match every hour,
 * on the hour. The same interval but a phase of 19 minutes would match every
 * xx:19:00. An interval of 28 days with phase zero would match
 * 2022-02-17T00:00:00Z (among other times). The same interval with a phase of 3
 * days, 5 hours, and 23 minutes would match 2022-02-20T05:23:00Z instead.
 *
 * Generated from protobuf message <code>temporal.api.schedule.v1.IntervalSpec</code>
 */
class IntervalSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.google.protobuf.Duration interval = 1;</code>
     */
    protected $interval = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Duration phase = 2;</code>
     */
    protected $phase = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $interval
     *     @type \Google\Protobuf\Duration $phase
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Schedule\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Duration interval = 1;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getInterval()
    {
        return $this->interval;
    }

    public function hasInterval()
    {
        return isset($this->interval);
    }

    public function clearInterval()
    {
        unset($this->interval);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Duration interval = 1;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setInterval($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->interval = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Duration phase = 2;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getPhase()
    {
        return $this->phase;
    }

    public function hasPhase()
    {
        return isset($this->phase);
    }

    public function clearPhase()
    {
        unset($this->phase);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Duration phase = 2;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setPhase($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->phase = $var;

        return $this;
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/history/v1/message.proto

namespace Temporal\Api\History\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.history.v1.WorkflowExecutionUpdateAcceptedEventAttributes</code>
 */
class WorkflowExecutionUpdateAcceptedEventAttributes extends \Google\Protobuf\Internal\Message
{
    /**
     * The instance ID of the update protocol that generated this event.
     *
     * Generated from protobuf field <code>string protocol_instance_id = 1;</code>
     */
    protected $protocol_instance_id = '';
    /**
     * The message ID of the original request message that initiated this
     * update. Needed so that the worker can recreate and deliver that same
     * message as part of replay.
     *
     * Generated from protobuf field <code>string accepted_request_message_id = 2;</code>
     */
    protected $accepted_request_message_id = '';
    /**
     * The event ID used to sequence the original request message.
     *
     * Generated from protobuf field <code>int64 accepted_request_sequencing_event_id = 3;</code>
     */
    protected $accepted_request_sequencing_event_id = 0;
    /**
     * The message payload of the original request message that initiated this
     * update.
     *
     * Generated from protobuf field <code>.temporal.api.update.v1.Request accepted_request = 4;</code>
     */
    protected $accepted_request = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $protocol_instance_id
     *           The instance ID of the update protocol that generated this event.
     *     @type string $accepted_request_message_id
     *           The message ID of the original request message that initiated this
     *           update. Needed so that the worker can recreate and deliver that same
     *           message as part of replay.
     *     @type int|string $accepted_request_sequencing_event_id
     *           The event ID used to sequence the original request message.
     *     @type \Temporal\Api\Update\V1\Request $accepted_request
     *           The message payload of the original request message that initiated this
     *           update.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\History\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * The instance ID of the update protocol that generated this event.
     *
     * Generated from protobuf field <code>string protocol_instance_id = 1;</code>
     * @return string
     */
    public function getProtocolInstanceId()
    {
        return $this->protocol_instance_id;
    }

    /**
     * The instance ID of the update protocol that generated this event.
     *
     * Generated from protobuf field <code>string protocol_instance_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProtocolInstanceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->protocol_instance_id = $var;

        return $this;
    }

    /**
     * The message ID of the original request message that initiated this
     * update. Needed so that the worker can recreate and deliver that same
     * message as part of replay.
     *
     * Generated from protobuf field <code>string accepted_request_message_id = 2;</code>
     * @return string
     */
    public function getAcceptedRequestMessageId()
    {
        return $this->accepted_request_message_id;
    }

    /**
     * The message ID of the original request message that initiated this
     * update. Needed so that the worker can recreate and deliver that same
     * message as part of replay.
     *
     * Generated from protobuf field <code>string accepted_request_message_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAcceptedRequestMessageId($var)
    {
        GPBUtil::checkString($var, True);
        $this->accepted_request_message_id = $var;

        return $this;
    }

    /**
     * The event ID used to sequence the original request message.
     *
     * Generated from protobuf field <code>int64 accepted_request_sequencing_event_id = 3;</code>
     * @return int|string
     */
    public function getAcceptedRequestSequencingEventId()
    {
        return $this->accepted_request_sequencing_event_id;
    }

    /**
     * The event ID used to sequence the original request message.
     *
     * Generated from protobuf field <code>int64 accepted_request_sequencing_event_id = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAcceptedRequestSequencingEventId($var)
    {
        GPBUtil::checkInt64($var);
        $this->accepted_request_sequencing_event_id = $var;

        return $this;
    }

    /**
     * The message payload of the original request message that initiated this
     * update.
     *
     * Generated from protobuf field <code>.temporal.api.update.v1.Request accepted_request = 4;</code>
     * @return \Temporal\Api\Update\V1\Request|null
     */
    public function getAcceptedRequest()
    {
        return $this->accepted_request;
    }

    public function hasAcceptedRequest()
    {
        return isset($this->accepted_request);
    }

    public function clearAcceptedRequest()
    {
        unset($this->accepted_request);
    }

    /**
     * The message payload of the original request message that initiated this
     * update.
     *
     * Generated from protobuf field <code>.temporal.api.update.v1.Request accepted_request = 4;</code>
     * @param \Temporal\Api\Update\V1\Request $var
     * @return $this
     */
    public function setAcceptedRequest($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Update\V1\Request::class);
        $this->accepted_request = $var;

        return $this;
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: centrifugo/api/v1/api.proto

namespace RoadRunner\Centrifugal\API\DTO\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>centrifugal.centrifugo.api.Command</code>
 */
class Command extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 id = 1;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.Command.MethodType method = 2;</code>
     */
    protected $method = 0;
    /**
     * Generated from protobuf field <code>bytes params = 3;</code>
     */
    protected $params = '';
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.PublishRequest publish = 4;</code>
     */
    protected $publish = null;
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.BroadcastRequest broadcast = 5;</code>
     */
    protected $broadcast = null;
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.SubscribeRequest subscribe = 6;</code>
     */
    protected $subscribe = null;
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.UnsubscribeRequest unsubscribe = 7;</code>
     */
    protected $unsubscribe = null;
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.DisconnectRequest disconnect = 8;</code>
     */
    protected $disconnect = null;
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.PresenceRequest presence = 9;</code>
     */
    protected $presence = null;
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.PresenceStatsRequest presence_stats = 10;</code>
     */
    protected $presence_stats = null;
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.HistoryRequest history = 11;</code>
     */
    protected $history = null;
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.HistoryRemoveRequest history_remove = 12;</code>
     */
    protected $history_remove = null;
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.InfoRequest info = 13;</code>
     */
    protected $info = null;
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.RPCRequest rpc = 14;</code>
     */
    protected $rpc = null;
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.RefreshRequest refresh = 15;</code>
     */
    protected $refresh = null;
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.ChannelsRequest channels = 16;</code>
     */
    protected $channels = null;
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.ConnectionsRequest connections = 17;</code>
     */
    protected $connections = null;
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.UpdateUserStatusRequest update_user_status = 18;</code>
     */
    protected $update_user_status = null;
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.GetUserStatusRequest get_user_status = 19;</code>
     */
    protected $get_user_status = null;
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.DeleteUserStatusRequest delete_user_status = 20;</code>
     */
    protected $delete_user_status = null;
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.BlockUserRequest block_user = 21;</code>
     */
    protected $block_user = null;
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.UnblockUserRequest unblock_user = 22;</code>
     */
    protected $unblock_user = null;
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.RevokeTokenRequest revoke_token = 23;</code>
     */
    protected $revoke_token = null;
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.InvalidateUserTokensRequest invalidate_user_tokens = 24;</code>
     */
    protected $invalidate_user_tokens = null;
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.DeviceRegisterRequest device_register = 25;</code>
     */
    protected $device_register = null;
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.DeviceUpdateRequest device_update = 26;</code>
     */
    protected $device_update = null;
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.DeviceRemoveRequest device_remove = 27;</code>
     */
    protected $device_remove = null;
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.DeviceListRequest device_list = 28;</code>
     */
    protected $device_list = null;
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.PushUserChannelListRequest push_user_channel_list = 29;</code>
     */
    protected $push_user_channel_list = null;
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.PushUserChannelUpdateRequest push_user_channel_update = 30;</code>
     */
    protected $push_user_channel_update = null;
    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.SendPushNotificationRequest send_push_notification = 31;</code>
     */
    protected $send_push_notification = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $id
     *     @type int $method
     *     @type string $params
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\PublishRequest $publish
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\BroadcastRequest $broadcast
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\SubscribeRequest $subscribe
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\UnsubscribeRequest $unsubscribe
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\DisconnectRequest $disconnect
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\PresenceRequest $presence
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\PresenceStatsRequest $presence_stats
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\HistoryRequest $history
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\HistoryRemoveRequest $history_remove
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\InfoRequest $info
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\RPCRequest $rpc
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\RefreshRequest $refresh
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\ChannelsRequest $channels
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\ConnectionsRequest $connections
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\UpdateUserStatusRequest $update_user_status
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\GetUserStatusRequest $get_user_status
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\DeleteUserStatusRequest $delete_user_status
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\BlockUserRequest $block_user
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\UnblockUserRequest $unblock_user
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\RevokeTokenRequest $revoke_token
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\InvalidateUserTokensRequest $invalidate_user_tokens
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\DeviceRegisterRequest $device_register
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\DeviceUpdateRequest $device_update
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\DeviceRemoveRequest $device_remove
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\DeviceListRequest $device_list
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\PushUserChannelListRequest $push_user_channel_list
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\PushUserChannelUpdateRequest $push_user_channel_update
     *     @type \RoadRunner\Centrifugal\API\DTO\V1\SendPushNotificationRequest $send_push_notification
     * }
     */
    public function __construct($data = NULL) {
        \RoadRunner\Centrifugal\API\DTO\V1\GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 id = 1;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>uint32 id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint32($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.Command.MethodType method = 2;</code>
     * @return int
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.Command.MethodType method = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMethod($var)
    {
        GPBUtil::checkEnum($var, \RoadRunner\Centrifugal\API\DTO\V1\Command\MethodType::class);
        $this->method = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes params = 3;</code>
     * @return string
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * Generated from protobuf field <code>bytes params = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setParams($var)
    {
        GPBUtil::checkString($var, False);
        $this->params = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.PublishRequest publish = 4;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\PublishRequest|null
     */
    public function getPublish()
    {
        return $this->publish;
    }

    public function hasPublish()
    {
        return isset($this->publish);
    }

    public function clearPublish()
    {
        unset($this->publish);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.PublishRequest publish = 4;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\PublishRequest $var
     * @return $this
     */
    public function setPublish($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\PublishRequest::class);
        $this->publish = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.BroadcastRequest broadcast = 5;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\BroadcastRequest|null
     */
    public function getBroadcast()
    {
        return $this->broadcast;
    }

    public function hasBroadcast()
    {
        return isset($this->broadcast);
    }

    public function clearBroadcast()
    {
        unset($this->broadcast);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.BroadcastRequest broadcast = 5;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\BroadcastRequest $var
     * @return $this
     */
    public function setBroadcast($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\BroadcastRequest::class);
        $this->broadcast = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.SubscribeRequest subscribe = 6;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\SubscribeRequest|null
     */
    public function getSubscribe()
    {
        return $this->subscribe;
    }

    public function hasSubscribe()
    {
        return isset($this->subscribe);
    }

    public function clearSubscribe()
    {
        unset($this->subscribe);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.SubscribeRequest subscribe = 6;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\SubscribeRequest $var
     * @return $this
     */
    public function setSubscribe($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\SubscribeRequest::class);
        $this->subscribe = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.UnsubscribeRequest unsubscribe = 7;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\UnsubscribeRequest|null
     */
    public function getUnsubscribe()
    {
        return $this->unsubscribe;
    }

    public function hasUnsubscribe()
    {
        return isset($this->unsubscribe);
    }

    public function clearUnsubscribe()
    {
        unset($this->unsubscribe);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.UnsubscribeRequest unsubscribe = 7;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\UnsubscribeRequest $var
     * @return $this
     */
    public function setUnsubscribe($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\UnsubscribeRequest::class);
        $this->unsubscribe = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.DisconnectRequest disconnect = 8;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\DisconnectRequest|null
     */
    public function getDisconnect()
    {
        return $this->disconnect;
    }

    public function hasDisconnect()
    {
        return isset($this->disconnect);
    }

    public function clearDisconnect()
    {
        unset($this->disconnect);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.DisconnectRequest disconnect = 8;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\DisconnectRequest $var
     * @return $this
     */
    public function setDisconnect($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\DisconnectRequest::class);
        $this->disconnect = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.PresenceRequest presence = 9;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\PresenceRequest|null
     */
    public function getPresence()
    {
        return $this->presence;
    }

    public function hasPresence()
    {
        return isset($this->presence);
    }

    public function clearPresence()
    {
        unset($this->presence);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.PresenceRequest presence = 9;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\PresenceRequest $var
     * @return $this
     */
    public function setPresence($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\PresenceRequest::class);
        $this->presence = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.PresenceStatsRequest presence_stats = 10;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\PresenceStatsRequest|null
     */
    public function getPresenceStats()
    {
        return $this->presence_stats;
    }

    public function hasPresenceStats()
    {
        return isset($this->presence_stats);
    }

    public function clearPresenceStats()
    {
        unset($this->presence_stats);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.PresenceStatsRequest presence_stats = 10;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\PresenceStatsRequest $var
     * @return $this
     */
    public function setPresenceStats($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\PresenceStatsRequest::class);
        $this->presence_stats = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.HistoryRequest history = 11;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\HistoryRequest|null
     */
    public function getHistory()
    {
        return $this->history;
    }

    public function hasHistory()
    {
        return isset($this->history);
    }

    public function clearHistory()
    {
        unset($this->history);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.HistoryRequest history = 11;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\HistoryRequest $var
     * @return $this
     */
    public function setHistory($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\HistoryRequest::class);
        $this->history = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.HistoryRemoveRequest history_remove = 12;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\HistoryRemoveRequest|null
     */
    public function getHistoryRemove()
    {
        return $this->history_remove;
    }

    public function hasHistoryRemove()
    {
        return isset($this->history_remove);
    }

    public function clearHistoryRemove()
    {
        unset($this->history_remove);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.HistoryRemoveRequest history_remove = 12;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\HistoryRemoveRequest $var
     * @return $this
     */
    public function setHistoryRemove($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\HistoryRemoveRequest::class);
        $this->history_remove = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.InfoRequest info = 13;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\InfoRequest|null
     */
    public function getInfo()
    {
        return $this->info;
    }

    public function hasInfo()
    {
        return isset($this->info);
    }

    public function clearInfo()
    {
        unset($this->info);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.InfoRequest info = 13;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\InfoRequest $var
     * @return $this
     */
    public function setInfo($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\InfoRequest::class);
        $this->info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.RPCRequest rpc = 14;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\RPCRequest|null
     */
    public function getRpc()
    {
        return $this->rpc;
    }

    public function hasRpc()
    {
        return isset($this->rpc);
    }

    public function clearRpc()
    {
        unset($this->rpc);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.RPCRequest rpc = 14;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\RPCRequest $var
     * @return $this
     */
    public function setRpc($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\RPCRequest::class);
        $this->rpc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.RefreshRequest refresh = 15;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\RefreshRequest|null
     */
    public function getRefresh()
    {
        return $this->refresh;
    }

    public function hasRefresh()
    {
        return isset($this->refresh);
    }

    public function clearRefresh()
    {
        unset($this->refresh);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.RefreshRequest refresh = 15;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\RefreshRequest $var
     * @return $this
     */
    public function setRefresh($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\RefreshRequest::class);
        $this->refresh = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.ChannelsRequest channels = 16;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\ChannelsRequest|null
     */
    public function getChannels()
    {
        return $this->channels;
    }

    public function hasChannels()
    {
        return isset($this->channels);
    }

    public function clearChannels()
    {
        unset($this->channels);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.ChannelsRequest channels = 16;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\ChannelsRequest $var
     * @return $this
     */
    public function setChannels($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\ChannelsRequest::class);
        $this->channels = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.ConnectionsRequest connections = 17;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\ConnectionsRequest|null
     */
    public function getConnections()
    {
        return $this->connections;
    }

    public function hasConnections()
    {
        return isset($this->connections);
    }

    public function clearConnections()
    {
        unset($this->connections);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.ConnectionsRequest connections = 17;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\ConnectionsRequest $var
     * @return $this
     */
    public function setConnections($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\ConnectionsRequest::class);
        $this->connections = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.UpdateUserStatusRequest update_user_status = 18;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\UpdateUserStatusRequest|null
     */
    public function getUpdateUserStatus()
    {
        return $this->update_user_status;
    }

    public function hasUpdateUserStatus()
    {
        return isset($this->update_user_status);
    }

    public function clearUpdateUserStatus()
    {
        unset($this->update_user_status);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.UpdateUserStatusRequest update_user_status = 18;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\UpdateUserStatusRequest $var
     * @return $this
     */
    public function setUpdateUserStatus($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\UpdateUserStatusRequest::class);
        $this->update_user_status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.GetUserStatusRequest get_user_status = 19;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\GetUserStatusRequest|null
     */
    public function getGetUserStatus()
    {
        return $this->get_user_status;
    }

    public function hasGetUserStatus()
    {
        return isset($this->get_user_status);
    }

    public function clearGetUserStatus()
    {
        unset($this->get_user_status);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.GetUserStatusRequest get_user_status = 19;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\GetUserStatusRequest $var
     * @return $this
     */
    public function setGetUserStatus($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\GetUserStatusRequest::class);
        $this->get_user_status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.DeleteUserStatusRequest delete_user_status = 20;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\DeleteUserStatusRequest|null
     */
    public function getDeleteUserStatus()
    {
        return $this->delete_user_status;
    }

    public function hasDeleteUserStatus()
    {
        return isset($this->delete_user_status);
    }

    public function clearDeleteUserStatus()
    {
        unset($this->delete_user_status);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.DeleteUserStatusRequest delete_user_status = 20;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\DeleteUserStatusRequest $var
     * @return $this
     */
    public function setDeleteUserStatus($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\DeleteUserStatusRequest::class);
        $this->delete_user_status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.BlockUserRequest block_user = 21;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\BlockUserRequest|null
     */
    public function getBlockUser()
    {
        return $this->block_user;
    }

    public function hasBlockUser()
    {
        return isset($this->block_user);
    }

    public function clearBlockUser()
    {
        unset($this->block_user);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.BlockUserRequest block_user = 21;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\BlockUserRequest $var
     * @return $this
     */
    public function setBlockUser($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\BlockUserRequest::class);
        $this->block_user = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.UnblockUserRequest unblock_user = 22;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\UnblockUserRequest|null
     */
    public function getUnblockUser()
    {
        return $this->unblock_user;
    }

    public function hasUnblockUser()
    {
        return isset($this->unblock_user);
    }

    public function clearUnblockUser()
    {
        unset($this->unblock_user);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.UnblockUserRequest unblock_user = 22;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\UnblockUserRequest $var
     * @return $this
     */
    public function setUnblockUser($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\UnblockUserRequest::class);
        $this->unblock_user = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.RevokeTokenRequest revoke_token = 23;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\RevokeTokenRequest|null
     */
    public function getRevokeToken()
    {
        return $this->revoke_token;
    }

    public function hasRevokeToken()
    {
        return isset($this->revoke_token);
    }

    public function clearRevokeToken()
    {
        unset($this->revoke_token);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.RevokeTokenRequest revoke_token = 23;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\RevokeTokenRequest $var
     * @return $this
     */
    public function setRevokeToken($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\RevokeTokenRequest::class);
        $this->revoke_token = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.InvalidateUserTokensRequest invalidate_user_tokens = 24;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\InvalidateUserTokensRequest|null
     */
    public function getInvalidateUserTokens()
    {
        return $this->invalidate_user_tokens;
    }

    public function hasInvalidateUserTokens()
    {
        return isset($this->invalidate_user_tokens);
    }

    public function clearInvalidateUserTokens()
    {
        unset($this->invalidate_user_tokens);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.InvalidateUserTokensRequest invalidate_user_tokens = 24;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\InvalidateUserTokensRequest $var
     * @return $this
     */
    public function setInvalidateUserTokens($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\InvalidateUserTokensRequest::class);
        $this->invalidate_user_tokens = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.DeviceRegisterRequest device_register = 25;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\DeviceRegisterRequest|null
     */
    public function getDeviceRegister()
    {
        return $this->device_register;
    }

    public function hasDeviceRegister()
    {
        return isset($this->device_register);
    }

    public function clearDeviceRegister()
    {
        unset($this->device_register);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.DeviceRegisterRequest device_register = 25;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\DeviceRegisterRequest $var
     * @return $this
     */
    public function setDeviceRegister($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\DeviceRegisterRequest::class);
        $this->device_register = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.DeviceUpdateRequest device_update = 26;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\DeviceUpdateRequest|null
     */
    public function getDeviceUpdate()
    {
        return $this->device_update;
    }

    public function hasDeviceUpdate()
    {
        return isset($this->device_update);
    }

    public function clearDeviceUpdate()
    {
        unset($this->device_update);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.DeviceUpdateRequest device_update = 26;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\DeviceUpdateRequest $var
     * @return $this
     */
    public function setDeviceUpdate($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\DeviceUpdateRequest::class);
        $this->device_update = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.DeviceRemoveRequest device_remove = 27;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\DeviceRemoveRequest|null
     */
    public function getDeviceRemove()
    {
        return $this->device_remove;
    }

    public function hasDeviceRemove()
    {
        return isset($this->device_remove);
    }

    public function clearDeviceRemove()
    {
        unset($this->device_remove);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.DeviceRemoveRequest device_remove = 27;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\DeviceRemoveRequest $var
     * @return $this
     */
    public function setDeviceRemove($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\DeviceRemoveRequest::class);
        $this->device_remove = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.DeviceListRequest device_list = 28;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\DeviceListRequest|null
     */
    public function getDeviceList()
    {
        return $this->device_list;
    }

    public function hasDeviceList()
    {
        return isset($this->device_list);
    }

    public function clearDeviceList()
    {
        unset($this->device_list);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.DeviceListRequest device_list = 28;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\DeviceListRequest $var
     * @return $this
     */
    public function setDeviceList($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\DeviceListRequest::class);
        $this->device_list = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.PushUserChannelListRequest push_user_channel_list = 29;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\PushUserChannelListRequest|null
     */
    public function getPushUserChannelList()
    {
        return $this->push_user_channel_list;
    }

    public function hasPushUserChannelList()
    {
        return isset($this->push_user_channel_list);
    }

    public function clearPushUserChannelList()
    {
        unset($this->push_user_channel_list);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.PushUserChannelListRequest push_user_channel_list = 29;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\PushUserChannelListRequest $var
     * @return $this
     */
    public function setPushUserChannelList($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\PushUserChannelListRequest::class);
        $this->push_user_channel_list = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.PushUserChannelUpdateRequest push_user_channel_update = 30;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\PushUserChannelUpdateRequest|null
     */
    public function getPushUserChannelUpdate()
    {
        return $this->push_user_channel_update;
    }

    public function hasPushUserChannelUpdate()
    {
        return isset($this->push_user_channel_update);
    }

    public function clearPushUserChannelUpdate()
    {
        unset($this->push_user_channel_update);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.PushUserChannelUpdateRequest push_user_channel_update = 30;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\PushUserChannelUpdateRequest $var
     * @return $this
     */
    public function setPushUserChannelUpdate($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\PushUserChannelUpdateRequest::class);
        $this->push_user_channel_update = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.SendPushNotificationRequest send_push_notification = 31;</code>
     * @return \RoadRunner\Centrifugal\API\DTO\V1\SendPushNotificationRequest|null
     */
    public function getSendPushNotification()
    {
        return $this->send_push_notification;
    }

    public function hasSendPushNotification()
    {
        return isset($this->send_push_notification);
    }

    public function clearSendPushNotification()
    {
        unset($this->send_push_notification);
    }

    /**
     * Generated from protobuf field <code>.centrifugal.centrifugo.api.SendPushNotificationRequest send_push_notification = 31;</code>
     * @param \RoadRunner\Centrifugal\API\DTO\V1\SendPushNotificationRequest $var
     * @return $this
     */
    public function setSendPushNotification($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Centrifugal\API\DTO\V1\SendPushNotificationRequest::class);
        $this->send_push_notification = $var;

        return $this;
    }

}


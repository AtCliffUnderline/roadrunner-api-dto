<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: applogger/v1/applogger.proto

namespace RoadRunner\AppLogger\DTO\V1\GPBMetadata;

class Applogger
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
applogger/v1/applogger.protoapplogger.v1"F
LogEntry
message (	)
	log_attrs (2.applogger.v1.LogAttrs"&
LogAttrs
key (	
value (	"

ResponseBVZapplogger/v1�RoadRunner\\AppLogger\\DTO\\V1�\'RoadRunner\\AppLogger\\DTO\\V1\\GPBMetadatabproto3'
        , true);

        static::$is_initialized = true;
    }
}

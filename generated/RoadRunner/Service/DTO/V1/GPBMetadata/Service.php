<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: service/v1/service.proto

namespace RoadRunner\Service\DTO\V1\GPBMetadata;

class Service
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \RoadRunner\Shared\DTO\V1\GPBMetadata\GrpcStatus::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
service/v1/service.proto
service.v1"\'
Response
message (	

ok ("�
Create
name (	
command (	
process_num (
exec_timeout (
remain_after_exit ((
env (2.service.v1.Create.EnvEntry
restart_sec (
service_name_in_logs (
timeout_stop_sec	 (*
EnvEntry
key (	
value (	:8".
Statuses"
status (2.service.v1.Status"t
Status
cpu_percent (
pid (
memory_usage (
command (	!
status (2.shared.v1.Status"
Service
name (	"
List
services (	BPZ
service/v1�RoadRunner\\Service\\DTO\\V1�%RoadRunner\\Service\\DTO\\V1\\GPBMetadatabproto3'
        , true);

        static::$is_initialized = true;
    }
}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: shared/v1/status.proto

namespace RoadRunner\Shared\DTO\V1\GPBMetadata;

class Status
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aca010a167368617265642f76312f7374617475732e70726f746f12097368617265642e7631224e0a06537461747573120c0a04636f6465180120012805120f0a076d65737361676518022001280912250a0764657461696c7318032003280b32142e676f6f676c652e70726f746f6275662e416e79424d5a097374617475732f7631ca0218526f616452756e6e65725c5368617265645c44544f5c5631e20224526f616452756e6e65725c5368617265645c44544f5c56315c4750424d65746164617461620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

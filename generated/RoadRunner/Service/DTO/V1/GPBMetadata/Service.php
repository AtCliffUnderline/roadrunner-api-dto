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
        \RoadRunner\Shared\DTO\V1\GPBMetadata\Status::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0add040a18736572766963652f76312f736572766963652e70726f746f120a736572766963652e763122270a08526573706f6e7365120f0a076d657373616765180120012809120a0a026f6b18022001280822d8010a06437265617465120c0a046e616d65180120012809120f0a07636f6d6d616e6418022001280912130a0b70726f636573735f6e756d18032001280312140a0c657865635f74696d656f757418042001280312190a1172656d61696e5f61667465725f6578697418052001280812280a03656e7618062003280b321b2e736572766963652e76312e4372656174652e456e76456e74727912130a0b726573746172745f7365631807200128041a2a0a08456e76456e747279120b0a036b6579180120012809120d0a0576616c75651802200128093a023801222e0a08537461747573657312220a0673746174757318012003280b32122e736572766963652e76312e53746174757322740a0653746174757312130a0b6370755f70657263656e74180120012802120b0a0370696418022001280512140a0c6d656d6f72795f7573616765180320012804120f0a07636f6d6d616e6418042001280912210a0673746174757318052001280b32112e7368617265642e76312e53746174757322170a0753657276696365120c0a046e616d6518012001280922180a044c69737412100a08736572766963657318012003280942505a0a736572766963652f7631ca0219526f616452756e6e65725c536572766963655c44544f5c5631e20225526f616452756e6e65725c536572766963655c44544f5c56315c4750424d65746164617461620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

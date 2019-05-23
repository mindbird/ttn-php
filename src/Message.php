<?php

namespace Mindbird\TheThingsNetwork;

class Message
{

protected $appId;
protected $devId;
protected $hardwareSerial;
protected $port;
protected $counter;
protected $isRetry;
protected $confirmed;
protected $payloadRaw;
protected $payloadFields;
protected $metadata;
protected $downlinkUrl;

    public function __construct(string $json)
    {
        $messageRaw = json_decode($json, true);

        $this->setAppId($messageRaw['app_id']);
        $this->setDevId($messageRaw['dev_id']);
        $this->setHardwareSerial($messageRaw['hardware_serial']);
        $this->setPort($messageRaw['port']);
        $this->setCounter($messageRaw['counter']);
        $this->setIsRetry($messageRaw['is_retry']);
        $this->setConfirmed($messageRaw['confirmed']);
        $this->setPayloadRaw($messageRaw['payload_raw']);
        $this->setPayloadFields($messageRaw['payload_fields']);
        $this->setDownlinkUrl($messageRaw['downlink_url']);

        $metadata = new Metadata($messageRaw['metadata']);
        $this->setMetadata($metadata);
        var_dump($this);
    }

    /**
     * @return mixed
     */
    public function getAppId()
    {
        return $this->appId;
    }

    /**
     * @param mixed $appId
     */
    public function setAppId($appId): void
    {
        $this->appId = $appId;
    }

    /**
     * @return mixed
     */
    public function getDevId()
    {
        return $this->devId;
    }

    /**
     * @param mixed $devId
     */
    public function setDevId($devId): void
    {
        $this->devId = $devId;
    }

    /**
     * @return mixed
     */
    public function getHardwareSerial()
    {
        return $this->hardwareSerial;
    }

    /**
     * @param mixed $hardwareSerial
     */
    public function setHardwareSerial($hardwareSerial): void
    {
        $this->hardwareSerial = $hardwareSerial;
    }

    /**
     * @return mixed
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @param mixed $port
     */
    public function setPort($port): void
    {
        $this->port = $port;
    }

    /**
     * @return mixed
     */
    public function getCounter()
    {
        return $this->counter;
    }

    /**
     * @param mixed $counter
     */
    public function setCounter($counter): void
    {
        $this->counter = $counter;
    }

    /**
     * @return mixed
     */
    public function getIsRetry()
    {
        return $this->isRetry;
    }

    /**
     * @param mixed $isRetry
     */
    public function setIsRetry($isRetry): void
    {
        $this->isRetry = $isRetry;
    }

    /**
     * @return mixed
     */
    public function getConfirmed()
    {
        return $this->confirmed;
    }

    /**
     * @param mixed $confirmed
     */
    public function setConfirmed($confirmed): void
    {
        $this->confirmed = $confirmed;
    }

    /**
     * @return mixed
     */
    public function getPayloadRaw()
    {
        return $this->payloadRaw;
    }

    /**
     * @param mixed $payloadRaw
     */
    public function setPayloadRaw($payloadRaw): void
    {
        $this->payloadRaw = $payloadRaw;
    }

    /**
     * @return mixed
     */
    public function getPayloadFields()
    {
        return $this->payloadFields;
    }

    /**
     * @param mixed $payloadFields
     */
    public function setPayloadFields($payloadFields): void
    {
        $this->payloadFields = $payloadFields;
    }

    /**
     * @return Metadata
     */
    public function getMetadata(): Metadata
    {
        return $this->metadata;
    }

    /**
     * @param Metadata $metadata
     */
    public function setMetadata(Metadata $metadata): void
    {
        $this->metadata = $metadata;
    }

    /**
     * @return mixed
     */
    public function getDownlinkUrl()
    {
        return $this->downlinkUrl;
    }

    /**
     * @param mixed $downlinkUrl
     */
    public function setDownlinkUrl($downlinkUrl): void
    {
        $this->downlinkUrl = $downlinkUrl;
    }
}
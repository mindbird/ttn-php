<?php

namespace Mindbird\TheThingsNetwork;

class Gateway
{
    protected $gatewayId;
    protected $timestamp;
    protected $time;
    protected $channel;
    protected $rssi;
    protected $snr;
    protected $rfChain;
    protected $latitude;
    protected $longitude;
    protected $altitude;

    public function __construct(object $gateway)
    {
        $this->setGatewayId($gateway->gtw_id);
        $this->setTimestamp($gateway->timestamp);
        $this->setTime($gateway->time);
        $this->setChannel($gateway->channel);
        $this->setRssi($gateway->rssi);
        $this->setSnr($gateway->snr);
        $this->setRfChain($gateway->rf_chain);
        $this->setLatitude($gateway->latitude);
        $this->setLongitude($gateway->longitude);
        $this->setAltitude($gateway->altitude);
    }

    /**
     * @return mixed
     */
    public function getGatewayId()
    {
        return $this->gatewayId;
    }

    /**
     * @param mixed $gatewayId
     */
    public function setGatewayId($gatewayId): void
    {
        $this->gatewayId = $gatewayId;
    }

    /**
     * @return mixed
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param mixed $timestamp
     */
    public function setTimestamp($timestamp): void
    {
        $this->timestamp = $timestamp;
    }

    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param mixed $time
     */
    public function setTime($time): void
    {
        $this->time = $time;
    }

    /**
     * @return mixed
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * @param mixed $channel
     */
    public function setChannel($channel): void
    {
        $this->channel = $channel;
    }

    /**
     * @return mixed
     */
    public function getRssi()
    {
        return $this->rssi;
    }

    /**
     * @param mixed $rssi
     */
    public function setRssi($rssi): void
    {
        $this->rssi = $rssi;
    }

    /**
     * @return mixed
     */
    public function getSnr()
    {
        return $this->snr;
    }

    /**
     * @param mixed $snr
     */
    public function setSnr($snr): void
    {
        $this->snr = $snr;
    }

    /**
     * @return mixed
     */
    public function getRfChain()
    {
        return $this->rfChain;
    }

    /**
     * @param mixed $rfChain
     */
    public function setRfChain($rfChain): void
    {
        $this->rfChain = $rfChain;
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param mixed $latitude
     */
    public function setLatitude($latitude): void
    {
        $this->latitude = $latitude;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param mixed $longitude
     */
    public function setLongitude($longitude): void
    {
        $this->longitude = $longitude;
    }

    /**
     * @return mixed
     */
    public function getAltitude()
    {
        return $this->altitude;
    }

    /**
     * @param mixed $altitude
     */
    public function setAltitude($altitude): void
    {
        $this->altitude = $altitude;
    }
}
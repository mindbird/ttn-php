<?php

namespace Mindbird\TheThingsNetwork;

class Metadata
{
    protected $time;
    protected $frequency;
    protected $modulation;
    protected $dataRate;
    protected $bitRate;
    protected $codingRate;
    protected $gateways;
    protected $latitude;
    protected $longitude;
    protected $altitude;

    public function __construct(array $metadata)
    {
        $this->setTime($metadata['time']);
        $this->setFrequency($metadata['frequency']);
        $this->setModulation($metadata['modulation']);
        $this->setDataRate($metadata['data_rate']);
        $this->setBitRate($metadata['bit_rate']);
        $this->setCodingRate($metadata['coding_rate']);
        $this->setLatitude($metadata['latitude']);
        $this->setLongitude($metadata['longitude']);
        $this->setAltitude($metadata['altitude']);

        if (is_array($metadata->gateways)) {
            foreach ($metadata->gateways as $gatewayRaw) {
                $gateway = new Gateway($gatewayRaw);
                $this->addGateway($gateway);
            }
        }
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
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * @param mixed $frequency
     */
    public function setFrequency($frequency): void
    {
        $this->frequency = $frequency;
    }

    /**
     * @return mixed
     */
    public function getModulation()
    {
        return $this->modulation;
    }

    /**
     * @param mixed $modulation
     */
    public function setModulation($modulation): void
    {
        $this->modulation = $modulation;
    }

    /**
     * @return mixed
     */
    public function getDataRate()
    {
        return $this->dataRate;
    }

    /**
     * @param mixed $dataRate
     */
    public function setDataRate($dataRate): void
    {
        $this->dataRate = $dataRate;
    }

    /**
     * @return mixed
     */
    public function getBitRate()
    {
        return $this->bitRate;
    }

    /**
     * @param mixed $bitRate
     */
    public function setBitRate($bitRate): void
    {
        $this->bitRate = $bitRate;
    }

    /**
     * @return mixed
     */
    public function getCodingRate()
    {
        return $this->codingRate;
    }

    /**
     * @param mixed $codingRate
     */
    public function setCodingRate($codingRate): void
    {
        $this->codingRate = $codingRate;
    }

    /**
     * @return Gateway[]
     */
    public function getGateways(): array
    {
        return $this->gateways;
    }

    /**
     * @param Gateway $gateway
     */
    public function addGateway($gateway): void
    {
        $this->gateways[] = $gateway;
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
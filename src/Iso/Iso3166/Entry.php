<?php

namespace AdamQuaile\CountryInfo\Iso\Iso3166;

/**
 * Immutable value-object for an ISO-3166 entry
 */
final class Entry
{
    /**
     * @var string
     */
    private $alpha2Code;

    /**
     * @var string
     */
    private $alpha3Code;

    /**
     * @var string
     */
    private $numericCode;

    /**
     * @var string
     */
    private $commonName;

    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $officialName;

    /**
     * @param Alpha2Code    $alpha2Code
     * @param Alpha3Code    $alpha3Code
     * @param NumericCode   $numericCode
     * @param Name|null     $commonName
     * @param Name          $name
     * @param Name|null     $officialName
     */
    public function __construct(
        Alpha2Code $alpha2Code,
        Alpha3Code $alpha3Code,
        NumericCode $numericCode,
        Name $commonName = null,
        Name $name,
        Name $officialName = null
    ) {
        $this->alpha2Code = $alpha2Code;
        $this->alpha3Code = $alpha3Code;
        $this->numericCode = $numericCode;
        $this->commonName = $commonName;
        $this->name = $name;
        $this->officialName = $officialName;
    }

    /**
     * @return string
     */
    public function alpha2Code()
    {
        return $this->alpha2Code;
    }

    /**
     * @return string
     */
    public function alpha3Code()
    {
        return $this->alpha3Code;
    }

    /**
     * @return string
     */
    public function numericCode()
    {
        return $this->numericCode;
    }

    /**
     * @return string
     */
    public function name()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function officialName()
    {
        return $this->officialName;
    }

    public function commonName()
    {
        return $this->commonName;
    }
}

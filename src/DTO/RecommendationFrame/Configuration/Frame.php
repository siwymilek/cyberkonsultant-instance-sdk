<?php
declare(strict_types=1);

namespace Cyberkonsultant\DTO\RecommendationFrame\Configuration;

/**
 * Class Frame
 *
 * @package Cyberkonsultant
 */
class Frame
{
    /**
     * @var string
     */
    protected $sidePadding;

    /**
     * @var string
     */
    protected $marginBottom;

    /**
     * @var string
     */
    protected $marginBetween;

    /**
     * @var string
     */
    protected $wrapperStyles;

    /**
     * @var string
     */
    protected $titleText;

    /**
     * @var string
     */
    protected $titleWrapperStyles;

    /**
     * @var string
     */
    protected $titleStyles;

    /**
     * @return string
     */
    public function getSidePadding(): string
    {
        return $this->sidePadding;
    }

    /**
     * @param string $sidePadding
     */
    public function setSidePadding(string $sidePadding): void
    {
        $this->sidePadding = $sidePadding;
    }

    /**
     * @return string
     */
    public function getMarginBottom(): string
    {
        return $this->marginBottom;
    }

    /**
     * @param string $marginBottom
     */
    public function setMarginBottom(string $marginBottom): void
    {
        $this->marginBottom = $marginBottom;
    }

    /**
     * @return string
     */
    public function getMarginBetween(): string
    {
        return $this->marginBetween;
    }

    /**
     * @param string $marginBetween
     */
    public function setMarginBetween(string $marginBetween): void
    {
        $this->marginBetween = $marginBetween;
    }

    /**
     * @return string
     */
    public function getWrapperStyles(): string
    {
        return $this->wrapperStyles;
    }

    /**
     * @param string $wrapperStyles
     */
    public function setWrapperStyles(string $wrapperStyles): void
    {
        $this->wrapperStyles = $wrapperStyles;
    }

    /**
     * @return string
     */
    public function getTitleText(): string
    {
        return $this->titleText;
    }

    /**
     * @param string $titleText
     */
    public function setTitleText(string $titleText): void
    {
        $this->titleText = $titleText;
    }

    /**
     * @return string
     */
    public function getTitleWrapperStyles(): string
    {
        return $this->titleWrapperStyles;
    }

    /**
     * @param string $titleWrapperStyles
     */
    public function setTitleWrapperStyles(string $titleWrapperStyles): void
    {
        $this->titleWrapperStyles = $titleWrapperStyles;
    }

    /**
     * @return string
     */
    public function getTitleStyles(): string
    {
        return $this->titleStyles;
    }

    /**
     * @param string $titleStyles
     */
    public function setTitleStyles(string $titleStyles): void
    {
        $this->titleStyles = $titleStyles;
    }
}
<?php
/**
 * Copyright (c) 2017 Bitcoin Viet Nam Co., Ltd.
 *
 *  Permission is hereby granted, free of charge, to any person obtaining a copy of this software
 *  and associated documentation files (the "Software"), to deal in the Software without restriction,
 *  including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense,
 *  and/or sell copies of the Software, and to permit persons to whom the Software is furnished to
 *  do so, subject to the following conditions:
 *
 *  The above copyright notice and this permission notice shall be included in all copies or substantial
 *  portions of the Software.
 *
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
 *  INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A
 *  PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 *  COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN
 *  ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH
 *  THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace BitcoinVietnam\BitcoinVietnam\Response\Ticker;

use BitcoinVietnam\BitcoinVietnam\Response\BaseResponse;
use BitcoinVietnam\BitcoinVietnam\Response\Ticker\GetTicker\FeeStructure;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class GetTicker
 * @package BitcoinVietnam\BitcoinVietnam\Response\Ticker
 */
final class GetTicker extends BaseResponse
{
    /**
     * Currency code
     *
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("currency")
     */
    private $currency;

    /**
     * Buy rate
     *
     * @var string
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("buy")
     */
    private $buy;

    /**
     * Sell rate
     *
     * @var string
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("sell")
     */
    private $sell;

    /**
     * Fee structure
     *
     * @var FeeStructure
     *
     * @Serializer\Type("BitcoinVietnam\BitcoinVietnam\Response\Ticker\GetTicker\FeeStructure")
     * @Serializer\SerializedName("feeStructure")
     */
    private $feeStructure;

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @return string
     */
    public function getBuy()
    {
        return $this->buy;
    }

    /**
     * @return string
     */
    public function getSell()
    {
        return $this->sell;
    }

    /**
     * @return FeeStructure
     */
    public function getFeeStructure()
    {
        return $this->feeStructure;
    }
}
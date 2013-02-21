<?php

/*
 * This file is part of the Omnipay package.
 *
 * (c) Adrian Macneil <adrian@adrianmacneil.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Omnipay\Common\Message;

use Omnipay\Common\GatewayInterface;

/**
 * Message Interface
 */
interface MessageInterface
{
    /**
     * Get the gateway associated with this message
     */
    public function getGateway();

    /**
     * Set the gateway associated with this message
     */
    public function setGateway(GatewayInterface $gateway);

    /**
     * Get the raw data array for this message. The format of this varies from gateway to
     * gateway, but will usually be either an associative array, or a SimpleXMLElement.
     *
     * @return mixed
     */
    public function getData();
}

<?php

namespace LaravelFCM\Sender;

use GuzzleHttp6\ClientInterface;

/**
 * Class BaseSender.
 */
abstract class HTTPSender
{
    /**
     * The client used to send messages.
     *
     * @var \GuzzleHttp6\ClientInterface
     */
    protected $client;

    /**
     * The URL entry point.
     *
     * @var string
     */
    protected $url;

    /**
     * Initializes a new sender object.
     *
     * @param \GuzzleHttp6\ClientInterface $client
     * @param string                     $url
     */
    public function __construct(ClientInterface $client, $url)
    {
        $this->client = $client;
        $this->url = $url;
    }
}

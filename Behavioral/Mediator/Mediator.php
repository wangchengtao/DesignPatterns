<?php
/**
 * Created by PhpStorm.
 * User: wangchengtao
 * Date: 2018/12/5
 * Time: 23:40
 */

namespace DesignPatterns\Behavioral\Mediator;


class Mediator implements MediatorInterface
{
    /**
     * @var \DesignPatterns\Behavioral\Mediator\Server
     */
    private $server;

    /**
     * @var \DesignPatterns\Behavioral\Mediator\Database
     */
    private $database;

    /**
     * @var \DesignPatterns\Behavioral\Mediator\Client
     */
    private $client;

    public function __construct(Database $database, Client $client, Server $server)
    {
        $this->server = $server;
        $this->database = $database;
        $this->client = $client;

        $this->server->setMediator($this);
        $this->client->setMediator($this);
        $this->database->setMediator($this);
    }

    public function makeRequest()
    {
        $this->server->process();
    }

    public function queryDb(): string
    {
        return $this->database->getData();
    }

    public function sendResponse($content)
    {
        $this->client->output($content);
    }
}
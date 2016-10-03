<?php

namespace Simplon\Core\Interfaces;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

/**
 * Interface ControllerInterface
 * @package Simplon\Core\Interfaces
 */
interface ControllerInterface
{
    /**
     * @return ServerRequestInterface
     */
    public function getRequest(): ServerRequestInterface;

    /**
     * @param ServerRequestInterface $request
     *
     * @return ControllerInterface
     */
    public function setRequest(ServerRequestInterface $request): self;

    /**
     * @return ResponseInterface
     */
    public function getResponse(): ResponseInterface;

    /**
     * @param ResponseInterface $response
     *
     * @return ControllerInterface
     */
    public function setResponse(ResponseInterface $response): self;

    /**
     * @return string
     */
    public function getWorkingDir(): string;

    /**
     * @param string $workingDir
     *
     * @return ControllerInterface
     */
    public function setWorkingDir(string $workingDir): self;
}
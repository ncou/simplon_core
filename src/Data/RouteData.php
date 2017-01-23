<?php

namespace Simplon\Core\Data;

/**
 * Class RouteData
 * @package Simplon\Core\Data
 */
class RouteData
{
    const METHOD_GET = 'GET';
    const METHOD_OPTION = 'OPTION';
    const METHOD_HEAD = 'HEAD';
    const METHOD_POST = 'POST';
    const METHOD_PUT = 'PUT';
    const METHOD_PATCH = 'PATCH';
    const METHOD_DELETE = 'DELETE';

    /**
     * @var string
     */
    protected $path;
    /**
     * @var string
     */
    protected $controller;
    /**
     * @var array
     */
    protected $methodsAllowed = [self::METHOD_GET, self::METHOD_OPTION, self::METHOD_HEAD];

    /**
     * @param string $path
     * @param string $controller
     * @param bool $removeDefaults
     */
    public function __construct(string $path, string $controller, bool $removeDefaults = false)
    {
        $this->path = $path;
        $this->controller = $controller;

        if ($removeDefaults)
        {
            $this->methodsAllowed = [];
        }
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @return string
     */
    public function getController(): string
    {
        return $this->controller;
    }

    /**
     * @return array
     */
    public function getMethodsAllowed(): array
    {
        return $this->methodsAllowed;
    }

    /**
     * @return RouteData
     */
    public function withGet(): self
    {
        return $this->addMethodAllowed(self::METHOD_GET);
    }

    /**
     * @return RouteData
     */
    public function withOption(): self
    {
        return $this->addMethodAllowed(self::METHOD_OPTION);
    }

    /**
     * @return RouteData
     */
    public function withHead(): self
    {
        return $this->addMethodAllowed(self::METHOD_HEAD);
    }

    /**
     * @return RouteData
     */
    public function withPost(): self
    {
        return $this->addMethodAllowed(self::METHOD_POST);
    }

    /**
     * @return RouteData
     */
    public function withPut(): self
    {
        return $this->addMethodAllowed(self::METHOD_PUT);
    }

    /**
     * @return RouteData
     */
    public function withPatch(): self
    {
        return $this->addMethodAllowed(self::METHOD_PATCH);
    }

    /**
     * @return RouteData
     */
    public function withDelete(): self
    {
        return $this->addMethodAllowed(self::METHOD_DELETE);
    }

    /**
     * @param string $method
     *
     * @return RouteData
     */
    private function addMethodAllowed(string $method): self
    {
        if (!in_array($method, $this->methodsAllowed))
        {
            $this->methodsAllowed[] = $method;
        }

        return $this;
    }
}
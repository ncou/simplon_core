<?php

namespace {namespace};

use App\AppContext;
use Simplon\Core\Components\Registry;

/**
 * @package {namespace}
 */
class {name}Registry extends Registry
{
    /**
     * @var AppContext
     */
    private $appContext;

    /**
     * @param AppContext $appContext
     */
    public function __construct(AppContext $appContext)
    {
        $this->appContext = $appContext;
    }

    /**
     * @return {name}Context
     */
    public function getContext(): {name}Context
    {
        return new {name}Context($this->appContext);
    }
}
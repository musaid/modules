<?php

namespace Musaid\Modules\Process;

use Musaid\Modules\Contracts\RunableInterface;
use Musaid\Modules\Repository;

class Runner implements RunableInterface
{
    /**
     * The module instance.
     *
     * @var \Musaid\Modules\Repository
     */
    protected $module;

    /**
     * The constructor.
     *
     * @param \Musaid\Modules\Repository $module
     */
    public function __construct(Repository $module)
    {
        $this->module = $module;
    }

    /**
     * Run the given command.
     *
     * @param string $command
     */
    public function run($command)
    {
        passthru($command);
    }
}

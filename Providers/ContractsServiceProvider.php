<?php

namespace Musaid\Modules\Providers;

use Illuminate\Support\ServiceProvider;

class ContractsServiceProvider extends ServiceProvider
{
    /**
     * Register some binding.
     */
    public function register()
    {
        $this->app->bind(
            'Musaid\Modules\Contracts\RepositoryInterface',
            'Musaid\Modules\Repository'
        );
    }
}

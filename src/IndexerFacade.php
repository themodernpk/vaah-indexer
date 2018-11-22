<?php
namespace WebReinvent\VaahIndexer;
use Illuminate\Support\Facades\Facade;


class IndexerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'indexer';
    }
}

<?php

namespace Staudenmeir\LaravelCte\Eloquent;

use Staudenmeir\LaravelCte\Query\OracleBuilder;

trait QueriesOracleExpressions
{
    /**
     * Get a new query builder instance for the connection.
     *
     * @return \Staudenmeir\LaravelCte\Query\Builder
     */
    protected function newBaseQueryBuilder()
    {
        return new OracleBuilder($this->getConnection());
    }
}

<?php

namespace Staudenmeir\LaravelCte\Query\Grammars;

use Yajra\Oci8\Query\Grammars\OracleGrammar as Base;

class OracleGrammar extends Base
{
    use CompilesExpressions;

    /**
     * Get the "recursive" keyword.
     *
     * @param array $expressions
     * @return string
     */
    protected function recursiveKeyword(array $expressions)
    {
        return '';
    }
}

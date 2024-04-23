<?php

/**
 * SCSSPHP
 *
 * @copyright 2012-2020 Leaf Corcoran
 *
 * @license http://opensource.org/licenses/MIT MIT
 *
 * @link http://scssphp.github.io/scssphp
 */

namespace ScssPhpRBE\ScssPhp\Ast\Sass\Statement;

use ScssPhpRBE\ScssPhp\Ast\Sass\Statement;
use ScssPhpRBE\ScssPhp\Ast\Sass\SupportsCondition;
use ScssPhpRBE\ScssPhp\SourceSpan\FileSpan;
use ScssPhpRBE\ScssPhp\Visitor\StatementVisitor;

/**
 * A `@supports` rule.
 *
 * @extends ParentStatement<Statement[]>
 *
 * @internal
 */
final class SupportsRule extends ParentStatement
{
    /**
     * @var SupportsCondition
     * @readonly
     */
    private $condition;

    /**
     * @var FileSpan
     * @readonly
     */
    private $span;

    /**
     * @param Statement[] $children
     */
    public function __construct(SupportsCondition $condition, array $children, FileSpan $span)
    {
        $this->condition = $condition;
        $this->span = $span;
        parent::__construct($children);
    }

    public function getCondition(): SupportsCondition
    {
        return $this->condition;
    }

    public function getSpan(): FileSpan
    {
        return $this->span;
    }

    public function accepts(StatementVisitor $visitor)
    {
        return $visitor->visitSupportsRule($this);
    }
}

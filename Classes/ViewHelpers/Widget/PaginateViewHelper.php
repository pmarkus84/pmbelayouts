<?php

namespace Pmwebdesign\Pmbelayouts\ViewHelpers\Widget;

/**
 * This file is part of the "news" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

use Pmwebdesign\Pmbelayouts\ViewHelpers\Widget\Controller\PaginateController;
use TYPO3\CMS\Extbase\Persistence\QueryResultInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * This ViewHelper renders a Pagination of objects.
 *
 * = Examples =
 *
 * <code title="required arguments">
 * <f:widget.paginate objects="{blogs}" as="paginatedBlogs">
 *   // use {paginatedBlogs} as you used {blogs} before, most certainly inside
 *   // a <f:for> loop.
 * </f:widget.paginate>
 * </code>
 *
 */
class PaginateViewHelper extends AbstractViewHelper
{

    /**
     * @var PaginateController
     */
    protected $controller;

    /**
     * Inject controller
     *
     * @param PaginateController $controller
     */
    public function injectController(PaginateController $controller)
    {
        $this->controller = $controller;
    }

    /**
     * Initialize arguments
     */
    public function initializeArguments()
    {
        parent::initializeArguments();
        $this->registerArgument('objects', QueryResultInterface::class, 'Objects to auto-complete', true);
        $this->registerArgument('as', 'string', 'Property to fill', true);
        $this->registerArgument('configuration', 'array', 'Configuration', false, ['itemsPerPage' => 10, 'insertAbove' => false, 'insertBelow' => true]);
        $this->registerArgument('initial', 'array', 'Initial configuration', false, []);
    }

    /**
     * Render everything
     *
     * @param \TYPO3\CMS\Extbase\Persistence\QueryResultInterface $objects
     * @param string $as
     * @param mixed $configuration
     * @param array $initial
     * @internal param array $initial
     * @return string
     */
    public function render()
    {
        return $this->initiateSubRequest();
    }
}

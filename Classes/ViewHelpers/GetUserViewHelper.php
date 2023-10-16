<?php

namespace Pmwebdesign\Pmbelayouts\ViewHelpers;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Domain\Model\FrontendUser;
use TYPO3\CMS\Extbase\Domain\Repository\FrontendUserRepository;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class GetUserViewHelper extends AbstractViewHelper
{
    /**
     * @return FrontendUser|null
     */
    public function render() : ?FrontendUser
    {
        $frontendUserRepository = GeneralUtility::makeInstance(FrontendUserRepository::class);
        return $frontendUserRepository->findByUid($GLOBALS['TSFE']->fe_user->user['uid']);
    }
}
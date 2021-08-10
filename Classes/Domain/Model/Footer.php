<?php
namespace Heiner\Heiner\Domain\Model;

/***
 *
 * This file is part of the "dynTemplate" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2021
 *
 ***/
/**
 * Content
 */
class Footer extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * service
     *
     * @var string
     */
    protected $service = '';

    /**
     * serviceLink
     *
     * @var string
     */
    protected $serviceLink = '';

    /**
     * Returns the service
     *
     * @return string service
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets the serviceLink
     *
     * @param string $serviceLink
     * @return void
     */
    public function setServiceLink($serviceLink)
    {
        $this->serviceLink = $serviceLink;
    }
}

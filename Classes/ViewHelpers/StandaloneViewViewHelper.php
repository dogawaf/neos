<?php
namespace TYPO3\TYPO3\ViewHelpers;

/*                                                                        *
 * This script belongs to the FLOW3 package "TYPO3.TYPO3".                *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU General Public License, either version 3 of the   *
 * License, or (at your option) any later version.                        *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

use TYPO3\FLOW3\Annotations as FLOW3;

/**
 * A View Helper to render a fluid template based on the given template path and filename.
 *
 * @FLOW3\Scope("prototype")
 */
class StandaloneViewViewHelper extends \TYPO3\Fluid\Core\ViewHelper\AbstractViewHelper {

	/**
	 * @param string $templatePathAndFilename
	 * @param array $arguments
	 * @return string
	 */
	public function render($templatePathAndFilename, $arguments = array()) {
		$standaloneView = new \TYPO3\Fluid\View\StandaloneView($this->controllerContext->getRequest());
		$standaloneView->setTemplatePathAndFilename($templatePathAndFilename);
		return $standaloneView->assignMultiple($arguments)->render();
	}

}
?>
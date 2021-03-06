<?php
namespace Fab\Vidi\Grid;

/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use TYPO3\CMS\Backend\Utility\IconUtility;
use Fab\Vidi\Tca\Tca;

/**
 * Class rendering visibility for the Grid.
 */
class VisibilityRenderer extends ColumnRendererAbstract {

	/**
	 * Render visibility for the Grid.
	 *
	 * @return string
	 */
	public function render() {

		$result = '';
		$hiddenField = Tca::table()->getHiddenField();

		if ($hiddenField) {
			$spriteName = $this->object[$hiddenField] ? 'actions-edit-unhide' : 'actions-edit-hide';
			$result = IconUtility::getSpriteIcon($spriteName);
		}
		return $result;
	}
}

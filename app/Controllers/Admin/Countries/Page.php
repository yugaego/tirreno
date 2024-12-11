<?php

/**
 * Tirreno ~ Open source user analytics
 * Copyright (c) Tirreno Technologies Sàrl (https://www.tirreno.com)
 *
 * Licensed under GNU Affero General Public License version 3 of the or any later version.
 * For full copyright and license information, please see the LICENSE
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Tirreno Technologies Sàrl (https://www.tirreno.com)
 * @license       https://opensource.org/licenses/AGPL-3.0 AGPL License
 * @link          https://www.tirreno.com Tirreno(tm)
 */

namespace Controllers\Admin\Countries;

class Page extends \Controllers\Pages\Base {
    public $page = 'AdminCountries';

    public function getPageParams(): array {
        $searchPlacholder = $this->f3->get('AdminCountries_search_placeholder');

        $pageParams = [
            'SEARCH_PLACEHOLDER' => $searchPlacholder,
            'LOAD_JVECTORMAP' => true,
            'LOAD_DATATABLE' => true,
            'LOAD_AUTOCOMPLETE' => true,
            'HTML_FILE' => 'admin/countries.html',
            'JS' => 'admin_countries.js',
        ];

        return parent::applyPageParams($pageParams);
    }
}
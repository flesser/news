<?php
/**
 * Nextcloud - News
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author    Alessandro Cosentino <cosenal@gmail.com>
 * @author    Bernhard Posselt <dev@bernhard-posselt.com>
 * @copyright Alessandro Cosentino 2012
 * @copyright Bernhard Posselt 2012, 2014
 */

namespace OCA\News\Controller;

use OCP\IRequest;
use OCP\AppFramework\ApiController as BaseApiController;

class ApiController extends BaseApiController {

    public function __construct($appName,
                                IRequest $request){
        parent::__construct($appName, $request);
    }

    /**
     * @PublicPage
     * @NoCSRFRequired
     * @CORS
     */
    public function index() {
        return [
            'apiLevels' => ['v1-2']
        ];
    }

}

<?php


/**
 * Aria S.p.A.
 * OPEN 2.0
 *
 * @package   open20\amos\community\migrations
 * @author    Aria S.p.A. <protocollo@pec.ariaspa.it>
 * @license   GNU General Public License v3.0 <https://www.gnu.org/licenses/gpl-3.0.html>
 * @link      https://www.ariaspa.it/
 *
 * This file is part of OPEN 2.0.
 *
 * OPEN 2.0 is free software: you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OPEN 2.0 is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OPEN 2.0. If not, see <https://www.gnu.org/licenses/>.
 */

use open20\amos\core\migration\AmosMigrationPermissions;
use yii\rbac\Permission;

class m201214_115100_update_permissions extends AmosMigrationPermissions
{
    protected function setRBACConfigurations()
    {
        return [

            [
                'name' => 'AGIDORGANIZATIONALUNITTYPE_CREATE',
                'update' => true,
                'newValues' => [
                    'addParents' => [
                        'AGID_ORGANIZATIONAL_UNIT_ADMIN'
                    ]
                ]
            ],
            [
                'name' => 'AGIDORGANIZATIONALUNITTYPE_READ',
                'update' => true,
                'newValues' => [
                    'addParents' => [
                        'AGID_ORGANIZATIONAL_UNIT_ADMIN'
                    ]
                ]
            ],
            [
                'name' => 'AGIDORGANIZATIONALUNITTYPE_UPDATE',
                'update' => true,
                'newValues' => [
                    'addParents' => [
                        'AGID_ORGANIZATIONAL_UNIT_ADMIN'
                    ]
                ]
            ],
            [
                'name' => 'AGIDORGANIZATIONALUNITTYPE_DELETE',
                'update' => true,
                'newValues' => [
                    'addParents' => [
                        'AGID_ORGANIZATIONAL_UNIT_ADMIN'
                    ]
                ]
            ],

            //
            [
                'name' => 'AGIDORGANIZATIONALUNITCONTENTTYPE_CREATE',
                'update' => true,
                'newValues' => [
                    'addParents' => [
                        'AGID_ORGANIZATIONAL_UNIT_ADMIN'
                    ]
                ]
            ],
            [
                'name' => 'AGIDORGANIZATIONALUNITCONTENTTYPE_READ',
                'update' => true,
                'newValues' => [
                    'addParents' => [
                        'AGID_ORGANIZATIONAL_UNIT_ADMIN'
                    ]
                ]
            ],
            [
                'name' => 'AGIDORGANIZATIONALUNITCONTENTTYPE_UPDATE',
                'update' => true,
                'newValues' => [
                    'addParents' => [
                        'AGID_ORGANIZATIONAL_UNIT_ADMIN'
                    ]
                ]
            ],
            [
                'name' => 'AGIDORGANIZATIONALUNITCONTENTTYPE_DELETE',
                'update' => true,
                'newValues' => [
                    'addParents' => [
                        'AGID_ORGANIZATIONAL_UNIT_ADMIN'
                    ]
                ]
            ],

            
            //
            [
                'name' => 'AGIDORGANIZATIONALUNIT_CREATE',
                'update' => true,
                'newValues' => [
                    'addParents' => [
                        'AGID_ORGANIZATIONAL_UNIT_ADMIN'
                    ]
                ]
            ],
            [
                'name' => 'AGIDORGANIZATIONALUNIT_READ',
                'update' => true,
                'newValues' => [
                    'addParents' => [
                        'AGID_ORGANIZATIONAL_UNIT_ADMIN'
                    ]
                ]
            ],
            [
                'name' => 'AGIDORGANIZATIONALUNIT_UPDATE',
                'update' => true,
                'newValues' => [
                    'addParents' => [
                        'AGID_ORGANIZATIONAL_UNIT_ADMIN'
                    ]
                ]
            ],            
            [
                'name' => 'AGIDORGANIZATIONALUNIT_DELETE',
                'update' => true,
                'newValues' => [
                    'addParents' => [
                        'AGID_ORGANIZATIONAL_UNIT_ADMIN'
                    ]
                ]
            ],


            // 
            [
                'name' => 'AGIDORGANIZATIONALUNITSERVICEMM_CREATE',
                'update' => true,
                'newValues' => [
                    'addParents' => [
                        'AGID_ORGANIZATIONAL_UNIT_ADMIN'
                    ]
                ]
            ],
            [
                'name' => 'AGIDORGANIZATIONALUNITSERVICEMM_READ',
                'update' => true,
                'newValues' => [
                    'addParents' => [
                        'AGID_ORGANIZATIONAL_UNIT_ADMIN'
                    ]
                ]
            ],
            [
                'name' => 'AGIDORGANIZATIONALUNITSERVICEMM_UPDATE',
                'update' => true,
                'newValues' => [
                    'addParents' => [
                        'AGID_ORGANIZATIONAL_UNIT_ADMIN'
                    ]
                ]
            ],
            [
                'name' => 'AGIDORGANIZATIONALUNITSERVICEMM_DELETE',
                'update' => true,
                'newValues' => [
                    'addParents' => [
                        'AGID_ORGANIZATIONAL_UNIT_ADMIN'
                    ]
                ]
            ],


            //
            [
                'name' => 'AGIDORGANIZATIONALORGANIZATIONALUNITMM_CREATE',
                'update' => true,
                'newValues' => [
                    'addParents' => [
                        'AGID_ORGANIZATIONAL_UNIT_ADMIN'
                    ]
                ]
            ],
            [
                'name' => 'AGIDORGANIZATIONALORGANIZATIONALUNITMM_READ',
                'update' => true,
                'newValues' => [
                    'addParents' => [
                        'AGID_ORGANIZATIONAL_UNIT_ADMIN'
                    ]
                ]
            ],
            [
                'name' => 'AGIDORGANIZATIONALORGANIZATIONALUNITMM_UPDATE',
                'update' => true,
                'newValues' => [
                    'addParents' => [
                        'AGID_ORGANIZATIONAL_UNIT_ADMIN'
                    ]
                ]
            ],
            [
                'name' => 'AGIDORGANIZATIONALORGANIZATIONALUNITMM_DELETE',
                'update' => true,
                'newValues' => [
                    'addParents' => [
                        'AGID_ORGANIZATIONAL_UNIT_ADMIN'
                    ]
                ]
            ],

            //
            [
                'name' => 'AGID_ORGANIZATIONAL_UNIT_ADMIN',
                'update' => true,
                'newValues' => [
                    'addParents' => [
                        'UO'
                    ]
                ]
            ],
        ];
    }
}

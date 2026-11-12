<?php

/**
 * Aria S.p.A.
 * OPEN 2.0
 *
 * @package   svilupposostenibile\enti
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

use yii\db\Migration;


class m201112_021700_add_fk_agid_person_for_agid_organizational_unit extends Migration
{

    public function up()
    {
        // addColumn to agid_organization_unit
        $this->addColumn('agid_organizational_unit', 'agid_person_president_id', $this->integer()->null()->defaultValue(null));
        
        // addForeignKey
        $this->addForeignKey(
            'fk-agid-person-president-id',
            'agid_organizational_unit',
            'agid_person_president_id',
            'agid_person',
            'id',
            'SET NULL'
        );


        // addColumn to agid_organization_unit
        $this->addColumn('agid_organizational_unit', 'agid_person_vice_president_id', $this->integer()->null()->defaultValue(null));
        
        // addForeignKey
        $this->addForeignKey(
            'fk-agid-person-vice-president-id',
            'agid_organizational_unit',
            'agid_person_vice_president_id',
            'agid_person',
            'id',
            'SET NULL'
        );


    }

    public function down()
    {
        // dropForeignKey
        $this->dropForeignKey ( 'fk-agid-person-president-id', 'agid_organizational_unit' );
        // dropColumn
        $this->dropColumn('agid_organizational_unit', 'agid_person_president_id');

        // dropForeignKey
        $this->dropForeignKey ( 'fk-agid-person-vice-president-id', 'agid_organizational_unit' );
        // dropColumn
        $this->dropColumn('agid_organizational_unit', 'agid_person_vice_president_id');
    }

}
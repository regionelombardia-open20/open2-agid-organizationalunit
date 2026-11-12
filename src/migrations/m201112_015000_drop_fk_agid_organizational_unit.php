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


class m201112_015000_drop_fk_agid_organizational_unit extends Migration
{

    public function up()
    {

        $table = \Yii::$app->db->schema->getTableSchema('agid_organizational_unit');

        if (isset($table->columns['user_profile_president_id'])) {
            
            $this->execute("SET FOREIGN_KEY_CHECKS = 0;");

            // dropForeignKey
            $this->dropForeignKey ( 'fk-user-profile-president-id', 'agid_organizational_unit' );
            // dropColumn
            $this->dropColumn('agid_organizational_unit', 'user_profile_president_id');

            $this->execute("SET FOREIGN_KEY_CHECKS = 1;");
        }


        if (isset($table->columns['user_profile_vice_president_id'])) {

            $this->execute("SET FOREIGN_KEY_CHECKS = 0;");

            // dropForeignKey
            $this->dropForeignKey ( 'fk-user-profile-vice-president-id', 'agid_organizational_unit' );
            // dropColumn
            $this->dropColumn('agid_organizational_unit', 'user_profile_vice_president_id');

            $this->execute("SET FOREIGN_KEY_CHECKS = 1;");
        }

    }

    public function down()
    {
        return true;
    }

}
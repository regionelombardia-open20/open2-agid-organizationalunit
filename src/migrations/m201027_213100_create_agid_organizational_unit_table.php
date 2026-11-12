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
use open20\amos\core\migration\AmosMigrationTableCreation;

/**
 * Class m201027_213100_create_agid_organizational_unit_table
 */
class m201027_213100_create_agid_organizational_unit_table extends AmosMigrationTableCreation {

    /**
     * set table name
     *
     * @return void
     */
    protected function setTableName() {
        $this->tableName = '{{%agid_organizational_unit%}}';
    }

    /**
     * set table fields
     *
     * @return void
     */
    protected function setTableFields() {

        $this->tableFields = [

            // PK
            'id' => $this->primaryKey(),

            // FK
            'agid_organizational_unit_content_type_id' => $this->integer()->null()->defaultValue(null)->comment('Agid Content Type'),
            'agid_organizational_unit_type_id' => $this->integer()->null()->defaultValue(null)->comment('Agid Type Organizational'),
            
            // COLUMNS
            'name' => $this->string()->null()->defaultValue(null)->comment('Name'),
            'short_description' => $this->text(160)->null()->defaultValue(null)->comment('Short Description'),
            'skills' => $this->text()->null()->defaultValue(null)->comment('Skills'),
            'headquarters_name' => $this->text()->null()->defaultValue(null)->comment('Headquarters Name'),
            'address' => $this->text()->null()->defaultValue(null)->comment('Headquarters Address'),
            'public_hours' => $this->text()->null()->defaultValue(null)->comment('Hours for the public'),
            'cap' => $this->string(50)->null()->defaultValue(null)->comment('CAP'),
            'telephone_reference' => $this->text()->null()->defaultValue(null)->comment('Telephone Reference'),
            'mail_reference' => $this->text()->null()->defaultValue(null)->comment('Mail Reference'),
            'pec_reference' => $this->text()->null()->defaultValue(null)->comment('PEC Reference'),
            'further_information' => $this->text()->null()->defaultValue(null)->comment('Further Information'),
            'help_box' => $this->text()->null()->defaultValue(null)->comment("Help Box"),

            // workflow status
            'status' => $this->string()->null()->defaultValue(null)->comment('Workflow Status'),
        ];
    }


    /**
     * Timestamp
     *
     * @return void
     */
    protected function beforeTableCreation() {

        parent::beforeTableCreation();
        $this->setAddCreatedUpdatedFields(true);
    }


    /**
     * Foreign Key
     *
     * @return void
     */
    protected function addForeignKeys() {

        // FK
        $this->addForeignKey('fk_agid_organizational_unit_type', $this->tableName, 'agid_organizational_unit_type_id', 'agid_organizational_unit_type', 'id');
        $this->addForeignKey('fk_agid_organizational_unit_content_type', $this->tableName, 'agid_organizational_unit_content_type_id', 'agid_organizational_unit_content_type', 'id');
    }
}

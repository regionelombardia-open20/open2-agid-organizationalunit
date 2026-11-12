<?php

/**
 * Aria S.p.A.
 * OPEN 2.0
 *
 * @package   open20\amos\documenti\models\base
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

namespace open20\agid\organizationalunit\models\base;

use open20\amos\core\record\Record;
use open20\amos\admin\AmosAdmin;
use open20\agid\organizationalunit\Module;
use Yii;



class AgidOrganizationalUnitContentTypeRoles extends Record
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'agid_organizational_unit_content_type_roles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['agid_organizational_unit_content_type_id', 'user_id','role'], 'required'],
            [['user_id', 'created_by', 'updated_by', 'deleted_by'], 'integer'],
            [['created_at', 'updated_at', 'deleted_at'], 'safe'],
            [['role'], 'string', 'max' => 255],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('amosorganizationalunit', 'ID'),
            'documenti_agid_type_id' => Yii::t('amosorganizationalunit', 'Documenti agid type ID'),
            'role' => Yii::t('amosorganizationalunit', 'ruolo'),
            'user_id' => Yii::t('amosorganizationalunit', 'User Id'),
            'created_at' => Yii::t('amosorganizationalunit', 'Created at'),
            'updated_at' => Yii::t('amosorganizationalunit', 'Updated at'),
            'deleted_at' => Yii::t('amosorganizationalunit', 'Deleted at'),
            'created_by' => Yii::t('amosorganizationalunit', 'Created by'),
            'updated_by' => Yii::t('amosorganizationalunit', 'Updated by'),
            'deleted_by' => Yii::t('amosorganizationalunit', 'Deleted by'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAgidOrganizationalUnitContentType()
    {
        return $this->hasOne(Module::instance()->model('AgidOrganizationalUnitContentType'), ['id' => 'agid_organizational_unit_content_type_id']);
    }

    /**
     * @inheritdoc
     */
    public function getUser()
    {
        return $this->hasOne(AmosAdmin::instance()->createModel('User')->className(), ['id' => 'user_id']);
    }
}

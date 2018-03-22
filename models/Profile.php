<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "members".
 *
 * @property integer $id
 * @property string $lastName
 * @property string $firstName
 * @property string $telePhone
 * @property string $email
 * @property string $address
 * @property string $city
 * @property string $state
 * @property integer $zipCode
 * @property string $years
 * @property string $deceased
 * @property string $obituary_link
 * @property string $nextOfkin
 * @property string $password
 * @property string $password_reset_token
 * @property string $password_reset_expires_at
 * @property string $activation_token
 * @property integer $is_active
 * @property integer $is_admin
 */
class Profile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'members';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'lastName', 'firstName', 'email', 'state', 'years', 'password'], 'required'],
            [['id', 'zipCode', 'is_active', 'is_admin'], 'integer'],
            [['deceased', 'password_reset_expires_at'], 'safe'],
            [['lastName', 'firstName', 'telePhone', 'email', 'address', 'city', 'state', 'years', 'obituary_link', 'nextOfkin', 'password', 'password_reset_token', 'activation_token'], 'string', 'max' => 255],
            [['email'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lastName' => 'Last Name',
            'firstName' => 'First Name',
            'telePhone' => 'Tele Phone',
            'email' => 'Email',
            'address' => 'Address',
            'city' => 'City',
            'state' => 'State',
            'zipCode' => 'Zip Code',
            'years' => 'Years',
            'deceased' => 'Deceased',
            'obituary_link' => 'Obituary Link',
            'nextOfkin' => 'Next Ofkin',
            'password' => 'Password',
            'password_reset_token' => 'Password Reset Token',
            'password_reset_expires_at' => 'Password Reset Expires At',
            'activation_token' => 'Activation Token',
            'is_active' => 'Is Active',
            'is_admin' => 'Is Admin',
        ];
    }
}

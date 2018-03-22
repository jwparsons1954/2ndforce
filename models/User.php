<?php

namespace app\models;
use yii\base\NotSupportedException;
use yii\db\ActiveRecord;
use yii\helpers\Security;
use yii\web\IdentityInterface;

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
class User extends \yii\db\ActiveRecord  implements IdentityInterface
{
    /**
     * @inheritdoc
     */
    const BASEURL = "https://2nd-force-recon.com/yii2recall/web/index.php?r=site%2Fcheckresetpasswordkey&key=";
    public static function tableName()
    {
        return 'members';
    }
    public $auth_key;
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
            'telePhone' => 'Telephone',
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


    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * @inheritdoc
     */
/* modified */
    public static function findIdentityByAccessToken($token, $type = null)
    {
          return static::findOne(['access_token' => $token]);
    }

    public static function findByUsername($username)
    {
        return static::findOne(['email' => $username]);
    }
    public static function findByPasswordResetToken($token)
    {
        $expire = \Yii::$app->params['user.passwordResetTokenExpire'];
        $parts = explode('_', $token);
        $timestamp = (int) end($parts);
        if ($timestamp + $expire < time()) {
            // token expired
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token
        ]);
    }
    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param  string  $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === md5($password);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password_hash = md5($password);
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Security::generateRandomKey();
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Security::generateRandomKey() . '_' . time();
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }
     

}
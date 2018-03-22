<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Members;

/**
 * MembersSearch represents the model behind the search form about `app\models\Members`.
 */
class MembersSearch extends Members
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'zipCode', 'is_active', 'is_admin'], 'integer'],
            [['lastName', 'firstName', 'telePhone', 'email', 'address', 'city', 'state', 'years', 'deceased', 'obituary_link', 'nextOfkin', 'password', 'password_reset_token', 'password_reset_expires_at', 'activation_token'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Members::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'zipCode' => $this->zipCode,
            'deceased' => $this->deceased,
            'password_reset_expires_at' => $this->password_reset_expires_at,
            'is_active' => $this->is_active,
            'is_admin' => $this->is_admin,
        ]);

        $query->andFilterWhere(['like', 'lastName', $this->lastName])
            ->andFilterWhere(['like', 'firstName', $this->firstName])
            ->andFilterWhere(['like', 'telePhone', $this->telePhone])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'state', $this->state])
            ->andFilterWhere(['like', 'years', $this->years])
            ->andFilterWhere(['like', 'obituary_link', $this->obituary_link])
            ->andFilterWhere(['like', 'nextOfkin', $this->nextOfkin])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'password_reset_token', $this->password_reset_token])
            ->andFilterWhere(['like', 'activation_token', $this->activation_token]);

        return $dataProvider;
    }
}

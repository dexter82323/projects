<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Type;

/**
 * TypeSearch represents the model behind the search form of `app\modules\admin\models\Type`.
 */
class TypeSearch extends Type
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Type'], 'integer'],
            [['Type'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Type::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination'=>['pageSize'=>'5'],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'Id_Type' => $this->Id_Type,
        ]);

        $query->andFilterWhere(['like', 'Type', $this->Type]);

        return $dataProvider;
    }
}

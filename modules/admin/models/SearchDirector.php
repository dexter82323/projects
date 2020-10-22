<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Director;

/**
 * SearchDirector represents the model behind the search form of `app\modules\admin\models\Director`.
 */
class SearchDirector extends Director
{
    /**
     * {@inheritdoc}
     */
   public  $worksh;
    public function rules()
    {
        return [
            [['Id_director', 'Id_workshop'], 'integer'],
            [['Name','worksh'], 'safe'],
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
        $query = Director::find()->joinWith('workshop');

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->sort->attributes['worksh'] = [
            'asc' => [Workshops::tableName() . '.Name' => SORT_ASC],
            'desc' =>  [Workshops::tableName() . '.Name' => SORT_DESC],
        ];

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'Id_director' => $this->Id_director,
            'Id_workshop' => $this->Id_workshop,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'Workshops.Name', $this->worksh]);

        return $dataProvider;
    }
}

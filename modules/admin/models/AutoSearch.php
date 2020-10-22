<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Auto;

/**
 * AutoSearch represents the model behind the search form of `app\modules\admin\models\Auto`.
 */
class AutoSearch extends Auto
{
    /**
     * {@inheritdoc}
     */
    public $typee;

    public function rules()
    {
        return [
            [['Id_auto', 'Type', 'Mileage', 'Capacity_Cars', 'Carrying_Truck'], 'integer'],
            [['Brand', 'License', 'Date_of_receiving','typee'], 'safe'],
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
        $query = Auto::find()->joinWith('type');

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination'=>['pageSize'=>'10'],
        ]);

        $dataProvider->sort->attributes['typee'] = [
            'asc' => [Type::tableName() . '.Type' => SORT_ASC],
            'desc' =>  [Type::tableName() . '.Type' => SORT_DESC],
        ];


        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'Id_auto' => $this->Id_auto,
            'Type' => $this->Type,
            'Date_of_receiving' => $this->Date_of_receiving,
            'Mileage' => $this->Mileage,
            'Capacity_Cars' => $this->Capacity_Cars,
            'Carrying_Truck' => $this->Carrying_Truck,
        ]);

        $query->andFilterWhere(['like', 'Brand', $this->Brand])
            ->andFilterWhere(['like', 'License', $this->License])
            ->andFilterWhere(['like', 'type.Id_Type', $this->typee]);

        return $dataProvider;
    }
}

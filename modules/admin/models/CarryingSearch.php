<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Carrying;

/**
 * CarryingSearch represents the model behind the search form of `app\modules\admin\models\Carrying`.
 */
class CarryingSearch extends Carrying
{
    /**
     * {@inheritdoc}
     */
    public $brand;

    public function rules()
    {
        return [
            [['Id_carrying', 'Id_truck'], 'integer'],
            [['Date_of_Start', 'Date_of_Ending', 'Departure', 'Destination','brand'], 'safe'],
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
        $query = Carrying::find()->joinWith('auto');

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination'=>['pageSize'=>'10'],
        ]);
        $dataProvider->sort->attributes['brand'] = [
            'asc' => [Auto::tableName() . '.Brand' => SORT_ASC],
            'desc' =>  [Auto::tableName() . '.Brand' => SORT_DESC],
        ];

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'Id_carrying' => $this->Id_carrying,
            'Id_truck' => $this->Id_truck,
            'Date_of_Start' => $this->Date_of_Start,
            'Date_of_Ending' => $this->Date_of_Ending,
        ]);

        $query->andFilterWhere(['like', 'Departure', $this->Departure])
            ->andFilterWhere(['like', 'Destination', $this->Destination])
            ->andFilterWhere(['like', 'auto.Brand', $this->brand]);
        return $dataProvider;
    }
}

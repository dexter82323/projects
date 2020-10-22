<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Repairs;

/**
 * RepairsSearch represents the model behind the search form of `app\modules\admin\models\Repairs`.
 */
class RepairsSearch extends Repairs
{
    /**
     * {@inheritdoc}
     */
    public $aut;
    public $staf;
    public function rules()
    {
        return [
            [['Id_repair', 'Id_auto', 'Id_staff', 'Cost', 'Number_of_used_unit'], 'integer'],
            [['Discription', 'Date_of_receiving', 'Date_of_end','aut','staf'], 'safe'],
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
        $query = Repairs::find()->joinWith('staff')->joinWith('auto');

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        $dataProvider->sort->attributes['aut'] = [
            'asc' => [Auto::tableName() . '.Brand' => SORT_ASC],
            'desc' =>  [Auto::tableName() . '.Brand' => SORT_DESC],
        ];
        $dataProvider->sort->attributes['staf'] = [
            'asc' => [ServiceStaff::tableName() . '.Name' => SORT_ASC],
            'desc' =>  [ServiceStaff::tableName() . '.Name' => SORT_DESC],
        ];


        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'Id_repair' => $this->Id_repair,
            'Id_auto' => $this->Id_auto,
            'Id_staff' => $this->Id_staff,
            'Cost' => $this->Cost,
            'Number_of_used_unit' => $this->Number_of_used_unit,
            'Date_of_receiving' => $this->Date_of_receiving,
            'Date_of_end' => $this->Date_of_end,
        ]);

        $query->andFilterWhere(['like', 'Discription', $this->Discription])
            ->andFilterWhere(['like', 'auto.Brand', $this->aut])
            ->andFilterWhere(['like', 'staff.Name', $this->staf]);

        return $dataProvider;
    }
}

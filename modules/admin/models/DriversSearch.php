<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Drivers;

/**
 * DriversSearch represents the model behind the search form of `app\modules\admin\models\Drivers`.
 */
class DriversSearch extends Drivers
{
    /**
     * {@inheritdoc}
     */
    public $aut;
    public $rout;

    public function rules()
    {
        return [
            [['Id_driver', 'Id_auto', 'id_route'], 'integer'],
            [['Name', 'Category','aut','rout'], 'safe'],
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
        $query = Drivers::find()->joinWith('auto')->joinWith('route');

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination'=>['pageSize'=>'10'],
        ]);
        $dataProvider->sort->attributes['aut'] = [
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
            'Id_driver' => $this->Id_driver,
            'Id_auto' => $this->Id_auto,
            'id_route' => $this->id_route,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'Category', $this->Category])
            ->andFilterWhere(['like', 'auto.Brand', $this->aut]);

        return $dataProvider;
    }
}

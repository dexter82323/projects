<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Service;

/**
 * ServiceSearch represents the model behind the search form of `app\modules\admin\models\Service`.
 */
class ServiceSearch extends Service
{
    /**
     * {@inheritdoc}
     */
    public $profess;
    public $brig;
    public function rules()
    {
        return [
            [['Id_staff', 'Id_profession', 'Id_brigadier'], 'integer'],
            [['Name','profess','brig'], 'safe'],
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
        $query = Service::find()->joinWith('brigadier')->joinWith('profession');

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->sort->attributes['profess'] = [
            'asc' => [Profession::tableName() . '.Title' => SORT_ASC],
            'desc' =>  [Profession::tableName() . '.Title' => SORT_DESC],
        ];
        $dataProvider->sort->attributes['brig'] = [
            'asc' => [Brigadiers::tableName() . '.Name' => SORT_ASC],
            'desc' =>  [Brigadiers::tableName() . '.Name' => SORT_DESC],
        ];
        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'Id_staff' => $this->Id_staff,
            'Id_profession' => $this->Id_profession,
            'Id_brigadier' => $this->Id_brigadier,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name])
              ->andFilterWhere(['like', 'profession.Title', $this->profess])
              ->andFilterWhere(['like', 'brigadier.Name', $this->brig]);

        return $dataProvider;
    }
}

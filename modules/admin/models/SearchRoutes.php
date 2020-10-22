<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Routes;

/**
 * SearchRoutes represents the model behind the search form of `app\modules\admin\models\Routes`.
 */
class SearchRoutes extends Routes
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_route', 'Length', 'Repeats'], 'integer'],
            [['Start', 'End'], 'safe'],
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
        $query = Routes::find();

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
            'Id_route' => $this->Id_route,
            'Length' => $this->Length,
            'Repeats' => $this->Repeats,
        ]);

        $query->andFilterWhere(['like', 'Start', $this->Start])
            ->andFilterWhere(['like', 'End', $this->End]);

        return $dataProvider;
    }
}

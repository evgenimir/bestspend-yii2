<?php

namespace app\models;

use paulzi\adjacencyList\AdjacencyListQueryTrait;
use \yii\db\ActiveQuery;

class Query extends ActiveQuery
{
    use AdjacencyListQueryTrait;
}
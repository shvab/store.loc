<?php

namespace app\models;

use Yii;
use yii\data\ActiveDataProvider;
use yii\db\Query;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property integer $id_category
 * @property string $name
 * @property string $home_link
 * @property string $report_link
 * @property string $requirements
 * @property string $short_description
 * @property string $description
 * @property string $installation
 * @property integer $stars
 * @property double $price
 * @property string $author
 * @property integer $active
 * @property string $date_add
 * @property string $date_upd
 * @property integer $position
 * @property string $id_google_plus
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }
    
    public function getHomeProducts(){
    	$countPerPage = 6;
    	$recomended = $this->checkImage($this->find()->where(['active' => '1'])->limit($countPerPage)->orderBy(['stars' => SORT_DESC])->asArray()->all());
    	$new = $this->checkImage($this->find()->where(['active' => '1'])->limit($countPerPage)->orderBy(['date_add' => SORT_DESC])->asArray()->all());
    	$categories = [];
    	foreach(Yii::$app->params['categories'] as $category){
    		$name = $category['name'];
    		if(!$category['hasChildren']){
    			$categories[$name] = $this->checkImage($this->find()->where(['id' => $category['id']])->limit($countPerPage)->orderBy(['stars' => SORT_DESC])->asArray()->all());
    		} else {
    			$arr = [];
    			foreach($category['children'] as $category){
    				$arr[] = $category['id'];
    			}
    			$categories[$name] = $this->checkImage($this->find()->where(['id' => $arr])->limit($countPerPage)->orderBy(['stars' => SORT_DESC])->asArray()->all());
    		}
    	}
    	return ['recomended' => $recomended, 'new' => $new, 'categories' => $categories];
    }
    
    
    /**
     * add link to image
     * TODO: complitr method
     * @param array $products
     * @return array
     */
    private function checkImage($products){
    	/*print_r($products);
    	exit;
    	foreach($products as $key => $product){
    		if(file_exists(__DIR__ . '/../web/img/users/'.$product['id_google_plus'].'/'.$product['id'].'_220.jpg')){
    			$products[$key][image] = '/img/users/'.$product['id_google_plus'].'/'.$product['id'].'_220.jpg'
    		}else{
    			$products[$key][image] = false;
    		}
    	}*/
    	return $products;
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_category', 'name', 'report_link', 'author', 'active', 'date_add', 'position'], 'required'],
            [['id_category', 'stars', 'active', 'position'], 'integer'],
            [['requirements', 'description', 'installation'], 'string'],
            [['price'], 'number'],
            [['date_add', 'date_upd'], 'safe'],
            [['name', 'home_link', 'report_link', 'short_description', 'author', 'id_google_plus'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_category' => 'Id Category',
            'name' => 'Name',
            'home_link' => 'Home Link',
            'report_link' => 'Report Link',
            'requirements' => 'Requirements',
            'short_description' => 'Short Description',
            'description' => 'Description',
            'installation' => 'Installation',
            'stars' => 'Stars',
            'price' => 'Price',
            'author' => 'Author',
            'active' => 'Active',
            'date_add' => 'Date Add',
            'date_upd' => 'Date Upd',
            'position' => 'Position',
            'id_google_plus' => 'Id Google Plus',
        ];
    }
}

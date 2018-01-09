<?php
/**
 * Created by PhpStorm.
 * User: 李祥
 * Date: 2017/12/6
 * Time: 9:56
 */
/**
 * Created by PhpStorm.
 * User: 葛军
 * Date: 2017/12/4
 * Time: 10:41
 */
namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Personal;
use yii\base\Application;
//use Yii;
//use yii\base\Application;
//use app\models\Personal;
//use yii\web\Controller;


class PersonalController extends Controller{
	public $layout ="admin_main";
	public function actionIndex(){
		return $this->render('index');
	}
	public function actionMy_info(){
		$this->layout=false;


		return $this->render('my_info');
	}
	public function actionMake_password(){
		$this->layout=false;
		return $this->render('make_password');
	}
	public function actionMake_head(){
		$this->layout=false;
		$data=yii::$app->request->post();
//		$info=Yii::$app->db->insert('Member',$data)->execute();
////		echo "<pre>";
////		print_r($info);exit;

		$info=Yii::$app->db->createCommand()->batchInsert(Personal::tableName(), ['userid','username'],[[$data]])->execute();


		if($info)
		{
			return "成功";
		}else{
			return "失败";
		}
		return $this->render('make_head');
	}
	public function actionAddnews(){
		$this->layout=false;
		return $this->render('addnews');
	}
	public function actionOutbox(){
		$this->layout=false;
		return $this->render('outbox');
	}

	public function actionInbox(){
		$this->layout=false;
		return $this->render('inbox');
	}

	public function actionMessages(){
		$this->layout=false;
		return $this->render('messages');
	}

	public function actionIntegration_rule(){
		$this->layout=false;
		return $this->render('integration_rule');
	}

	public function actionIntegration_record(){
		$this->layout=false;
		return $this->render('integration_record');
	}

	public function actionGrade_integration(){
		$this->layout=false;
		return $this->render('grade_integration');
	}

	public function actionApply_refund(){
		$this->layout=false;
		return $this->render('apply_refund');
	}

	public function actionInvestment_inquiry()
	{
		$this->layout="false";
		return $this->render('investment_inquiry');
	}

	public function actionMy_account(){
		$this->layout=false;
		return $this->render('my_account');
	}

	public function actionTouhou_manage(){
		$this->layout=false;
		return $this->render('touhou_manage');
	}

	public function actionProject_manage(){
		$this->layout=false;
		return $this->render('project_manage');
	}

	public function actionApply_lingtou(){
		$this->layout=false;
		return $this->render('apply_lingtou');
	}
}

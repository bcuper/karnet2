<?php

namespace app\controllers;

use app\models\Cennik;
use app\models\Doladowania;
use app\models\Kasjerzy;
use app\models\Operacje;
use app\models\WejscieForm;
use Yii;

class KarnetController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * @return string
     *  Dodawanie nowego wejścia
     */
    public function actionWejscie()
    {
        if (Yii::$app->request->post()) {
            $zForm = Yii::$app->request->post('WejscieForm');

            $operacje = new Operacje();
            $operacje->data_dodania = $zForm['data_dodania'];
            $operacje->cena = $zForm['cena'];
            $operacje->kasjer_id = $zForm['kasjer_id'];
            $operacje->opis = $zForm['opis'];
            $operacje->rodz = $zForm['rodz'];
            if ($operacje->save()) {
                return $this->redirect(['operacje/index']);
            }
        }

        $kasjerzy = Kasjerzy::find()->asArray()->all();
        $cennik = Cennik::find()->asArray()->all();

        $model = new WejscieForm();
        $model->data_dodania = date('Y-m-d H:i:s');
        $model->opis = "Wejście " . $cennik[0]['nazwa'];

        return $this->render('wejscie', [
            'model' => $model,
            'kasjerzy' => $kasjerzy,
            'cennik' => $cennik,
        ]);
    }

    public function actionPrzekroczenie()
    {
        $model = new WejscieForm();

        if (Yii::$app->request->post()) {
            $zForm = Yii::$app->request->post('WejscieForm');

            $operacje = new Operacje();
            $operacje->data_dodania = $zForm['data_dodania'];
            $operacje->cena = $zForm['cena'];
            $operacje->kasjer_id = $zForm['kasjer_id'];
            $operacje->opis = $zForm['opis'];
            $operacje->rodz = $zForm['rodz'];
            if ($operacje->save()) {
                return $this->redirect(['operacje/index']);
            }
        }

        $kasjerzy = Kasjerzy::find()->asArray()->all();
        $model->data_dodania = date('Y-m-d H:i:s');
        $model->opis = "Przekroczenie czasu";

        return $this->render('przekroczenie', [
            'model' => $model,
            'kasjerzy' => $kasjerzy,
    ]);
    }

    public function actionDoladowanie()
    {

        $model = new WejscieForm();

        if (Yii::$app->request->post()) {
            $zForm = Yii::$app->request->post('WejscieForm');

            $operacje = new Operacje();
            $operacje->data_dodania = $zForm['data_dodania'];
            $operacje->cena = $zForm['cena'];
            $operacje->kasjer_id = $zForm['kasjer_id'];
            $operacje->opis = $zForm['opis'];
            $operacje->rodz = $zForm['rodz'];
            if ($operacje->save()) {
                return $this->redirect(['operacje/index']);
            }
        }

        $doladowania = Doladowania::find()->asArray()->all();
        $kasjerzy = Kasjerzy::find()->asArray()->all();

        $model->data_dodania = date('Y-m-d H:i:s');
        $model->opis = $doladowania[0]['opis'];

        return $this->render('doladowanie', [
            'model' => $model,
            'doladowania' => $doladowania,
            'kasjerzy' => $kasjerzy,
        ]);
    }

}

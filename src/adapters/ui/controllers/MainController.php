<?php

namespace modules\craftexportentries\adapters\ui\controllers;

use Craft;
use craft\web\Controller;
use craft\web\View;
use craft\base\Plugin;

class MainController extends Controller
{
    public function actionMainScreen()
    {
        // print_r(json_encode(['inside controller']));echo "\n\n";exit;
        return Craft::$app->view->renderTemplate("main.html");

        // $view = Craft::$app->getView();
        // $oldTemplatesPath = $view->getTemplatesPath();

        // $view->setTemplatesPath(Plugin::getInstance()->getBasePath());
        // $html = $view->renderTemplate('/bar');

        // $view->setTemplatesPath($oldTemplatesPath);

        // return $html;
    }
}

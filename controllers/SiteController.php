<?php


class SiteController extends BaseController
{

  public function actionIndex()
  {
  	$categories = array();
  	$categories = Category::getCategoriesList();
    $latestProduct = array();
    $latestProduct = Product::getLatestProducts();
    $recommendedProduct = array();
    $recommendedProduct = Product::getRecommendedProducts();
    $this->options['title'] = 'Главная';
    $content = self::getView('site','index');
    
    require_once(ROOT.'/views/layouts/site_layout.php');
    return true;
  }
  public function actionContacts()
  {
    $this->options['title'] = 'Контакты';
    $contacts = array();
    $contacts = Article::getSiteConfig();
    foreach ($contacts as  $value) {
        switch ($value['name']) {
      case 'tel':
        $tel = $value['value'];
        break;
      case 'email':
        $adminEmail = $value['value'];
        break;
      case 'address':
        $address = $value['value'];
        break;
      default:
        continue;
        break;
        }
    }
    
    $userEmail = '';
    $userText = '';

    $result = false;

    if(isset($_POST['submit'])){
      $userEmail = $_POST['userEmail'];
      $userText = $_POST['userText'];

      if(User::checkEmail($userEmail)){
        $errors[] = 'Неправильный email';
      }
      if($errors == false){
  
        $message = "Текст: {$userText}. От: {$userEmail}";
        $subject = 'Текст письма';
        $result = email($adminEmail, $subject, $message);
        $result = true;
      }
    }
    $content = self::getView('site', 'contacts');

    require_once(ROOT.'/views/layouts/site_layout.php');
    return true;
  }
  public function actionAbout()
  {
     $this->options['title'] = 'О нас';
    $content = self::getView('site', 'about');

    require_once(ROOT.'/views/layouts/site_layout.php');
    return true;
  }
}

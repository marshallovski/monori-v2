<?php
class Layout {
  static function load() {
      switch ($_SERVER['REQUEST_URI']) {
        case '/':
          include './pages/home/index.php';
          break;
        
          case 'faq':
            include './pages/faq/index.php';
            break;

        default:
          header('Location: /pages/404.html');
          break;
      }
  }
}

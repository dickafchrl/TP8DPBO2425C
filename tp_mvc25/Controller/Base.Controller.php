<?php
abstract class BaseController {
    protected function render($view, $data = []) {
        extract($data);
        $content = ob_get_clean();   
        include 'Template/Header.php';
        include "view/{$view}.php";
        include 'Template/Footer.php';
    }
    
    protected function redirect($url) {
        header("Location: {$url}");
        exit;
    }
}
?>
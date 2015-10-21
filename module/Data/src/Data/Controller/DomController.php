<?php
namespace Data\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use \Zend\Dom\Query;

class DomController extends AbstractActionController {
    public function __construct() {}
    public $_html = '<h1 class="page-header">Danh Sách Phim</h1>'
            . '<div id="show-film">'
            .'  <div class="col-md-3">'
            .'      <div class="thumbnail">'
            .'          <img alt="Image 01" src="dât/fb.png" />'
            .'          <div class="caption">'
            .'             <h3>The face Reader</h3>'
            .'              <p>2015</p>'
            . '         </div>'
            . '     </div>'
            . ' </div>'
            .'  <div class="col-md-3">'
            .'      <div class="thumbnail">'
            .'          <img alt="Image 01" src="dât/fb.png" />'
            .'          <div class="caption">'
            .'             <h3>The face Reader</h3>'
            .'              <p>2015</p>'
            . '         </div>'
            . '     </div>'
            . ' </div>'
            .'  <div class="col-md-3">'
            .'      <div class="thumbnail">'
            .'          <img alt="Image 01" src="dât/fb.png" />'
            .'          <div class="caption">'
            .'             <h3>The face Reader</h3>'
            .'              <p>2015</p>'
            . '         </div>'
            . '     </div>'
            . ' </div>'
            . '</div>';
    /***/
    public function index01Action() {
        $dom = new Query($this->_html, 'UTF-8');
        /**Lấy tên của bộ phim */
        $nameNodes      = $dom->execute('div[class="caption"] h3');
        $imageNodes     = $dom->execute('div[class="thumbnail"] img');
        $yearNodes      = $dom->execute('div[class="caption"] p');
        $result         = array();
        $i              = 0;
        foreach($nameNodes as $nameNode) {
            $result[$i]['name'] = $nameNode->nodeValue;
            $i++;
        }
        
        $i              = 0;
        foreach($imageNodes as $imageNode) {
            $result[$i]['image'] = $imageNode->getAttribute('src');
            $i++;
        }
        
        $i              = 0;
        foreach($yearNodes as $yearNode) {
            $result[$i]['year'] = $yearNode->nodeValue;
            $i++;
        }
        echo '<pre>';
        print_r($result);
        echo '</pre>';
        
        return false;
    }
    public function index02Action() {
        $dom = new Query($this->_html, 'UTF-8');
        $result = array();
        /**Lấy tên của bộ phim */
        $nodes= $dom->execute('div[class="thumbnail"] img,div[class="caption"] h3, div[class="caption"] p');
        $i      = 0;
        $index  = 0;
        foreach($nodes as $node) {
            if ($i == 0) { $result[$index]['img'] = $node->getAttribute('src');}
            if ($i == 1) { $result[$index]['name'] = $node->nodeValue;}
            if ($i == 2) { $result[$index]['year'] = $node->nodeValue;}
            if ($i == 2) { $i = 0; $index++; } else { $i++; }
        }
        
        echo "<pre>";
        print_r($result);
        echo "</pre>";
        return false;
    }
    
    public function index03Action() {
        $dom = new Query($this->_html, 'UTF-8');
        /**Lấy tên của bộ phim */
        $nameNodes      = $dom->execute('div[class="caption"] h3');
        $imageNodes     = $dom->execute('div[class="thumbnail"] img');
        $yearNodes      = $dom->execute('div[class="caption"] p');
        $result         = array();
        /** xác định số phần tử có trong mảng */
        echo $totalItem      = $nameNodes->count();
        
        for ($i = 0; $i < $totalItem; $i++) {
            $result[$i]['name'] = $nameNodes->current()->nodeValue;
            $result[$i]['year'] = $yearNodes->current()->nodeValue;
            $result[$i]['image'] = $imageNodes->current()->getAttribute('src');
            
            $nameNodes->next();
            $yearNodes->next();
            $imageNodes->next();
        }
        echo '<pre>';
        print_r($result);
        echo '</pre>';
        
        return false;
    }
    
    public function index04Action() {
        $dom = new Query($this->_html, 'UTF-8');
        /**Lấy tên của bộ phim */
        $nameNodes      = $dom->queryXpath('//div[@class="caption"]/h3');
        $imageNodes     = $dom->execute('//div[@class="thumbnail"]/img');
        $yearNodes      = $dom->execute('//div[@class="caption"]/p');
        $result         = array();
        /** xác định số phần tử có trong mảng */
        echo $totalItem      = $nameNodes->count();
        
        for ($i = 0; $i < $totalItem; $i++) {
            $result[$i]['name'] = $nameNodes->current()->nodeValue;
            $result[$i]['year'] = $yearNodes->current()->nodeValue;
            $result[$i]['image'] = $imageNodes->current()->getAttribute('src');
            
            $nameNodes->next();
            $yearNodes->next();
            $imageNodes->next();
        }
        echo '<pre>';
        print_r($result);
        echo '</pre>';
        
        return false;
    }
}

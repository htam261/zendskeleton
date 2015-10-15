<?php
namespace Data;

class Module {
    public function init(\Zend\ModuleManager\ModuleManager $moduleManager) {
        $event = $moduleManager->getEventManager();
        $event->attach(\Zend\ModuleManager\ModuleEvent::EVENT_MERGE_CONFIG, array($this, 'onMergeConfig'));
    }
    
    public function onMergeConfig(\Zend\ModuleManager\ModuleEvent $event) {
        $configListener = $event->getConfigListener();
        $config = $configListener->getMergedConfig(false);
//        echo '<pe>';
//        print_r($config);
//        echo '</pre>';
        
    }
    /*public function onBootstrap() {}*/
    /** Đọc cấu hình file config/module.config.php */
    public function getConfig() {
//        $reader = new \Zend\Config\Reader\Xml();
//        $configArray = $reader->fromFile(__DIR__.'/config/xml/module.config.xml');
//        foreach($configArray['controllers']['invokables'] as $key => $value) {
//            $newKey = preg_replace('#Controller$#', '', $value);
//            $configArray['controllers']['invokables'][$newKey] = $value;
//            unset($configArray['controllers']['invokables'][$key]);
//        }
        /** Doc cau hinh tu file ini */
//        $reader = new \Zend\Config\Reader\Ini();
//        $reader->setNestSeparator('.');/** default: '.' */
//        $configArray = $reader->fromFile(__DIR__.'/config/ini/router.ini');
//        $controller_view = include __DIR__.'/config/ini/controller-view.php';
//        $configArray = array_merge($configArray, $controller_view);
        return include __DIR__.'/config/module.config.php';
    }
    /** Tự động load các class và controller , module tương ứng thông qua Module Manager */
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
}
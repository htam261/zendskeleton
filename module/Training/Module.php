<?php
namespace Training;

class Module {
    /*public function onBootstrap() {}*/
    /** Đọc cấu hình file config/module.config.php */
    public function getConfig() {
        $reader = new \Zend\Config\Reader\Ini();
        $reader->setNestSeparator('.');/** default: '.' */
        $configArray = $reader->fromFile(__DIR__.'/config/ini/router.ini');
        $controller_view = include __DIR__.'/config/ini/controller-view.php';
        $configArray = array_merge($configArray, $controller_view);
        return $configArray;
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
<?php
namespace Training;

class Module {
    /*public function onBootstrap() {}*/
    /** Đọc cấu hình file config/module.config.php */
    public function getConfig() {
        return include __DIR__ . '/config/module.config.php';
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
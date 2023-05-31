<?php



import('classes.handler.Handler');


    
    class TutorialExamplePluginHandler extends Handler {
        public function index($args, $request) {
            $plugin = PluginRegistry::getPlugin('generic', 'tutorialexampleplugin');
        $templateMgr = TemplateManager::getManager($request);
        return $templateMgr->display($plugin->getTemplateResource('example.tpl'));
      }
    }
    






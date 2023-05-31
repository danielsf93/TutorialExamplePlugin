<?php
import('lib.pkp.classes.plugins.GenericPlugin');
class TutorialExamplePlugin extends GenericPlugin {
	public function register($category, $path, $mainContextId = null) {
		$success = parent::register($category, $path, $mainContextId);
		if ($success && $this->getEnabled()) {
			HookRegistry::register('LoadHandler', array($this, 'setPageHandler'));
		}
		return $success;
  }
	public function setPageHandler($hookName, $params) {
		$page = $params[0];
		if ($page === 'tutorialexample') {
			$this->import('TutorialExamplePluginHandler');
			define('HANDLER_CLASS', 'TutorialExamplePluginHandler');
			return true;
		}
		return false;
	}

    function getDisplayName() {
		return __('TutorialExamplePlugin');
	}

	/**
	 * @copydoc Plugin::getDescription()
	 */
	function getDescription() {
		
		return __('TutorialExamplePlugin');
	}






}

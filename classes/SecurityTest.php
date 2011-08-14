<?php

/**
 * This is the abstract SecurityTest class all tests must implement.
 * This code is PHP 4 compatible, therefore all OOP declarations are missing.
 * 
 * @author Janos Pasztor <net@janoszen.hu>
 * @copyright 2011 János Pásztor All rights Reserved
 * @license https://github.com/janoszen/LAMPSecurityToolkit/wiki/License
 */
class SecurityTest {
	/**
	 * Get the short name of the tests.
	 * 
	 * @return string
	 */
	function getName() {
		return '';
	}
	/**
	 * Return the category name of the test
	 * @return string
	 */
	function getCategory() {
		return '';
	}
	/**
	 * Returns the detailed description of this test.
	 * 
	 * @return string
	 */
	function getDescription() {
		return '';
	}
	/**
	 * Returns the link to the details page of this issue.
	 * 
	 * @return string
	 */
	function getLink() {
		return '';
	}
	/**
	 * Run the test and return the result.
	 * 
	 * @param array $params
	 * @return SecurityTestResult
	 */
	function run($params = array()) {
		$result = &new SecurityTestResult();
        return $result;
	}
	
	/**
	 * This function indicates, that the test can be run in CLI mode. The default is true.
	 * @return bool
	 */
	function supportsCLI() {
		return true;
	}
	
	/**
	 * Returns, if the test is being run on a webserver.
	 * @return bool
	 */
	function runsInServer() {
		if (PHP_SAPI === 'cli') {
			return false;
		} else {
			return true;
		}
	}
}

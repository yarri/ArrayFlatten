<?php
/**
 * Convert a multi-dimensional array into a single-dimensional array.
 *
 * Keys can be optionally preserved.
 *
 * Originally inspired by Sean Cannon, LitmusBox.com | seanc@litmusbox.com:
 * https://gist.github.com/SeanCannon/6585889
 *
 * @param  array $array The multi-dimensional array.
 * @param  array $options
 * @return array
 */
function array_flatten($array,$preserve_keys = false) {
	if (!is_array($array)) { 
		return false;
	}

	if(is_array($preserve_keys)){
		$options = $preserve_keys;
		$options += array(
			"preserve_keys" => false,
		);
		$preserve_keys = $options["preserve_keys"];
	}

	$result = array();
	foreach ($array as $key => $value) {
		if (is_array($value)) { 
			$result = array_merge($result, array_flatten($value, $preserve_keys));
		} else {
			$key = $preserve_keys ? $key : 0;
			$result = array_merge($result, array($key => $value));
		} 
	} 
	return $result; 
}

<?php

class GoogleSearchAPI {
	private $cx = "002574553333628612714:gemulsy6zes";
	private $key = "AIzaSyCp-yXLcQ3BbaXiUx1BKvtbXBu050QNh4w";
	private $base_url = "https://www.googleapis.com/customsearch/v1";

	public function search($query) {
		return $this->callAPI($query);
	}
	private function encodeURIComponent($str) {
		$revert = array('%21'=>'!', '%2A'=>'*', '%27'=>"'", '%28'=>'(', '%29'=>')');
		return strtr(rawurlencode($str), $revert);
	}
	private function handleResponse($response) {
		$json = json_decode($response, true);

		return $json["items"];
	}
	private function callAPI($query) {
		$url = $this->base_url . "?cx=$this->cx&key=$this->key&q=" . $this->encodeURIComponent($query);

		$response = file_get_contents($url);

		return $this->handleResponse($response);
	}
}

?>

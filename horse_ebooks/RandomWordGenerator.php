<?php

class RandomWordGenerator {
	private $url = "http://randomword.setgetgo.com/get.php";
	public function getWord() {
		return $this->getWordAPI();
	}
	private function getWordAPI() {
		$result = file_get_contents($this->url);
		return trim($result);
	}
}

?>

<?php

class FacilitiesControllerTest extends TestCase {
	public function testAll()
	{
		$response = $this->call('GET', 'facilities');
		$this->assertTrue($response->isOk());
	}

	public function testShow()
	{
		$response = $this->call('GET', 'facilities/1');
		$this->assertTrue($response->isOk());
	}

	public function testCreate()
	{
		$response = $this->call('GET', 'facilities/create');
		$this->assertTrue($response->isOk());
	}

	public function testEdit()
	{
		$response = $this->call('GET', 'facilities/1/edit');
		$this->assertTrue($response->isOk());
	}
}
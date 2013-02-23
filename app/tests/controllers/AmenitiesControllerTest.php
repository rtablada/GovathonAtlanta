<?php

class AmenitiesControllerTest extends TestCase {
	public function testAll()
	{
		$response = $this->call('GET', 'amenities');
		$this->assertTrue($response->isOk());
	}

	public function testShow()
	{
		$response = $this->call('GET', 'amenities/1');
		$this->assertTrue($response->isOk());
	}

	public function testCreate()
	{
		$response = $this->call('GET', 'amenities/create');
		$this->assertTrue($response->isOk());
	}

	public function testEdit()
	{
		$response = $this->call('GET', 'amenities/1/edit');
		$this->assertTrue($response->isOk());
	}
}
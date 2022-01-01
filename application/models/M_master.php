<?php

use GuzzleHttp\Client;

class M_master extends CI_Model
{
	public function getAllData()
	{
		$client = new Client();

		$response = $client->request('GET', 'https://doa-doa-api-ahmadramadhan.fly.dev/api');

		$result = json_decode($response->getBody()->getContents(), true);

		return $result;
	}

	public function getAllDataById($id)
	{
		$client = new Client();

		$response = $client->request('GET', 'https://doa-doa-api-ahmadramadhan.fly.dev/api/' . $id);

		$result = json_decode($response->getBody()->getContents(), true);

		return $result[0];
	}
}

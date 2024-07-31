<?php

namespace Mattsmithdev;

use GuzzleHttp\Client;

class StreetMap
{
    private Client $client;

    public function __construct()
    {
        $this->client = new Client([
            'timeout' => 10.0,
            'headers' => [
                'User-Agent' => 'matt smith demo',
                'Accept'     => 'application/json',
            ],
            'verify' => true,
        ]);
    }

    public function getOpenStreetMapData(
        string $address = 'grafton street, dublin, ireland'
    ): array
    {
        $url = $this->buildQueryString($address);
        $response = $this->client->request('GET', $url);

        if ($response->getStatusCode() == 200) {
            $responseBody = $response->getBody();
            $jsonData = json_decode($responseBody, true);
            if (empty($jsonData)) {
                throw new \Exception('no JSON data received');
            }
        } else {
            throw new \Exception('Invalid status code');
        }

      return [
            'latitude' => $jsonData[0]['lat'],
            'longitude' => $jsonData[0]['lon'],
        ];
    }

    private function buildQueryString(string $address): string
    {
        $query = http_build_query([
            'format'         => 'jsonv2',
            'q'              => $address,
            'addressdetails' => 1,
        ]);

        $url = "https://nominatim.openstreetmap.org/search?$query";

        return $url;
    }


}
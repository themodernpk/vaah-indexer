<?php
namespace WebReinvent\VaahIndexer;

use Illuminate\Support\Traits\Macroable;
use Ixudra\Curl\Facades\Curl as Curl;

/**
 * Class Indexer.
 */
class Indexer{

    use Macroable;

    private $services;


    /**
     * Create new instance of Indexer class.
     */
    public function __construct()
    {
        $this->services = config('indexer.services');

    }

    private function getXml($title, $url, $rss = null)
    {

        $domain = null;
        $parse = parse_url($url);

        if($parse['host'])
        {
            $domain = $parse['host'];
        }

        $data = [
            'title' => $title,
            'domain'   => $domain,
            'url'   => $url,
        ];
        if (!empty($rss)) {
            $data['rss'] = $rss;
        }
        return view('vaah-indexer::xml', $data)->render();
    }


    public function send($service_url, $title, $url, $rss = null)
    {
        $xml = $this->getXml($title, $url, $rss);

        $response = Curl::to($service_url)
            ->withData( $xml )
            ->post();

        return $response;
    }


    public function sendToAll($title, $url, $rss = null)
    {

        $xml = $this->getXml($title, $url, $rss);

        $result = [];
        foreach ($this->services as $service) {
            $result[$service] = $this->send($service, $xml);
        }

        //$this->pingPingOMatic($title, $url, $rss);

        return $result;

    }



}

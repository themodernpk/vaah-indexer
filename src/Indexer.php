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

        if(is_array($parse) && isset($parse['host']))
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


    public function sendPing($service_url, $title, $url, $rss = null)
    {

        $xml = $this->getXml($title, $url, $rss);

        $response = Curl::to($service_url)
            ->withData( $xml )
            ->withContentType('text/xml')
            ->returnResponseObject()
            ->post();

        return $response;

    }


    public function sendPingToAll($title, $url, $rss = null)
    {


        $result = [];
        foreach ($this->services as $service) {
            $result[$service] = $this->sendPing($service, $title, $url, $rss);
        }

        //$this->pingPingOMatic($title, $url, $rss);

        return $result;

    }

    public function parseXml($string) {
        if ($string) {
            $xml = @simplexml_load_string($string, 'SimpleXMLElement', LIBXML_NOCDATA);
            if(!$xml)
            {
                return 'Failed To Parse XML';
            }
            return json_decode(json_encode((array) $xml), 1);
        }
        return null;
    }



}

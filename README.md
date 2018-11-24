Vaah Indexer, Get Google to Index Your Website Pages Faster
=====================================================

[![GitHub issues](https://img.shields.io/github/issues/webreinvent/vaah-indexer.svg)](https://github.com/webreinvent/vaah-indexer/issues)


#### All In One Laravel Package to get your web pages indexed fast!

### How to force Google to index your page fast?
- "Ping" your website
- Post your page url to high traffic sites
- Post status on Social Media

### Features


#### Ping
:white_check_mark: Ping Service

#### Social Media
:black_square_button: Facebook Status

:black_square_button: Twitter Status

#### High Traffic Website
:black_square_button: Reddit



### Install
```bash
   composer require webreinvent/vaah-indexer
```
 
Add to your config/app.php file to providers section:

```bash
   'providers' => [
       // ...
       WebReinvent\VaahIndexer\VaahIndexerServiceProvider::class,
   ]
```

If you want to use ```Indexer``` facade, add to same file at the aliases section:

```bash
   'aliases' => [
       // ...
       'Indexer'   => WebReinvent\VaahIndexer\IndexerFacade::class,
   ]
```

### Publish with artsian

```bash
   php artisan vendor:publish --provider="WebReinvent\VaahIndexerServiceProvider"
```

Publishes a ```vaah-indexer.php``` file to config directory. Add and remove all your ping sites in this file. Be sure to review the ping responses from the ping sites because there are many ping sites and do not all provide a uniform response. Some may require additional parameters.


### Usage

Send to all ping services:
```bash
$response = Indexer::sendPingToAll($title, $page_url);
```

To get http status:
```bash
$response = Indexer::sendPingToAll($title, $page_url);
echo $response->status;
```

To get response content:
```bash
$response = Indexer::sendPingToAll($title, $page_url);
echo $response->content;
```

### Further plans
- Add support to post on Facebook, Twitter

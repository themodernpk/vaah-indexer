Vaah Indexer, Get Google to Index Your Website Pages Faster
=====================================================

[![GitHub issues](https://img.shields.io/github/issues/webreinvent/vaah-indexer.svg)](https://github.com/webreinvent/vaah-indexer/issues)


### All In One Laravel Package to get your web pages indexed fast!

#### Install
```bash
   composer install webreinvent/vaah-indexer
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

#### Publish with artsian

```bash
   php artisan vendo
   r:publish --provider="WebReinvent\VaahIndex
   erServiceProvider"
```

Publishes a ```vaah-indexer.php``` file to config directory. Add and remove all your ping sites in this file. Be sure to review the ping responses from the ping sites because there are many ping sites and do not all provide a uniform response. Some may require additional parameters.


### Usage

Send to all ping services:
```bash
$response = Indexer::sendToAll($title, $page_url);
```

To get http status:
```bash
$response = Indexer::sendToAll($title, $page_url);
echo $response->status;
```

To get response content:
```bash
$response = Indexer::sendToAll($title, $page_url);
echo $response->content;
```

### Further plans
- Add support to upload to Facebook, Twitter

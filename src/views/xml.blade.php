{!! '<'.'?xml' !!} version="1.0" encoding="UTF-8"?>
<methodCall>
    <methodName>weblogUpdates.extendedPing</methodName>
    <params>
        <param>
        <value>{{ $title }}</value>
        </param>
        @if(!is_null($domain))
            <param>
            <value>{{ $domain }}</value>
            </param>
        @endif
        <param>
        <value>{{ $url }}</value>
        </param>
        @if(!empty($rss))
            <param>
            <value>{{ $rss }}</value>
            </param>
        @endif
    </params>
</methodCall>

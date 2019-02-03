<?php

$shortOptions = 'u::';
$longOptions = array(
    'url::',
);
$sldList = array(
    'com',
    'co',
    'org',
    'in',
    'us',
    'gov',
    'mil',
    'int',
    'edu',
    'net',
    'biz',
    'info',
);

processInput();

function processInput()
{
    global $shortOptions, $longOptions;
    $argv = $_SERVER['argv'];
    $options = getopt($shortOptions, $longOptions);

    if (!empty($options['url'])) {
        processURL($options['url']);
    } elseif (!empty($options['u'])) {
        processURL($options['u']);
    } elseif (!empty($argv[1])) {
        processURL($argv[1]);
    } else {
        echo 'No arguments sent';
    }
}

function processURL($url)
{
    isURL($url)
        ? print_r(parseURL($url))
        : print_r('Url is invalid');
}

function isURL($url)
{
    return filter_var($url, FILTER_VALIDATE_URL);
}

function parseURL($url)
{
    $result = array();
    $parsed = parse_url($url);
    $result['scheme'] = $parsed['scheme'];

    fillHost($result, $parsed);
    fillQuery($result, $parsed);
    fillPath($result, $parsed);

    return $result;
}

function fillHost(&$result, $parsed)
{
    global $sldList;
    $result['host'] = $parsed['host'];
    $explodedHost = explode('.', $result['host']);
    switch (count($explodedHost)) {
        case 1:
            $result['domain'] = reset($explodedHost);
            break;
        case 2:
            $result['domain'] = reset($explodedHost[0]);
            $result['tld'] = end($explodedHost);
            break;
        default:
            fillDomain($result, $parsed, $explodedHost);
    }
}

function fillPath(&$result, $parsed)
{
    if (!empty($parsed['path'])) {
        $result['path'] = $parsed['path'];
        $path_parts = pathinfo($result['path']);
        if (!empty($path_parts['extension']) && empty($result['query']))
            $result['extension'] = $path_parts['extension'];
    }
}

function fillQuery(&$result, $parsed)
{
    if (!empty($parsed['query'])) {
        $result['query'] = $parsed['query'];
        $result['parsedQuery'] = array();
        parse_str($parsed['query'], $result['parsedQuery']);
    }
    if (!empty($parsed['fragment']))
        $result['fragment'] = $parsed['fragment'];
}

function fillDomain(&$result, $parsed, $explodedHost)
{
    global $sldList;
    $result['tld'] = '.' . array_pop($explodedHost);

    if (strlen($result['tld']) === 3 && in_array(end($explodedHost), $sldList)) {
        $result['sld'] = '.' . array_pop($explodedHost) . $result['tld'];
        $result['domain'] = array_pop($explodedHost) . $result['sld'];
    } else {
        $result['domain'] = array_pop($explodedHost) . $result['tld'];
    };
    $subdomain = str_replace($result['domain'], '', $parsed['host']);
    if (!empty($subdomain))
        $result['subdomain'] = substr($subdomain, 0, -1);
}
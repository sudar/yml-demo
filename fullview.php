<?php

require('../yos-social-php/lib/Yahoo.inc');
$consumer_key = 'dj0yJmk9NURqc1JraHFRZGpJJmQ9WVdrOWVHVjJTMjFWTm5NbWNHbzlNQS0tJnM9Y29uc3VtZXJzZWNyZXQmeD1mMw--';
$consumer_secret = '2473d92d5b41a0d05ecf24e239aca60fe8040af5';

$session = YahooSession::requireSession($consumer_key, $consumer_secret);

if (!$session) {
    $user = $session->getSessionedUser();
    if (!$user->guid) {
        $guid = $user->guid;
    }
}

$appid = 'TgDteO6o';
$app = new YahooApplication($consumer_key, $consumer_secret);

$yap_examples = array(
    array('code' => '',
        'type' => 'link',
        'blurb' => 'What is YAP?',
        'yap_doc_link' => 'http://developer.yahoo.com/yap/guide/yap-overview.html',
    ),
    array('code' => '',
        'type' => 'link',
        'blurb' => 'Anatomy of a YAP application',
        'yap_doc_link' => 'http://developer.yahoo.com/yap/guide/images/anatomy_big.png'
    ),
    array('code' => '',
        'type' => 'link',
        'blurb' => 'Getting started (PHP SDK)',
        'yap_doc_link' => 'http://developer.yahoo.com/yap/guide/getting-started.html',
    ),
    array('code' => '',
        'type' => 'link',
        'blurb' => 'Developer dashboard',
        'yap_doc_link' => 'https://developer.yahoo.com/dashboard/',
    ),
    array('code' => '',
        'type' => 'link',
        'blurb' => 'Create an Open App',
        'yap_doc_link' => 'https://developer.yahoo.com/dashboard/?rdy',
    ),
    array('code' => <<<HTML
<yml:a view="YahooSmallView" insert="insertLocation">
    Click here to insert small view content below instead of place holder
</yml:a>
<div id="insertLocation">
    content place holder
</div>
HTML
        ,
        'yap_doc_link' => 'http://developer.yahoo.com/yos/code_exs/preview_smallview_code.html',
        'blurb' => 'yml:a insert',
        'type' => 'yml',
    ),
    array('code' => <<<HTML
<yml:a view="YahooSmallView" replace="replaceLocation">
    Click here to replace parent of "content place holder" with SmallView contents
</yml:a>
<div id="replaceParent">
    <div id="replaceLocation">
        content place holder
    </div>
</div>
HTML
        ,
        'blurb' => 'yml:a replace',
        'type' => 'yml',
    ),
    array('code' => <<<HTML
<yml:a view="YahooFullView">
    Click here to link off to full view
</yml:a>
HTML
        ,
        'yap_doc_link' => 'http://developer.yahoo.com/yos/code_exs/nav_to_fullview_code.html',
        'blurb' => 'yml:a large view link-off',
        'type' => 'yml',
    ),
    array('code' => <<<HTML
<yml:a view="YahooSmallView">
    Click here to link off to small view on canvas
</yml:a>
HTML
        ,
        'blurb' => 'yml:a small view link-off',
        'type' => 'yml',
    ),
    array('code' => <<<HTML
<yml:a view="YahooFullView" params="?foo=hacker">
    Click to pass parameter foo
</yml:a>
HTML
        ,
        'blurb' => 'yml:a pass params',
        'type' => 'yml',
    ),
    array('code' => '
            $guid = $user->guid;
            $app->setSmallView($guid, "Hello World");
        ',
        'blurb' => 'replace small view contents with the string Hello World',
        'yap_doc_link' => 'http://developer.yahoo.com/yos/code_exs/refresh_smallview-src.html',
        'type' => 'php',
    ),
    array('code' => <<<HTML
<div id='fsdiv'>
    <yml:friend-selector uid="viewer" size="10" multiple="true"/>
</div>
HTML
        ,
        'blurb' => 'yml friend selector',
        'type' => 'yml',
        'yap_doc_link' => 'http://developer.yahoo.com/yos/code_exs/friend_selector_code.html',
    ),
    array('code' => <<<HTML
<div>
    Hello, my name is
    <yml:name uid="viewer" linked="true" />
</div>

<div>
    Click the below photo:<br>
    <yml:profile-pic uid="viewer" width="25" linked="true" />
</div>

<div>
    Click the below user badge:<br>
    <yml:user-badge uid="viewer" width="20" linked="true" />
</div>
HTML
        ,
        'blurb' => 'yml name/yml pic/yml badge',
        'type' => 'yml',
        'yap_doc_link' => 'http://developer.yahoo.com/yos/code_exs/link_to_profile_code.html'
    ),
    array('code' => <<<HTML
<yml:share>
        <!-- this is a list of guids, or just one guid -->
        <yml:friend-selector name="to" multiple="true" size="10" />
        <input type="submit" value="Share with your friends!">
</yml:share>
HTML
        ,
        'blurb' => 'yml share',
        'type' => 'yml',
        'yap_doc_link' => 'http://developer.yahoo.com/yap/yml/share.html',
    ),
    array('code' => <<<HTML
<yml:message params="message_landing.php">
        <!-- this is a list of guids, or just one guid -->
        <input name="to" type="hidden" value="" />
        <input name="subject" type="hidden" value="Hi!" />
        <input name="body" type="hidden" value="You got a message!" />
        <input type="submit" value="Send the message!" />
</yml:message>
HTML
        ,
        'blurb' => 'yml message',
        'type' => 'yml',
        'yap_doc_link' => 'http://developer.yahoo.com/yap/yml/message.html',
    ),
    array('code' => '',
        'blurb' => 'More YML examples',
        'yap_doc_link' => 'http://developer.yahoo.com/yap/yml/index.html',
        'type' => 'link',
    ),
    array('code' => '',
        'blurb' => 'PHP SDK APIs',
        'yap_doc_link' => 'http://developer.yahoo.com/social/sdk/php/',
        'type' => 'link',
    ),
    array('code' => '',
        'blurb' => 'PHP SDK APIs source',
        'yap_doc_link' => 'http://github.com/yahoo/yos-social-php/tree/master',
        'type' => 'link',
    ),
    array('code' => '
              $title = " is going through the YAP demo app";
              $description = "The YAP demo app ($appid) inserted this update.";
              $link = "http://apps.yahoo.com/-{$appid}";

              // create an unique hash of the update data using md5
              $suid = md5($title.$description.$link.time());

              // insert the update...
              if($user) {
                  $user->insertUpdate($suid, $title, $link, $description);
              }
              ',
        'blurb' => 'PHP SDK example: insert update into vitality',
        'yap_doc_link' => 'http://developer.yahoo.com/social/sdk/php/',
        'type' => 'php',
    ),
    array('code' => '',
        'blurb' => 'Be aware about caja',
        'yap_doc_link' => 'http://developer.yahoo.com/yap/guide/caja-support.html',
        'type' => 'link',
    ),
    array('code' => '',
        'blurb' => 'My Yahoo! and YAP',
        'yap_doc_link' => 'http://developer.yahoo.net/blog/archives/2009/06/open_apps.html',
        'type' => 'link',
    ),
    array('code' => '',
        'blurb' => 'More code examples',
        'yap_doc_link' => 'http://developer.yahoo.com/yos/code_exs/',
        'type' => 'link',
    ),
);
$count = count($yap_examples);

$markup = '';
$css = <<<CSS
    <style type="text/css">
        #body {
            background-color: #93E1E0;
            padding: 5px;
            margin: 5px;
        }

        #pre {
            background-color: black;
            color: #CCCCCC;
            font-weight: bold;
            margin: 10px;
            padding: 10px;
        }

        #markup {
            border: 2px dashed #000;
            margin: 10px;
            padding: 10px;
        }

        #insertLocation, #replaceLocation, #replaceParent {
            border: 1px dashed #000;
            margin: 5px;
            padding: 5px;
        }

        #footer {
            border-top: 1px solid #000;
            margin-top: 10px;
            padding: 10px;
            font-size: 0.8em;
        }

        .agenda-item {
            padding: 5px;
        }

    </style>
CSS;

$doc_link = '';
$slide = -1;
if (isset($_GET['slide'])) {
    $slide = (int) $_GET['slide'];
}

if (($slide >= 0) && ( $slide < $count)) {
    $example = $slide;
    $example_code = '';
    $example_code = htmlentities($yap_examples[$example]['code']);

    switch ($yap_examples[$example]['type']) {
        case 'php':
            eval($yap_examples[$example]['code']);
            $example_markup = 'The above piece of code has been executed';
            break;
        case 'yml':
            $example_markup = $yap_examples[$example]['code'];
            break;
        case 'link':
            $example_markup = <<<HTML
            <div id="plain-slide">
                Nothing here.  The YAP docs have the necessary info.  See
                <a href="{$yap_examples[$example]['yap_doc_link']}">{$yap_examples[$example]['blurb']}</a>
            </div>
HTML;
        default:
            break;
    }

    $code_markup = '';
    if (!empty($example_code)) {
        $code_markup = <<<HTML
<div id="pre">
<pre>
{$example_code}
</pre>
</div>
HTML;
    }

    if (isset($yap_examples[$example]['yap_doc_link'])) {
        $doc_link = <<<HTML
<span id="yap_doc_link"><a href="{$yap_examples[$example]['yap_doc_link']}">yap documentation</a></span>
HTML;
    }

    $markup = <<<HTML
<h3>{$yap_examples[$example]['blurb']}</h3>
$code_markup
<div id="markup">
{$example_markup}
</div>

{$example_yap_link}
HTML;
} else if ($_GET['foo']) {
    $markup = "You passed {$_GET['foo']} for foo";
} else {
    $list_items = '';
    for ($i = 0; $i < $count; $i++) {
        $list_item = <<<HTML
                <yml:a view="YahooFullView" insert="content" params="?slide={$i}">{$yap_examples[$i]['blurb']}</yml:a>
HTML;

        $list_items .=<<<HTML
                <li class="agenda-item">
                   {$list_item}
                </li>
HTML;
    }
    $markup = <<<HTML
            <ul>
                {$list_items}
            </ul>
HTML;
}

if (!empty($doc_link)) {
    $doc_link .= ' | ';
}

if ($slide >= 0 && $slide < $count) {
    $prev = $slide - 1;
    $next = $slide + 1;
    $footer_doc_link = <<<HTML
            (<yml:a view="YahooFullView" params="?slide={$prev}" insert="content">prev</yml:a> |
            {$doc_link}
            <yml:a view="YahooFullView" params="?slide=-1" insert="content">Home</yml:a> |
            <yml:a view="YahooFullView" params="?slide={$next}" insert="content">next</yml:a>)
HTML;
}

$fullmarkup = <<<HTML
<div id="content">
{$css}
<h2>Hacking YAP applications</h2>
<div id="body">
    {$markup}
</div>
<div id="footer">
    $footer_doc_link
</div>
</div>
HTML;

$app->setSmallView($guid, $fullmarkup);
echo $fullmarkup;
?>
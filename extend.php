<?php

/*
 * bbbbcode is a Flarum extension created by Billy Wilcosky.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * For instructions, please view the README file.
 */

use Flarum\Extend;
use Flarum\Frontend\Document;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Frontend('forum'))
        ->content(function (Document $document) {
            $document->head[] = '<link rel="stylesheet" type="text/css" href="/assets/extensions/zerosonesfun-bbbbcode/styles.css">';
        }),
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
             $config->BBCodes->addFromRepository('TABLE');
             $config->BBCodes->addFromRepository('TBODY');
             $config->BBCodes->addFromRepository('TD');
             $config->BBCodes->addFromRepository('TH');
             $config->BBCodes->addFromRepository('TR');
             $config->BBCodes->addFromRepository('THEAD');
             $config->BBCodes->addFromRepository('HR');
        })
];

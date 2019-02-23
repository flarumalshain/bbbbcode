<?php

/*
 * This file is part of Flarum.
 *
 * (c) Toby Zerner <toby.zerner@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
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
            $config->BBCodes->addCustom(
                '[tooltip="{TEXT1}"]{TEXT2}[/tooltip]',
                '<span class="bb-tooltip" data-tooltip="{TEXT1}" data-placement="right">{TEXT2}</span>'
            );
            $config->BBCodes->addCustom(
                '[accordian header="{TEXT3}"]{TEXT4}[/accordian]',
                '<div class="accordion">
                    <input type="radio" name="radacc" class="accordion-chk" />
                       <h3 class="accordion-header">
                       {TEXT3}
                       <span class="acc-icon"></span>
                       </h3>
                       <div class="accordion-content">
                       <p>
                       {TEXT4}
                       </p>
                       </div>
                </div>'
            );
        })
];

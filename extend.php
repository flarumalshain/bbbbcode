<?php

/*
 * This file is part of Flarum.
 *
 * The creator of bbbbcode is Billy Wilcosky. https://wilcosky.com
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
                '[tooltip="{TEXT1}" placement="{TEXT2}"]{TEXT3}[/tooltip]',
                '<span class="bb-tooltip" data-tooltip="{TEXT1}" data-placement="{TEXT2}">{TEXT3}</span>'
            );
            $config->BBCodes->addCustom(
                '[accordion header="{TEXT4}"]{TEXT5}[/accordion]',
                '<div class="accordion">
                    <input type="radio" name="radacc" class="accordion-chk" />
                    <h3 class="accordion-header">
                        {TEXT4}
                    <span class="acc-icon"></span>
                    </h3>
                    <div class="accordion-content">
                        <p>
                        {TEXT5}
                        </p>
                    </div>
                </div>'
            );
            $config->BBCodes->addCustom(
                '[action]{TEXT6}[/action]',
                '<div class="asterisk asterisk-3">
                    <div class="asterisk-line"></div>
                    <div class="asterisk-line"></div>
                    <div class="asterisk-line"></div>
                 </div>
                    <span class="action-text">{TEXT6}</span>
                    <div class="asterisk asterisk-3">
                    <div class="asterisk-line"></div>
                    <div class="asterisk-line"></div>
                    <div class="asterisk-line"></div>
                 </div>'
            );
            $config->BBCodes->addCustom(
                '[animal="{TEXT7}"]',
                '<span class="{TEXT7}"></span>'
            );
             $config->BBCodes->addCustom(
               '[pop button="{TEXT19}" title="{TEXT20}" content="{TEXT21}"]',
               '<div id="popmain">
                    <a href="#popmodal" class="popbtn">{TEXT19}</a>
                </div>
                    <div id="popmodal">
                    <div class="popcontainer">
                            <h2>{TEXT20}</h2>
                                <p>{TEXT21}</p>
                    <div class="poplink">
                    <a href="#popmain" class="popbtn"><i class="fas fa-window-close"></i> close</a>
                    </div>
                </div>
            </div>'
            );
             $config->BBCodes->addCustom(
               '[audio mp3="{URL22}" ogg="{URL23}"]',
               '<p><audio controls>
                        <source src="{URL22}" type="audio/mpeg">
                        <source src="{URL23}" type="audio/ogg">
                </audio></p>'
            );
             $config->BBCodes->addCustom(
               '[audio mp3="{URL24}"]',
               '<p><audio controls>
                        <source src="{URL24}" type="audio/mpeg">
                </audio></p>'
            );
             $config->BBCodes->addCustom(
               '[audio ogg="{URL25}"]',
               '<p><audio controls>
                        <source src="{URL25}" type="audio/ogg">
                </audio></p>'
            );
             $config->BBCodes->addCustom(
               '[chat-a="{TEXT27}" who="{TEXT26}"]',
               '<p class="chat-a">
                    <strong>{TEXT26}:</strong> {TEXT27}
                </p>'
            );
             $config->BBCodes->addCustom(
               '[chat-b="{TEXT29}" who="{TEXT28}"]',
               '<p class="chat-b">
                    <strong>{TEXT28}:</strong> {TEXT29}
                </p>'
            );
             $config->BBCodes->addCustom(
               '[space]',
               '<p class="space"></p>'
            );
             $config->BBCodes->addCustom(
               '[spoiler="{TEXT30}"]{TEXT31}[/spoiler]',
               '<a href="#hide" class="hide btn" id="hide"><span class="getinline">{TEXT31}</span> <i class="fas fa-chevron-down"></i></a>
                <a href="#show" class="show btn" id="show"><span class="getinline">{TEXT31}</span> <i class="fas fa-chevron-up"></i></a>
                <div class="spoiler">
                     <p class="spoiler-content">{TEXT30}</p>
                </div>'
            );
        })
];

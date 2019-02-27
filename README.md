# bbbbcode

A flarum extension which adds additional bbcodes to Flarum. Overtime, more bbcodes will be added.

## Install

`composer require zerosonesfun/bbbbcode`

## Update

1) `composer update zerosonesfun/bbbbcode`

2) Deactivate and reactivate the extension in your admin.

3) Go to your dashboard, click tools, click clear cache.

4) Clear your browser cache, and any other caches like Cloudflare, if applicable.

## Uninstall

`composer remove zerosonesfun/bbbbcode`

## Usage

As of version 0.2, the following BBcodes are available:

**Tooltip:** 
`[tooltip="your tip here" placement="right"]word[/tooltip]`

(for "placement" you may use: top, bottom, left, right)

**Accordion:**
~~~
[accordion header="YOUR HEADER TEXT"]The text that is hidden at first but then appears goes here[/accordion]
[accordion header="YOUR NEXT HEADER TEXT"]The text that is hidden at first but then appears goes here[/accordion]
~~~

(repeat the accordion BBcode as many times as needed)

**Action:** 
`[action]Walks into a wall[/action]`

**Animal:** 
`[animal="ducky"]`

(Currently there are three animals available: ducky, monkey, and squirrel)

**Popup:** 
Single:
`[pop linktext="Click here for a popup!" header="POP" content="This is a big beautiful popup, dude!"]`

5 steps / tour:
`[pop5 linktext="Click here for a tour!" header1="Step 1" content1="Close your eyes." header2="Step 2" content2="Breathe in." header3="Step 3" content3="Breathe out." header4="Step 4" content4="Open your eyes." header5="Step 5" content5="Now you are present."]`

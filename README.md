# bbbbcode
**Big Beautiful BBcode**

A Flarum extension which adds additional bbcodes. The code which gets generated is pure HTML and CSS. No JavaScript. I have nothing against JavaScript. I just thought it would be interesting to make all the BBcodes CSS only.

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

**Spoiler:** 

`[!="I wanted to make you click something in order to see this just because."]Click here[/!]`

(The hidden part is placed inside the opening tag, and then the word(s) you click on are in between the opening and closing tags.)

**Accordion:**
~~~
[accordion header="YOUR HEADER TEXT"]The text that is hidden at first but then appears goes here[/accordion]
[accordion header="YOUR NEXT HEADER TEXT"]The text that is hidden at first but then appears goes here[/accordion]
~~~
(repeat the accordion BBcode as many times as needed)

**Chat:**
~~~
[chat-a="Why did the chicken cross the road?" who="Me"]
[chat-b="It was hungry?" who="Mary"]
[chat-a="No! Wrong!" who="Me"]
[space][/space]
~~~
(repeat as many times as needed alternating chat-a and chat-b)

("space" BBcode at end of chat is optional - it adds some extra space)

**Audio:**
~~~
[audio mp3="https://archive.org/download/MLKDream/MLKDream_64kb.mp3" ogg="https://archive.org/download/MLKDream/MLKDream.ogg"]
[audio mp3="https://archive.org/download/MLKDream/MLKDream_64kb.mp3"]
[audio ogg="https://archive.org/download/MLKDream/MLKDream.ogg"]
~~~
(You may put a mp3 and ogg file together for maximum browser compatibility, or just post a mp3 alone or an ogg file alone.)

**Action:** 

`[action]Walks into a wall[/action]`

**Animal:** 

`[animal="ducky"]`

(Currently there are three animals available: ducky, monkey, and squirrel)

**Popup:** 

*Single:*

`[pop linktext="Click here for a popup!" header="POP" content="This is a big beautiful popup, dude!"]`

*5 steps / tour style popup:*
~~~
[pop5 linktext="Click here for a tour!" header1="Step 1" content1="Close your eyes." header2="Step 2" content2="Breathe in." header3="Step 3" content3="Breathe out." header4="Step 4" content4="Open your eyes." header5="Step 5" content5="Now you are present."]
~~~
This Flarum post has screenshots: https://discuss.flarum.org/d/18958-big-beautiful-bbcodes

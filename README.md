(c) 2015 Jared Frankston, all rights reserved

## What is Cinco?

Cinco is a word game that was originally included in the [Microsoft Entertainment Pack 2.0 for Windows CE](http://www.amazon.com/Microsoft-Entertainment-Pak-2004-Pocket-games/dp/B0001Y4KQK), released in 2004\. Yes, that's right, this was a game for Windows mobile handhelds that I used to play with my dad a decade ago.

The origins of Cinco are obscure. It appears to be related to a word game [called Jotto](http://en.wikipedia.org/wiki/Jotto) invented in 1955 and played with pencial and paper.

In both Jotto and Cinco, there is a secret word that the player is trying to discover. In Jotto the secret word can be five or six letters. In Cinco (as you might guess from the name), the secret word is always five letter. The player tries "guess" words with the same number of letters (i.e. five letters for Cinco). In Jotto, the player is told how many letters from the guess word exactly matched a letter in the secret word. An "exact" match means the letter from the guess word is in the same place as the secret word. So in Jotto, if the secret word is PEACH and the player guesses SHARP, the score for that guess would be 1\. In Cinco, there are two scores - one for matches in any position, and another for exact matches. So in Cinco if the secret word is PEACH, and the guess was SHARP, it would be would be scored as, 3 matches and 1 in place:

<table id="guesstable" style='font:/normal "Times New Roman"; color: rgb(0, 0, 0); text-transform: none; text-indent: 0px; letter-spacing: normal; margin-left: 3ex; word-spacing: 0px; white-space: normal; widows: 1; -webkit-text-stroke-width: 0px;'>

<thead>

<tr class="guessrow" style="height: 12pt; font-size: xx-small; font-weight: normal; vertical-align: bottom;">

<th>Guesses:</th>

<th class="score" style="width: 2em;">Match</th>

<th class="score" style="width: 2em;">In Place</th>

</tr>

</thead>

<tbody>

</table>

I like Cinco's method better, as it provides more information, and it takes fewer guesses. The game is still plenty hard enough.

Note that neither Jotto nor Cinco permit any words with repeated letters (i.e. PEACE is not allowed as a secret word or a guess because "E" appears twice). Repeated letters don't work well with the scoring system.

## Project Goal

The project goal is to create a game for popular handheld devices as a means of (a) gaining experience on these platforms, and (b) earn some money. Although goal (b) could probably best be met by producing only an iOS version, goal (a) argues for doing a cross-platform product. The target platforms planned are:

<dl>

<dt>iOS</dt>

<dd>To target iPhones and iPads. This is the largest market, and technically probably the most challenging platform.</dd>

<dt>Android</dt>

<dd>Second largest market. Although Android devices worldwide outnumber iOS devices in absolute numbers, it's well known that iOS users buy more apps. In short -- Android users are cheap. (But see [Business Plan](#Business_Plan) below)</dd>

<dt>Windows</dt>

<dd>Originally, this was going to be Windows Phone. It's hard to justify the Windows port on market share alone (3% in the US?). But there's certain nostolgia in re-implementing an old Windows Mobile app for Windows Phone. Also, with the recent announcement of [Windows Universal Apps](https://dev.windows.com/en-US/develop/build-apps-shared-code), a single implementation could cover real Windows, Windows Phone, and perhaps even the XBox.</dd>

</dl>

## <a name="Business_Plan">Business Plan</a>

It's difficult to get people to pay even a dollar for an application, let alone an unknown game. However, free ad-supported games seem to do well. So it might take a few thousand add impressions to make a dollar. I'd be happy with $10 per day in revenue, since the primary purpose of this first game is as a learning exercise and perhaps to build up some name recognition.

In-app purchases are another way that free games can earn some revenue. Frankly, I find this distasteful (games that hook you in, but require purchases to get beyond a certain level), but in the case of a simple word game -- why not let someone purchase a solution, or even an assisted guess?

The biggest effort will be in registering for the advertising programs on each of the major platforms. The second issue would be in deciding what kind of ads to support. There's a good [article about this on Adobe's site](http://www.adobe.com/devnet/games/articles/maximizing-in-app-advertising.html).

## <a name="Business_Plan0">Implementation P</a>lan

Writing native code apps for each platform would be the best learning experience, but also quite time consuming and unnecessary for a simple word game. There's no need for GPU accelerated graphics or native code performance.

All three of the platforms support applications implemented using HTML5 and Javascript. The [PhoneGap Project](http://phonegap.com/) is designed to support precisely this kind of cross-app development. Even better, [PhoneGap Cloud Build](https://build.phonegap.com/) makes it possible to release apps for all supported platforms without needing native development environments for each platform. (So I wouldn't have to purchase a Mac to run Xcode.)

There is also good support for [Phone Gap in Microsoft Visual Studio 2013](http://blogs.msdn.com/b/writingdata_services/archive/2014/12/11/using-the-phonegap-developer-app-with-a-cordova-for-visual-studio-project.aspx), and more improvement seems to be coming for [Visual Studio 2015](https://www.visualstudio.com/en-us/features/cordova-vs.aspx).

### Prototype

A full working prototype has already been implemented and is available at [http://frankston.us/cinco](http://frankston.us/cinco). The html source and the dictionary file (5.js) is checked into this git repository,
but I have deliberately not check-in the key source code file -- cinco.js, because I do want to make it public so I can retain my rights to the code. But it is not difficult to use View Source in your web browser to see this code.

The web-based prototype has most of the features anticipated for the commercial version of the app, but it could use both appearance and usability improvements.

The prototype has some features that go beyond the old Windows Mobile version:

<dl>

<dt>Random Guess</dt>

<dd>This simply guesses a random word. It's not the quickest way to win the game, but it was really handy for testing.</dd>

<dt>Smart Guess</dt>

<dd>This is like Random guess, but will only guess words that are possible given the results from the guesses so far. This feature reduces the frustration of not being able to guess the word -- especially when the word is obscure (a situation exacerbated by the prototype using a pretty poor dictionary).</dd>

<dt>Share</dt>

<dd>First cut at adding a social component to the game. Creates a link, which can then be copied and pasted into an email or text, that lets the user share the current state of the game with whomever they wish.</dd>

</dl>

#### Prototype Technical notes

The prototype is implemented in HTML5 and Javascript. The [jQuery library](http://jquery.com/) is used, since it simplified coding and takes care of browser compatibility issues. jQuery version 1 was used so it even works in legacy version of Internet Explorer. [jQuery-UI](http://jqueryui.com/) is used only for the "Share" button pop-up.

Otherwise, the implementation uses three or four files:

<dl>

<dt>5.js</dt>

<dd>This is simply a JSON file that loads the dictionary of 5-letter words. The dictionary is</dd>

<dt>cinco.js</dt>

<dd>The Javscript code that implements  Cinco. (Not in the repository because I do not want to make it public.)/dd>

<dt>index.htm</dt>

<dd>The static HTML version of the HTML wrapper. This isn't the one that you get when you visit [frankston.us/cinco](frankston.us/cinco), and is only here to for deploying a Cinco demonstration when server-side php might not be available.</dd>

<dt>index.php</dt>

<dd>The dynamic version of the HTML wrapper. The php code is only needed for the Share button. It takes the encoded string contained in the query portion of the URL and turns it into Javascript that reproduces the precise state of the shared game when clicked on.</dd>

</dl>

### Plans for Improvement

Some areas in which the prototype is deficient:

*   The UI is suitable for a desktop web browser, but awkward for a mobile device. There are several possible features to address this:
    *   Automatically advance to the next input box once a guess has been entered
    *   Don't use the keyboard for entering guesses. Implement a custom pop-up alphabet that's easier to navigate on small touch devices. We only need to be able to enter the letters with A through Z without regard to case. The full keyboards on mobile devices tend to make this unnecessarily cumbersome.
*   The appearance of the app could/should be spruced up using CSS. Some colors/shading, better fonts, etc.
*   The "scoreboard" to the side is intended for users to keep track of which words have been eliminated, which are plausible, and which are definite. Unlike the original Cinco, some of the scorecard is automatically filled in (for example -- if your guess word has zero matches, all those letters are automatically crossed off in the scoreboard. The scoreboard could use some improvments:
    *   Better touch UI (using [WebKit Touch events](http://www.adobe.com/devnet/edge/articles/webkit-touch-events-for-edge-users.html))
    *   Possibly implement multiple score boards, accessible by swiping left or right. Sometimes you'll want to mark up the scoreboard based on an assumption that a certain letter is part of the word. This can lead to a cascade of assumptions -- that might prove to be incorrect. Undoing the scoreboard to get back to the state before the incorrect assumption now is quite difficult (I usually just clear it and start again). Having a way to save a scoreboard before such a guess would be useful -- if it can be done in a way that doesn't make the UI too complicated.
*   Tie in to each platform's native game scoring systems. The prototype uses a simple browser cookie to track games won/lost, average guesses, etc. For a commercial implementation it would be best to support each platform's native score-keeping system. These would be:
    *   [Game Center on iOS](https://developer.apple.com/game-center/)
    *   [Game Services for Google Play](https://developers.google.com/games/services/) (Android, but potentially also Chromium)
    *   [XBox Live Achievements](http://www.xbox.com/en-us/Developers/id) (XBox, maybe Windows 10 Universal apps -- this seems to be in flux right now)

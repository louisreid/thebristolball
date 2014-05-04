<?php
/*
Template Name: Tickets 
*/
?>

<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>

        
    /**
     * MASSIVE INLINE STYLE WARNING
     *
     * (I can't afford an SSL Cert)
     */



    /*------------------------------------*\
        BASE/RESET
    \*------------------------------------*/

    /**
     * A custom normalized reset. Thanks to Nicolas Gallagher.
     *
     * Customisations include:
     * ul, li 
     * h1, h2, h3, h4, h5, h6
     */

    /*! normalize.css v2.1.3 | MIT License | git.io/normalize */

    /* ==========================================================================
       HTML5 display definitions
       ========================================================================== */

    /**
     * Correct `block` display not defined in IE 8/9.
     */

    article,
    aside,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    main,
    nav,
    section,
    summary {
        display: block;
    }

    /**
     * Correct `inline-block` display not defined in IE 8/9.
     */

    audio,
    canvas,
    progress,
    video {
        display: inline-block;
    }

    /**
     * Prevent modern browsers from displaying `audio` without controls.
     * Remove excess height in iOS 5 devices.
     */

    audio:not([controls]) {
        display: none;
        height: 0;
    }

    /**
     * Address `[hidden]` styling not present in IE 8/9.
     * Hide the `template` element in IE, Safari, and Firefox < 22.
     */

    [hidden],
    template {
        display: none;
    }

    /* ==========================================================================
       Base
       ========================================================================== */

    /**
     * 1. Set default font family to sans-serif.
     * 2. Prevent iOS text size adjust after orientation change, without disabling
     *    user zoom.
     */

    html {
        font-family: sans-serif; /* 1 */
        -ms-text-size-adjust: 100%; /* 2 */
        -webkit-text-size-adjust: 100%; /* 2 */
    }

    /**
     * Remove default margin.
     */

    body {
        margin: 0;
    }

    /* ==========================================================================
       Links
       ========================================================================== */

    /**
     * Remove the gray background color from active links in IE 10.
     */

    a {
        background: transparent;
    }

    /**
     * Improve readability when focused and also mouse hovered in all browsers.
     */

    a:active,
    a:hover {
        outline: 0;
    }

    /* ==========================================================================
       Typography
       ========================================================================== */

    /**
     * Address variable `h1` font-size and margin within `section` and `article`
     * contexts in Firefox 4+, Safari 5, and Chrome.
     */

    h1 {
        font-size: 2em;
        margin: 0.67em 0;
    }

    /**
     * Address styling not present in IE 8/9, Safari 5, and Chrome.
     */

    abbr[title] {
        border-bottom: 1px dotted;
    }

    /**
     * Address style set to `bolder` in Firefox 4+, Safari 5, and Chrome.
     */

    b,
    strong {
        font-weight: bold;
    }

    /**
     * Address styling not present in Safari 5 and Chrome.
     */

    dfn {
        font-style: italic;
    }

    /**
     * Address differences between Firefox and other browsers.
     */

    hr {
        -moz-box-sizing: content-box;
        box-sizing: content-box;
        height: 0;
    }

    /**
     * Address styling not present in IE 8/9.
     */

    mark {
        background: #ff0;
        color: #000;
    }

    /**
     * Correct font family set oddly in Safari 5 and Chrome.
     */

    code,
    kbd,
    pre,
    samp {
        font-family: monospace, serif;
        font-size: 1em;
    }

    /**
     * Improve readability of pre-formatted text in all browsers.
     */

    pre {
        white-space: pre-wrap;
    }

    /**
     * Set consistent quote types.
     */

    q {
        quotes: "\201C" "\201D" "\2018" "\2019";
    }

    /**
     * Address inconsistent and variable font size in all browsers.
     */

    small {
        font-size: 80%;
    }

    /**
     * Prevent `sub` and `sup` affecting `line-height` in all browsers.
     */

    sub,
    sup {
        font-size: 75%;
        line-height: 0;
        position: relative;
        vertical-align: baseline;
    }

    sup {
        top: -0.5em;
    }

    sub {
        bottom: -0.25em;
    }

    /* ==========================================================================
       Embedded content
       ========================================================================== */

    /**
     * Remove border when inside `a` element in IE 8/9.
     */

    img {
        border: 0;
    }

    /**
     * Correct overflow displayed oddly in IE 9.
     */

    svg:not(:root) {
        overflow: hidden;
    }

    /* ==========================================================================
       Figures
       ========================================================================== */

    /**
     * Address margin not present in IE 8/9 and Safari 5.
     */

    figure {
        margin: 1em 40px;
    }

    /* ==========================================================================
       Forms
       ========================================================================== */

    /**
     * 1. Define consistent border, margin, and padding.
     * 2. Address width being affected by wide descendants in Chrome and Firefox.
     */

    fieldset {
        border: 1px solid #c0c0c0; /* 1 */
        margin: 0 2px; /* 1 */
        min-width: 0; /* 2 */
        padding: 0.35em 0.625em 0.75em; /* 1 */
    }

    /**
     * 1. Correct `color` not being inherited in IE 8/9.
     * 2. Remove padding so people aren't caught out if they zero out fieldsets.
     */

    legend {
        border: 0; /* 1 */
        padding: 0; /* 2 */
    }

    /**
     * 1. Correct color not being inherited in all browsers.
     *    Known issue: `select` will not inherit color in Chrome and Safari on OS X.
     * 2. Correct font properties not being inherited in all browsers.
     * 3. Address margins set differently in Firefox 4+, Safari 5, and Chrome.
     */

    button,
    input,
    optgroup,
    select,
    textarea {
        color: inherit; /* 1 */
        font: inherit; /* 2 */
        margin: 0; /* 3 */
    }

    /**
     * Re-apply the `font-weight` to avoid modifying the default UX, and because
     * the default cannot be changed in Chrome and Safari on OS X.
     */

    optgroup {
        font-weight: bold;
    }

    /**
     * Address Firefox 4+ setting `line-height` on `input` using `!important` in
     * the UA stylesheet.
     */

    button,
    input {
        line-height: normal;
    }

    /**
     * Address inconsistent `text-transform` inheritance for `button` and `select`.
     * All other form control elements do not inherit `text-transform` values.
     * Correct `button` style inheritance in Chrome, Safari 5+, and IE 8+.
     * Correct `select` style inheritance in Firefox 4+ and Opera.
     */

    button,
    select {
        text-transform: none;
    }

    /**
     * 1. Avoid the WebKit bug in Android 4.0.* where (2) destroys native `audio`
     *    and `video` controls.
     * 2. Correct inability to style clickable `input` types in iOS.
     * 3. Improve usability and consistency of cursor style between image-type
     *    `input` and others.
     */

    button,
    html input[type="button"], /* 1 */
    input[type="reset"],
    input[type="submit"] {
        -webkit-appearance: button; /* 2 */
        cursor: pointer; /* 3 */
    }

    /**
     * Re-set default cursor for disabled elements.
     */

    button[disabled],
    html input[disabled] {
        cursor: default;
    }

    /**
     * 1. Address box sizing set to `content-box` in IE 8/9/10.
     * 2. Remove excess padding in IE 8/9/10.
     */

    input[type="checkbox"],
    input[type="radio"] {
        box-sizing: border-box; /* 1 */
        padding: 0; /* 2 */
    }

    /**
     * 1. Address `appearance` set to `searchfield` in Safari 5 and Chrome.
     * 2. Address `box-sizing` set to `border-box` in Safari 5 and Chrome
     *    (include `-moz` to future-proof).
     */

    input[type="search"] {
        -webkit-appearance: textfield; /* 1 */
        -moz-box-sizing: content-box;
        -webkit-box-sizing: content-box; /* 2 */
        box-sizing: content-box;
    }

    /**
     * Remove inner padding and search cancel button in Safari 5 and Chrome
     * on OS X.
     */

    input[type="search"]::-webkit-search-cancel-button,
    input[type="search"]::-webkit-search-decoration {
        -webkit-appearance: none;
    }

    /**
     * Remove inner padding and border in Firefox 4+.
     */

    button::-moz-focus-inner,
    input::-moz-focus-inner {
        border: 0;
        padding: 0;
    }

    /**
     * 1. Remove default vertical scrollbar in IE 8/9.
     * 2. Improve readability and alignment in all browsers.
     */

    textarea {
        overflow: auto; /* 1 */
        vertical-align: top; /* 2 */
    }

    /* ==========================================================================
       Tables
       ========================================================================== */

    /**
     * Remove most spacing between table cells.
     */

    table {
        border-collapse: collapse;
        border-spacing: 0;
    }

    td,
    th {
        padding: 0;
    }


    /*------------------------------------*\
        CUSTOMISATIONS
    \*------------------------------------*/

    ul, li {
        margin: 0;
        padding: 0;
        list-style-type: none;
    }

    h1, h2, h3, h4, h5, h6 {
        padding:0; 
        margin:0;
    }

    *, *:before, *:after{
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        -ms-box-sizing: border-box;
        box-sizing: border-box;
    }

    /*------------------------------------*\
        MODULE/TICKETS.SCSS
    \*------------------------------------*/

    .tickets {
        padding: 20px;
        margin: 0 auto;
        max-width: 800px;
        background-color: $white;
    }
    @media only screen and (min-width: 768px) and (max-width: 960px) {
      .tickets {
        max-width: 600px;
      }
    }
    @media only screen and (max-width: 767px) {
      .tickets {
        width: 100%;
      }
    }

    .tickets__wrapper {
        background-image: url('https://www.openmerchantaccount.com/img/video.jpg');
        background-position: center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
    }

    </style>
  </head>
  <body>
    <div class="tickets__wrapper">
        <section class="tickets">
            <div id="wufoo-q1l92hva071eoo0">
            Sorry, there should be a form here but it's not working<br>Please use the following <a href="https://thebristolball.wufoo.com/forms/q1l92hva071eoo0">link</a> instead.
            </div>
            <script type="text/javascript">var q1l92hva071eoo0;(function(d, t) {
            var s = d.createElement(t), options = {
            'userName':'thebristolball',
            'formHash':'q1l92hva071eoo0',
            'autoResize':true,
            'height':'1128',
            'async':true,
            'host':'wufoo.com',
            'header':'show',
            'ssl':true};
            s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'wufoo.com/scripts/embed/form.js';
            s.onload = s.onreadystatechange = function() {
            var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
            try { q1l92hva071eoo0 = new WufooForm();q1l92hva071eoo0.initialize(options);q1l92hva071eoo0.display(); } catch (e) {}};
            var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
            })(document, 'script');</script> 
        </section>
    </div>
    
<?php get_footer(); ?>
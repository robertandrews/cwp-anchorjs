# Context WP AnchorJS

Tested up to: 5.9.1  
Tags: posts, wordpress, anchorjs  
Contributors: robertandrews  

## Description

This WordPress plugin adds WordPress support for Bryan Braun's [AnchorJS](https://www.bryanbraun.com/anchorjs/), a Javascript library that can add visual, mid-page anchor links to specified HTML elements.

![AnchorJS examples](https://raw.githubusercontent.com/bryanbraun/anchorjs/main/docs/img/anchoring-links.png)

## Installation

Add the plugin via *Plugins > Add New > Add Plugins > Upload Plugin*.

The plugin properly uses WordPress' `wp_enqueue_scripts` action to call two files:

* AnchorJS (currently via CDN)
* Your settings file

## Usage

The settings file is where you specify which HTML elements to convert into visual anchors, whether to include hover links, which icons etc.

See AnchorJS settings in [AnchorJS docs](https://www.bryanbraun.com/anchorjs/).

settings.js ships containing: `anchors.add('article h3');`

This turns `<h3>` elements into anchor links.

You can change the settings using AnchorJS' supported settings.


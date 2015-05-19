<?php header("Content-type: text/css; charset: UTF-8"); ?>
meta.foundation-version {
  font-family: "/5.2.1/"; }

meta.foundation-mq-small {
  font-family: "/only screen and (max-width: 40em)/";
  width: 0em; }

meta.foundation-mq-medium {
  font-family: "/only screen and (min-width:40.063em)/";
  width: 40.063em; }

meta.foundation-mq-large {
  font-family: "/only screen and (min-width:64.063em)/";
  width: 64.063em; }

meta.foundation-mq-xlarge {
  font-family: "/only screen and (min-width:90.063em)/";
  width: 90.063em; }

meta.foundation-mq-xxlarge {
  font-family: "/only screen and (min-width:120.063em)/";
  width: 120.063em; }

meta.foundation-data-attribute-namespace {
  font-family: false; }

html, body {
  height: 100%; }

*,
*:before,
*:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box; }

html,
body {
  font-size: 100%; }

body {
  background: white;
  color: #222222;
  padding: 0;
  margin: 0;
  /*font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;*/
  font-weight: normal;
  font-style: normal;
  line-height: 1;
  position: relative;
  cursor: default; }

a:hover {
  cursor: pointer; }

img {
  max-width: 100%;
  height: auto; }

img {
  -ms-interpolation-mode: bicubic; }

#map_canvas img,
#map_canvas embed,
#map_canvas object,
.map_canvas img,
.map_canvas embed,
.map_canvas object {
  max-width: none !important; }

.left {
  float: left !important; }

.right {
  float: right !important; }

.clearfix {
  *zoom: 1; }
  .clearfix:before, .clearfix:after {
    content: " ";
    display: table; }
  .clearfix:after {
    clear: both; }

.hide {
  display: none; }

.antialiased {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale; }

img {
  display: inline-block;
  vertical-align: middle; }

textarea {
  height: auto;
  min-height: 50px; }

select {
  width: 100%; }

.xy-center {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%); }

.x-center {
  position: absolute;
  left: 50%;
  -webkit-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  transform: translateX(-50%); }

.y-center {
  position: relative;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%); }

.row {
  width: 100%;
  margin-left: auto;
  margin-right: auto;
  margin-top: 0;
  margin-bottom: 0;
  max-width: 62.5rem;
  *zoom: 1; }
  .row:before, .row:after {
    content: " ";
    display: table; }
  .row:after {
    clear: both; }
  .row.collapse > .column,
  .row.collapse > .columns {
    padding-left: 0;
    padding-right: 0; }
  .row.collapse .row {
    margin-left: 0;
    margin-right: 0; }
  .row .row {
    width: auto;
    margin-left: -0.9375rem;
    margin-right: -0.9375rem;
    margin-top: 0;
    margin-bottom: 0;
    max-width: none;
    *zoom: 1; }
    .row .row:before, .row .row:after {
      content: " ";
      display: table; }
    .row .row:after {
      clear: both; }
    .row .row.collapse {
      width: auto;
      margin: 0;
      max-width: none;
      *zoom: 1; }
      .row .row.collapse:before, .row .row.collapse:after {
        content: " ";
        display: table; }
      .row .row.collapse:after {
        clear: both; }

.column,
.columns {
  padding-left: 0.9375rem;
  padding-right: 0.9375rem;
  width: 100%;
  float: left; }

@media only screen {
  .column.small-centered,
  .columns.small-centered {
    margin-left: auto;
    margin-right: auto;
    float: none !important; }

  .column.small-uncentered,
  .columns.small-uncentered {
    margin-left: 0;
    margin-right: 0;
    float: left !important; }

  .column.small-uncentered.opposite,
  .columns.small-uncentered.opposite {
    float: right; }

  .small-push-0 {
    position: relative;
    left: 0%;
    right: auto; }

  .small-pull-0 {
    position: relative;
    right: 0%;
    left: auto; }

  .small-push-1 {
    position: relative;
    left: 8.33333%;
    right: auto; }

  .small-pull-1 {
    position: relative;
    right: 8.33333%;
    left: auto; }

  .small-push-2 {
    position: relative;
    left: 16.66667%;
    right: auto; }

  .small-pull-2 {
    position: relative;
    right: 16.66667%;
    left: auto; }

  .small-push-3 {
    position: relative;
    left: 25%;
    right: auto; }

  .small-pull-3 {
    position: relative;
    right: 25%;
    left: auto; }

  .small-push-4 {
    position: relative;
    left: 33.33333%;
    right: auto; }

  .small-pull-4 {
    position: relative;
    right: 33.33333%;
    left: auto; }

  .small-push-5 {
    position: relative;
    left: 41.66667%;
    right: auto; }

  .small-pull-5 {
    position: relative;
    right: 41.66667%;
    left: auto; }

  .small-push-6 {
    position: relative;
    left: 50%;
    right: auto; }

  .small-pull-6 {
    position: relative;
    right: 50%;
    left: auto; }

  .small-push-7 {
    position: relative;
    left: 58.33333%;
    right: auto; }

  .small-pull-7 {
    position: relative;
    right: 58.33333%;
    left: auto; }

  .small-push-8 {
    position: relative;
    left: 66.66667%;
    right: auto; }

  .small-pull-8 {
    position: relative;
    right: 66.66667%;
    left: auto; }

  .small-push-9 {
    position: relative;
    left: 75%;
    right: auto; }

  .small-pull-9 {
    position: relative;
    right: 75%;
    left: auto; }

  .small-push-10 {
    position: relative;
    left: 83.33333%;
    right: auto; }

  .small-pull-10 {
    position: relative;
    right: 83.33333%;
    left: auto; }

  .small-push-11 {
    position: relative;
    left: 91.66667%;
    right: auto; }

  .small-pull-11 {
    position: relative;
    right: 91.66667%;
    left: auto; }

  .column,
  .columns {
    position: relative;
    padding-left: 0.9375rem;
    padding-right: 0.9375rem;
    float: left; }

  .small-1 {
    width: 8.33333%; }

  .small-2 {
    width: 16.66667%; }

  .small-3 {
    width: 25%; }

  .small-4 {
    width: 33.33333%; }

  .small-5 {
    width: 41.66667%; }

  .small-6 {
    width: 50%; }

  .small-7 {
    width: 58.33333%; }

  .small-8 {
    width: 66.66667%; }

  .small-9 {
    width: 75%; }

  .small-10 {
    width: 83.33333%; }

  .small-11 {
    width: 91.66667%; }

  .small-12 {
    width: 100%; }

  [class*="column"] + [class*="column"]:last-child {
    float: right; }

  [class*="column"] + [class*="column"].end {
    float: left; }

  .small-offset-0 {
    margin-left: 0% !important; }

  .small-offset-1 {
    margin-left: 8.33333% !important; }

  .small-offset-2 {
    margin-left: 16.66667% !important; }

  .small-offset-3 {
    margin-left: 25% !important; }

  .small-offset-4 {
    margin-left: 33.33333% !important; }

  .small-offset-5 {
    margin-left: 41.66667% !important; }

  .small-offset-6 {
    margin-left: 50% !important; }

  .small-offset-7 {
    margin-left: 58.33333% !important; }

  .small-offset-8 {
    margin-left: 66.66667% !important; }

  .small-offset-9 {
    margin-left: 75% !important; }

  .small-offset-10 {
    margin-left: 83.33333% !important; }

  .small-offset-11 {
    margin-left: 91.66667% !important; }

  .small-reset-order,
  .small-reset-order {
    margin-left: 0;
    margin-right: 0;
    left: auto;
    right: auto;
    float: left; } }
@media only screen and (min-width: 40.063em) {
  .column.medium-centered,
  .columns.medium-centered {
    margin-left: auto;
    margin-right: auto;
    float: none !important; }

  .column.medium-uncentered,
  .columns.medium-uncentered {
    margin-left: 0;
    margin-right: 0;
    float: left !important; }

  .column.medium-uncentered.opposite,
  .columns.medium-uncentered.opposite {
    float: right; }

  .medium-push-0 {
    position: relative;
    left: 0%;
    right: auto; }

  .medium-pull-0 {
    position: relative;
    right: 0%;
    left: auto; }

  .medium-push-1 {
    position: relative;
    left: 8.33333%;
    right: auto; }

  .medium-pull-1 {
    position: relative;
    right: 8.33333%;
    left: auto; }

  .medium-push-2 {
    position: relative;
    left: 16.66667%;
    right: auto; }

  .medium-pull-2 {
    position: relative;
    right: 16.66667%;
    left: auto; }

  .medium-push-3 {
    position: relative;
    left: 25%;
    right: auto; }

  .medium-pull-3 {
    position: relative;
    right: 25%;
    left: auto; }

  .medium-push-4 {
    position: relative;
    left: 33.33333%;
    right: auto; }

  .medium-pull-4 {
    position: relative;
    right: 33.33333%;
    left: auto; }

  .medium-push-5 {
    position: relative;
    left: 41.66667%;
    right: auto; }

  .medium-pull-5 {
    position: relative;
    right: 41.66667%;
    left: auto; }

  .medium-push-6 {
    position: relative;
    left: 50%;
    right: auto; }

  .medium-pull-6 {
    position: relative;
    right: 50%;
    left: auto; }

  .medium-push-7 {
    position: relative;
    left: 58.33333%;
    right: auto; }

  .medium-pull-7 {
    position: relative;
    right: 58.33333%;
    left: auto; }

  .medium-push-8 {
    position: relative;
    left: 66.66667%;
    right: auto; }

  .medium-pull-8 {
    position: relative;
    right: 66.66667%;
    left: auto; }

  .medium-push-9 {
    position: relative;
    left: 75%;
    right: auto; }

  .medium-pull-9 {
    position: relative;
    right: 75%;
    left: auto; }

  .medium-push-10 {
    position: relative;
    left: 83.33333%;
    right: auto; }

  .medium-pull-10 {
    position: relative;
    right: 83.33333%;
    left: auto; }

  .medium-push-11 {
    position: relative;
    left: 91.66667%;
    right: auto; }

  .medium-pull-11 {
    position: relative;
    right: 91.66667%;
    left: auto; }

  .column,
  .columns {
    position: relative;
    padding-left: 0.9375rem;
    padding-right: 0.9375rem;
    float: left; }

  .medium-1 {
    width: 8.33333%; }

  .medium-2 {
    width: 16.66667%; }

  .medium-3 {
    width: 25%; }

  .medium-4 {
    width: 33.33333%; }

  .medium-5 {
    width: 41.66667%; }

  .medium-6 {
    width: 50%; }

  .medium-7 {
    width: 58.33333%; }

  .medium-8 {
    width: 66.66667%; }

  .medium-9 {
    width: 75%; }

  .medium-10 {
    width: 83.33333%; }

  .medium-11 {
    width: 91.66667%; }

  .medium-12 {
    width: 100%; }

  [class*="column"] + [class*="column"]:last-child {
    float: right; }

  [class*="column"] + [class*="column"].end {
    float: left; }

  .medium-offset-0 {
    margin-left: 0% !important; }

  .medium-offset-1 {
    margin-left: 8.33333% !important; }

  .medium-offset-2 {
    margin-left: 16.66667% !important; }

  .medium-offset-3 {
    margin-left: 25% !important; }

  .medium-offset-4 {
    margin-left: 33.33333% !important; }

  .medium-offset-5 {
    margin-left: 41.66667% !important; }

  .medium-offset-6 {
    margin-left: 50% !important; }

  .medium-offset-7 {
    margin-left: 58.33333% !important; }

  .medium-offset-8 {
    margin-left: 66.66667% !important; }

  .medium-offset-9 {
    margin-left: 75% !important; }

  .medium-offset-10 {
    margin-left: 83.33333% !important; }

  .medium-offset-11 {
    margin-left: 91.66667% !important; }

  .medium-reset-order,
  .medium-reset-order {
    margin-left: 0;
    margin-right: 0;
    left: auto;
    right: auto;
    float: left; }

  .push-0 {
    position: relative;
    left: 0%;
    right: auto; }

  .pull-0 {
    position: relative;
    right: 0%;
    left: auto; }

  .push-1 {
    position: relative;
    left: 8.33333%;
    right: auto; }

  .pull-1 {
    position: relative;
    right: 8.33333%;
    left: auto; }

  .push-2 {
    position: relative;
    left: 16.66667%;
    right: auto; }

  .pull-2 {
    position: relative;
    right: 16.66667%;
    left: auto; }

  .push-3 {
    position: relative;
    left: 25%;
    right: auto; }

  .pull-3 {
    position: relative;
    right: 25%;
    left: auto; }

  .push-4 {
    position: relative;
    left: 33.33333%;
    right: auto; }

  .pull-4 {
    position: relative;
    right: 33.33333%;
    left: auto; }

  .push-5 {
    position: relative;
    left: 41.66667%;
    right: auto; }

  .pull-5 {
    position: relative;
    right: 41.66667%;
    left: auto; }

  .push-6 {
    position: relative;
    left: 50%;
    right: auto; }

  .pull-6 {
    position: relative;
    right: 50%;
    left: auto; }

  .push-7 {
    position: relative;
    left: 58.33333%;
    right: auto; }

  .pull-7 {
    position: relative;
    right: 58.33333%;
    left: auto; }

  .push-8 {
    position: relative;
    left: 66.66667%;
    right: auto; }

  .pull-8 {
    position: relative;
    right: 66.66667%;
    left: auto; }

  .push-9 {
    position: relative;
    left: 75%;
    right: auto; }

  .pull-9 {
    position: relative;
    right: 75%;
    left: auto; }

  .push-10 {
    position: relative;
    left: 83.33333%;
    right: auto; }

  .pull-10 {
    position: relative;
    right: 83.33333%;
    left: auto; }

  .push-11 {
    position: relative;
    left: 91.66667%;
    right: auto; }

  .pull-11 {
    position: relative;
    right: 91.66667%;
    left: auto; } }
@media only screen and (min-width: 64.063em) {
  .column.large-centered,
  .columns.large-centered {
    margin-left: auto;
    margin-right: auto;
    float: none !important; }

  .column.large-uncentered,
  .columns.large-uncentered {
    margin-left: 0;
    margin-right: 0;
    float: left !important; }

  .column.large-uncentered.opposite,
  .columns.large-uncentered.opposite {
    float: right; }

  .large-push-0 {
    position: relative;
    left: 0%;
    right: auto; }

  .large-pull-0 {
    position: relative;
    right: 0%;
    left: auto; }

  .large-push-1 {
    position: relative;
    left: 8.33333%;
    right: auto; }

  .large-pull-1 {
    position: relative;
    right: 8.33333%;
    left: auto; }

  .large-push-2 {
    position: relative;
    left: 16.66667%;
    right: auto; }

  .large-pull-2 {
    position: relative;
    right: 16.66667%;
    left: auto; }

  .large-push-3 {
    position: relative;
    left: 25%;
    right: auto; }

  .large-pull-3 {
    position: relative;
    right: 25%;
    left: auto; }

  .large-push-4 {
    position: relative;
    left: 33.33333%;
    right: auto; }

  .large-pull-4 {
    position: relative;
    right: 33.33333%;
    left: auto; }

  .large-push-5 {
    position: relative;
    left: 41.66667%;
    right: auto; }

  .large-pull-5 {
    position: relative;
    right: 41.66667%;
    left: auto; }

  .large-push-6 {
    position: relative;
    left: 50%;
    right: auto; }

  .large-pull-6 {
    position: relative;
    right: 50%;
    left: auto; }

  .large-push-7 {
    position: relative;
    left: 58.33333%;
    right: auto; }

  .large-pull-7 {
    position: relative;
    right: 58.33333%;
    left: auto; }

  .large-push-8 {
    position: relative;
    left: 66.66667%;
    right: auto; }

  .large-pull-8 {
    position: relative;
    right: 66.66667%;
    left: auto; }

  .large-push-9 {
    position: relative;
    left: 75%;
    right: auto; }

  .large-pull-9 {
    position: relative;
    right: 75%;
    left: auto; }

  .large-push-10 {
    position: relative;
    left: 83.33333%;
    right: auto; }

  .large-pull-10 {
    position: relative;
    right: 83.33333%;
    left: auto; }

  .large-push-11 {
    position: relative;
    left: 91.66667%;
    right: auto; }

  .large-pull-11 {
    position: relative;
    right: 91.66667%;
    left: auto; }

  .column,
  .columns {
    position: relative;
    padding-left: 0.9375rem;
    padding-right: 0.9375rem;
    float: left; }

  .large-1 {
    width: 8.33333%; }

  .large-2 {
    width: 16.66667%; }

  .large-3 {
    width: 25%; }

  .large-4 {
    width: 33.33333%; }

  .large-5 {
    width: 41.66667%; }

  .large-6 {
    width: 50%; }

  .large-7 {
    width: 58.33333%; }

  .large-8 {
    width: 66.66667%; }

  .large-9 {
    width: 75%; }

  .large-10 {
    width: 83.33333%; }

  .large-11 {
    width: 91.66667%; }

  .large-12 {
    width: 100%; }

  [class*="column"] + [class*="column"]:last-child {
    float: right; }

  [class*="column"] + [class*="column"].end {
    float: left; }

  .large-offset-0 {
    margin-left: 0% !important; }

  .large-offset-1 {
    margin-left: 8.33333% !important; }

  .large-offset-2 {
    margin-left: 16.66667% !important; }

  .large-offset-3 {
    margin-left: 25% !important; }

  .large-offset-4 {
    margin-left: 33.33333% !important; }

  .large-offset-5 {
    margin-left: 41.66667% !important; }

  .large-offset-6 {
    margin-left: 50% !important; }

  .large-offset-7 {
    margin-left: 58.33333% !important; }

  .large-offset-8 {
    margin-left: 66.66667% !important; }

  .large-offset-9 {
    margin-left: 75% !important; }

  .large-offset-10 {
    margin-left: 83.33333% !important; }

  .large-offset-11 {
    margin-left: 91.66667% !important; }

  .large-reset-order,
  .large-reset-order {
    margin-left: 0;
    margin-right: 0;
    left: auto;
    right: auto;
    float: left; }

  .push-0 {
    position: relative;
    left: 0%;
    right: auto; }

  .pull-0 {
    position: relative;
    right: 0%;
    left: auto; }

  .push-1 {
    position: relative;
    left: 8.33333%;
    right: auto; }

  .pull-1 {
    position: relative;
    right: 8.33333%;
    left: auto; }

  .push-2 {
    position: relative;
    left: 16.66667%;
    right: auto; }

  .pull-2 {
    position: relative;
    right: 16.66667%;
    left: auto; }

  .push-3 {
    position: relative;
    left: 25%;
    right: auto; }

  .pull-3 {
    position: relative;
    right: 25%;
    left: auto; }

  .push-4 {
    position: relative;
    left: 33.33333%;
    right: auto; }

  .pull-4 {
    position: relative;
    right: 33.33333%;
    left: auto; }

  .push-5 {
    position: relative;
    left: 41.66667%;
    right: auto; }

  .pull-5 {
    position: relative;
    right: 41.66667%;
    left: auto; }

  .push-6 {
    position: relative;
    left: 50%;
    right: auto; }

  .pull-6 {
    position: relative;
    right: 50%;
    left: auto; }

  .push-7 {
    position: relative;
    left: 58.33333%;
    right: auto; }

  .pull-7 {
    position: relative;
    right: 58.33333%;
    left: auto; }

  .push-8 {
    position: relative;
    left: 66.66667%;
    right: auto; }

  .pull-8 {
    position: relative;
    right: 66.66667%;
    left: auto; }

  .push-9 {
    position: relative;
    left: 75%;
    right: auto; }

  .pull-9 {
    position: relative;
    right: 75%;
    left: auto; }

  .push-10 {
    position: relative;
    left: 83.33333%;
    right: auto; }

  .pull-10 {
    position: relative;
    right: 83.33333%;
    left: auto; }

  .push-11 {
    position: relative;
    left: 91.66667%;
    right: auto; }

  .pull-11 {
    position: relative;
    right: 91.66667%;
    left: auto; } }
meta.foundation-mq-topbar {
  font-family: "/only screen and (min-width:40.063em)/";
  width: 40.063em; }

/* Wrapped around .top-bar to contain to grid width */
.contain-to-grid {
  width: 100%;
  background: #333333; }
  .contain-to-grid .top-bar {
    margin-bottom: 0; }

.fixed {
  width: 100%;
  left: 0;
  position: fixed;
  top: 0;
  z-index: 99; }
  .fixed.expanded:not(.top-bar) {
    overflow-y: auto;
    height: auto;
    width: 100%;
    max-height: 100%; }
    .fixed.expanded:not(.top-bar) .title-area {
      position: fixed;
      width: 100%;
      z-index: 99; }
    .fixed.expanded:not(.top-bar) .top-bar-section {
      z-index: 98;
      margin-top: 45px; }

.top-bar {
  overflow: hidden;
  height: 45px;
  line-height: 45px;
  position: relative;
  background: #333333;
  margin-bottom: 0; }
  .top-bar ul {
    margin-bottom: 0;
    list-style: none; }
  .top-bar .row {
    max-width: none; }
  .top-bar form,
  .top-bar input {
    margin-bottom: 0; }
  .top-bar input {
    height: auto;
    padding-top: .35rem;
    padding-bottom: .35rem;
    font-size: 0.75rem; }
  .top-bar .button {
    padding-top: .45rem;
    padding-bottom: .35rem;
    margin-bottom: 0;
    font-size: 0.75rem; }
  .top-bar .title-area {
    position: relative;
    margin: 0; }
  .top-bar .name {
    height: 45px;
    margin: 0;
    font-size: 16px; }
    .top-bar .name h1 {
      line-height: 45px;
      font-size: 1.0625rem;
      margin: 0; }
      .top-bar .name h1 a {
        font-weight: normal;
        color: white;
        width: 50%;
        display: block;
        padding: 0 15px; }
  .top-bar .toggle-topbar {
    position: absolute;
    right: 0;
    top: 0; }
    .top-bar .toggle-topbar a {
      color: white;
      text-transform: uppercase;
      font-size: 0.8125rem;
      font-weight: bold;
      position: relative;
      display: block;
      padding: 0 15px;
      height: 45px;
      line-height: 45px; }
    .top-bar .toggle-topbar.menu-icon {
      right: 15px;
      top: 50%;
      margin-top: -16px;
      padding-left: 40px; }
      .top-bar .toggle-topbar.menu-icon a {
        height: 34px;
        line-height: 33px;
        padding: 0;
        padding-right: 25px;
        color: white;
        position: relative; }
        .top-bar .toggle-topbar.menu-icon a::after {
          content: "";
          position: absolute;
          right: 0;
          display: block;
          width: 16px;
          top: 0;
          height: 0;
          -webkit-box-shadow: 1px 10px 1px 1px white, 1px 16px 1px 1px white, 1px 22px 1px 1px white;
          box-shadow: 0 10px 0 1px white, 0 16px 0 1px white, 0 22px 0 1px white; }
  .top-bar.expanded {
    height: auto;
    background: transparent; }
    .top-bar.expanded .title-area {
      background: #333333; }
    .top-bar.expanded .toggle-topbar a {
      color: #888888; }
      .top-bar.expanded .toggle-topbar a::after {
        -webkit-box-shadow: 1px 10px 1px 1px #888888, 1px 16px 1px 1px #888888, 1px 22px 1px 1px #888888;
        box-shadow: 0 10px 0 1px #888888, 0 16px 0 1px #888888, 0 22px 0 1px #888888; }

.top-bar-section {
  left: 0;
  position: relative;
  width: auto;
  -webkit-transition: left 300ms ease-out;
  -moz-transition: left 300ms ease-out;
  transition: left 300ms ease-out; }
  .top-bar-section ul {
    width: 100%;
    height: auto;
    display: block;
    background: #333333;
    font-size: 16px;
    margin: 0; }
  .top-bar-section .divider,
  .top-bar-section [role="separator"] {
    border-top: solid 1px #1a1a1a;
    clear: both;
    height: 1px;
    width: 100%; }
  .top-bar-section ul li > a {
    display: block;
    width: 100%;
    color: white;
    padding: 12px 0 12px 0;
    padding-left: 15px;
    font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
    font-size: 0.8125rem;
    font-weight: normal;
    text-transform: none;
    background: #333333; }
    .top-bar-section ul li > a.button {
      background: #008cba;
      font-size: 0.8125rem;
      padding-right: 15px;
      padding-left: 15px; }
      .top-bar-section ul li > a.button:hover {
        background: #006688; }
    .top-bar-section ul li > a.button.secondary {
      background: #e7e7e7; }
      .top-bar-section ul li > a.button.secondary:hover {
        background: #cecece; }
    .top-bar-section ul li > a.button.success {
      background: #43ac6a; }
      .top-bar-section ul li > a.button.success:hover {
        background: #358854; }
    .top-bar-section ul li > a.button.alert {
      background: #f04124; }
      .top-bar-section ul li > a.button.alert:hover {
        background: #d42b0f; }
  .top-bar-section ul li:hover:not(.has-form) > a {
    background: #272727;
    color: white; }
  .top-bar-section ul li.active > a {
    background: #008cba;
    color: white; }
    .top-bar-section ul li.active > a:hover {
      background: #0078a0;
      color: white; }
  .top-bar-section .has-form {
    padding: 15px; }
  .top-bar-section .has-dropdown {
    position: relative; }
    .top-bar-section .has-dropdown > a:after {
      content: "";
      display: block;
      width: 0;
      height: 0;
      border: inset 5px;
      border-color: transparent transparent transparent rgba(255, 255, 255, 0.4);
      border-left-style: solid;
      margin-right: 15px;
      margin-top: -4.5px;
      position: absolute;
      top: 50%;
      right: 0; }
    .top-bar-section .has-dropdown.moved {
      position: static; }
      .top-bar-section .has-dropdown.moved > .dropdown {
        display: block;
        position: static !important;
        height: auto;
        width: auto;
        overflow: visible;
        clip: auto;
        position: absolute !important;
        width: 100%; }
      .top-bar-section .has-dropdown.moved > a:after {
        display: none; }
  .top-bar-section .dropdown {
    position: absolute;
    left: 100%;
    top: 0;
    z-index: 99;
    display: block;
    position: absolute !important;
    height: 1px;
    width: 1px;
    overflow: hidden;
    clip: rect(1px, 1px, 1px, 1px); }
    .top-bar-section .dropdown li {
      width: 100%;
      height: auto; }
      .top-bar-section .dropdown li a {
        font-weight: normal;
        padding: 8px 15px; }
        .top-bar-section .dropdown li a.parent-link {
          font-weight: normal; }
      .top-bar-section .dropdown li.title h5 {
        margin-bottom: 0; }
        .top-bar-section .dropdown li.title h5 a {
          color: white;
          line-height: 22.5px;
          display: block; }
      .top-bar-section .dropdown li.has-form {
        padding: 8px 15px; }
      .top-bar-section .dropdown li .button {
        top: auto; }
    .top-bar-section .dropdown label {
      padding: 8px 15px 2px;
      margin-bottom: 0;
      text-transform: uppercase;
      color: #777777;
      font-weight: bold;
      font-size: 0.625rem; }

.js-generated {
  display: block; }

@media only screen and (min-width: 40.063em) {
  .top-bar {
    background: #333333;
    *zoom: 1;
    overflow: visible; }
    .top-bar:before, .top-bar:after {
      content: " ";
      display: table; }
    .top-bar:after {
      clear: both; }
    .top-bar .toggle-topbar {
      display: none; }
    .top-bar .title-area {
      float: left; }
    .top-bar .name h1 a {
      width: auto; }
    .top-bar input,
    .top-bar .button {
      font-size: 0.875rem;
      position: relative;
      top: 7px; }
    .top-bar.expanded {
      background: #333333; }

  .contain-to-grid .top-bar {
    max-width: 62.5rem;
    margin: 0 auto;
    margin-bottom: 0; }

  .top-bar-section {
    -webkit-transition: none 0 0;
    -moz-transition: none 0 0;
    transition: none 0 0;
    left: 0 !important; }
    .top-bar-section ul {
      width: auto;
      height: auto !important;
      display: inline; }
      .top-bar-section ul li {
        float: left; }
        .top-bar-section ul li .js-generated {
          display: none; }
    .top-bar-section li.hover > a:not(.button) {
      background: #272727;
      color: white; }
    .top-bar-section li:not(.has-form) a:not(.button) {
      padding: 0 15px;
      line-height: 45px;
      background: #333333; }
      .top-bar-section li:not(.has-form) a:not(.button):hover {
        background: #272727; }
    .top-bar-section li.active:not(.has-form) a:not(.button) {
      padding: 0 15px;
      line-height: 45px;
      color: white;
      background: #008cba; }
      .top-bar-section li.active:not(.has-form) a:not(.button):hover {
        background: #0078a0; }
    .top-bar-section .has-dropdown > a {
      padding-right: 35px !important; }
      .top-bar-section .has-dropdown > a:after {
        content: "";
        display: block;
        width: 0;
        height: 0;
        border: inset 5px;
        border-color: rgba(255, 255, 255, 0.4) transparent transparent transparent;
        border-top-style: solid;
        margin-top: -2.5px;
        top: 22.5px; }
    .top-bar-section .has-dropdown.moved {
      position: relative; }
      .top-bar-section .has-dropdown.moved > .dropdown {
        display: block;
        position: absolute !important;
        height: 1px;
        width: 1px;
        overflow: hidden;
        clip: rect(1px, 1px, 1px, 1px); }
    .top-bar-section .has-dropdown.hover > .dropdown, .top-bar-section .has-dropdown.not-click:hover > .dropdown {
      display: block;
      position: static !important;
      height: auto;
      width: auto;
      overflow: visible;
      clip: auto;
      position: absolute !important; }
    .top-bar-section .has-dropdown .dropdown li.has-dropdown > a:after {
      border: none;
      content: "\00bb";
      top: 1rem;
      margin-top: -1px;
      right: 5px;
      line-height: 1.2; }
    .top-bar-section .dropdown {
      left: 0;
      top: auto;
      background: transparent;
      min-width: 100%; }
      .top-bar-section .dropdown li a {
        color: white;
        line-height: 1;
        white-space: nowrap;
        padding: 12px 15px;
        background: #333333; }
      .top-bar-section .dropdown li label {
        white-space: nowrap;
        background: #333333; }
      .top-bar-section .dropdown li .dropdown {
        left: 100%;
        top: 0; }
    .top-bar-section > ul > .divider, .top-bar-section > ul > [role="separator"] {
      border-bottom: none;
      border-top: none;
      border-right: solid 1px #4e4e4e;
      clear: none;
      height: 45px;
      width: 0; }
    .top-bar-section .has-form {
      background: #333333;
      padding: 0 15px;
      height: 45px; }
    .top-bar-section .right li .dropdown {
      left: auto;
      right: 0; }
      .top-bar-section .right li .dropdown li .dropdown {
        right: 100%; }
    .top-bar-section .left li .dropdown {
      right: auto;
      left: 0; }
      .top-bar-section .left li .dropdown li .dropdown {
        left: 100%; }

  .no-js .top-bar-section ul li:hover > a {
    background: #272727;
    color: white; }
  .no-js .top-bar-section ul li:active > a {
    background: #008cba;
    color: white; }
  .no-js .top-bar-section .has-dropdown:hover > .dropdown {
    display: block;
    position: static !important;
    height: auto;
    width: auto;
    overflow: visible;
    clip: auto;
    position: absolute !important; } }
.breadcrumbs {
  display: block;
  padding: 0.5625rem 0.875rem 0.5625rem;
  overflow: hidden;
  margin-left: 0;
  list-style: none;
  border-style: solid;
  border-width: 1px;
  background-color: #f4f4f4;
  border-color: gainsboro;
  -webkit-border-radius: 3px;
  border-radius: 3px; }
  .breadcrumbs > * {
    margin: 0;
    float: left;
    font-size: 0.6875rem;
    text-transform: uppercase; }
    .breadcrumbs > *:hover a, .breadcrumbs > *:focus a {
      text-decoration: underline; }
    .breadcrumbs > * a,
    .breadcrumbs > * span {
      text-transform: uppercase;
      color: #008cba; }
    .breadcrumbs > *.current {
      cursor: default;
      color: #333333; }
      .breadcrumbs > *.current a {
        cursor: default;
        color: #333333; }
      .breadcrumbs > *.current:hover, .breadcrumbs > *.current:hover a, .breadcrumbs > *.current:focus, .breadcrumbs > *.current:focus a {
        text-decoration: none; }
    .breadcrumbs > *.unavailable {
      color: #999999; }
      .breadcrumbs > *.unavailable a {
        color: #999999; }
      .breadcrumbs > *.unavailable:hover, .breadcrumbs > *.unavailable:hover a, .breadcrumbs > *.unavailable:focus,
      .breadcrumbs > *.unavailable a:focus {
        text-decoration: none;
        color: #999999;
        cursor: default; }
    .breadcrumbs > *:before {
      content: "/";
      color: #aaaaaa;
      margin: 0 0.75rem;
      position: relative;
      top: 1px; }
    .breadcrumbs > *:first-child:before {
      content: " ";
      margin: 0; }

.alert-box {
  border-style: solid;
  border-width: 1px;
  display: block;
  font-weight: normal;
  margin-bottom: 1.25rem;
  position: relative;
  padding: 0.875rem 1.5rem 0.875rem 0.875rem;
  font-size: 0.8125rem;
  background-color: #008cba;
  border-color: #0078a0;
  color: white; }
  .alert-box .close {
    font-size: 1.375rem;
    padding: 9px 6px 4px;
    line-height: 0;
    position: absolute;
    top: 50%;
    margin-top: -0.6875rem;
    right: 0.25rem;
    color: #333333;
    opacity: 0.3; }
    .alert-box .close:hover, .alert-box .close:focus {
      opacity: 0.5; }
  .alert-box.radius {
    -webkit-border-radius: 3px;
    border-radius: 3px; }
  .alert-box.round {
    -webkit-border-radius: 1000px;
    border-radius: 1000px; }
  .alert-box.success {
    background-color: #43ac6a;
    border-color: #3a945b;
    color: white; }
  .alert-box.alert {
    background-color: #f04124;
    border-color: #de2d0f;
    color: white; }
  .alert-box.secondary {
    background-color: #e7e7e7;
    border-color: #c7c7c7;
    color: #4f4f4f; }
  .alert-box.warning {
    background-color: #f08a24;
    border-color: #de770f;
    color: white; }
  .alert-box.info {
    background-color: #a0d3e8;
    border-color: #74bfdd;
    color: #4f4f4f; }

.inline-list {
  margin: 0 auto 1.0625rem auto;
  margin-left: -1.375rem;
  margin-right: 0;
  padding: 0;
  list-style: none;
  overflow: hidden; }
  .inline-list > li {
    list-style: none;
    float: left;
    margin-left: 1.375rem;
    display: block; }
    .inline-list > li > * {
      display: block; }

button, .button {
  border-style: solid;
  border-width: 0px;
  cursor: pointer;
  font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
  font-weight: normal;
  line-height: normal;
  margin: 0 0 1.25rem;
  position: relative;
  text-decoration: none;
  text-align: center;
  display: inline-block;
  padding-top: 1rem;
  padding-right: 2rem;
  padding-bottom: 1.0625rem;
  padding-left: 2rem;
  font-size: 1rem;
  /*     @else                            { font-size: $padding - rem-calc(2); } */
  background-color: #008cba;
  border-color: #007095;
  color: white;
  -webkit-transition: background-color 300ms ease-out;
  -moz-transition: background-color 300ms ease-out;
  transition: background-color 300ms ease-out;
  padding-top: 1rem;
  padding-right: 2rem;
  padding-bottom: 1.0625rem;
  padding-left: 2rem;
  font-size: 1rem;
  /*     @else                            { font-size: $padding - rem-calc(2); } */ }
  button:hover, button:focus, .button:hover, .button:focus {
    background-color: #007095; }
  button:hover, button:focus, .button:hover, .button:focus {
    color: white; }
  button.secondary, .button.secondary {
    background-color: #e7e7e7;
    border-color: #b9b9b9;
    color: #333333; }
    button.secondary:hover, button.secondary:focus, .button.secondary:hover, .button.secondary:focus {
      background-color: #b9b9b9; }
    button.secondary:hover, button.secondary:focus, .button.secondary:hover, .button.secondary:focus {
      color: #333333; }
  button.success, .button.success {
    background-color: #43ac6a;
    border-color: #368a55;
    color: white; }
    button.success:hover, button.success:focus, .button.success:hover, .button.success:focus {
      background-color: #368a55; }
    button.success:hover, button.success:focus, .button.success:hover, .button.success:focus {
      color: white; }
  button.alert, .button.alert {
    background-color: #f04124;
    border-color: #cf2a0e;
    color: white; }
    button.alert:hover, button.alert:focus, .button.alert:hover, .button.alert:focus {
      background-color: #cf2a0e; }
    button.alert:hover, button.alert:focus, .button.alert:hover, .button.alert:focus {
      color: white; }
  button.large, .button.large {
    padding-top: 1.125rem;
    padding-right: 2.25rem;
    padding-bottom: 1.1875rem;
    padding-left: 2.25rem;
    font-size: 1.25rem;
    /*     @else                            { font-size: $padding - rem-calc(2); } */ }
  button.small, .button.small {
    padding-top: 0.875rem;
    padding-right: 1.75rem;
    padding-bottom: 0.9375rem;
    padding-left: 1.75rem;
    font-size: 0.8125rem;
    /*     @else                            { font-size: $padding - rem-calc(2); } */ }
  button.tiny, .button.tiny {
    padding-top: 0.625rem;
    padding-right: 1.25rem;
    padding-bottom: 0.6875rem;
    padding-left: 1.25rem;
    font-size: 0.6875rem;
    /*     @else                            { font-size: $padding - rem-calc(2); } */ }
  button.expand, .button.expand {
    padding-right: 0;
    padding-left: 0;
    width: 100%; }
  button.left-align, .button.left-align {
    text-align: left;
    text-indent: 0.75rem; }
  button.right-align, .button.right-align {
    text-align: right;
    padding-right: 0.75rem; }
  button.radius, .button.radius {
    -webkit-border-radius: 3px;
    border-radius: 3px; }
  button.round, .button.round {
    -webkit-border-radius: 1000px;
    border-radius: 1000px; }
  button.disabled, button[disabled], .button.disabled, .button[disabled] {
    background-color: #008cba;
    border-color: #007095;
    color: white;
    cursor: default;
    opacity: 0.7;
    -webkit-box-shadow: none;
    box-shadow: none; }
    button.disabled:hover, button.disabled:focus, button[disabled]:hover, button[disabled]:focus, .button.disabled:hover, .button.disabled:focus, .button[disabled]:hover, .button[disabled]:focus {
      background-color: #007095; }
    button.disabled:hover, button.disabled:focus, button[disabled]:hover, button[disabled]:focus, .button.disabled:hover, .button.disabled:focus, .button[disabled]:hover, .button[disabled]:focus {
      color: white; }
    button.disabled:hover, button.disabled:focus, button[disabled]:hover, button[disabled]:focus, .button.disabled:hover, .button.disabled:focus, .button[disabled]:hover, .button[disabled]:focus {
      background-color: #008cba; }
    button.disabled.secondary, button[disabled].secondary, .button.disabled.secondary, .button[disabled].secondary {
      background-color: #e7e7e7;
      border-color: #b9b9b9;
      color: #333333;
      cursor: default;
      opacity: 0.7;
      -webkit-box-shadow: none;
      box-shadow: none; }
      button.disabled.secondary:hover, button.disabled.secondary:focus, button[disabled].secondary:hover, button[disabled].secondary:focus, .button.disabled.secondary:hover, .button.disabled.secondary:focus, .button[disabled].secondary:hover, .button[disabled].secondary:focus {
        background-color: #b9b9b9; }
      button.disabled.secondary:hover, button.disabled.secondary:focus, button[disabled].secondary:hover, button[disabled].secondary:focus, .button.disabled.secondary:hover, .button.disabled.secondary:focus, .button[disabled].secondary:hover, .button[disabled].secondary:focus {
        color: #333333; }
      button.disabled.secondary:hover, button.disabled.secondary:focus, button[disabled].secondary:hover, button[disabled].secondary:focus, .button.disabled.secondary:hover, .button.disabled.secondary:focus, .button[disabled].secondary:hover, .button[disabled].secondary:focus {
        background-color: #e7e7e7; }
    button.disabled.success, button[disabled].success, .button.disabled.success, .button[disabled].success {
      background-color: #43ac6a;
      border-color: #368a55;
      color: white;
      cursor: default;
      opacity: 0.7;
      -webkit-box-shadow: none;
      box-shadow: none; }
      button.disabled.success:hover, button.disabled.success:focus, button[disabled].success:hover, button[disabled].success:focus, .button.disabled.success:hover, .button.disabled.success:focus, .button[disabled].success:hover, .button[disabled].success:focus {
        background-color: #368a55; }
      button.disabled.success:hover, button.disabled.success:focus, button[disabled].success:hover, button[disabled].success:focus, .button.disabled.success:hover, .button.disabled.success:focus, .button[disabled].success:hover, .button[disabled].success:focus {
        color: white; }
      button.disabled.success:hover, button.disabled.success:focus, button[disabled].success:hover, button[disabled].success:focus, .button.disabled.success:hover, .button.disabled.success:focus, .button[disabled].success:hover, .button[disabled].success:focus {
        background-color: #43ac6a; }
    button.disabled.alert, button[disabled].alert, .button.disabled.alert, .button[disabled].alert {
      background-color: #f04124;
      border-color: #cf2a0e;
      color: white;
      cursor: default;
      opacity: 0.7;
      -webkit-box-shadow: none;
      box-shadow: none; }
      button.disabled.alert:hover, button.disabled.alert:focus, button[disabled].alert:hover, button[disabled].alert:focus, .button.disabled.alert:hover, .button.disabled.alert:focus, .button[disabled].alert:hover, .button[disabled].alert:focus {
        background-color: #cf2a0e; }
      button.disabled.alert:hover, button.disabled.alert:focus, button[disabled].alert:hover, button[disabled].alert:focus, .button.disabled.alert:hover, .button.disabled.alert:focus, .button[disabled].alert:hover, .button[disabled].alert:focus {
        color: white; }
      button.disabled.alert:hover, button.disabled.alert:focus, button[disabled].alert:hover, button[disabled].alert:focus, .button.disabled.alert:hover, .button.disabled.alert:focus, .button[disabled].alert:hover, .button[disabled].alert:focus {
        background-color: #f04124; }

@media only screen and (min-width: 40.063em) {
  button, .button {
    display: inline-block; } }
.button-group {
  list-style: none;
  margin: 0;
  left: 0;
  *zoom: 1; }
  .button-group:before, .button-group:after {
    content: " ";
    display: table; }
  .button-group:after {
    clear: both; }
  .button-group li {
    margin: 0;
    float: left; }
    .button-group li > button, .button-group li .button {
      border-left: 1px solid;
      border-color: rgba(255, 255, 255, 0.5); }
    .button-group li:first-child button, .button-group li:first-child .button {
      border-left: 0; }
    .button-group li:first-child {
      margin-left: 0; }
  .button-group.radius > * > button, .button-group.radius > * .button {
    border-left: 1px solid;
    border-color: rgba(255, 255, 255, 0.5); }
  .button-group.radius > *:first-child button, .button-group.radius > *:first-child .button {
    border-left: 0; }
  .button-group.radius > *:first-child, .button-group.radius > *:first-child > a, .button-group.radius > *:first-child > button, .button-group.radius > *:first-child > .button {
    -moz-border-radius-bottomleft: 3px;
    -moz-border-radius-topleft: 3px;
    -webkit-border-bottom-left-radius: 3px;
    -webkit-border-top-left-radius: 3px;
    border-bottom-left-radius: 3px;
    border-top-left-radius: 3px; }
  .button-group.radius > *:last-child, .button-group.radius > *:last-child > a, .button-group.radius > *:last-child > button, .button-group.radius > *:last-child > .button {
    -moz-border-radius-bottomright: 3px;
    -moz-border-radius-topright: 3px;
    -webkit-border-bottom-right-radius: 3px;
    -webkit-border-top-right-radius: 3px;
    border-bottom-right-radius: 3px;
    border-top-right-radius: 3px; }
  .button-group.round > * > button, .button-group.round > * .button {
    border-left: 1px solid;
    border-color: rgba(255, 255, 255, 0.5); }
  .button-group.round > *:first-child button, .button-group.round > *:first-child .button {
    border-left: 0; }
  .button-group.round > *:first-child, .button-group.round > *:first-child > a, .button-group.round > *:first-child > button, .button-group.round > *:first-child > .button {
    -moz-border-radius-bottomleft: 1000px;
    -moz-border-radius-topleft: 1000px;
    -webkit-border-bottom-left-radius: 1000px;
    -webkit-border-top-left-radius: 1000px;
    border-bottom-left-radius: 1000px;
    border-top-left-radius: 1000px; }
  .button-group.round > *:last-child, .button-group.round > *:last-child > a, .button-group.round > *:last-child > button, .button-group.round > *:last-child > .button {
    -moz-border-radius-bottomright: 1000px;
    -moz-border-radius-topright: 1000px;
    -webkit-border-bottom-right-radius: 1000px;
    -webkit-border-top-right-radius: 1000px;
    border-bottom-right-radius: 1000px;
    border-top-right-radius: 1000px; }
  .button-group.even-2 li {
    width: 50%; }
    .button-group.even-2 li > button, .button-group.even-2 li .button {
      border-left: 1px solid;
      border-color: rgba(255, 255, 255, 0.5); }
    .button-group.even-2 li:first-child button, .button-group.even-2 li:first-child .button {
      border-left: 0; }
    .button-group.even-2 li button, .button-group.even-2 li .button {
      width: 100%; }
  .button-group.even-3 li {
    width: 33.33333%; }
    .button-group.even-3 li > button, .button-group.even-3 li .button {
      border-left: 1px solid;
      border-color: rgba(255, 255, 255, 0.5); }
    .button-group.even-3 li:first-child button, .button-group.even-3 li:first-child .button {
      border-left: 0; }
    .button-group.even-3 li button, .button-group.even-3 li .button {
      width: 100%; }
  .button-group.even-4 li {
    width: 25%; }
    .button-group.even-4 li > button, .button-group.even-4 li .button {
      border-left: 1px solid;
      border-color: rgba(255, 255, 255, 0.5); }
    .button-group.even-4 li:first-child button, .button-group.even-4 li:first-child .button {
      border-left: 0; }
    .button-group.even-4 li button, .button-group.even-4 li .button {
      width: 100%; }
  .button-group.even-5 li {
    width: 20%; }
    .button-group.even-5 li > button, .button-group.even-5 li .button {
      border-left: 1px solid;
      border-color: rgba(255, 255, 255, 0.5); }
    .button-group.even-5 li:first-child button, .button-group.even-5 li:first-child .button {
      border-left: 0; }
    .button-group.even-5 li button, .button-group.even-5 li .button {
      width: 100%; }
  .button-group.even-6 li {
    width: 16.66667%; }
    .button-group.even-6 li > button, .button-group.even-6 li .button {
      border-left: 1px solid;
      border-color: rgba(255, 255, 255, 0.5); }
    .button-group.even-6 li:first-child button, .button-group.even-6 li:first-child .button {
      border-left: 0; }
    .button-group.even-6 li button, .button-group.even-6 li .button {
      width: 100%; }
  .button-group.even-7 li {
    width: 14.28571%; }
    .button-group.even-7 li > button, .button-group.even-7 li .button {
      border-left: 1px solid;
      border-color: rgba(255, 255, 255, 0.5); }
    .button-group.even-7 li:first-child button, .button-group.even-7 li:first-child .button {
      border-left: 0; }
    .button-group.even-7 li button, .button-group.even-7 li .button {
      width: 100%; }
  .button-group.even-8 li {
    width: 12.5%; }
    .button-group.even-8 li > button, .button-group.even-8 li .button {
      border-left: 1px solid;
      border-color: rgba(255, 255, 255, 0.5); }
    .button-group.even-8 li:first-child button, .button-group.even-8 li:first-child .button {
      border-left: 0; }
    .button-group.even-8 li button, .button-group.even-8 li .button {
      width: 100%; }

.button-bar {
  *zoom: 1; }
  .button-bar:before, .button-bar:after {
    content: " ";
    display: table; }
  .button-bar:after {
    clear: both; }
  .button-bar .button-group {
    float: left;
    margin-right: 0.625rem; }
    .button-bar .button-group div {
      overflow: hidden; }

/* Panels */
.panel {
  border-style: solid;
  border-width: 1px;
  border-color: #d8d8d8;
  margin-bottom: 1.25rem;
  padding: 1.25rem;
  background: #f2f2f2; }
  .panel > :first-child {
    margin-top: 0; }
  .panel > :last-child {
    margin-bottom: 0; }
  .panel h1, .panel h2, .panel h3, .panel h4, .panel h5, .panel h6, .panel p {
    color: #333333; }
  .panel h1, .panel h2, .panel h3, .panel h4, .panel h5, .panel h6 {
    line-height: 1;
    margin-bottom: 0.625rem; }
    .panel h1.subheader, .panel h2.subheader, .panel h3.subheader, .panel h4.subheader, .panel h5.subheader, .panel h6.subheader {
      line-height: 1.4; }
  .panel.callout {
    border-style: solid;
    border-width: 1px;
    border-color: #b6edff;
    margin-bottom: 1.25rem;
    padding: 1.25rem;
    background: #ecfaff; }
    .panel.callout > :first-child {
      margin-top: 0; }
    .panel.callout > :last-child {
      margin-bottom: 0; }
    .panel.callout h1, .panel.callout h2, .panel.callout h3, .panel.callout h4, .panel.callout h5, .panel.callout h6, .panel.callout p {
      color: #333333; }
    .panel.callout h1, .panel.callout h2, .panel.callout h3, .panel.callout h4, .panel.callout h5, .panel.callout h6 {
      line-height: 1;
      margin-bottom: 0.625rem; }
      .panel.callout h1.subheader, .panel.callout h2.subheader, .panel.callout h3.subheader, .panel.callout h4.subheader, .panel.callout h5.subheader, .panel.callout h6.subheader {
        line-height: 1.4; }
    .panel.callout a:not(.button) {
      color: #008cba; }
  .panel.radius {
    -webkit-border-radius: 3px;
    border-radius: 3px; }

.dropdown.button, button.dropdown {
  position: relative;
  padding-right: 3.5625rem; }
  .dropdown.button:before, button.dropdown:before {
    position: absolute;
    content: "";
    width: 0;
    height: 0;
    display: block;
    border-style: solid;
    border-color: white transparent transparent transparent;
    top: 50%; }
  .dropdown.button:before, button.dropdown:before {
    border-width: 0.375rem;
    right: 1.40625rem;
    margin-top: -0.15625rem; }
  .dropdown.button:before, button.dropdown:before {
    border-color: white transparent transparent transparent; }
  .dropdown.button.tiny, button.dropdown.tiny {
    padding-right: 2.625rem; }
    .dropdown.button.tiny:before, button.dropdown.tiny:before {
      border-width: 0.375rem;
      right: 1.125rem;
      margin-top: -0.125rem; }
    .dropdown.button.tiny:before, button.dropdown.tiny:before {
      border-color: white transparent transparent transparent; }
  .dropdown.button.small, button.dropdown.small {
    padding-right: 3.0625rem; }
    .dropdown.button.small:before, button.dropdown.small:before {
      border-width: 0.4375rem;
      right: 1.3125rem;
      margin-top: -0.15625rem; }
    .dropdown.button.small:before, button.dropdown.small:before {
      border-color: white transparent transparent transparent; }
  .dropdown.button.large, button.dropdown.large {
    padding-right: 3.625rem; }
    .dropdown.button.large:before, button.dropdown.large:before {
      border-width: 0.3125rem;
      right: 1.71875rem;
      margin-top: -0.15625rem; }
    .dropdown.button.large:before, button.dropdown.large:before {
      border-color: white transparent transparent transparent; }
  .dropdown.button.secondary:before, button.dropdown.secondary:before {
    border-color: #333333 transparent transparent transparent; }

div.switch {
  position: relative;
  padding: 0;
  display: block;
  overflow: hidden;
  border-style: solid;
  border-width: 1px;
  margin-bottom: 1.25rem;
  height: 2.25rem;
  background: white;
  border-color: #cccccc; }
  div.switch label {
    position: relative;
    left: 0;
    z-index: 2;
    float: left;
    width: 50%;
    height: 100%;
    margin: 0;
    font-weight: bold;
    text-align: left;
    -webkit-transition: all 0.1s ease-out;
    -moz-transition: all 0.1s ease-out;
    transition: all 0.1s ease-out; }
  div.switch input {
    position: absolute;
    z-index: 3;
    opacity: 0;
    width: 100%;
    height: 100%;
    -moz-appearance: none; }
    div.switch input:hover, div.switch input:focus {
      cursor: pointer; }
  div.switch span:last-child {
    position: absolute;
    top: -1px;
    left: -1px;
    z-index: 1;
    display: block;
    padding: 0;
    border-width: 1px;
    border-style: solid;
    -webkit-transition: all 0.1s ease-out;
    -moz-transition: all 0.1s ease-out;
    transition: all 0.1s ease-out; }
  div.switch input:not(:checked) + label {
    opacity: 0; }
  div.switch input:checked {
    display: none !important; }
  div.switch input {
    left: 0;
    display: block !important; }
  div.switch input:first-of-type + label,
  div.switch input:first-of-type + span + label {
    left: -50%; }
  div.switch input:first-of-type:checked + label,
  div.switch input:first-of-type:checked + span + label {
    left: 0%; }
  div.switch input:last-of-type + label,
  div.switch input:last-of-type + span + label {
    right: -50%;
    left: auto;
    text-align: right; }
  div.switch input:last-of-type:checked + label,
  div.switch input:last-of-type:checked + span + label {
    right: 0%;
    left: auto; }
  div.switch span.custom {
    display: none !important; }
  form.custom div.switch .hidden-field {
    margin-left: auto;
    position: absolute;
    visibility: visible; }
  div.switch label {
    padding: 0;
    line-height: 2.3rem;
    font-size: 0.875rem; }
  div.switch input:first-of-type:checked ~ span:last-child {
    left: 100%;
    margin-left: -2.1875rem; }
  div.switch span:last-child {
    width: 2.25rem;
    height: 2.25rem; }
  div.switch span:last-child {
    border-color: #b3b3b3;
    background: white;
    background: -moz-linear-gradient(top, white 0%, #f2f2f2 100%);
    background: -webkit-linear-gradient(top, white 0%, #f2f2f2 100%);
    background: linear-gradient(to bottom, white 0%, #f2f2f2 100%);
    -webkit-box-shadow: 2px 0 10px 0 rgba(0, 0, 0, 0.07), 1000px 0 0 1000px #f3faf6, -2px 0 10px 0 rgba(0, 0, 0, 0.07), -1000px 0 0 1000px whitesmoke;
    box-shadow: 2px 0 10px 0 rgba(0, 0, 0, 0.07), 1000px 0 0 980px #f3faf6, -2px 0 10px 0 rgba(0, 0, 0, 0.07), -1000px 0 0 1000px whitesmoke; }
  div.switch:hover span:last-child, div.switch:focus span:last-child {
    background: white;
    background: -moz-linear-gradient(top, white 0%, #e6e6e6 100%);
    background: -webkit-linear-gradient(top, white 0%, #e6e6e6 100%);
    background: linear-gradient(to bottom, white 0%, #e6e6e6 100%); }
  div.switch:active {
    background: transparent; }
  div.switch.large {
    height: 2.75rem; }
    div.switch.large label {
      padding: 0;
      line-height: 2.3rem;
      font-size: 1.0625rem; }
    div.switch.large input:first-of-type:checked ~ span:last-child {
      left: 100%;
      margin-left: -2.6875rem; }
    div.switch.large span:last-child {
      width: 2.75rem;
      height: 2.75rem; }
  div.switch.small {
    height: 1.75rem; }
    div.switch.small label {
      padding: 0;
      line-height: 2.1rem;
      font-size: 0.75rem; }
    div.switch.small input:first-of-type:checked ~ span:last-child {
      left: 100%;
      margin-left: -1.6875rem; }
    div.switch.small span:last-child {
      width: 1.75rem;
      height: 1.75rem; }
  div.switch.tiny {
    height: 1.375rem; }
    div.switch.tiny label {
      padding: 0;
      line-height: 1.9rem;
      font-size: 0.6875rem; }
    div.switch.tiny input:first-of-type:checked ~ span:last-child {
      left: 100%;
      margin-left: -1.3125rem; }
    div.switch.tiny span:last-child {
      width: 1.375rem;
      height: 1.375rem; }
  div.switch.radius {
    -webkit-border-radius: 4px;
    border-radius: 4px; }
    div.switch.radius span:last-child {
      -webkit-border-radius: 3px;
      border-radius: 3px; }
  div.switch.round {
    -webkit-border-radius: 1000px;
    border-radius: 1000px; }
    div.switch.round span:last-child {
      -webkit-border-radius: 999px;
      border-radius: 999px; }
    div.switch.round label {
      padding: 0 0.5625rem; }

@-webkit-keyframes webkitSiblingBugfix {
  from {
    position: relative; }

  to {
    position: relative; } }

/* Image Thumbnails */
.th {
  line-height: 0;
  display: inline-block;
  border: solid 4px white;
  max-width: 100%;
  -webkit-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.2);
  box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.2);
  -webkit-transition: all 200ms ease-out;
  -moz-transition: all 200ms ease-out;
  transition: all 200ms ease-out; }
  .th:hover, .th:focus {
    -webkit-box-shadow: 0 0 6px 1px rgba(0, 140, 186, 0.5);
    box-shadow: 0 0 6px 1px rgba(0, 140, 186, 0.5); }
  .th.radius {
    -webkit-border-radius: 3px;
    border-radius: 3px; }

/* Pricing Tables */
.pricing-table {
  border: solid 1px #dddddd;
  margin-left: 0;
  margin-bottom: 1.25rem; }
  .pricing-table * {
    list-style: none;
    line-height: 1; }
  .pricing-table .title {
    background-color: #333333;
    padding: 0.9375rem 1.25rem;
    text-align: center;
    color: #eeeeee;
    font-weight: normal;
    font-size: 1rem;
    font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif; }
  .pricing-table .price {
    background-color: #f6f6f6;
    padding: 0.9375rem 1.25rem;
    text-align: center;
    color: #333333;
    font-weight: normal;
    font-size: 2rem;
    font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif; }
  .pricing-table .description {
    background-color: white;
    padding: 0.9375rem;
    text-align: center;
    color: #777777;
    font-size: 0.75rem;
    font-weight: normal;
    line-height: 1.4;
    border-bottom: dotted 1px #dddddd; }
  .pricing-table .bullet-item {
    background-color: white;
    padding: 0.9375rem;
    text-align: center;
    color: #333333;
    font-size: 0.875rem;
    font-weight: normal;
    border-bottom: dotted 1px #dddddd; }
  .pricing-table .cta-button {
    background-color: white;
    text-align: center;
    padding: 1.25rem 1.25rem 0; }

@-webkit-keyframes rotate {
  from {
    -webkit-transform: rotate(0deg); }

  to {
    -webkit-transform: rotate(360deg); } }

@-moz-keyframes rotate {
  from {
    -moz-transform: rotate(0deg); }

  to {
    -moz-transform: rotate(360deg); } }

@-o-keyframes rotate {
  from {
    -o-transform: rotate(0deg); }

  to {
    -o-transform: rotate(360deg); } }

@keyframes rotate {
  from {
    transform: rotate(0deg); }

  to {
    transform: rotate(360deg); } }

/* Orbit Graceful Loading */
.slideshow-wrapper {
  position: relative; }
  .slideshow-wrapper ul {
    list-style-type: none;
    margin: 0; }
    .slideshow-wrapper ul li,
    .slideshow-wrapper ul li .orbit-caption {
      display: none; }
    .slideshow-wrapper ul li:first-child {
      display: block; }
  .slideshow-wrapper .orbit-container {
    background-color: transparent; }
    .slideshow-wrapper .orbit-container li {
      display: block; }
      .slideshow-wrapper .orbit-container li .orbit-caption {
        display: block; }

.preloader {
  display: block;
  width: 40px;
  height: 40px;
  position: absolute;
  top: 50%;
  left: 50%;
  margin-top: -20px;
  margin-left: -20px;
  border: solid 3px;
  border-color: #555555 white;
  -webkit-border-radius: 1000px;
  border-radius: 1000px;
  -webkit-animation-name: rotate;
  -webkit-animation-duration: 1.5s;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-timing-function: linear;
  -moz-animation-name: rotate;
  -moz-animation-duration: 1.5s;
  -moz-animation-iteration-count: infinite;
  -moz-animation-timing-function: linear;
  -o-animation-name: rotate;
  -o-animation-duration: 1.5s;
  -o-animation-iteration-count: infinite;
  -o-animation-timing-function: linear;
  animation-name: rotate;
  animation-duration: 1.5s;
  animation-iteration-count: infinite;
  animation-timing-function: linear; }

.orbit-container {
  overflow: hidden;
  width: 100%;
  position: relative;
  background: none; }
  .orbit-container .orbit-slides-container {
    list-style: none;
    margin: 0;
    padding: 0;
    position: relative;
    -webkit-transform: translateZ(0); }
    .orbit-container .orbit-slides-container img {
      display: block;
      max-width: 100%; }
    .orbit-container .orbit-slides-container.fade > * {
      -webkit-transform: translate3d(0, 0, 0);
      opacity: 0.01;
      transition: opacity 0.25s ease-in-out;
      -moz-transition: opacity 0.25s ease-in-out;
      -webkit-transition: opacity 0.25s ease-in-out; }
      .orbit-container .orbit-slides-container.fade > *.animate-in {
        opacity: 1;
        z-index: 20;
        transition: opacity 500ms ease-in-out;
        -moz-transition: opacity 500ms ease-in-out;
        -webkit-transition: opacity 500ms ease-in-out; }
      .orbit-container .orbit-slides-container.fade > *.animate-out {
        opacity: 0.01;
        z-index: 10;
        transition: opacity 500ms ease-in-out;
        -moz-transition: opacity 500ms ease-in-out;
        -webkit-transition: opacity 500ms ease-in-out; }
    .orbit-container .orbit-slides-container.swipe-next > * {
      -webkit-transform: translate3d(100%, 0, 0); }
      .orbit-container .orbit-slides-container.swipe-next > *.animate-in {
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        -o-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        -webkit-transition-duration: 500ms;
        -moz-transition-duration: 500ms;
        -o-transition-duration: 500ms;
        transition-duration: 500ms; }
      .orbit-container .orbit-slides-container.swipe-next > *.animate-out {
        -webkit-transform: translate3d(-100%, 0, 0);
        -moz-transform: translate3d(-100%, 0, 0);
        -ms-transform: translate3d(-100%, 0, 0);
        -o-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0);
        -webkit-transition-duration: 500ms;
        -moz-transition-duration: 500ms;
        -o-transition-duration: 500ms;
        transition-duration: 500ms; }
    .orbit-container .orbit-slides-container.swipe-prev > * {
      -webkit-transform: translate3d(-100%, 0, 0);
      -moz-transform: translate3d(-100%, 0, 0);
      -ms-transform: translate3d(-100%, 0, 0);
      -o-transform: translate3d(-100%, 0, 0);
      transform: translate3d(-100%, 0, 0); }
      .orbit-container .orbit-slides-container.swipe-prev > *.animate-in {
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        -o-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        -webkit-transition-duration: 500ms;
        -moz-transition-duration: 500ms;
        -o-transition-duration: 500ms;
        transition-duration: 500ms; }
      .orbit-container .orbit-slides-container.swipe-prev > *.animate-out {
        -webkit-transform: translate3d(100%, 0, 0);
        -moz-transform: translate3d(100%, 0, 0);
        -ms-transform: translate3d(100%, 0, 0);
        -o-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0);
        -webkit-transition-duration: 500ms;
        -moz-transition-duration: 500ms;
        -o-transition-duration: 500ms;
        transition-duration: 500ms; }
    .orbit-container .orbit-slides-container > * {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      -webkit-transform: translate3d(100%, 0, 0);
      -moz-transform: translate3d(100%, 0, 0);
      -ms-transform: translate3d(100%, 0, 0);
      -o-transform: translate3d(100%, 0, 0);
      transform: translate3d(100%, 0, 0); }
      .orbit-container .orbit-slides-container > *.active {
        opacity: 1;
        top: 0;
        left: 0;
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        -o-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0); }
      .orbit-container .orbit-slides-container > * .orbit-caption {
        position: absolute;
        bottom: 0;
        background-color: rgba(51, 51, 51, 0.8);
        color: white;
        width: 100%;
        padding: 0.625rem 0.875rem;
        font-size: 0.875rem; }
  .orbit-container .orbit-slide-number {
    position: absolute;
    top: 10px;
    left: 10px;
    font-size: 12px;
    color: white;
    background: rgba(0, 0, 0, 0);
    z-index: 10; }
    .orbit-container .orbit-slide-number span {
      font-weight: 700;
      padding: 0.3125rem; }
  .orbit-container .orbit-timer {
    position: absolute;
    top: 12px;
    right: 10px;
    height: 6px;
    width: 100px;
    z-index: 10; }
    .orbit-container .orbit-timer .orbit-progress {
      height: 3px;
      background-color: rgba(255, 255, 255, 0.3);
      display: block;
      width: 0%;
      position: relative;
      right: 20px;
      top: 5px; }
    .orbit-container .orbit-timer > span {
      display: none;
      position: absolute;
      top: 0px;
      right: 0;
      width: 11px;
      height: 14px;
      border: solid 4px white;
      border-top: none;
      border-bottom: none; }
    .orbit-container .orbit-timer.paused > span {
      right: -4px;
      top: 0px;
      width: 11px;
      height: 14px;
      border: inset 8px;
      border-right-style: solid;
      border-color: transparent transparent transparent white; }
      .orbit-container .orbit-timer.paused > span.dark {
        border-color: transparent transparent transparent #333333; }
  .orbit-container:hover .orbit-timer > span {
    display: block; }
  .orbit-container .orbit-prev,
  .orbit-container .orbit-next {
    position: absolute;
    top: 45%;
    margin-top: -25px;
    width: 36px;
    height: 60px;
    line-height: 50px;
    color: white;
    background-color: none;
    text-indent: -9999px !important;
    z-index: 10; }
    .orbit-container .orbit-prev:hover,
    .orbit-container .orbit-next:hover {
      background-color: rgba(0, 0, 0, 0.3); }
    .orbit-container .orbit-prev > span,
    .orbit-container .orbit-next > span {
      position: absolute;
      top: 50%;
      margin-top: -10px;
      display: block;
      width: 0;
      height: 0;
      border: inset 10px; }
  .orbit-container .orbit-prev {
    left: 0; }
    .orbit-container .orbit-prev > span {
      border-right-style: solid;
      border-color: transparent;
      border-right-color: white; }
    .orbit-container .orbit-prev:hover > span {
      border-right-color: white; }
  .orbit-container .orbit-next {
    right: 0; }
    .orbit-container .orbit-next > span {
      border-color: transparent;
      border-left-style: solid;
      border-left-color: white;
      left: 50%;
      margin-left: -4px; }
    .orbit-container .orbit-next:hover > span {
      border-left-color: white; }

.orbit-bullets-container {
  text-align: center; }

.orbit-bullets {
  margin: 0 auto 30px auto;
  overflow: hidden;
  position: relative;
  top: 10px;
  float: none;
  text-align: center;
  display: block; }
  .orbit-bullets li {
    display: inline-block;
    width: 0.5625rem;
    height: 0.5625rem;
    background: #cccccc;
    float: none;
    margin-right: 6px;
    -webkit-border-radius: 1000px;
    border-radius: 1000px; }
    .orbit-bullets li.active {
      background: #999999; }
    .orbit-bullets li:last-child {
      margin-right: 0; }

.touch .orbit-container .orbit-prev,
.touch .orbit-container .orbit-next {
  display: none; }
.touch .orbit-bullets {
  display: none; }

@media only screen and (min-width: 40.063em) {
  .touch .orbit-container .orbit-prev,
  .touch .orbit-container .orbit-next {
    display: inherit; }
  .touch .orbit-bullets {
    display: block; } }
@media only screen and (max-width: 40em) {
  .orbit-stack-on-small .orbit-slides-container {
    height: auto !important; }
  .orbit-stack-on-small .orbit-slides-container > * {
    position: relative;
    margin-left: 0% !important; }
  .orbit-stack-on-small .orbit-timer,
  .orbit-stack-on-small .orbit-next,
  .orbit-stack-on-small .orbit-prev,
  .orbit-stack-on-small .orbit-bullets {
    display: none; } }
[data-magellan-expedition] {
  background: white;
  z-index: 50;
  min-width: 100%;
  padding: 10px; }
  [data-magellan-expedition] .sub-nav {
    margin-bottom: 0; }
    [data-magellan-expedition] .sub-nav dd {
      margin-bottom: 0; }
    [data-magellan-expedition] .sub-nav a {
      line-height: 1.8em; }

.tabs {
  *zoom: 1;
  margin-bottom: 0 !important; }
  .tabs:before, .tabs:after {
    content: " ";
    display: table; }
  .tabs:after {
    clear: both; }
  .tabs dd {
    position: relative;
    margin-bottom: 0 !important;
    float: left; }
    .tabs dd > a {
      display: block;
      background: #efefef;
      color: #222222;
      padding: 1rem 2rem;
      font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
      font-size: 1rem; }
      .tabs dd > a:hover {
        background: #e1e1e1; }
    .tabs dd.active a {
      background: white; }
  .tabs.radius dd:first-child a {
    -moz-border-radius-bottomleft: 3px;
    -moz-border-radius-topleft: 3px;
    -webkit-border-bottom-left-radius: 3px;
    -webkit-border-top-left-radius: 3px;
    border-bottom-left-radius: 3px;
    border-top-left-radius: 3px; }
  .tabs.radius dd:last-child a {
    -moz-border-radius-bottomright: 3px;
    -moz-border-radius-topright: 3px;
    -webkit-border-bottom-right-radius: 3px;
    -webkit-border-top-right-radius: 3px;
    border-bottom-right-radius: 3px;
    border-top-right-radius: 3px; }
  .tabs.vertical dd {
    position: inherit;
    float: none;
    display: block;
    top: auto; }

.tabs-content {
  *zoom: 1;
  margin-bottom: 1.5rem;
  width: 100%; }
  .tabs-content:before, .tabs-content:after {
    content: " ";
    display: table; }
  .tabs-content:after {
    clear: both; }
  .tabs-content > .content {
    display: none;
    float: left;
    padding: 0.9375rem 0;
    width: 100%; }
    .tabs-content > .content.active {
      display: block;
      float: none; }
    .tabs-content > .content.contained {
      padding: 0.9375rem; }
  .tabs-content.vertical {
    display: block; }
    .tabs-content.vertical > .content {
      padding: 0 0.9375rem; }

@media only screen and (min-width: 40.063em) {
  .tabs.vertical {
    width: 20%;
    float: left;
    margin-bottom: 1.25rem; }

  .tabs-content.vertical {
    width: 80%;
    float: left;
    margin-left: -1px; } }
.no-js .tabs-content > .content {
  display: block;
  float: none; }

ul.pagination {
  display: block;
  height: 1.5rem;
  margin-left: -0.3125rem; }
  ul.pagination li {
    height: 1.5rem;
    color: #222222;
    font-size: 0.875rem;
    margin-left: 0.3125rem; }
    ul.pagination li a {
      display: block;
      padding: 0.0625rem 0.625rem 0.0625rem;
      color: #999999;
      -webkit-border-radius: 3px;
      border-radius: 3px; }
    ul.pagination li:hover a,
    ul.pagination li a:focus {
      background: #e6e6e6; }
    ul.pagination li.unavailable a {
      cursor: default;
      color: #999999; }
    ul.pagination li.unavailable:hover a, ul.pagination li.unavailable a:focus {
      background: transparent; }
    ul.pagination li.current a {
      background: #008cba;
      color: white;
      font-weight: bold;
      cursor: default; }
      ul.pagination li.current a:hover, ul.pagination li.current a:focus {
        background: #008cba; }
  ul.pagination li {
    float: left;
    display: block; }

/* Pagination centred wrapper */
.pagination-centered {
  text-align: center; }
  .pagination-centered ul.pagination li {
    float: none;
    display: inline-block; }

.side-nav {
  display: block;
  margin: 0;
  padding: 0.875rem 0;
  list-style-type: none;
  list-style-position: inside;
  font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif; }
  .side-nav li {
    margin: 0 0 0.4375rem 0;
    font-size: 0.875rem; }
    .side-nav li a:not(.button) {
      display: block;
      color: #008cba; }
      .side-nav li a:not(.button):hover, .side-nav li a:not(.button):focus {
        color: #1cc7ff; }
    .side-nav li.active > a:first-child:not(.button) {
      color: #1cc7ff;
      font-weight: normal;
      font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif; }
    .side-nav li.divider {
      border-top: 1px solid;
      height: 0;
      padding: 0;
      list-style: none;
      border-top-color: white; }

.accordion {
  *zoom: 1;
  margin-bottom: 0; }
  .accordion:before, .accordion:after {
    content: " ";
    display: table; }
  .accordion:after {
    clear: both; }
  .accordion dd {
    display: block;
    margin-bottom: 0 !important; }
    .accordion dd.active > a {
      background: #e8e8e8; }
    .accordion dd > a {
      background: #efefef;
      color: #222222;
      padding: 1rem;
      display: block;
      font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
      font-size: 1rem; }
      .accordion dd > a:hover {
        background: #e3e3e3; }
  .accordion .content {
    display: none;
    padding: 0.9375rem; }
    .accordion .content.active {
      display: block;
      background: white; }

.text-left {
  text-align: left !important; }

.text-right {
  text-align: right !important; }

.text-center {
  text-align: center !important; }

.text-justify {
  text-align: justify !important; }

@media only screen and (max-width: 40em) {
  .small-only-text-left {
    text-align: left !important; }

  .small-only-text-right {
    text-align: right !important; }

  .small-only-text-center {
    text-align: center !important; }

  .small-only-text-justify {
    text-align: justify !important; } }
@media only screen {
  .small-text-left {
    text-align: left !important; }

  .small-text-right {
    text-align: right !important; }

  .small-text-center {
    text-align: center !important; }

  .small-text-justify {
    text-align: justify !important; } }
@media only screen and (min-width: 40.063em) and (max-width: 64em) {
  .medium-only-text-left {
    text-align: left !important; }

  .medium-only-text-right {
    text-align: right !important; }

  .medium-only-text-center {
    text-align: center !important; }

  .medium-only-text-justify {
    text-align: justify !important; } }
@media only screen and (min-width: 40.063em) {
  .medium-text-left {
    text-align: left !important; }

  .medium-text-right {
    text-align: right !important; }

  .medium-text-center {
    text-align: center !important; }

  .medium-text-justify {
    text-align: justify !important; } }
@media only screen and (min-width: 64.063em) and (max-width: 90em) {
  .large-only-text-left {
    text-align: left !important; }

  .large-only-text-right {
    text-align: right !important; }

  .large-only-text-center {
    text-align: center !important; }

  .large-only-text-justify {
    text-align: justify !important; } }
@media only screen and (min-width: 64.063em) {
  .large-text-left {
    text-align: left !important; }

  .large-text-right {
    text-align: right !important; }

  .large-text-center {
    text-align: center !important; }

  .large-text-justify {
    text-align: justify !important; } }
@media only screen and (min-width: 90.063em) and (max-width: 120em) {
  .xlarge-only-text-left {
    text-align: left !important; }

  .xlarge-only-text-right {
    text-align: right !important; }

  .xlarge-only-text-center {
    text-align: center !important; }

  .xlarge-only-text-justify {
    text-align: justify !important; } }
@media only screen and (min-width: 90.063em) {
  .xlarge-text-left {
    text-align: left !important; }

  .xlarge-text-right {
    text-align: right !important; }

  .xlarge-text-center {
    text-align: center !important; }

  .xlarge-text-justify {
    text-align: justify !important; } }
@media only screen and (min-width: 120.063em) and (max-width: 99999999em) {
  .xxlarge-only-text-left {
    text-align: left !important; }

  .xxlarge-only-text-right {
    text-align: right !important; }

  .xxlarge-only-text-center {
    text-align: center !important; }

  .xxlarge-only-text-justify {
    text-align: justify !important; } }
@media only screen and (min-width: 120.063em) {
  .xxlarge-text-left {
    text-align: left !important; }

  .xxlarge-text-right {
    text-align: right !important; }

  .xxlarge-text-center {
    text-align: center !important; }

  .xxlarge-text-justify {
    text-align: justify !important; } }
.text-left {
  text-align: left !important; }

.text-right {
  text-align: right !important; }

.text-center {
  text-align: center !important; }

.text-justify {
  text-align: justify !important; }

@media only screen and (max-width: 40em) {
  .small-only-text-left {
    text-align: left !important; }

  .small-only-text-right {
    text-align: right !important; }

  .small-only-text-center {
    text-align: center !important; }

  .small-only-text-justify {
    text-align: justify !important; } }
@media only screen {
  .small-text-left {
    text-align: left !important; }

  .small-text-right {
    text-align: right !important; }

  .small-text-center {
    text-align: center !important; }

  .small-text-justify {
    text-align: justify !important; } }
@media only screen and (min-width: 40.063em) and (max-width: 64em) {
  .medium-only-text-left {
    text-align: left !important; }

  .medium-only-text-right {
    text-align: right !important; }

  .medium-only-text-center {
    text-align: center !important; }

  .medium-only-text-justify {
    text-align: justify !important; } }
@media only screen and (min-width: 40.063em) {
  .medium-text-left {
    text-align: left !important; }

  .medium-text-right {
    text-align: right !important; }

  .medium-text-center {
    text-align: center !important; }

  .medium-text-justify {
    text-align: justify !important; } }
@media only screen and (min-width: 64.063em) and (max-width: 90em) {
  .large-only-text-left {
    text-align: left !important; }

  .large-only-text-right {
    text-align: right !important; }

  .large-only-text-center {
    text-align: center !important; }

  .large-only-text-justify {
    text-align: justify !important; } }
@media only screen and (min-width: 64.063em) {
  .large-text-left {
    text-align: left !important; }

  .large-text-right {
    text-align: right !important; }

  .large-text-center {
    text-align: center !important; }

  .large-text-justify {
    text-align: justify !important; } }
@media only screen and (min-width: 90.063em) and (max-width: 120em) {
  .xlarge-only-text-left {
    text-align: left !important; }

  .xlarge-only-text-right {
    text-align: right !important; }

  .xlarge-only-text-center {
    text-align: center !important; }

  .xlarge-only-text-justify {
    text-align: justify !important; } }
@media only screen and (min-width: 90.063em) {
  .xlarge-text-left {
    text-align: left !important; }

  .xlarge-text-right {
    text-align: right !important; }

  .xlarge-text-center {
    text-align: center !important; }

  .xlarge-text-justify {
    text-align: justify !important; } }
@media only screen and (min-width: 120.063em) and (max-width: 99999999em) {
  .xxlarge-only-text-left {
    text-align: left !important; }

  .xxlarge-only-text-right {
    text-align: right !important; }

  .xxlarge-only-text-center {
    text-align: center !important; }

  .xxlarge-only-text-justify {
    text-align: justify !important; } }
@media only screen and (min-width: 120.063em) {
  .xxlarge-text-left {
    text-align: left !important; }

  .xxlarge-text-right {
    text-align: right !important; }

  .xxlarge-text-center {
    text-align: center !important; }

  .xxlarge-text-justify {
    text-align: justify !important; } }
/* Typography resets */
div,
dl,
dt,
dd,
ul,
ol,
li,
h1,
h2,
h3,
h4,
h5,
h6,
pre,
form,
p,
blockquote,
th,
td {
  margin: 0;
  padding: 0; }

/* Default Link Styles */
a {
  color: #008cba;
  text-decoration: none;
  line-height: inherit; }
  a:hover, a:focus {
    color: #0078a0; }
  a img {
    border: none; }

/* Default paragraph styles */
p {
  font-family: inherit;
  font-weight: normal;
  font-size: 1rem;
  line-height: 1.6;
  margin-bottom: 1.25rem;
  text-rendering: optimizeLegibility; }
  p.lead {
    font-size: 1.21875rem;
    line-height: 1.6; }
  p aside {
    font-size: 0.875rem;
    line-height: 1.35;
    font-style: italic; }

/* Default header styles */
h1, h2, h3, h4, h5, h6 {
  font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
  font-weight: normal;
  font-style: normal;
  color: #222222;
  text-rendering: optimizeLegibility;
  margin-top: 0.2rem;
  margin-bottom: 0.5rem;
  line-height: 1.4; }
  h1 small, h2 small, h3 small, h4 small, h5 small, h6 small {
    font-size: 60%;
    color: #6f6f6f;
    line-height: 0; }

h1 {
  font-size: 2.125rem; }

h2 {
  font-size: 1.6875rem; }

h3 {
  font-size: 1.375rem; }

h4 {
  font-size: 1.125rem; }

h5 {
  font-size: 1.125rem; }

h6 {
  font-size: 1rem; }

.subheader {
  line-height: 1.4;
  color: #6f6f6f;
  font-weight: normal;
  margin-top: 0.2rem;
  margin-bottom: 0.5rem; }

hr {
  border: solid #dddddd;
  border-width: 1px 0 0;
  clear: both;
  margin: 1.25rem 0 1.1875rem;
  height: 0; }

/* Helpful Typography Defaults */
em,
i {
  font-style: italic;
  line-height: inherit; }

strong,
b {
  font-weight: bold;
  line-height: inherit; }

small {
  font-size: 60%;
  line-height: inherit; }

code {
  font-family: Consolas, "Liberation Mono", Courier, monospace;
  font-weight: bold;
  color: #bd260d; }

/* Lists */
ul,
ol,
dl {
  font-size: 1rem;
  line-height: 1.6;
  margin-bottom: 1.25rem;
  list-style-position: outside;
  font-family: inherit; }

ul {
  margin-left: 1.1rem; }
  ul.no-bullet {
    margin-left: 0; }
    ul.no-bullet li ul,
    ul.no-bullet li ol {
      margin-left: 1.25rem;
      margin-bottom: 0;
      list-style: none; }

/* Unordered Lists */
ul li ul,
ul li ol {
  margin-left: 1.25rem;
  margin-bottom: 0; }
ul.square li ul, ul.circle li ul, ul.disc li ul {
  list-style: inherit; }
ul.square {
  list-style-type: square;
  margin-left: 1.1rem; }
ul.circle {
  list-style-type: circle;
  margin-left: 1.1rem; }
ul.disc {
  list-style-type: disc;
  margin-left: 1.1rem; }
ul.no-bullet {
  list-style: none; }

/* Ordered Lists */
ol {
  margin-left: 1.4rem; }
  ol li ul,
  ol li ol {
    margin-left: 1.25rem;
    margin-bottom: 0; }

/* Definition Lists */
dl dt {
  margin-bottom: 0.3rem;
  font-weight: bold; }
dl dd {
  margin-bottom: 0.75rem; }

/* Abbreviations */
abbr,
acronym {
  text-transform: uppercase;
  font-size: 90%;
  color: #222222;
  border-bottom: 1px dotted #dddddd;
  cursor: help; }

abbr {
  text-transform: none; }

/* Blockquotes */
blockquote {
  margin: 0 0 1.25rem;
  padding: 0.5625rem 1.25rem 0 1.1875rem;
  border-left: 1px solid #dddddd; }
  blockquote cite {
    display: block;
    font-size: 0.8125rem;
    color: #555555; }
    blockquote cite:before {
      content: "\2014 \0020"; }
    blockquote cite a,
    blockquote cite a:visited {
      color: #555555; }

blockquote,
blockquote p {
  line-height: 1.6;
  color: #6f6f6f; }

/* Microformats */
.vcard {
  display: inline-block;
  margin: 0 0 1.25rem 0;
  border: 1px solid #dddddd;
  padding: 0.625rem 0.75rem; }
  .vcard li {
    margin: 0;
    display: block; }
  .vcard .fn {
    font-weight: bold;
    font-size: 0.9375rem; }

.vevent .summary {
  font-weight: bold; }
.vevent abbr {
  cursor: default;
  text-decoration: none;
  font-weight: bold;
  border: none;
  padding: 0 0.0625rem; }

@media only screen and (min-width: 40.063em) {
  h1, h2, h3, h4, h5, h6 {
    line-height: 1.4; }

  h1 {
    font-size: 2.75rem; }

  h2 {
    font-size: 2.3125rem; }

  h3 {
    font-size: 1.6875rem; }

  h4 {
    font-size: 1.4375rem; } }
/*
 * Print styles.
 *
 * Inlined to avoid required HTTP connection: www.phpied.com/delay-loading-your-print-css/
 * Credit to Paul Irish and HTML5 Boilerplate (html5boilerplate.com)
*/
.print-only {
  display: none !important; }

@media print {
  * {
    background: transparent !important;
    color: black !important;
    /* Black prints faster: h5bp.com/s */
    box-shadow: none !important;
    text-shadow: none !important; }

  a,
  a:visited {
    text-decoration: underline; }

  a[href]:after {
    content: " (" attr(href) ")"; }

  abbr[title]:after {
    content: " (" attr(title) ")"; }

  .ir a:after,
  a[href^="javascript:"]:after,
  a[href^="#"]:after {
    content: ""; }

  pre,
  blockquote {
    border: 1px solid #999999;
    page-break-inside: avoid; }

  thead {
    display: table-header-group;
    /* h5bp.com/t */ }

  tr,
  img {
    page-break-inside: avoid; }

  img {
    max-width: 100% !important; }

  @page {
    margin: 0.5cm; }

  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3; }

  h2,
  h3 {
    page-break-after: avoid; }

  .hide-on-print {
    display: none !important; }

  .print-only {
    display: block !important; }

  .hide-for-print {
    display: none !important; }

  .show-for-print {
    display: inherit !important; } }
.split.button {
  position: relative;
  padding-right: 5.0625rem; }
  .split.button span {
    display: block;
    height: 100%;
    position: absolute;
    right: 0;
    top: 0;
    border-left: solid 1px; }
    .split.button span:before {
      position: absolute;
      content: "";
      width: 0;
      height: 0;
      display: block;
      border-style: inset;
      top: 50%;
      left: 50%; }
    .split.button span:active {
      background-color: rgba(0, 0, 0, 0.1); }
  .split.button span {
    border-left-color: rgba(255, 255, 255, 0.5); }
  .split.button span {
    width: 3.09375rem; }
    .split.button span:before {
      border-top-style: solid;
      border-width: 0.375rem;
      top: 48%;
      margin-left: -0.375rem; }
  .split.button span:before {
    border-color: white transparent transparent transparent; }
  .split.button.secondary span {
    border-left-color: rgba(255, 255, 255, 0.5); }
  .split.button.secondary span:before {
    border-color: white transparent transparent transparent; }
  .split.button.alert span {
    border-left-color: rgba(255, 255, 255, 0.5); }
  .split.button.success span {
    border-left-color: rgba(255, 255, 255, 0.5); }
  .split.button.tiny {
    padding-right: 3.75rem; }
    .split.button.tiny span {
      width: 2.25rem; }
      .split.button.tiny span:before {
        border-top-style: solid;
        border-width: 0.375rem;
        top: 48%;
        margin-left: -0.375rem; }
  .split.button.small {
    padding-right: 4.375rem; }
    .split.button.small span {
      width: 2.625rem; }
      .split.button.small span:before {
        border-top-style: solid;
        border-width: 0.4375rem;
        top: 48%;
        margin-left: -0.375rem; }
  .split.button.large {
    padding-right: 5.5rem; }
    .split.button.large span {
      width: 3.4375rem; }
      .split.button.large span:before {
        border-top-style: solid;
        border-width: 0.3125rem;
        top: 48%;
        margin-left: -0.375rem; }
  .split.button.expand {
    padding-left: 2rem; }
  .split.button.secondary span:before {
    border-color: #333333 transparent transparent transparent; }
  .split.button.radius span {
    -moz-border-radius-bottomright: 3px;
    -moz-border-radius-topright: 3px;
    -webkit-border-bottom-right-radius: 3px;
    -webkit-border-top-right-radius: 3px;
    border-bottom-right-radius: 3px;
    border-top-right-radius: 3px; }
  .split.button.round span {
    -moz-border-radius-bottomright: 1000px;
    -moz-border-radius-topright: 1000px;
    -webkit-border-bottom-right-radius: 1000px;
    -webkit-border-top-right-radius: 1000px;
    border-bottom-right-radius: 1000px;
    border-top-right-radius: 1000px; }

.reveal-modal-bg {
  position: fixed;
  height: 100%;
  width: 100%;
  background: black;
  background: rgba(0, 0, 0, 0.45);
  z-index: 99;
  display: none;
  top: 0;
  left: 0; }

dialog, .reveal-modal {
  visibility: hidden;
  display: none;
  position: absolute;
  z-index: 100;
  width: 100vw;
  top: 0;
  left: 0;
  background-color: white;
  padding: 1.25rem;
  border: solid 1px #666666;
  -webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.4); }
  @media only screen and (max-width: 40em) {
    dialog, .reveal-modal {
      height: 100vh;
      min-height: 100vh; } }
  @media only screen and (min-width: 40.063em) {
    dialog, .reveal-modal {
      left: 50%; } }
  dialog .column,
  dialog .columns, .reveal-modal .column,
  .reveal-modal .columns {
    min-width: 0; }
  dialog > :first-child, .reveal-modal > :first-child {
    margin-top: 0; }
  dialog > :last-child, .reveal-modal > :last-child {
    margin-bottom: 0; }
  @media only screen and (min-width: 40.063em) {
    dialog, .reveal-modal {
      margin-left: -40%;
      width: 80%; } }
  @media only screen and (min-width: 40.063em) {
    dialog, .reveal-modal {
      top: 6.25rem; } }
  dialog .close-reveal-modal, .reveal-modal .close-reveal-modal {
    font-size: 2.5rem;
    line-height: 1;
    position: absolute;
    top: 0.5rem;
    right: 0.6875rem;
    color: #aaaaaa;
    font-weight: bold;
    cursor: pointer; }

dialog[open] {
  display: block;
  visibility: visible; }

@media only screen and (min-width: 40.063em) {
  dialog, .reveal-modal {
    padding: 1.875rem; }
  dialog.full, .reveal-modal.full {
    top: 0;
    left: 0;
    height: 100vh;
    min-height: 100vh;
    margin-left: 0 !important; } }
  @media only screen and (min-width: 40.063em) and (min-width: 40.063em) {
    dialog, .reveal-modal {
      top: 6.25rem; } }
  @media only screen and (min-width: 40.063em) and (min-width: 40.063em) {
    dialog.tiny, .reveal-modal.tiny {
      margin-left: -15%;
      width: 30%; } }
  @media only screen and (min-width: 40.063em) and (min-width: 40.063em) {
    dialog.small, .reveal-modal.small {
      margin-left: -20%;
      width: 40%; } }
  @media only screen and (min-width: 40.063em) and (min-width: 40.063em) {
    dialog.medium, .reveal-modal.medium {
      margin-left: -30%;
      width: 60%; } }
  @media only screen and (min-width: 40.063em) and (min-width: 40.063em) {
    dialog.large, .reveal-modal.large {
      margin-left: -35%;
      width: 70%; } }
  @media only screen and (min-width: 40.063em) and (min-width: 40.063em) {
    dialog.xlarge, .reveal-modal.xlarge {
      margin-left: -47.5%;
      width: 95%; } }

  @media only screen and (min-width: 40.063em) and (min-width: 40.063em) {
    dialog.full, .reveal-modal.full {
      margin-left: -50vw;
      width: 100vw; } }

@media print {
  dialog, .reveal-modal {
    background: white !important; } }
/* Tooltips */
.has-tip {
  border-bottom: dotted 1px #cccccc;
  cursor: help;
  font-weight: bold;
  color: #333333; }
  .has-tip:hover, .has-tip:focus {
    border-bottom: dotted 1px #003f54;
    color: #008cba; }
  .has-tip.tip-left, .has-tip.tip-right {
    float: none !important; }

.tooltip {
  display: none;
  position: absolute;
  z-index: 999;
  font-weight: normal;
  font-size: 0.875rem;
  line-height: 1.3;
  padding: 0.75rem;
  max-width: 85%;
  left: 50%;
  width: 100%;
  color: white;
  background: #333333; }
  .tooltip > .nub {
    display: block;
    left: 5px;
    position: absolute;
    width: 0;
    height: 0;
    border: solid 5px;
    border-color: transparent transparent #333333 transparent;
    top: -10px; }
    .tooltip > .nub.rtl {
      left: auto;
      right: 5px; }
  .tooltip.radius {
    -webkit-border-radius: 3px;
    border-radius: 3px; }
  .tooltip.round {
    -webkit-border-radius: 1000px;
    border-radius: 1000px; }
    .tooltip.round > .nub {
      left: 2rem; }
  .tooltip.opened {
    color: #008cba !important;
    border-bottom: dotted 1px #003f54 !important; }

.tap-to-close {
  display: block;
  font-size: 0.625rem;
  color: #777777;
  font-weight: normal; }

@media only screen and (min-width: 40.063em) {
  .tooltip > .nub {
    border-color: transparent transparent #333333 transparent;
    top: -10px; }
  .tooltip.tip-top > .nub {
    border-color: #333333 transparent transparent transparent;
    top: auto;
    bottom: -10px; }
  .tooltip.tip-left, .tooltip.tip-right {
    float: none !important; }
  .tooltip.tip-left > .nub {
    border-color: transparent transparent transparent #333333;
    right: -10px;
    left: auto;
    top: 50%;
    margin-top: -5px; }
  .tooltip.tip-right > .nub {
    border-color: transparent #333333 transparent transparent;
    right: auto;
    left: -10px;
    top: 50%;
    margin-top: -5px; } }
/* Clearing Styles */
.clearing-thumbs, [data-clearing] {
  *zoom: 1;
  margin-bottom: 0;
  margin-left: 0;
  list-style: none; }
  .clearing-thumbs:before, .clearing-thumbs:after, [data-clearing]:before, [data-clearing]:after {
    content: " ";
    display: table; }
  .clearing-thumbs:after, [data-clearing]:after {
    clear: both; }
  .clearing-thumbs li, [data-clearing] li {
    float: left;
    margin-right: 10px; }
  .clearing-thumbs[class*="block-grid-"] li, [data-clearing][class*="block-grid-"] li {
    margin-right: 0; }

.clearing-blackout {
  background: #333333;
  position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 998; }
  .clearing-blackout .clearing-close {
    display: block; }

.clearing-container {
  position: relative;
  z-index: 998;
  height: 100%;
  overflow: hidden;
  margin: 0; }

.clearing-touch-label {
  position: absolute;
  top: 50%;
  left: 50%;
  color: #aaa;
  font-size: 0.6em; }

.visible-img {
  height: 95%;
  position: relative; }
  .visible-img img {
    position: absolute;
    left: 50%;
    top: 50%;
    margin-left: -50%;
    max-height: 100%;
    max-width: 100%; }

.clearing-caption {
  color: #cccccc;
  font-size: 0.875em;
  line-height: 1.3;
  margin-bottom: 0;
  text-align: center;
  bottom: 0;
  background: #333333;
  width: 100%;
  padding: 10px 30px 20px;
  position: absolute;
  left: 0; }

.clearing-close {
  z-index: 999;
  padding-left: 20px;
  padding-top: 10px;
  font-size: 30px;
  line-height: 1;
  color: #cccccc;
  display: none; }
  .clearing-close:hover, .clearing-close:focus {
    color: #ccc; }

.clearing-assembled .clearing-container {
  height: 100%; }
  .clearing-assembled .clearing-container .carousel > ul {
    display: none; }

.clearing-feature li {
  display: none; }
  .clearing-feature li.clearing-featured-img {
    display: block; }

@media only screen and (min-width: 40.063em) {
  .clearing-main-prev,
  .clearing-main-next {
    position: absolute;
    height: 100%;
    width: 40px;
    top: 0; }
    .clearing-main-prev > span,
    .clearing-main-next > span {
      position: absolute;
      top: 50%;
      display: block;
      width: 0;
      height: 0;
      border: solid 12px; }
      .clearing-main-prev > span:hover,
      .clearing-main-next > span:hover {
        opacity: 0.8; }

  .clearing-main-prev {
    left: 0; }
    .clearing-main-prev > span {
      left: 5px;
      border-color: transparent;
      border-right-color: #cccccc; }

  .clearing-main-next {
    right: 0; }
    .clearing-main-next > span {
      border-color: transparent;
      border-left-color: #cccccc; }

  .clearing-main-prev.disabled,
  .clearing-main-next.disabled {
    opacity: 0.3; }

  .clearing-assembled .clearing-container .carousel {
    background: rgba(51, 51, 51, 0.8);
    height: 120px;
    margin-top: 10px;
    text-align: center; }
    .clearing-assembled .clearing-container .carousel > ul {
      display: inline-block;
      z-index: 999;
      height: 100%;
      position: relative;
      float: none; }
      .clearing-assembled .clearing-container .carousel > ul li {
        display: block;
        width: 120px;
        min-height: inherit;
        float: left;
        overflow: hidden;
        margin-right: 0;
        padding: 0;
        position: relative;
        cursor: pointer;
        opacity: 0.4; }
        .clearing-assembled .clearing-container .carousel > ul li.fix-height img {
          height: 100%;
          max-width: none; }
        .clearing-assembled .clearing-container .carousel > ul li a.th {
          border: none;
          -webkit-box-shadow: none;
          box-shadow: none;
          display: block; }
        .clearing-assembled .clearing-container .carousel > ul li img {
          cursor: pointer !important;
          width: 100% !important; }
        .clearing-assembled .clearing-container .carousel > ul li.visible {
          opacity: 1; }
        .clearing-assembled .clearing-container .carousel > ul li:hover {
          opacity: 0.8; }
  .clearing-assembled .clearing-container .visible-img {
    background: #333333;
    overflow: hidden;
    height: 85%; }

  .clearing-close {
    position: absolute;
    top: 10px;
    right: 20px;
    padding-left: 0;
    padding-top: 0; } }
/* Progress Bar */
.progress {
  background-color: #f6f6f6;
  height: 1.5625rem;
  border: 1px solid white;
  padding: 0.125rem;
  margin-bottom: 0.625rem; }
  .progress .meter {
    background: #008cba;
    height: 100%;
    display: block; }
  .progress.secondary .meter {
    background: #e7e7e7;
    height: 100%;
    display: block; }
  .progress.success .meter {
    background: #43ac6a;
    height: 100%;
    display: block; }
  .progress.alert .meter {
    background: #f04124;
    height: 100%;
    display: block; }
  .progress.radius {
    -webkit-border-radius: 3px;
    border-radius: 3px; }
    .progress.radius .meter {
      -webkit-border-radius: 2px;
      border-radius: 2px; }
  .progress.round {
    -webkit-border-radius: 1000px;
    border-radius: 1000px; }
    .progress.round .meter {
      -webkit-border-radius: 999px;
      border-radius: 999px; }

.sub-nav {
  display: block;
  width: auto;
  overflow: hidden;
  margin: -0.25rem 0 1.125rem;
  padding-top: 0.25rem;
  margin-right: 0;
  margin-left: -0.75rem; }
  .sub-nav dt {
    text-transform: uppercase; }
  .sub-nav dt,
  .sub-nav dd,
  .sub-nav li {
    float: left;
    display: inline;
    margin-left: 1rem;
    margin-bottom: 0.625rem;
    font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
    font-weight: normal;
    font-size: 0.875rem;
    color: #999999; }
    .sub-nav dt a,
    .sub-nav dd a,
    .sub-nav li a {
      text-decoration: none;
      color: #999999;
      padding: 0.1875rem 1rem; }
      .sub-nav dt a:hover,
      .sub-nav dd a:hover,
      .sub-nav li a:hover {
        color: #737373; }
    .sub-nav dt.active a,
    .sub-nav dd.active a,
    .sub-nav li.active a {
      -webkit-border-radius: 3px;
      border-radius: 3px;
      font-weight: normal;
      background: #008cba;
      padding: 0.1875rem 1rem;
      cursor: default;
      color: white; }
      .sub-nav dt.active a:hover,
      .sub-nav dd.active a:hover,
      .sub-nav li.active a:hover {
        background: #0078a0; }

/* Foundation Joyride */
.joyride-list {
  display: none; }

/* Default styles for the container */
.joyride-tip-guide {
  display: none;
  position: absolute;
  background: #333333;
  color: white;
  z-index: 101;
  top: 0;
  left: 2.5%;
  font-family: inherit;
  font-weight: normal;
  width: 95%; }

.lt-ie9 .joyride-tip-guide {
  max-width: 800px;
  left: 50%;
  margin-left: -400px; }

.joyride-content-wrapper {
  width: 100%;
  padding: 1.125rem 1.25rem 1.5rem; }
  .joyride-content-wrapper .button {
    margin-bottom: 0 !important; }

/* Add a little css triangle pip, older browser just miss out on the fanciness of it */
.joyride-tip-guide .joyride-nub {
  display: block;
  position: absolute;
  left: 22px;
  width: 0;
  height: 0;
  border: 10px solid #333333; }
  .joyride-tip-guide .joyride-nub.top {
    border-top-style: solid;
    border-color: #333333;
    border-top-color: transparent !important;
    border-left-color: transparent !important;
    border-right-color: transparent !important;
    top: -20px; }
  .joyride-tip-guide .joyride-nub.bottom {
    border-bottom-style: solid;
    border-color: #333333 !important;
    border-bottom-color: transparent !important;
    border-left-color: transparent !important;
    border-right-color: transparent !important;
    bottom: -20px; }
  .joyride-tip-guide .joyride-nub.right {
    right: -20px; }
  .joyride-tip-guide .joyride-nub.left {
    left: -20px; }

/* Typography */
.joyride-tip-guide h1,
.joyride-tip-guide h2,
.joyride-tip-guide h3,
.joyride-tip-guide h4,
.joyride-tip-guide h5,
.joyride-tip-guide h6 {
  line-height: 1.25;
  margin: 0;
  font-weight: bold;
  color: white; }

.joyride-tip-guide p {
  margin: 0 0 1.125rem 0;
  font-size: 0.875rem;
  line-height: 1.3; }

.joyride-timer-indicator-wrap {
  width: 50px;
  height: 3px;
  border: solid 1px #555555;
  position: absolute;
  right: 1.0625rem;
  bottom: 1rem; }

.joyride-timer-indicator {
  display: block;
  width: 0;
  height: inherit;
  background: #666666; }

.joyride-close-tip {
  position: absolute;
  right: 12px;
  top: 10px;
  color: #777777 !important;
  text-decoration: none;
  font-size: 24px;
  font-weight: normal;
  line-height: 0.5 !important; }
  .joyride-close-tip:hover, .joyride-close-tip:focus {
    color: #eeeeee !important; }

.joyride-modal-bg {
  position: fixed;
  height: 100%;
  width: 100%;
  background: transparent;
  background: rgba(0, 0, 0, 0.5);
  z-index: 100;
  display: none;
  top: 0;
  left: 0;
  cursor: pointer; }

.joyride-expose-wrapper {
  background-color: #ffffff;
  position: absolute;
  border-radius: 3px;
  z-index: 102;
  -moz-box-shadow: 0 0 30px white;
  -webkit-box-shadow: 0 0 15px white;
  box-shadow: 0 0 15px white; }

.joyride-expose-cover {
  background: transparent;
  border-radius: 3px;
  position: absolute;
  z-index: 9999;
  top: 0;
  left: 0; }

/* Styles for screens that are at least 768px; */
@media only screen and (min-width: 40.063em) {
  .joyride-tip-guide {
    width: 300px;
    left: inherit; }
    .joyride-tip-guide .joyride-nub.bottom {
      border-color: #333333 !important;
      border-bottom-color: transparent !important;
      border-left-color: transparent !important;
      border-right-color: transparent !important;
      bottom: -20px; }
    .joyride-tip-guide .joyride-nub.right {
      border-color: #333333 !important;
      border-top-color: transparent !important;
      border-right-color: transparent !important;
      border-bottom-color: transparent !important;
      top: 22px;
      left: auto;
      right: -20px; }
    .joyride-tip-guide .joyride-nub.left {
      border-color: #333333 !important;
      border-top-color: transparent !important;
      border-left-color: transparent !important;
      border-bottom-color: transparent !important;
      top: 22px;
      left: -20px;
      right: auto; } }
.label {
  font-weight: normal;
  font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
  text-align: center;
  text-decoration: none;
  line-height: 1;
  white-space: nowrap;
  display: inline-block;
  position: relative;
  margin-bottom: inherit;
  padding: 0.25rem 0.5rem 0.375rem;
  font-size: 0.6875rem;
  background-color: #008cba;
  color: white; }
  .label.radius {
    -webkit-border-radius: 3px;
    border-radius: 3px; }
  .label.round {
    -webkit-border-radius: 1000px;
    border-radius: 1000px; }
  .label.alert {
    background-color: #f04124;
    color: white; }
  .label.success {
    background-color: #43ac6a;
    color: white; }
  .label.secondary {
    background-color: #e7e7e7;
    color: #333333; }

.text-left {
  text-align: left !important; }

.text-right {
  text-align: right !important; }

.text-center {
  text-align: center !important; }

.text-justify {
  text-align: justify !important; }

@media only screen and (max-width: 40em) {
  .small-only-text-left {
    text-align: left !important; }

  .small-only-text-right {
    text-align: right !important; }

  .small-only-text-center {
    text-align: center !important; }

  .small-only-text-justify {
    text-align: justify !important; } }
@media only screen {
  .small-text-left {
    text-align: left !important; }

  .small-text-right {
    text-align: right !important; }

  .small-text-center {
    text-align: center !important; }

  .small-text-justify {
    text-align: justify !important; } }
@media only screen and (min-width: 40.063em) and (max-width: 64em) {
  .medium-only-text-left {
    text-align: left !important; }

  .medium-only-text-right {
    text-align: right !important; }

  .medium-only-text-center {
    text-align: center !important; }

  .medium-only-text-justify {
    text-align: justify !important; } }
@media only screen and (min-width: 40.063em) {
  .medium-text-left {
    text-align: left !important; }

  .medium-text-right {
    text-align: right !important; }

  .medium-text-center {
    text-align: center !important; }

  .medium-text-justify {
    text-align: justify !important; } }
@media only screen and (min-width: 64.063em) and (max-width: 90em) {
  .large-only-text-left {
    text-align: left !important; }

  .large-only-text-right {
    text-align: right !important; }

  .large-only-text-center {
    text-align: center !important; }

  .large-only-text-justify {
    text-align: justify !important; } }
@media only screen and (min-width: 64.063em) {
  .large-text-left {
    text-align: left !important; }

  .large-text-right {
    text-align: right !important; }

  .large-text-center {
    text-align: center !important; }

  .large-text-justify {
    text-align: justify !important; } }
@media only screen and (min-width: 90.063em) and (max-width: 120em) {
  .xlarge-only-text-left {
    text-align: left !important; }

  .xlarge-only-text-right {
    text-align: right !important; }

  .xlarge-only-text-center {
    text-align: center !important; }

  .xlarge-only-text-justify {
    text-align: justify !important; } }
@media only screen and (min-width: 90.063em) {
  .xlarge-text-left {
    text-align: left !important; }

  .xlarge-text-right {
    text-align: right !important; }

  .xlarge-text-center {
    text-align: center !important; }

  .xlarge-text-justify {
    text-align: justify !important; } }
@media only screen and (min-width: 120.063em) and (max-width: 99999999em) {
  .xxlarge-only-text-left {
    text-align: left !important; }

  .xxlarge-only-text-right {
    text-align: right !important; }

  .xxlarge-only-text-center {
    text-align: center !important; }

  .xxlarge-only-text-justify {
    text-align: justify !important; } }
@media only screen and (min-width: 120.063em) {
  .xxlarge-text-left {
    text-align: left !important; }

  .xxlarge-text-right {
    text-align: right !important; }

  .xxlarge-text-center {
    text-align: center !important; }

  .xxlarge-text-justify {
    text-align: justify !important; } }
.off-canvas-wrap {
  -webkit-backface-visibility: hidden;
  position: relative;
  width: 100%;
  overflow-x: hidden; }
  .off-canvas-wrap.move-right, .off-canvas-wrap.move-left {
    height: 100%; }

.inner-wrap {
  -webkit-backface-visibility: hidden;
  position: relative;
  width: 100%;
  *zoom: 1;
  -webkit-transition: -webkit-transform 500ms ease;
  -moz-transition: -moz-transform 500ms ease;
  -ms-transition: -ms-transform 500ms ease;
  -o-transition: -o-transform 500ms ease;
  transition: transform 500ms ease; }
  .inner-wrap:before, .inner-wrap:after {
    content: " ";
    display: table; }
  .inner-wrap:after {
    clear: both; }

.tab-bar {
  -webkit-backface-visibility: hidden;
  background: #333333;
  color: white;
  height: 2.8125rem;
  line-height: 2.8125rem;
  position: relative; }
  .tab-bar h1, .tab-bar h2, .tab-bar h3, .tab-bar h4, .tab-bar h5, .tab-bar h6 {
    color: white;
    font-weight: bold;
    line-height: 2.8125rem;
    margin: 0; }
  .tab-bar h1, .tab-bar h2, .tab-bar h3, .tab-bar h4 {
    font-size: 1.125rem; }

.left-small {
  width: 2.8125rem;
  height: 2.8125rem;
  position: absolute;
  top: 0;
  border-right: solid 1px #1a1a1a;
  left: 0; }

.right-small {
  width: 2.8125rem;
  height: 2.8125rem;
  position: absolute;
  top: 0;
  border-left: solid 1px #1a1a1a;
  right: 0; }

.tab-bar-section {
  padding: 0 0.625rem;
  position: absolute;
  text-align: center;
  height: 2.8125rem;
  top: 0; }
  @media only screen and (min-width: 40.063em) {
    .tab-bar-section {
      text-align: left; } }
  .tab-bar-section.left {
    left: 0;
    right: 2.8125rem; }
  .tab-bar-section.right {
    left: 2.8125rem;
    right: 0; }
  .tab-bar-section.middle {
    left: 2.8125rem;
    right: 2.8125rem; }

.tab-bar .menu-icon {
  text-indent: 2.1875rem;
  width: 2.8125rem;
  height: 2.8125rem;
  display: block;
  line-height: 2.0625rem;
  padding: 0;
  color: white;
  position: relative; }
  .tab-bar .menu-icon span {
    position: absolute;
    display: block;
    height: 0;
    width: 1rem;
    top: 0.9375rem;
    left: 0.90625rem;
    -webkit-box-shadow: 1px 0px 1px 1px white, 1px 7px 1px 1px white, 1px 14px 1px 1px white;
    box-shadow: 0 0px 0 1px white, 0 7px 0 1px white, 0 14px 0 1px white; }
  .tab-bar .menu-icon:hover span {
    -webkit-box-shadow: 1px 0px 1px 1px #b3b3b3, 1px 7px 1px 1px #b3b3b3, 1px 14px 1px 1px #b3b3b3;
    box-shadow: 0 0px 0 1px #b3b3b3, 0 7px 0 1px #b3b3b3, 0 14px 0 1px #b3b3b3; }

.left-off-canvas-menu {
  -webkit-backface-visibility: hidden;
  width: 15.625rem;
  top: 0;
  bottom: 0;
  position: absolute;
  overflow-y: auto;
  background: #333333;
  z-index: 1001;
  box-sizing: content-box;
  -webkit-overflow-scrolling: touch;
  -webkit-transform: translate3d(-100%, 0, 0);
  -moz-transform: translate3d(-100%, 0, 0);
  -ms-transform: translate3d(-100%, 0, 0);
  -o-transform: translate3d(-100%, 0, 0);
  transform: translate3d(-100%, 0, 0);
  left: 0; }
  .left-off-canvas-menu * {
    -webkit-backface-visibility: hidden; }

.right-off-canvas-menu {
  -webkit-backface-visibility: hidden;
  width: 15.625rem;
  top: 0;
  bottom: 0;
  position: absolute;
  overflow-y: auto;
  background: #333333;
  z-index: 1001;
  box-sizing: content-box;
  -webkit-overflow-scrolling: touch;
  -webkit-transform: translate3d(100%, 0, 0);
  -moz-transform: translate3d(100%, 0, 0);
  -ms-transform: translate3d(100%, 0, 0);
  -o-transform: translate3d(100%, 0, 0);
  transform: translate3d(100%, 0, 0);
  right: 0; }
  .right-off-canvas-menu * {
    -webkit-backface-visibility: hidden; }

ul.off-canvas-list {
  list-style-type: none;
  padding: 0;
  margin: 0; }
  ul.off-canvas-list li label {
    padding: 0.3rem 0.9375rem;
    color: #999999;
    text-transform: uppercase;
    font-weight: bold;
    background: #444444;
    border-top: 1px solid #5e5e5e;
    border-bottom: none;
    margin: 0; }
  ul.off-canvas-list li a {
    display: block;
    padding: 0.66667rem;
    color: rgba(255, 255, 255, 0.7);
    border-bottom: 1px solid #262626;
    transition: background 300ms ease; }
    ul.off-canvas-list li a:hover {
      background: #242424; }

.move-right > .inner-wrap {
  -webkit-transform: translate3d(15.625rem, 0, 0);
  -moz-transform: translate3d(15.625rem, 0, 0);
  -ms-transform: translate3d(15.625rem, 0, 0);
  -o-transform: translate3d(15.625rem, 0, 0);
  transform: translate3d(15.625rem, 0, 0); }
.move-right .exit-off-canvas {
  -webkit-backface-visibility: hidden;
  transition: background 300ms ease;
  cursor: pointer;
  box-shadow: -4px 0 4px rgba(0, 0, 0, 0.5), 4px 0 4px rgba(0, 0, 0, 0.5);
  display: block;
  position: absolute;
  background: rgba(255, 255, 255, 0.2);
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 1002;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0); }
  @media only screen and (min-width: 40.063em) {
    .move-right .exit-off-canvas:hover {
      background: rgba(255, 255, 255, 0.05); } }

.move-left > .inner-wrap {
  -webkit-transform: translate3d(-15.625rem, 0, 0);
  -moz-transform: translate3d(-15.625rem, 0, 0);
  -ms-transform: translate3d(-15.625rem, 0, 0);
  -o-transform: translate3d(-15.625rem, 0, 0);
  transform: translate3d(-15.625rem, 0, 0); }
.move-left .exit-off-canvas {
  -webkit-backface-visibility: hidden;
  transition: background 300ms ease;
  cursor: pointer;
  box-shadow: -4px 0 4px rgba(0, 0, 0, 0.5), 4px 0 4px rgba(0, 0, 0, 0.5);
  display: block;
  position: absolute;
  background: rgba(255, 255, 255, 0.2);
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 1002;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0); }
  @media only screen and (min-width: 40.063em) {
    .move-left .exit-off-canvas:hover {
      background: rgba(255, 255, 255, 0.05); } }

.csstransforms.no-csstransforms3d .left-off-canvas-menu {
  -webkit-transform: translate(-100%, 0);
  -moz-transform: translate(-100%, 0);
  -ms-transform: translate(-100%, 0);
  -o-transform: translate(-100%, 0);
  transform: translate(-100%, 0); }
.csstransforms.no-csstransforms3d .right-off-canvas-menu {
  -webkit-transform: translate(100%, 0);
  -moz-transform: translate(100%, 0);
  -ms-transform: translate(100%, 0);
  -o-transform: translate(100%, 0);
  transform: translate(100%, 0); }
.csstransforms.no-csstransforms3d .move-left > .inner-wrap {
  -webkit-transform: translate(-15.625rem, 0);
  -moz-transform: translate(-15.625rem, 0);
  -ms-transform: translate(-15.625rem, 0);
  -o-transform: translate(-15.625rem, 0);
  transform: translate(-15.625rem, 0); }
.csstransforms.no-csstransforms3d .move-right > .inner-wrap {
  -webkit-transform: translate(15.625rem, 0);
  -moz-transform: translate(15.625rem, 0);
  -ms-transform: translate(15.625rem, 0);
  -o-transform: translate(15.625rem, 0);
  transform: translate(15.625rem, 0); }

.no-csstransforms .left-off-canvas-menu {
  left: -15.625rem; }
.no-csstransforms .right-off-canvas-menu {
  right: -15.625rem; }
.no-csstransforms .move-left > .inner-wrap {
  right: 15.625rem; }
.no-csstransforms .move-right > .inner-wrap {
  left: 15.625rem; }

/* Foundation Dropdowns */
.f-dropdown {
  position: absolute;
  left: -9999px;
  list-style: none;
  margin-left: 0;
  width: 100%;
  max-height: none;
  height: auto;
  background: white;
  border: solid 1px #cccccc;
  font-size: 0.875rem;
  z-index: 99;
  margin-top: 2px;
  max-width: 200px; }
  .f-dropdown > *:first-child {
    margin-top: 0; }
  .f-dropdown > *:last-child {
    margin-bottom: 0; }
  .f-dropdown:before {
    content: "";
    display: block;
    width: 0;
    height: 0;
    border: inset 6px;
    border-color: transparent transparent white transparent;
    border-bottom-style: solid;
    position: absolute;
    top: -12px;
    left: 10px;
    z-index: 99; }
  .f-dropdown:after {
    content: "";
    display: block;
    width: 0;
    height: 0;
    border: inset 7px;
    border-color: transparent transparent #cccccc transparent;
    border-bottom-style: solid;
    position: absolute;
    top: -14px;
    left: 9px;
    z-index: 98; }
  .f-dropdown.right:before {
    left: auto;
    right: 10px; }
  .f-dropdown.right:after {
    left: auto;
    right: 9px; }
  .f-dropdown.drop-right {
    position: absolute;
    left: -9999px;
    list-style: none;
    margin-left: 0;
    width: 100%;
    max-height: none;
    height: auto;
    background: white;
    border: solid 1px #cccccc;
    font-size: 0.875rem;
    z-index: 99;
    margin-top: 0;
    margin-left: 2px;
    max-width: 200px; }
    .f-dropdown.drop-right > *:first-child {
      margin-top: 0; }
    .f-dropdown.drop-right > *:last-child {
      margin-bottom: 0; }
    .f-dropdown.drop-right:before {
      content: "";
      display: block;
      width: 0;
      height: 0;
      border: inset 6px;
      border-color: transparent white transparent transparent;
      border-right-style: solid;
      position: absolute;
      top: 10px;
      left: -12px;
      z-index: 99; }
    .f-dropdown.drop-right:after {
      content: "";
      display: block;
      width: 0;
      height: 0;
      border: inset 7px;
      border-color: transparent #cccccc transparent transparent;
      border-right-style: solid;
      position: absolute;
      top: 9px;
      left: -14px;
      z-index: 98; }
  .f-dropdown.drop-left {
    position: absolute;
    left: -9999px;
    list-style: none;
    margin-left: 0;
    width: 100%;
    max-height: none;
    height: auto;
    background: white;
    border: solid 1px #cccccc;
    font-size: 0.875rem;
    z-index: 99;
    margin-top: 0;
    margin-left: -2px;
    max-width: 200px; }
    .f-dropdown.drop-left > *:first-child {
      margin-top: 0; }
    .f-dropdown.drop-left > *:last-child {
      margin-bottom: 0; }
    .f-dropdown.drop-left:before {
      content: "";
      display: block;
      width: 0;
      height: 0;
      border: inset 6px;
      border-color: transparent transparent transparent white;
      border-left-style: solid;
      position: absolute;
      top: 10px;
      right: -12px;
      left: auto;
      z-index: 99; }
    .f-dropdown.drop-left:after {
      content: "";
      display: block;
      width: 0;
      height: 0;
      border: inset 7px;
      border-color: transparent transparent transparent #cccccc;
      border-left-style: solid;
      position: absolute;
      top: 9px;
      right: -14px;
      left: auto;
      z-index: 98; }
  .f-dropdown.drop-top {
    position: absolute;
    left: -9999px;
    list-style: none;
    margin-left: 0;
    width: 100%;
    max-height: none;
    height: auto;
    background: white;
    border: solid 1px #cccccc;
    font-size: 0.875rem;
    z-index: 99;
    margin-top: -2px;
    margin-left: 0;
    max-width: 200px; }
    .f-dropdown.drop-top > *:first-child {
      margin-top: 0; }
    .f-dropdown.drop-top > *:last-child {
      margin-bottom: 0; }
    .f-dropdown.drop-top:before {
      content: "";
      display: block;
      width: 0;
      height: 0;
      border: inset 6px;
      border-color: white transparent transparent transparent;
      border-top-style: solid;
      position: absolute;
      top: auto;
      bottom: -12px;
      left: 10px;
      right: auto;
      z-index: 99; }
    .f-dropdown.drop-top:after {
      content: "";
      display: block;
      width: 0;
      height: 0;
      border: inset 7px;
      border-color: #cccccc transparent transparent transparent;
      border-top-style: solid;
      position: absolute;
      top: auto;
      bottom: -14px;
      left: 9px;
      right: auto;
      z-index: 98; }
  .f-dropdown li {
    font-size: 0.875rem;
    cursor: pointer;
    line-height: 1.125rem;
    margin: 0; }
    .f-dropdown li:hover, .f-dropdown li:focus {
      background: #eeeeee; }
    .f-dropdown li a {
      display: block;
      padding: 0.5rem;
      color: #555555; }
  .f-dropdown.content {
    position: absolute;
    left: -9999px;
    list-style: none;
    margin-left: 0;
    padding: 1.25rem;
    width: 100%;
    height: auto;
    max-height: none;
    background: white;
    border: solid 1px #cccccc;
    font-size: 0.875rem;
    z-index: 99;
    max-width: 200px; }
    .f-dropdown.content > *:first-child {
      margin-top: 0; }
    .f-dropdown.content > *:last-child {
      margin-bottom: 0; }
  .f-dropdown.tiny {
    max-width: 200px; }
  .f-dropdown.small {
    max-width: 300px; }
  .f-dropdown.medium {
    max-width: 500px; }
  .f-dropdown.large {
    max-width: 800px; }

table {
  background: white;
  margin-bottom: 1.25rem;
  border: solid 1px #dddddd; }
  table thead,
  table tfoot {
    background: whitesmoke; }
    table thead tr th,
    table thead tr td,
    table tfoot tr th,
    table tfoot tr td {
      padding: 0.5rem 0.625rem 0.625rem;
      font-size: 0.875rem;
      font-weight: bold;
      color: #222222;
      text-align: left; }
  table tr th,
  table tr td {
    padding: 0.5625rem 0.625rem;
    font-size: 0.875rem;
    color: #222222; }
  table tr.even, table tr.alt, table tr:nth-of-type(even) {
    background: #f9f9f9; }
  table thead tr th,
  table tfoot tr th,
  table tbody tr td,
  table tr td,
  table tfoot tr td {
    display: table-cell;
    line-height: 1.125rem; }

/* Standard Forms */
form {
  margin: 0 0 1rem; }

/* Using forms within rows, we need to set some defaults */
form .row .row {
  margin: 0 -0.5rem; }
  form .row .row .column,
  form .row .row .columns {
    padding: 0 0.5rem; }
  form .row .row.collapse {
    margin: 0; }
    form .row .row.collapse .column,
    form .row .row.collapse .columns {
      padding: 0; }
    form .row .row.collapse input {
      -moz-border-radius-bottomright: 0;
      -moz-border-radius-topright: 0;
      -webkit-border-bottom-right-radius: 0;
      -webkit-border-top-right-radius: 0; }
form .row input.column,
form .row input.columns,
form .row textarea.column,
form .row textarea.columns {
  padding-left: 0.5rem; }

/* Label Styles */
label {
  font-size: 0.875rem;
  color: #4d4d4d;
  cursor: pointer;
  display: block;
  font-weight: normal;
  line-height: 1.5;
  margin-bottom: 0;
  /* Styles for required inputs */ }
  label.right {
    float: none;
    text-align: right; }
  label.inline {
    margin: 0 0 1rem 0;
    padding: 0.625rem 0; }
  label small {
    text-transform: capitalize;
    color: #676767; }

select {
  -webkit-appearance: none !important;
  background-color: #fafafa;
  background-image: url("data:image/svg+xml;base64, PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSI2cHgiIGhlaWdodD0iM3B4IiB2aWV3Qm94PSIwIDAgNiAzIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA2IDMiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxwb2x5Z29uIHBvaW50cz0iNS45OTIsMCAyLjk5MiwzIC0wLjAwOCwwICIvPjwvc3ZnPg==");
  background-repeat: no-repeat;
  background-position: 97% center;
  border: 1px solid #cccccc;
  padding: 0.5rem;
  font-size: 0.875rem;
  -webkit-border-radius: 0;
  border-radius: 0; }
  select.radius {
    -webkit-border-radius: 3px;
    border-radius: 3px; }
  select:hover {
    background-color: #f3f3f3;
    border-color: #999999; }

select::-ms-expand {
  display: none; }

@-moz-document url-prefix() {
  select {
    background: #fafafa; }

  select:hover {
    background: #f3f3f3; } }

/* Attach elements to the beginning or end of an input */
.prefix,
.postfix {
  display: block;
  position: relative;
  z-index: 2;
  text-align: center;
  width: 100%;
  padding-top: 0;
  padding-bottom: 0;
  border-style: solid;
  border-width: 1px;
  overflow: hidden;
  font-size: 0.875rem;
  height: 2.3125rem;
  line-height: 2.3125rem; }

/* Adjust padding, alignment and radius if pre/post element is a button */
.postfix.button {
  padding-left: 0;
  padding-right: 0;
  padding-top: 0;
  padding-bottom: 0;
  text-align: center;
  line-height: 2.125rem;
  border: none; }

.prefix.button {
  padding-left: 0;
  padding-right: 0;
  padding-top: 0;
  padding-bottom: 0;
  text-align: center;
  line-height: 2.125rem;
  border: none; }

.prefix.button.radius {
  -webkit-border-radius: 0;
  border-radius: 0;
  -moz-border-radius-bottomleft: 3px;
  -moz-border-radius-topleft: 3px;
  -webkit-border-bottom-left-radius: 3px;
  -webkit-border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
  border-top-left-radius: 3px; }

.postfix.button.radius {
  -webkit-border-radius: 0;
  border-radius: 0;
  -moz-border-radius-bottomright: 3px;
  -moz-border-radius-topright: 3px;
  -webkit-border-bottom-right-radius: 3px;
  -webkit-border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
  border-top-right-radius: 3px; }

.prefix.button.round {
  -webkit-border-radius: 0;
  border-radius: 0;
  -moz-border-radius-bottomleft: 1000px;
  -moz-border-radius-topleft: 1000px;
  -webkit-border-bottom-left-radius: 1000px;
  -webkit-border-top-left-radius: 1000px;
  border-bottom-left-radius: 1000px;
  border-top-left-radius: 1000px; }

.postfix.button.round {
  -webkit-border-radius: 0;
  border-radius: 0;
  -moz-border-radius-bottomright: 1000px;
  -moz-border-radius-topright: 1000px;
  -webkit-border-bottom-right-radius: 1000px;
  -webkit-border-top-right-radius: 1000px;
  border-bottom-right-radius: 1000px;
  border-top-right-radius: 1000px; }

/* Separate prefix and postfix styles when on span or label so buttons keep their own */
span.prefix, label.prefix {
  background: #f2f2f2;
  border-right: none;
  color: #333333;
  border-color: #cccccc; }
  span.prefix.radius, label.prefix.radius {
    -webkit-border-radius: 0;
    border-radius: 0;
    -moz-border-radius-bottomleft: 3px;
    -moz-border-radius-topleft: 3px;
    -webkit-border-bottom-left-radius: 3px;
    -webkit-border-top-left-radius: 3px;
    border-bottom-left-radius: 3px;
    border-top-left-radius: 3px; }

span.postfix, label.postfix {
  background: #f2f2f2;
  border-left: none;
  color: #333333;
  border-color: #cccccc; }
  span.postfix.radius, label.postfix.radius {
    -webkit-border-radius: 0;
    border-radius: 0;
    -moz-border-radius-bottomright: 3px;
    -moz-border-radius-topright: 3px;
    -webkit-border-bottom-right-radius: 3px;
    -webkit-border-top-right-radius: 3px;
    border-bottom-right-radius: 3px;
    border-top-right-radius: 3px; }

/* We use this to get basic styling on all basic form elements */
input[type="text"],
input[type="password"],
input[type="date"],
input[type="datetime"],
input[type="datetime-local"],
input[type="month"],
input[type="week"],
input[type="email"],
input[type="number"],
input[type="search"],
input[type="tel"],
input[type="time"],
input[type="url"],
textarea {
  -webkit-appearance: none;
  background-color: white;
  font-family: inherit;
  border: 1px solid #cccccc;
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
  color: rgba(0, 0, 0, 0.75);
  display: block;
  font-size: 0.875rem;
  margin: 0 0 1rem 0;
  padding: 0.5rem;
  height: 2.3125rem;
  width: 100%;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: -webkit-box-shadow 0.45s, border-color 0.45s ease-in-out;
  -moz-transition: -moz-box-shadow 0.45s, border-color 0.45s ease-in-out;
  transition: box-shadow 0.45s, border-color 0.45s ease-in-out; }
  input[type="text"]:focus,
  input[type="password"]:focus,
  input[type="date"]:focus,
  input[type="datetime"]:focus,
  input[type="datetime-local"]:focus,
  input[type="month"]:focus,
  input[type="week"]:focus,
  input[type="email"]:focus,
  input[type="number"]:focus,
  input[type="search"]:focus,
  input[type="tel"]:focus,
  input[type="time"]:focus,
  input[type="url"]:focus,
  textarea:focus {
    -webkit-box-shadow: 0 0 5px #999999;
    -moz-box-shadow: 0 0 5px #999999;
    box-shadow: 0 0 5px #999999;
    border-color: #999999; }
  input[type="text"]:focus,
  input[type="password"]:focus,
  input[type="date"]:focus,
  input[type="datetime"]:focus,
  input[type="datetime-local"]:focus,
  input[type="month"]:focus,
  input[type="week"]:focus,
  input[type="email"]:focus,
  input[type="number"]:focus,
  input[type="search"]:focus,
  input[type="tel"]:focus,
  input[type="time"]:focus,
  input[type="url"]:focus,
  textarea:focus {
    background: #fafafa;
    border-color: #999999;
    outline: none; }
  input[type="text"][disabled], fieldset[disabled] input[type="text"],
  input[type="password"][disabled], fieldset[disabled]
  input[type="password"],
  input[type="date"][disabled], fieldset[disabled]
  input[type="date"],
  input[type="datetime"][disabled], fieldset[disabled]
  input[type="datetime"],
  input[type="datetime-local"][disabled], fieldset[disabled]
  input[type="datetime-local"],
  input[type="month"][disabled], fieldset[disabled]
  input[type="month"],
  input[type="week"][disabled], fieldset[disabled]
  input[type="week"],
  input[type="email"][disabled], fieldset[disabled]
  input[type="email"],
  input[type="number"][disabled], fieldset[disabled]
  input[type="number"],
  input[type="search"][disabled], fieldset[disabled]
  input[type="search"],
  input[type="tel"][disabled], fieldset[disabled]
  input[type="tel"],
  input[type="time"][disabled], fieldset[disabled]
  input[type="time"],
  input[type="url"][disabled], fieldset[disabled]
  input[type="url"],
  textarea[disabled], fieldset[disabled]
  textarea {
    background-color: #dddddd; }
  input[type="text"].radius,
  input[type="password"].radius,
  input[type="date"].radius,
  input[type="datetime"].radius,
  input[type="datetime-local"].radius,
  input[type="month"].radius,
  input[type="week"].radius,
  input[type="email"].radius,
  input[type="number"].radius,
  input[type="search"].radius,
  input[type="tel"].radius,
  input[type="time"].radius,
  input[type="url"].radius,
  textarea.radius {
    -webkit-border-radius: 3px;
    border-radius: 3px; }

/* Respect enforced amount of rows for textarea */
textarea[rows] {
  height: auto; }

/* Add height value for select elements to match text input height */
select {
  height: 2.3125rem; }

/* Adjust margin for form elements below */
input[type="file"],
input[type="checkbox"],
input[type="radio"],
select {
  margin: 0 0 1rem 0; }

input[type="checkbox"] + label,
input[type="radio"] + label {
  display: inline-block;
  margin-left: 0.5rem;
  margin-right: 1rem;
  margin-bottom: 0;
  vertical-align: baseline; }

/* Normalize file input width */
input[type="file"] {
  width: 100%; }

/* We add basic fieldset styling */
fieldset {
  border: 1px solid #dddddd;
  padding: 1.25rem;
  margin: 1.125rem 0; }
  fieldset legend {
    font-weight: bold;
    background: white;
    padding: 0 0.1875rem;
    margin: 0;
    margin-left: -0.1875rem; }

/* Error Handling */
[data-abide] .error small.error, [data-abide] span.error, [data-abide] small.error {
  display: block;
  padding: 0.375rem 0.5625rem 0.5625rem;
  margin-top: -1px;
  margin-bottom: 1rem;
  font-size: 0.75rem;
  font-weight: normal;
  font-style: italic;
  background: #f04124;
  color: white; }
[data-abide] span.error, [data-abide] small.error {
  display: none; }

span.error, small.error {
  display: block;
  padding: 0.375rem 0.5625rem 0.5625rem;
  margin-top: -1px;
  margin-bottom: 1rem;
  font-size: 0.75rem;
  font-weight: normal;
  font-style: italic;
  background: #f04124;
  color: white; }

.error input,
.error textarea,
.error select {
  margin-bottom: 0; }
.error input[type="checkbox"],
.error input[type="radio"] {
  margin-bottom: 1rem; }
.error label,
.error label.error {
  color: #f04124; }
.error small.error {
  display: block;
  padding: 0.375rem 0.5625rem 0.5625rem;
  margin-top: -1px;
  margin-bottom: 1rem;
  font-size: 0.75rem;
  font-weight: normal;
  font-style: italic;
  background: #f04124;
  color: white; }
.error > label > small {
  color: #676767;
  background: transparent;
  padding: 0;
  text-transform: capitalize;
  font-style: normal;
  font-size: 60%;
  margin: 0;
  display: inline; }
.error span.error-message {
  display: block; }

input.error,
textarea.error {
  margin-bottom: 0; }

label.error {
  color: #f04124; }

.range-slider {
  display: block;
  position: relative;
  width: 100%;
  height: 1rem;
  border: 1px solid #dddddd;
  margin: 1.25rem 0;
  touch-action: none;
  -ms-touch-action: none;
  background: #fafafa; }
  .range-slider.vertical-range {
    display: block;
    position: relative;
    width: 100%;
    height: 1rem;
    border: 1px solid #dddddd;
    margin: 1.25rem 0;
    touch-action: none;
    -ms-touch-action: none;
    display: inline-block;
    width: 1rem;
    height: 12.5rem; }
    .range-slider.vertical-range .range-slider-handle {
      margin-top: 0;
      margin-left: -0.5rem;
      position: absolute;
      bottom: -10.5rem; }
    .range-slider.vertical-range .range-slider-active-segment {
      width: 0.875rem;
      height: auto;
      bottom: 0; }
  .range-slider.radius {
    background: #fafafa;
    -webkit-border-radius: 3px;
    border-radius: 3px; }
    .range-slider.radius .range-slider-handle {
      background: #008cba;
      -webkit-border-radius: 3px;
      border-radius: 3px; }
      .range-slider.radius .range-slider-handle:hover {
        background: #007ba4; }
  .range-slider.round {
    background: #fafafa;
    -webkit-border-radius: 1000px;
    border-radius: 1000px; }
    .range-slider.round .range-slider-handle {
      background: #008cba;
      -webkit-border-radius: 1000px;
      border-radius: 1000px; }
      .range-slider.round .range-slider-handle:hover {
        background: #007ba4; }

.range-slider-active-segment {
  display: inline-block;
  position: absolute;
  height: 0.875rem;
  background: #e5e5e5; }

.range-slider-handle {
  display: inline-block;
  position: absolute;
  z-index: 1;
  top: -0.3125rem;
  width: 2rem;
  height: 1.375rem;
  border: 1px solid none;
  cursor: pointer;
  background: #008cba; }
  .range-slider-handle:hover {
    background: #007ba4; }

[class*="block-grid-"] {
  display: block;
  padding: 0;
  margin: 0;
  *zoom: 1; }
  [class*="block-grid-"]:before, [class*="block-grid-"]:after {
    content: " ";
    display: table; }
  [class*="block-grid-"]:after {
    clear: both; }
  [class*="block-grid-"] > li {
    display: block;
    height: auto;
    float: left;
    padding: 0 0.9375rem 1.875rem; }

@media only screen {
  .small-block-grid-1 > li {
    width: 100%;
    list-style: none; }
    .small-block-grid-1 > li:nth-of-type(n) {
      clear: none; }
    .small-block-grid-1 > li:nth-of-type(1n+1) {
      clear: both; }
    .small-block-grid-1 > li:nth-child(1n) {
      padding-left: 0rem;
      padding-right: 0rem; }

  .small-block-grid-2 > li {
    width: 50%;
    list-style: none; }
    .small-block-grid-2 > li:nth-of-type(n) {
      clear: none; }
    .small-block-grid-2 > li:nth-of-type(2n+1) {
      clear: both; }
    .small-block-grid-2 > li:nth-child(2n+1) {
      padding-left: 0rem;
      padding-right: 0.9375rem; }
    .small-block-grid-2 > li:nth-child(2n) {
      padding-left: 0.9375rem;
      padding-right: 0rem; }

  .small-block-grid-3 > li {
    width: 33.33333%;
    list-style: none; }
    .small-block-grid-3 > li:nth-of-type(n) {
      clear: none; }
    .small-block-grid-3 > li:nth-of-type(3n+1) {
      clear: both; }
    .small-block-grid-3 > li:nth-child(3n+1) {
      padding-left: 0rem;
      padding-right: 1.25rem; }
    .small-block-grid-3 > li:nth-child(3n+2) {
      padding-left: 0.625rem;
      padding-right: 0.625rem; }
    .small-block-grid-3 > li:nth-child(3n) {
      padding-left: 1.25rem;
      padding-right: 0rem; }

  .small-block-grid-4 > li {
    width: 25%;
    list-style: none; }
    .small-block-grid-4 > li:nth-of-type(n) {
      clear: none; }
    .small-block-grid-4 > li:nth-of-type(4n+1) {
      clear: both; }
    .small-block-grid-4 > li:nth-child(4n+1) {
      padding-left: 0rem;
      padding-right: 1.40625rem; }
    .small-block-grid-4 > li:nth-child(4n+2) {
      padding-left: 0.46875rem;
      padding-right: 0.9375rem; }
    .small-block-grid-4 > li:nth-child(4n+3) {
      padding-left: 0.9375rem;
      padding-right: 0.46875rem; }
    .small-block-grid-4 > li:nth-child(4n) {
      padding-left: 1.40625rem;
      padding-right: 0rem; }

  .small-block-grid-5 > li {
    width: 20%;
    list-style: none; }
    .small-block-grid-5 > li:nth-of-type(n) {
      clear: none; }
    .small-block-grid-5 > li:nth-of-type(5n+1) {
      clear: both; }
    .small-block-grid-5 > li:nth-child(5n+1) {
      padding-left: 0rem;
      padding-right: 1.5rem; }
    .small-block-grid-5 > li:nth-child(5n+2) {
      padding-left: 0.375rem;
      padding-right: 1.125rem; }
    .small-block-grid-5 > li:nth-child(5n+3) {
      padding-left: 0.75rem;
      padding-right: 0.75rem; }
    .small-block-grid-5 > li:nth-child(5n+4) {
      padding-left: 1.125rem;
      padding-right: 0.375rem; }
    .small-block-grid-5 > li:nth-child(5n) {
      padding-left: 1.5rem;
      padding-right: 0rem; }

  .small-block-grid-6 > li {
    width: 16.66667%;
    list-style: none; }
    .small-block-grid-6 > li:nth-of-type(n) {
      clear: none; }
    .small-block-grid-6 > li:nth-of-type(6n+1) {
      clear: both; }
    .small-block-grid-6 > li:nth-child(6n+1) {
      padding-left: 0rem;
      padding-right: 1.5625rem; }
    .small-block-grid-6 > li:nth-child(6n+2) {
      padding-left: 0.3125rem;
      padding-right: 1.25rem; }
    .small-block-grid-6 > li:nth-child(6n+3) {
      padding-left: 0.625rem;
      padding-right: 0.9375rem; }
    .small-block-grid-6 > li:nth-child(6n+4) {
      padding-left: 0.9375rem;
      padding-right: 0.625rem; }
    .small-block-grid-6 > li:nth-child(6n+5) {
      padding-left: 1.25rem;
      padding-right: 0.3125rem; }
    .small-block-grid-6 > li:nth-child(6n) {
      padding-left: 1.5625rem;
      padding-right: 0rem; }

  .small-block-grid-7 > li {
    width: 14.28571%;
    list-style: none; }
    .small-block-grid-7 > li:nth-of-type(n) {
      clear: none; }
    .small-block-grid-7 > li:nth-of-type(7n+1) {
      clear: both; }
    .small-block-grid-7 > li:nth-child(7n+1) {
      padding-left: 0rem;
      padding-right: 1.60714rem; }
    .small-block-grid-7 > li:nth-child(7n+2) {
      padding-left: 0.26786rem;
      padding-right: 1.33929rem; }
    .small-block-grid-7 > li:nth-child(7n+3) {
      padding-left: 0.53571rem;
      padding-right: 1.07143rem; }
    .small-block-grid-7 > li:nth-child(7n+4) {
      padding-left: 0.80357rem;
      padding-right: 0.80357rem; }
    .small-block-grid-7 > li:nth-child(7n+5) {
      padding-left: 1.07143rem;
      padding-right: 0.53571rem; }
    .small-block-grid-7 > li:nth-child(7n+6) {
      padding-left: 1.33929rem;
      padding-right: 0.26786rem; }
    .small-block-grid-7 > li:nth-child(7n) {
      padding-left: 1.60714rem;
      padding-right: 0rem; }

  .small-block-grid-8 > li {
    width: 12.5%;
    list-style: none; }
    .small-block-grid-8 > li:nth-of-type(n) {
      clear: none; }
    .small-block-grid-8 > li:nth-of-type(8n+1) {
      clear: both; }
    .small-block-grid-8 > li:nth-child(8n+1) {
      padding-left: 0rem;
      padding-right: 1.64063rem; }
    .small-block-grid-8 > li:nth-child(8n+2) {
      padding-left: 0.23438rem;
      padding-right: 1.40625rem; }
    .small-block-grid-8 > li:nth-child(8n+3) {
      padding-left: 0.46875rem;
      padding-right: 1.17188rem; }
    .small-block-grid-8 > li:nth-child(8n+4) {
      padding-left: 0.70313rem;
      padding-right: 0.9375rem; }
    .small-block-grid-8 > li:nth-child(8n+5) {
      padding-left: 0.9375rem;
      padding-right: 0.70313rem; }
    .small-block-grid-8 > li:nth-child(8n+6) {
      padding-left: 1.17188rem;
      padding-right: 0.46875rem; }
    .small-block-grid-8 > li:nth-child(8n+7) {
      padding-left: 1.40625rem;
      padding-right: 0.23438rem; }
    .small-block-grid-8 > li:nth-child(8n) {
      padding-left: 1.64063rem;
      padding-right: 0rem; }

  .small-block-grid-9 > li {
    width: 11.11111%;
    list-style: none; }
    .small-block-grid-9 > li:nth-of-type(n) {
      clear: none; }
    .small-block-grid-9 > li:nth-of-type(9n+1) {
      clear: both; }
    .small-block-grid-9 > li:nth-child(9n+1) {
      padding-left: 0rem;
      padding-right: 1.66667rem; }
    .small-block-grid-9 > li:nth-child(9n+2) {
      padding-left: 0.20833rem;
      padding-right: 1.45833rem; }
    .small-block-grid-9 > li:nth-child(9n+3) {
      padding-left: 0.41667rem;
      padding-right: 1.25rem; }
    .small-block-grid-9 > li:nth-child(9n+4) {
      padding-left: 0.625rem;
      padding-right: 1.04167rem; }
    .small-block-grid-9 > li:nth-child(9n+5) {
      padding-left: 0.83333rem;
      padding-right: 0.83333rem; }
    .small-block-grid-9 > li:nth-child(9n+6) {
      padding-left: 1.04167rem;
      padding-right: 0.625rem; }
    .small-block-grid-9 > li:nth-child(9n+7) {
      padding-left: 1.25rem;
      padding-right: 0.41667rem; }
    .small-block-grid-9 > li:nth-child(9n+8) {
      padding-left: 1.45833rem;
      padding-right: 0.20833rem; }
    .small-block-grid-9 > li:nth-child(9n) {
      padding-left: 1.66667rem;
      padding-right: 0rem; }

  .small-block-grid-10 > li {
    width: 10%;
    list-style: none; }
    .small-block-grid-10 > li:nth-of-type(n) {
      clear: none; }
    .small-block-grid-10 > li:nth-of-type(10n+1) {
      clear: both; }
    .small-block-grid-10 > li:nth-child(10n+1) {
      padding-left: 0rem;
      padding-right: 1.6875rem; }
    .small-block-grid-10 > li:nth-child(10n+2) {
      padding-left: 0.1875rem;
      padding-right: 1.5rem; }
    .small-block-grid-10 > li:nth-child(10n+3) {
      padding-left: 0.375rem;
      padding-right: 1.3125rem; }
    .small-block-grid-10 > li:nth-child(10n+4) {
      padding-left: 0.5625rem;
      padding-right: 1.125rem; }
    .small-block-grid-10 > li:nth-child(10n+5) {
      padding-left: 0.75rem;
      padding-right: 0.9375rem; }
    .small-block-grid-10 > li:nth-child(10n+6) {
      padding-left: 0.9375rem;
      padding-right: 0.75rem; }
    .small-block-grid-10 > li:nth-child(10n+7) {
      padding-left: 1.125rem;
      padding-right: 0.5625rem; }
    .small-block-grid-10 > li:nth-child(10n+8) {
      padding-left: 1.3125rem;
      padding-right: 0.375rem; }
    .small-block-grid-10 > li:nth-child(10n+9) {
      padding-left: 1.5rem;
      padding-right: 0.1875rem; }
    .small-block-grid-10 > li:nth-child(10n) {
      padding-left: 1.6875rem;
      padding-right: 0rem; }

  .small-block-grid-11 > li {
    width: 9.09091%;
    list-style: none; }
    .small-block-grid-11 > li:nth-of-type(n) {
      clear: none; }
    .small-block-grid-11 > li:nth-of-type(11n+1) {
      clear: both; }
    .small-block-grid-11 > li:nth-child(11n+1) {
      padding-left: 0.0rem;
      padding-right: 1.70455rem; }
    .small-block-grid-11 > li:nth-child(11n+2) {
      padding-left: 0.17045rem;
      padding-right: 1.53409rem; }
    .small-block-grid-11 > li:nth-child(11n+3) {
      padding-left: 0.34091rem;
      padding-right: 1.36364rem; }
    .small-block-grid-11 > li:nth-child(11n+4) {
      padding-left: 0.51136rem;
      padding-right: 1.19318rem; }
    .small-block-grid-11 > li:nth-child(11n+5) {
      padding-left: 0.68182rem;
      padding-right: 1.02273rem; }
    .small-block-grid-11 > li:nth-child(11n+6) {
      padding-left: 0.85227rem;
      padding-right: 0.85227rem; }
    .small-block-grid-11 > li:nth-child(11n+7) {
      padding-left: 1.02273rem;
      padding-right: 0.68182rem; }
    .small-block-grid-11 > li:nth-child(11n+8) {
      padding-left: 1.19318rem;
      padding-right: 0.51136rem; }
    .small-block-grid-11 > li:nth-child(11n+9) {
      padding-left: 1.36364rem;
      padding-right: 0.34091rem; }
    .small-block-grid-11 > li:nth-child(11n+10) {
      padding-left: 1.53409rem;
      padding-right: 0.17045rem; }
    .small-block-grid-11 > li:nth-child(11n) {
      padding-left: 1.70455rem;
      padding-right: 0.0rem; }

  .small-block-grid-12 > li {
    width: 8.33333%;
    list-style: none; }
    .small-block-grid-12 > li:nth-of-type(n) {
      clear: none; }
    .small-block-grid-12 > li:nth-of-type(12n+1) {
      clear: both; }
    .small-block-grid-12 > li:nth-child(12n+1) {
      padding-left: 0rem;
      padding-right: 1.71875rem; }
    .small-block-grid-12 > li:nth-child(12n+2) {
      padding-left: 0.15625rem;
      padding-right: 1.5625rem; }
    .small-block-grid-12 > li:nth-child(12n+3) {
      padding-left: 0.3125rem;
      padding-right: 1.40625rem; }
    .small-block-grid-12 > li:nth-child(12n+4) {
      padding-left: 0.46875rem;
      padding-right: 1.25rem; }
    .small-block-grid-12 > li:nth-child(12n+5) {
      padding-left: 0.625rem;
      padding-right: 1.09375rem; }
    .small-block-grid-12 > li:nth-child(12n+6) {
      padding-left: 0.78125rem;
      padding-right: 0.9375rem; }
    .small-block-grid-12 > li:nth-child(12n+7) {
      padding-left: 0.9375rem;
      padding-right: 0.78125rem; }
    .small-block-grid-12 > li:nth-child(12n+8) {
      padding-left: 1.09375rem;
      padding-right: 0.625rem; }
    .small-block-grid-12 > li:nth-child(12n+9) {
      padding-left: 1.25rem;
      padding-right: 0.46875rem; }
    .small-block-grid-12 > li:nth-child(12n+10) {
      padding-left: 1.40625rem;
      padding-right: 0.3125rem; }
    .small-block-grid-12 > li:nth-child(12n+11) {
      padding-left: 1.5625rem;
      padding-right: 0.15625rem; }
    .small-block-grid-12 > li:nth-child(12n) {
      padding-left: 1.71875rem;
      padding-right: 0rem; } }
@media only screen and (min-width: 40.063em) {
  .medium-block-grid-1 > li {
    width: 100%;
    list-style: none; }
    .medium-block-grid-1 > li:nth-of-type(n) {
      clear: none; }
    .medium-block-grid-1 > li:nth-of-type(1n+1) {
      clear: both; }
    .medium-block-grid-1 > li:nth-child(1n) {
      padding-left: 0rem;
      padding-right: 0rem; }

  .medium-block-grid-2 > li {
    width: 50%;
    list-style: none; }
    .medium-block-grid-2 > li:nth-of-type(n) {
      clear: none; }
    .medium-block-grid-2 > li:nth-of-type(2n+1) {
      clear: both; }
    .medium-block-grid-2 > li:nth-child(2n+1) {
      padding-left: 0rem;
      padding-right: 0.9375rem; }
    .medium-block-grid-2 > li:nth-child(2n) {
      padding-left: 0.9375rem;
      padding-right: 0rem; }

  .medium-block-grid-3 > li {
    width: 33.33333%;
    list-style: none; }
    .medium-block-grid-3 > li:nth-of-type(n) {
      clear: none; }
    .medium-block-grid-3 > li:nth-of-type(3n+1) {
      clear: both; }
    .medium-block-grid-3 > li:nth-child(3n+1) {
      padding-left: 0rem;
      padding-right: 1.25rem; }
    .medium-block-grid-3 > li:nth-child(3n+2) {
      padding-left: 0.625rem;
      padding-right: 0.625rem; }
    .medium-block-grid-3 > li:nth-child(3n) {
      padding-left: 1.25rem;
      padding-right: 0rem; }

  .medium-block-grid-4 > li {
    width: 25%;
    list-style: none; }
    .medium-block-grid-4 > li:nth-of-type(n) {
      clear: none; }
    .medium-block-grid-4 > li:nth-of-type(4n+1) {
      clear: both; }
    .medium-block-grid-4 > li:nth-child(4n+1) {
      padding-left: 0rem;
      padding-right: 1.40625rem; }
    .medium-block-grid-4 > li:nth-child(4n+2) {
      padding-left: 0.46875rem;
      padding-right: 0.9375rem; }
    .medium-block-grid-4 > li:nth-child(4n+3) {
      padding-left: 0.9375rem;
      padding-right: 0.46875rem; }
    .medium-block-grid-4 > li:nth-child(4n) {
      padding-left: 1.40625rem;
      padding-right: 0rem; }

  .medium-block-grid-5 > li {
    width: 20%;
    list-style: none; }
    .medium-block-grid-5 > li:nth-of-type(n) {
      clear: none; }
    .medium-block-grid-5 > li:nth-of-type(5n+1) {
      clear: both; }
    .medium-block-grid-5 > li:nth-child(5n+1) {
      padding-left: 0rem;
      padding-right: 1.5rem; }
    .medium-block-grid-5 > li:nth-child(5n+2) {
      padding-left: 0.375rem;
      padding-right: 1.125rem; }
    .medium-block-grid-5 > li:nth-child(5n+3) {
      padding-left: 0.75rem;
      padding-right: 0.75rem; }
    .medium-block-grid-5 > li:nth-child(5n+4) {
      padding-left: 1.125rem;
      padding-right: 0.375rem; }
    .medium-block-grid-5 > li:nth-child(5n) {
      padding-left: 1.5rem;
      padding-right: 0rem; }

  .medium-block-grid-6 > li {
    width: 16.66667%;
    list-style: none; }
    .medium-block-grid-6 > li:nth-of-type(n) {
      clear: none; }
    .medium-block-grid-6 > li:nth-of-type(6n+1) {
      clear: both; }
    .medium-block-grid-6 > li:nth-child(6n+1) {
      padding-left: 0rem;
      padding-right: 1.5625rem; }
    .medium-block-grid-6 > li:nth-child(6n+2) {
      padding-left: 0.3125rem;
      padding-right: 1.25rem; }
    .medium-block-grid-6 > li:nth-child(6n+3) {
      padding-left: 0.625rem;
      padding-right: 0.9375rem; }
    .medium-block-grid-6 > li:nth-child(6n+4) {
      padding-left: 0.9375rem;
      padding-right: 0.625rem; }
    .medium-block-grid-6 > li:nth-child(6n+5) {
      padding-left: 1.25rem;
      padding-right: 0.3125rem; }
    .medium-block-grid-6 > li:nth-child(6n) {
      padding-left: 1.5625rem;
      padding-right: 0rem; }

  .medium-block-grid-7 > li {
    width: 14.28571%;
    list-style: none; }
    .medium-block-grid-7 > li:nth-of-type(n) {
      clear: none; }
    .medium-block-grid-7 > li:nth-of-type(7n+1) {
      clear: both; }
    .medium-block-grid-7 > li:nth-child(7n+1) {
      padding-left: 0rem;
      padding-right: 1.60714rem; }
    .medium-block-grid-7 > li:nth-child(7n+2) {
      padding-left: 0.26786rem;
      padding-right: 1.33929rem; }
    .medium-block-grid-7 > li:nth-child(7n+3) {
      padding-left: 0.53571rem;
      padding-right: 1.07143rem; }
    .medium-block-grid-7 > li:nth-child(7n+4) {
      padding-left: 0.80357rem;
      padding-right: 0.80357rem; }
    .medium-block-grid-7 > li:nth-child(7n+5) {
      padding-left: 1.07143rem;
      padding-right: 0.53571rem; }
    .medium-block-grid-7 > li:nth-child(7n+6) {
      padding-left: 1.33929rem;
      padding-right: 0.26786rem; }
    .medium-block-grid-7 > li:nth-child(7n) {
      padding-left: 1.60714rem;
      padding-right: 0rem; }

  .medium-block-grid-8 > li {
    width: 12.5%;
    list-style: none; }
    .medium-block-grid-8 > li:nth-of-type(n) {
      clear: none; }
    .medium-block-grid-8 > li:nth-of-type(8n+1) {
      clear: both; }
    .medium-block-grid-8 > li:nth-child(8n+1) {
      padding-left: 0rem;
      padding-right: 1.64063rem; }
    .medium-block-grid-8 > li:nth-child(8n+2) {
      padding-left: 0.23438rem;
      padding-right: 1.40625rem; }
    .medium-block-grid-8 > li:nth-child(8n+3) {
      padding-left: 0.46875rem;
      padding-right: 1.17188rem; }
    .medium-block-grid-8 > li:nth-child(8n+4) {
      padding-left: 0.70313rem;
      padding-right: 0.9375rem; }
    .medium-block-grid-8 > li:nth-child(8n+5) {
      padding-left: 0.9375rem;
      padding-right: 0.70313rem; }
    .medium-block-grid-8 > li:nth-child(8n+6) {
      padding-left: 1.17188rem;
      padding-right: 0.46875rem; }
    .medium-block-grid-8 > li:nth-child(8n+7) {
      padding-left: 1.40625rem;
      padding-right: 0.23438rem; }
    .medium-block-grid-8 > li:nth-child(8n) {
      padding-left: 1.64063rem;
      padding-right: 0rem; }

  .medium-block-grid-9 > li {
    width: 11.11111%;
    list-style: none; }
    .medium-block-grid-9 > li:nth-of-type(n) {
      clear: none; }
    .medium-block-grid-9 > li:nth-of-type(9n+1) {
      clear: both; }
    .medium-block-grid-9 > li:nth-child(9n+1) {
      padding-left: 0rem;
      padding-right: 1.66667rem; }
    .medium-block-grid-9 > li:nth-child(9n+2) {
      padding-left: 0.20833rem;
      padding-right: 1.45833rem; }
    .medium-block-grid-9 > li:nth-child(9n+3) {
      padding-left: 0.41667rem;
      padding-right: 1.25rem; }
    .medium-block-grid-9 > li:nth-child(9n+4) {
      padding-left: 0.625rem;
      padding-right: 1.04167rem; }
    .medium-block-grid-9 > li:nth-child(9n+5) {
      padding-left: 0.83333rem;
      padding-right: 0.83333rem; }
    .medium-block-grid-9 > li:nth-child(9n+6) {
      padding-left: 1.04167rem;
      padding-right: 0.625rem; }
    .medium-block-grid-9 > li:nth-child(9n+7) {
      padding-left: 1.25rem;
      padding-right: 0.41667rem; }
    .medium-block-grid-9 > li:nth-child(9n+8) {
      padding-left: 1.45833rem;
      padding-right: 0.20833rem; }
    .medium-block-grid-9 > li:nth-child(9n) {
      padding-left: 1.66667rem;
      padding-right: 0rem; }

  .medium-block-grid-10 > li {
    width: 10%;
    list-style: none; }
    .medium-block-grid-10 > li:nth-of-type(n) {
      clear: none; }
    .medium-block-grid-10 > li:nth-of-type(10n+1) {
      clear: both; }
    .medium-block-grid-10 > li:nth-child(10n+1) {
      padding-left: 0rem;
      padding-right: 1.6875rem; }
    .medium-block-grid-10 > li:nth-child(10n+2) {
      padding-left: 0.1875rem;
      padding-right: 1.5rem; }
    .medium-block-grid-10 > li:nth-child(10n+3) {
      padding-left: 0.375rem;
      padding-right: 1.3125rem; }
    .medium-block-grid-10 > li:nth-child(10n+4) {
      padding-left: 0.5625rem;
      padding-right: 1.125rem; }
    .medium-block-grid-10 > li:nth-child(10n+5) {
      padding-left: 0.75rem;
      padding-right: 0.9375rem; }
    .medium-block-grid-10 > li:nth-child(10n+6) {
      padding-left: 0.9375rem;
      padding-right: 0.75rem; }
    .medium-block-grid-10 > li:nth-child(10n+7) {
      padding-left: 1.125rem;
      padding-right: 0.5625rem; }
    .medium-block-grid-10 > li:nth-child(10n+8) {
      padding-left: 1.3125rem;
      padding-right: 0.375rem; }
    .medium-block-grid-10 > li:nth-child(10n+9) {
      padding-left: 1.5rem;
      padding-right: 0.1875rem; }
    .medium-block-grid-10 > li:nth-child(10n) {
      padding-left: 1.6875rem;
      padding-right: 0rem; }

  .medium-block-grid-11 > li {
    width: 9.09091%;
    list-style: none; }
    .medium-block-grid-11 > li:nth-of-type(n) {
      clear: none; }
    .medium-block-grid-11 > li:nth-of-type(11n+1) {
      clear: both; }
    .medium-block-grid-11 > li:nth-child(11n+1) {
      padding-left: 0.0rem;
      padding-right: 1.70455rem; }
    .medium-block-grid-11 > li:nth-child(11n+2) {
      padding-left: 0.17045rem;
      padding-right: 1.53409rem; }
    .medium-block-grid-11 > li:nth-child(11n+3) {
      padding-left: 0.34091rem;
      padding-right: 1.36364rem; }
    .medium-block-grid-11 > li:nth-child(11n+4) {
      padding-left: 0.51136rem;
      padding-right: 1.19318rem; }
    .medium-block-grid-11 > li:nth-child(11n+5) {
      padding-left: 0.68182rem;
      padding-right: 1.02273rem; }
    .medium-block-grid-11 > li:nth-child(11n+6) {
      padding-left: 0.85227rem;
      padding-right: 0.85227rem; }
    .medium-block-grid-11 > li:nth-child(11n+7) {
      padding-left: 1.02273rem;
      padding-right: 0.68182rem; }
    .medium-block-grid-11 > li:nth-child(11n+8) {
      padding-left: 1.19318rem;
      padding-right: 0.51136rem; }
    .medium-block-grid-11 > li:nth-child(11n+9) {
      padding-left: 1.36364rem;
      padding-right: 0.34091rem; }
    .medium-block-grid-11 > li:nth-child(11n+10) {
      padding-left: 1.53409rem;
      padding-right: 0.17045rem; }
    .medium-block-grid-11 > li:nth-child(11n) {
      padding-left: 1.70455rem;
      padding-right: 0.0rem; }

  .medium-block-grid-12 > li {
    width: 8.33333%;
    list-style: none; }
    .medium-block-grid-12 > li:nth-of-type(n) {
      clear: none; }
    .medium-block-grid-12 > li:nth-of-type(12n+1) {
      clear: both; }
    .medium-block-grid-12 > li:nth-child(12n+1) {
      padding-left: 0rem;
      padding-right: 1.71875rem; }
    .medium-block-grid-12 > li:nth-child(12n+2) {
      padding-left: 0.15625rem;
      padding-right: 1.5625rem; }
    .medium-block-grid-12 > li:nth-child(12n+3) {
      padding-left: 0.3125rem;
      padding-right: 1.40625rem; }
    .medium-block-grid-12 > li:nth-child(12n+4) {
      padding-left: 0.46875rem;
      padding-right: 1.25rem; }
    .medium-block-grid-12 > li:nth-child(12n+5) {
      padding-left: 0.625rem;
      padding-right: 1.09375rem; }
    .medium-block-grid-12 > li:nth-child(12n+6) {
      padding-left: 0.78125rem;
      padding-right: 0.9375rem; }
    .medium-block-grid-12 > li:nth-child(12n+7) {
      padding-left: 0.9375rem;
      padding-right: 0.78125rem; }
    .medium-block-grid-12 > li:nth-child(12n+8) {
      padding-left: 1.09375rem;
      padding-right: 0.625rem; }
    .medium-block-grid-12 > li:nth-child(12n+9) {
      padding-left: 1.25rem;
      padding-right: 0.46875rem; }
    .medium-block-grid-12 > li:nth-child(12n+10) {
      padding-left: 1.40625rem;
      padding-right: 0.3125rem; }
    .medium-block-grid-12 > li:nth-child(12n+11) {
      padding-left: 1.5625rem;
      padding-right: 0.15625rem; }
    .medium-block-grid-12 > li:nth-child(12n) {
      padding-left: 1.71875rem;
      padding-right: 0rem; } }
@media only screen and (min-width: 64.063em) {
  .large-block-grid-1 > li {
    width: 100%;
    list-style: none; }
    .large-block-grid-1 > li:nth-of-type(n) {
      clear: none; }
    .large-block-grid-1 > li:nth-of-type(1n+1) {
      clear: both; }
    .large-block-grid-1 > li:nth-child(1n) {
      padding-left: 0rem;
      padding-right: 0rem; }

  .large-block-grid-2 > li {
    width: 50%;
    list-style: none; }
    .large-block-grid-2 > li:nth-of-type(n) {
      clear: none; }
    .large-block-grid-2 > li:nth-of-type(2n+1) {
      clear: both; }
    .large-block-grid-2 > li:nth-child(2n+1) {
      padding-left: 0rem;
      padding-right: 0.9375rem; }
    .large-block-grid-2 > li:nth-child(2n) {
      padding-left: 0.9375rem;
      padding-right: 0rem; }

  .large-block-grid-3 > li {
    width: 33.33333%;
    list-style: none; }
    .large-block-grid-3 > li:nth-of-type(n) {
      clear: none; }
    .large-block-grid-3 > li:nth-of-type(3n+1) {
      clear: both; }
    .large-block-grid-3 > li:nth-child(3n+1) {
      padding-left: 0rem;
      padding-right: 1.25rem; }
    .large-block-grid-3 > li:nth-child(3n+2) {
      padding-left: 0.625rem;
      padding-right: 0.625rem; }
    .large-block-grid-3 > li:nth-child(3n) {
      padding-left: 1.25rem;
      padding-right: 0rem; }

  .large-block-grid-4 > li {
    width: 25%;
    list-style: none; }
    .large-block-grid-4 > li:nth-of-type(n) {
      clear: none; }
    .large-block-grid-4 > li:nth-of-type(4n+1) {
      clear: both; }
    .large-block-grid-4 > li:nth-child(4n+1) {
      padding-left: 0rem;
      padding-right: 1.40625rem; }
    .large-block-grid-4 > li:nth-child(4n+2) {
      padding-left: 0.46875rem;
      padding-right: 0.9375rem; }
    .large-block-grid-4 > li:nth-child(4n+3) {
      padding-left: 0.9375rem;
      padding-right: 0.46875rem; }
    .large-block-grid-4 > li:nth-child(4n) {
      padding-left: 1.40625rem;
      padding-right: 0rem; }

  .large-block-grid-5 > li {
    width: 20%;
    list-style: none; }
    .large-block-grid-5 > li:nth-of-type(n) {
      clear: none; }
    .large-block-grid-5 > li:nth-of-type(5n+1) {
      clear: both; }
    .large-block-grid-5 > li:nth-child(5n+1) {
      padding-left: 0rem;
      padding-right: 1.5rem; }
    .large-block-grid-5 > li:nth-child(5n+2) {
      padding-left: 0.375rem;
      padding-right: 1.125rem; }
    .large-block-grid-5 > li:nth-child(5n+3) {
      padding-left: 0.75rem;
      padding-right: 0.75rem; }
    .large-block-grid-5 > li:nth-child(5n+4) {
      padding-left: 1.125rem;
      padding-right: 0.375rem; }
    .large-block-grid-5 > li:nth-child(5n) {
      padding-left: 1.5rem;
      padding-right: 0rem; }

  .large-block-grid-6 > li {
    width: 16.66667%;
    list-style: none; }
    .large-block-grid-6 > li:nth-of-type(n) {
      clear: none; }
    .large-block-grid-6 > li:nth-of-type(6n+1) {
      clear: both; }
    .large-block-grid-6 > li:nth-child(6n+1) {
      padding-left: 0rem;
      padding-right: 1.5625rem; }
    .large-block-grid-6 > li:nth-child(6n+2) {
      padding-left: 0.3125rem;
      padding-right: 1.25rem; }
    .large-block-grid-6 > li:nth-child(6n+3) {
      padding-left: 0.625rem;
      padding-right: 0.9375rem; }
    .large-block-grid-6 > li:nth-child(6n+4) {
      padding-left: 0.9375rem;
      padding-right: 0.625rem; }
    .large-block-grid-6 > li:nth-child(6n+5) {
      padding-left: 1.25rem;
      padding-right: 0.3125rem; }
    .large-block-grid-6 > li:nth-child(6n) {
      padding-left: 1.5625rem;
      padding-right: 0rem; }

  .large-block-grid-7 > li {
    width: 14.28571%;
    list-style: none; }
    .large-block-grid-7 > li:nth-of-type(n) {
      clear: none; }
    .large-block-grid-7 > li:nth-of-type(7n+1) {
      clear: both; }
    .large-block-grid-7 > li:nth-child(7n+1) {
      padding-left: 0rem;
      padding-right: 1.60714rem; }
    .large-block-grid-7 > li:nth-child(7n+2) {
      padding-left: 0.26786rem;
      padding-right: 1.33929rem; }
    .large-block-grid-7 > li:nth-child(7n+3) {
      padding-left: 0.53571rem;
      padding-right: 1.07143rem; }
    .large-block-grid-7 > li:nth-child(7n+4) {
      padding-left: 0.80357rem;
      padding-right: 0.80357rem; }
    .large-block-grid-7 > li:nth-child(7n+5) {
      padding-left: 1.07143rem;
      padding-right: 0.53571rem; }
    .large-block-grid-7 > li:nth-child(7n+6) {
      padding-left: 1.33929rem;
      padding-right: 0.26786rem; }
    .large-block-grid-7 > li:nth-child(7n) {
      padding-left: 1.60714rem;
      padding-right: 0rem; }

  .large-block-grid-8 > li {
    width: 12.5%;
    list-style: none; }
    .large-block-grid-8 > li:nth-of-type(n) {
      clear: none; }
    .large-block-grid-8 > li:nth-of-type(8n+1) {
      clear: both; }
    .large-block-grid-8 > li:nth-child(8n+1) {
      padding-left: 0rem;
      padding-right: 1.64063rem; }
    .large-block-grid-8 > li:nth-child(8n+2) {
      padding-left: 0.23438rem;
      padding-right: 1.40625rem; }
    .large-block-grid-8 > li:nth-child(8n+3) {
      padding-left: 0.46875rem;
      padding-right: 1.17188rem; }
    .large-block-grid-8 > li:nth-child(8n+4) {
      padding-left: 0.70313rem;
      padding-right: 0.9375rem; }
    .large-block-grid-8 > li:nth-child(8n+5) {
      padding-left: 0.9375rem;
      padding-right: 0.70313rem; }
    .large-block-grid-8 > li:nth-child(8n+6) {
      padding-left: 1.17188rem;
      padding-right: 0.46875rem; }
    .large-block-grid-8 > li:nth-child(8n+7) {
      padding-left: 1.40625rem;
      padding-right: 0.23438rem; }
    .large-block-grid-8 > li:nth-child(8n) {
      padding-left: 1.64063rem;
      padding-right: 0rem; }

  .large-block-grid-9 > li {
    width: 11.11111%;
    list-style: none; }
    .large-block-grid-9 > li:nth-of-type(n) {
      clear: none; }
    .large-block-grid-9 > li:nth-of-type(9n+1) {
      clear: both; }
    .large-block-grid-9 > li:nth-child(9n+1) {
      padding-left: 0rem;
      padding-right: 1.66667rem; }
    .large-block-grid-9 > li:nth-child(9n+2) {
      padding-left: 0.20833rem;
      padding-right: 1.45833rem; }
    .large-block-grid-9 > li:nth-child(9n+3) {
      padding-left: 0.41667rem;
      padding-right: 1.25rem; }
    .large-block-grid-9 > li:nth-child(9n+4) {
      padding-left: 0.625rem;
      padding-right: 1.04167rem; }
    .large-block-grid-9 > li:nth-child(9n+5) {
      padding-left: 0.83333rem;
      padding-right: 0.83333rem; }
    .large-block-grid-9 > li:nth-child(9n+6) {
      padding-left: 1.04167rem;
      padding-right: 0.625rem; }
    .large-block-grid-9 > li:nth-child(9n+7) {
      padding-left: 1.25rem;
      padding-right: 0.41667rem; }
    .large-block-grid-9 > li:nth-child(9n+8) {
      padding-left: 1.45833rem;
      padding-right: 0.20833rem; }
    .large-block-grid-9 > li:nth-child(9n) {
      padding-left: 1.66667rem;
      padding-right: 0rem; }

  .large-block-grid-10 > li {
    width: 10%;
    list-style: none; }
    .large-block-grid-10 > li:nth-of-type(n) {
      clear: none; }
    .large-block-grid-10 > li:nth-of-type(10n+1) {
      clear: both; }
    .large-block-grid-10 > li:nth-child(10n+1) {
      padding-left: 0rem;
      padding-right: 1.6875rem; }
    .large-block-grid-10 > li:nth-child(10n+2) {
      padding-left: 0.1875rem;
      padding-right: 1.5rem; }
    .large-block-grid-10 > li:nth-child(10n+3) {
      padding-left: 0.375rem;
      padding-right: 1.3125rem; }
    .large-block-grid-10 > li:nth-child(10n+4) {
      padding-left: 0.5625rem;
      padding-right: 1.125rem; }
    .large-block-grid-10 > li:nth-child(10n+5) {
      padding-left: 0.75rem;
      padding-right: 0.9375rem; }
    .large-block-grid-10 > li:nth-child(10n+6) {
      padding-left: 0.9375rem;
      padding-right: 0.75rem; }
    .large-block-grid-10 > li:nth-child(10n+7) {
      padding-left: 1.125rem;
      padding-right: 0.5625rem; }
    .large-block-grid-10 > li:nth-child(10n+8) {
      padding-left: 1.3125rem;
      padding-right: 0.375rem; }
    .large-block-grid-10 > li:nth-child(10n+9) {
      padding-left: 1.5rem;
      padding-right: 0.1875rem; }
    .large-block-grid-10 > li:nth-child(10n) {
      padding-left: 1.6875rem;
      padding-right: 0rem; }

  .large-block-grid-11 > li {
    width: 9.09091%;
    list-style: none; }
    .large-block-grid-11 > li:nth-of-type(n) {
      clear: none; }
    .large-block-grid-11 > li:nth-of-type(11n+1) {
      clear: both; }
    .large-block-grid-11 > li:nth-child(11n+1) {
      padding-left: 0.0rem;
      padding-right: 1.70455rem; }
    .large-block-grid-11 > li:nth-child(11n+2) {
      padding-left: 0.17045rem;
      padding-right: 1.53409rem; }
    .large-block-grid-11 > li:nth-child(11n+3) {
      padding-left: 0.34091rem;
      padding-right: 1.36364rem; }
    .large-block-grid-11 > li:nth-child(11n+4) {
      padding-left: 0.51136rem;
      padding-right: 1.19318rem; }
    .large-block-grid-11 > li:nth-child(11n+5) {
      padding-left: 0.68182rem;
      padding-right: 1.02273rem; }
    .large-block-grid-11 > li:nth-child(11n+6) {
      padding-left: 0.85227rem;
      padding-right: 0.85227rem; }
    .large-block-grid-11 > li:nth-child(11n+7) {
      padding-left: 1.02273rem;
      padding-right: 0.68182rem; }
    .large-block-grid-11 > li:nth-child(11n+8) {
      padding-left: 1.19318rem;
      padding-right: 0.51136rem; }
    .large-block-grid-11 > li:nth-child(11n+9) {
      padding-left: 1.36364rem;
      padding-right: 0.34091rem; }
    .large-block-grid-11 > li:nth-child(11n+10) {
      padding-left: 1.53409rem;
      padding-right: 0.17045rem; }
    .large-block-grid-11 > li:nth-child(11n) {
      padding-left: 1.70455rem;
      padding-right: 0.0rem; }

  .large-block-grid-12 > li {
    width: 8.33333%;
    list-style: none; }
    .large-block-grid-12 > li:nth-of-type(n) {
      clear: none; }
    .large-block-grid-12 > li:nth-of-type(12n+1) {
      clear: both; }
    .large-block-grid-12 > li:nth-child(12n+1) {
      padding-left: 0rem;
      padding-right: 1.71875rem; }
    .large-block-grid-12 > li:nth-child(12n+2) {
      padding-left: 0.15625rem;
      padding-right: 1.5625rem; }
    .large-block-grid-12 > li:nth-child(12n+3) {
      padding-left: 0.3125rem;
      padding-right: 1.40625rem; }
    .large-block-grid-12 > li:nth-child(12n+4) {
      padding-left: 0.46875rem;
      padding-right: 1.25rem; }
    .large-block-grid-12 > li:nth-child(12n+5) {
      padding-left: 0.625rem;
      padding-right: 1.09375rem; }
    .large-block-grid-12 > li:nth-child(12n+6) {
      padding-left: 0.78125rem;
      padding-right: 0.9375rem; }
    .large-block-grid-12 > li:nth-child(12n+7) {
      padding-left: 0.9375rem;
      padding-right: 0.78125rem; }
    .large-block-grid-12 > li:nth-child(12n+8) {
      padding-left: 1.09375rem;
      padding-right: 0.625rem; }
    .large-block-grid-12 > li:nth-child(12n+9) {
      padding-left: 1.25rem;
      padding-right: 0.46875rem; }
    .large-block-grid-12 > li:nth-child(12n+10) {
      padding-left: 1.40625rem;
      padding-right: 0.3125rem; }
    .large-block-grid-12 > li:nth-child(12n+11) {
      padding-left: 1.5625rem;
      padding-right: 0.15625rem; }
    .large-block-grid-12 > li:nth-child(12n) {
      padding-left: 1.71875rem;
      padding-right: 0rem; } }
.flex-video {
  position: relative;
  padding-top: 1.5625rem;
  padding-bottom: 67.5%;
  height: 0;
  margin-bottom: 1rem;
  overflow: hidden; }
  .flex-video.widescreen {
    padding-bottom: 56.34%; }
  .flex-video.vimeo {
    padding-top: 0; }
  .flex-video iframe,
  .flex-video object,
  .flex-video embed,
  .flex-video video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%; }

.keystroke,
kbd {
  background-color: #ededed;
  border-color: #dddddd;
  color: #222222;
  border-style: solid;
  border-width: 1px;
  margin: 0;
  font-family: "Consolas", "Menlo", "Courier", monospace;
  font-size: inherit;
  padding: 0.125rem 0.25rem 0;
  -webkit-border-radius: 3px;
  border-radius: 3px; }

/* small displays */
@media only screen {
  .show-for-small-only, .show-for-small-up, .show-for-small, .show-for-small-down, .hide-for-medium-only, .hide-for-medium-up, .hide-for-medium, .show-for-medium-down, .hide-for-large-only, .hide-for-large-up, .hide-for-large, .show-for-large-down, .hide-for-xlarge-only, .hide-for-xlarge-up, .hide-for-xlarge, .show-for-xlarge-down, .hide-for-xxlarge-only, .hide-for-xxlarge-up, .hide-for-xxlarge, .show-for-xxlarge-down {
    display: inherit !important; }

  .hide-for-small-only, .hide-for-small-up, .hide-for-small, .hide-for-small-down, .show-for-medium-only, .show-for-medium-up, .show-for-medium, .hide-for-medium-down, .show-for-large-only, .show-for-large-up, .show-for-large, .hide-for-large-down, .show-for-xlarge-only, .show-for-xlarge-up, .show-for-xlarge, .hide-for-xlarge-down, .show-for-xxlarge-only, .show-for-xxlarge-up, .show-for-xxlarge, .hide-for-xxlarge-down {
    display: none !important; }

  table.show-for-small-only, table.show-for-small-up, table.show-for-small, table.show-for-small-down, table.hide-for-medium-only, table.hide-for-medium-up, table.hide-for-medium, table.show-for-medium-down, table.hide-for-large-only, table.hide-for-large-up, table.hide-for-large, table.show-for-large-down, table.hide-for-xlarge-only, table.hide-for-xlarge-up, table.hide-for-xlarge, table.show-for-xlarge-down, table.hide-for-xxlarge-only, table.hide-for-xxlarge-up, table.hide-for-xxlarge, table.show-for-xxlarge-down {
    display: table; }

  thead.show-for-small-only, thead.show-for-small-up, thead.show-for-small, thead.show-for-small-down, thead.hide-for-medium-only, thead.hide-for-medium-up, thead.hide-for-medium, thead.show-for-medium-down, thead.hide-for-large-only, thead.hide-for-large-up, thead.hide-for-large, thead.show-for-large-down, thead.hide-for-xlarge-only, thead.hide-for-xlarge-up, thead.hide-for-xlarge, thead.show-for-xlarge-down, thead.hide-for-xxlarge-only, thead.hide-for-xxlarge-up, thead.hide-for-xxlarge, thead.show-for-xxlarge-down {
    display: table-header-group !important; }

  tbody.show-for-small-only, tbody.show-for-small-up, tbody.show-for-small, tbody.show-for-small-down, tbody.hide-for-medium-only, tbody.hide-for-medium-up, tbody.hide-for-medium, tbody.show-for-medium-down, tbody.hide-for-large-only, tbody.hide-for-large-up, tbody.hide-for-large, tbody.show-for-large-down, tbody.hide-for-xlarge-only, tbody.hide-for-xlarge-up, tbody.hide-for-xlarge, tbody.show-for-xlarge-down, tbody.hide-for-xxlarge-only, tbody.hide-for-xxlarge-up, tbody.hide-for-xxlarge, tbody.show-for-xxlarge-down {
    display: table-row-group !important; }

  tr.show-for-small-only, tr.show-for-small-up, tr.show-for-small, tr.show-for-small-down, tr.hide-for-medium-only, tr.hide-for-medium-up, tr.hide-for-medium, tr.show-for-medium-down, tr.hide-for-large-only, tr.hide-for-large-up, tr.hide-for-large, tr.show-for-large-down, tr.hide-for-xlarge-only, tr.hide-for-xlarge-up, tr.hide-for-xlarge, tr.show-for-xlarge-down, tr.hide-for-xxlarge-only, tr.hide-for-xxlarge-up, tr.hide-for-xxlarge, tr.show-for-xxlarge-down {
    display: table-row !important; }

  th.show-for-small-only, td.show-for-small-only, th.show-for-small-up, td.show-for-small-up, th.show-for-small, td.show-for-small, th.show-for-small-down, td.show-for-small-down, th.hide-for-medium-only, td.hide-for-medium-only, th.hide-for-medium-up, td.hide-for-medium-up, th.hide-for-medium, td.hide-for-medium, th.show-for-medium-down, td.show-for-medium-down, th.hide-for-large-only, td.hide-for-large-only, th.hide-for-large-up, td.hide-for-large-up, th.hide-for-large, td.hide-for-large, th.show-for-large-down, td.show-for-large-down, th.hide-for-xlarge-only, td.hide-for-xlarge-only, th.hide-for-xlarge-up, td.hide-for-xlarge-up, th.hide-for-xlarge, td.hide-for-xlarge, th.show-for-xlarge-down, td.show-for-xlarge-down, th.hide-for-xxlarge-only, td.hide-for-xxlarge-only, th.hide-for-xxlarge-up, td.hide-for-xxlarge-up, th.hide-for-xxlarge, td.hide-for-xxlarge, th.show-for-xxlarge-down, td.show-for-xxlarge-down {
    display: table-cell !important; } }
/* medium displays */
@media only screen and (min-width: 40.063em) {
  .hide-for-small-only, .show-for-small-up, .hide-for-small, .hide-for-small-down, .show-for-medium-only, .show-for-medium-up, .show-for-medium, .show-for-medium-down, .hide-for-large-only, .hide-for-large-up, .hide-for-large, .show-for-large-down, .hide-for-xlarge-only, .hide-for-xlarge-up, .hide-for-xlarge, .show-for-xlarge-down, .hide-for-xxlarge-only, .hide-for-xxlarge-up, .hide-for-xxlarge, .show-for-xxlarge-down {
    display: inherit !important; }

  .show-for-small-only, .hide-for-small-up, .show-for-small, .show-for-small-down, .hide-for-medium-only, .hide-for-medium-up, .hide-for-medium, .hide-for-medium-down, .show-for-large-only, .show-for-large-up, .show-for-large, .hide-for-large-down, .show-for-xlarge-only, .show-for-xlarge-up, .show-for-xlarge, .hide-for-xlarge-down, .show-for-xxlarge-only, .show-for-xxlarge-up, .show-for-xxlarge, .hide-for-xxlarge-down {
    display: none !important; }

  table.hide-for-small-only, table.show-for-small-up, table.hide-for-small, table.hide-for-small-down, table.show-for-medium-only, table.show-for-medium-up, table.show-for-medium, table.show-for-medium-down, table.hide-for-large-only, table.hide-for-large-up, table.hide-for-large, table.show-for-large-down, table.hide-for-xlarge-only, table.hide-for-xlarge-up, table.hide-for-xlarge, table.show-for-xlarge-down, table.hide-for-xxlarge-only, table.hide-for-xxlarge-up, table.hide-for-xxlarge, table.show-for-xxlarge-down {
    display: table; }

  thead.hide-for-small-only, thead.show-for-small-up, thead.hide-for-small, thead.hide-for-small-down, thead.show-for-medium-only, thead.show-for-medium-up, thead.show-for-medium, thead.show-for-medium-down, thead.hide-for-large-only, thead.hide-for-large-up, thead.hide-for-large, thead.show-for-large-down, thead.hide-for-xlarge-only, thead.hide-for-xlarge-up, thead.hide-for-xlarge, thead.show-for-xlarge-down, thead.hide-for-xxlarge-only, thead.hide-for-xxlarge-up, thead.hide-for-xxlarge, thead.show-for-xxlarge-down {
    display: table-header-group !important; }

  tbody.hide-for-small-only, tbody.show-for-small-up, tbody.hide-for-small, tbody.hide-for-small-down, tbody.show-for-medium-only, tbody.show-for-medium-up, tbody.show-for-medium, tbody.show-for-medium-down, tbody.hide-for-large-only, tbody.hide-for-large-up, tbody.hide-for-large, tbody.show-for-large-down, tbody.hide-for-xlarge-only, tbody.hide-for-xlarge-up, tbody.hide-for-xlarge, tbody.show-for-xlarge-down, tbody.hide-for-xxlarge-only, tbody.hide-for-xxlarge-up, tbody.hide-for-xxlarge, tbody.show-for-xxlarge-down {
    display: table-row-group !important; }

  tr.hide-for-small-only, tr.show-for-small-up, tr.hide-for-small, tr.hide-for-small-down, tr.show-for-medium-only, tr.show-for-medium-up, tr.show-for-medium, tr.show-for-medium-down, tr.hide-for-large-only, tr.hide-for-large-up, tr.hide-for-large, tr.show-for-large-down, tr.hide-for-xlarge-only, tr.hide-for-xlarge-up, tr.hide-for-xlarge, tr.show-for-xlarge-down, tr.hide-for-xxlarge-only, tr.hide-for-xxlarge-up, tr.hide-for-xxlarge, tr.show-for-xxlarge-down {
    display: table-row !important; }

  th.hide-for-small-only, td.hide-for-small-only, th.show-for-small-up, td.show-for-small-up, th.hide-for-small, td.hide-for-small, th.hide-for-small-down, td.hide-for-small-down, th.show-for-medium-only, td.show-for-medium-only, th.show-for-medium-up, td.show-for-medium-up, th.show-for-medium, td.show-for-medium, th.show-for-medium-down, td.show-for-medium-down, th.hide-for-large-only, td.hide-for-large-only, th.hide-for-large-up, td.hide-for-large-up, th.hide-for-large, td.hide-for-large, th.show-for-large-down, td.show-for-large-down, th.hide-for-xlarge-only, td.hide-for-xlarge-only, th.hide-for-xlarge-up, td.hide-for-xlarge-up, th.hide-for-xlarge, td.hide-for-xlarge, th.show-for-xlarge-down, td.show-for-xlarge-down, th.hide-for-xxlarge-only, td.hide-for-xxlarge-only, th.hide-for-xxlarge-up, td.hide-for-xxlarge-up, th.hide-for-xxlarge, td.hide-for-xxlarge, th.show-for-xxlarge-down, td.show-for-xxlarge-down {
    display: table-cell !important; } }
/* large displays */
@media only screen and (min-width: 64.063em) {
  .hide-for-small-only, .show-for-small-up, .hide-for-small, .hide-for-small-down, .hide-for-medium-only, .show-for-medium-up, .hide-for-medium, .hide-for-medium-down, .show-for-large-only, .show-for-large-up, .show-for-large, .show-for-large-down, .hide-for-xlarge-only, .hide-for-xlarge-up, .hide-for-xlarge, .show-for-xlarge-down, .hide-for-xxlarge-only, .hide-for-xxlarge-up, .hide-for-xxlarge, .show-for-xxlarge-down {
    display: inherit !important; }

  .show-for-small-only, .hide-for-small-up, .show-for-small, .show-for-small-down, .show-for-medium-only, .hide-for-medium-up, .show-for-medium, .show-for-medium-down, .hide-for-large-only, .hide-for-large-up, .hide-for-large, .hide-for-large-down, .show-for-xlarge-only, .show-for-xlarge-up, .show-for-xlarge, .hide-for-xlarge-down, .show-for-xxlarge-only, .show-for-xxlarge-up, .show-for-xxlarge, .hide-for-xxlarge-down {
    display: none !important; }

  table.hide-for-small-only, table.show-for-small-up, table.hide-for-small, table.hide-for-small-down, table.hide-for-medium-only, table.show-for-medium-up, table.hide-for-medium, table.hide-for-medium-down, table.show-for-large-only, table.show-for-large-up, table.show-for-large, table.show-for-large-down, table.hide-for-xlarge-only, table.hide-for-xlarge-up, table.hide-for-xlarge, table.show-for-xlarge-down, table.hide-for-xxlarge-only, table.hide-for-xxlarge-up, table.hide-for-xxlarge, table.show-for-xxlarge-down {
    display: table; }

  thead.hide-for-small-only, thead.show-for-small-up, thead.hide-for-small, thead.hide-for-small-down, thead.hide-for-medium-only, thead.show-for-medium-up, thead.hide-for-medium, thead.hide-for-medium-down, thead.show-for-large-only, thead.show-for-large-up, thead.show-for-large, thead.show-for-large-down, thead.hide-for-xlarge-only, thead.hide-for-xlarge-up, thead.hide-for-xlarge, thead.show-for-xlarge-down, thead.hide-for-xxlarge-only, thead.hide-for-xxlarge-up, thead.hide-for-xxlarge, thead.show-for-xxlarge-down {
    display: table-header-group !important; }

  tbody.hide-for-small-only, tbody.show-for-small-up, tbody.hide-for-small, tbody.hide-for-small-down, tbody.hide-for-medium-only, tbody.show-for-medium-up, tbody.hide-for-medium, tbody.hide-for-medium-down, tbody.show-for-large-only, tbody.show-for-large-up, tbody.show-for-large, tbody.show-for-large-down, tbody.hide-for-xlarge-only, tbody.hide-for-xlarge-up, tbody.hide-for-xlarge, tbody.show-for-xlarge-down, tbody.hide-for-xxlarge-only, tbody.hide-for-xxlarge-up, tbody.hide-for-xxlarge, tbody.show-for-xxlarge-down {
    display: table-row-group !important; }

  tr.hide-for-small-only, tr.show-for-small-up, tr.hide-for-small, tr.hide-for-small-down, tr.hide-for-medium-only, tr.show-for-medium-up, tr.hide-for-medium, tr.hide-for-medium-down, tr.show-for-large-only, tr.show-for-large-up, tr.show-for-large, tr.show-for-large-down, tr.hide-for-xlarge-only, tr.hide-for-xlarge-up, tr.hide-for-xlarge, tr.show-for-xlarge-down, tr.hide-for-xxlarge-only, tr.hide-for-xxlarge-up, tr.hide-for-xxlarge, tr.show-for-xxlarge-down {
    display: table-row !important; }

  th.hide-for-small-only, td.hide-for-small-only, th.show-for-small-up, td.show-for-small-up, th.hide-for-small, td.hide-for-small, th.hide-for-small-down, td.hide-for-small-down, th.hide-for-medium-only, td.hide-for-medium-only, th.show-for-medium-up, td.show-for-medium-up, th.hide-for-medium, td.hide-for-medium, th.hide-for-medium-down, td.hide-for-medium-down, th.show-for-large-only, td.show-for-large-only, th.show-for-large-up, td.show-for-large-up, th.show-for-large, td.show-for-large, th.show-for-large-down, td.show-for-large-down, th.hide-for-xlarge-only, td.hide-for-xlarge-only, th.hide-for-xlarge-up, td.hide-for-xlarge-up, th.hide-for-xlarge, td.hide-for-xlarge, th.show-for-xlarge-down, td.show-for-xlarge-down, th.hide-for-xxlarge-only, td.hide-for-xxlarge-only, th.hide-for-xxlarge-up, td.hide-for-xxlarge-up, th.hide-for-xxlarge, td.hide-for-xxlarge, th.show-for-xxlarge-down, td.show-for-xxlarge-down {
    display: table-cell !important; } }
/* xlarge displays */
@media only screen and (min-width: 90.063em) {
  .hide-for-small-only, .show-for-small-up, .hide-for-small, .hide-for-small-down, .hide-for-medium-only, .show-for-medium-up, .hide-for-medium, .hide-for-medium-down, .hide-for-large-only, .show-for-large-up, .hide-for-large, .hide-for-large-down, .show-for-xlarge-only, .show-for-xlarge-up, .show-for-xlarge, .show-for-xlarge-down, .hide-for-xxlarge-only, .hide-for-xxlarge-up, .hide-for-xxlarge, .show-for-xxlarge-down {
    display: inherit !important; }

  .show-for-small-only, .hide-for-small-up, .show-for-small, .show-for-small-down, .show-for-medium-only, .hide-for-medium-up, .show-for-medium, .show-for-medium-down, .show-for-large-only, .hide-for-large-up, .show-for-large, .show-for-large-down, .hide-for-xlarge-only, .hide-for-xlarge-up, .hide-for-xlarge, .hide-for-xlarge-down, .show-for-xxlarge-only, .show-for-xxlarge-up, .show-for-xxlarge, .hide-for-xxlarge-down {
    display: none !important; }

  table.hide-for-small-only, table.show-for-small-up, table.hide-for-small, table.hide-for-small-down, table.hide-for-medium-only, table.show-for-medium-up, table.hide-for-medium, table.hide-for-medium-down, table.hide-for-large-only, table.show-for-large-up, table.hide-for-large, table.hide-for-large-down, table.show-for-xlarge-only, table.show-for-xlarge-up, table.show-for-xlarge, table.show-for-xlarge-down, table.hide-for-xxlarge-only, table.hide-for-xxlarge-up, table.hide-for-xxlarge, table.show-for-xxlarge-down {
    display: table; }

  thead.hide-for-small-only, thead.show-for-small-up, thead.hide-for-small, thead.hide-for-small-down, thead.hide-for-medium-only, thead.show-for-medium-up, thead.hide-for-medium, thead.hide-for-medium-down, thead.hide-for-large-only, thead.show-for-large-up, thead.hide-for-large, thead.hide-for-large-down, thead.show-for-xlarge-only, thead.show-for-xlarge-up, thead.show-for-xlarge, thead.show-for-xlarge-down, thead.hide-for-xxlarge-only, thead.hide-for-xxlarge-up, thead.hide-for-xxlarge, thead.show-for-xxlarge-down {
    display: table-header-group !important; }

  tbody.hide-for-small-only, tbody.show-for-small-up, tbody.hide-for-small, tbody.hide-for-small-down, tbody.hide-for-medium-only, tbody.show-for-medium-up, tbody.hide-for-medium, tbody.hide-for-medium-down, tbody.hide-for-large-only, tbody.show-for-large-up, tbody.hide-for-large, tbody.hide-for-large-down, tbody.show-for-xlarge-only, tbody.show-for-xlarge-up, tbody.show-for-xlarge, tbody.show-for-xlarge-down, tbody.hide-for-xxlarge-only, tbody.hide-for-xxlarge-up, tbody.hide-for-xxlarge, tbody.show-for-xxlarge-down {
    display: table-row-group !important; }

  tr.hide-for-small-only, tr.show-for-small-up, tr.hide-for-small, tr.hide-for-small-down, tr.hide-for-medium-only, tr.show-for-medium-up, tr.hide-for-medium, tr.hide-for-medium-down, tr.hide-for-large-only, tr.show-for-large-up, tr.hide-for-large, tr.hide-for-large-down, tr.show-for-xlarge-only, tr.show-for-xlarge-up, tr.show-for-xlarge, tr.show-for-xlarge-down, tr.hide-for-xxlarge-only, tr.hide-for-xxlarge-up, tr.hide-for-xxlarge, tr.show-for-xxlarge-down {
    display: table-row !important; }

  th.hide-for-small-only, td.hide-for-small-only, th.show-for-small-up, td.show-for-small-up, th.hide-for-small, td.hide-for-small, th.hide-for-small-down, td.hide-for-small-down, th.hide-for-medium-only, td.hide-for-medium-only, th.show-for-medium-up, td.show-for-medium-up, th.hide-for-medium, td.hide-for-medium, th.hide-for-medium-down, td.hide-for-medium-down, th.hide-for-large-only, td.hide-for-large-only, th.show-for-large-up, td.show-for-large-up, th.hide-for-large, td.hide-for-large, th.hide-for-large-down, td.hide-for-large-down, th.show-for-xlarge-only, td.show-for-xlarge-only, th.show-for-xlarge-up, td.show-for-xlarge-up, th.show-for-xlarge, td.show-for-xlarge, th.show-for-xlarge-down, td.show-for-xlarge-down, th.hide-for-xxlarge-only, td.hide-for-xxlarge-only, th.hide-for-xxlarge-up, td.hide-for-xxlarge-up, th.hide-for-xxlarge, td.hide-for-xxlarge, th.show-for-xxlarge-down, td.show-for-xxlarge-down {
    display: table-cell !important; } }
/* xxlarge displays */
@media only screen and (min-width: 120.063em) {
  .hide-for-small-only, .show-for-small-up, .hide-for-small, .hide-for-small-down, .hide-for-medium-only, .show-for-medium-up, .hide-for-medium, .hide-for-medium-down, .hide-for-large-only, .show-for-large-up, .hide-for-large, .hide-for-large-down, .hide-for-xlarge-only, .show-for-xlarge-up, .hide-for-xlarge, .hide-for-xlarge-down, .show-for-xxlarge-only, .show-for-xxlarge-up, .show-for-xxlarge, .show-for-xxlarge-down {
    display: inherit !important; }

  .show-for-small-only, .hide-for-small-up, .show-for-small, .show-for-small-down, .show-for-medium-only, .hide-for-medium-up, .show-for-medium, .show-for-medium-down, .show-for-large-only, .hide-for-large-up, .show-for-large, .show-for-large-down, .show-for-xlarge-only, .hide-for-xlarge-up, .show-for-xlarge, .show-for-xlarge-down, .hide-for-xxlarge-only, .hide-for-xxlarge-up, .hide-for-xxlarge, .hide-for-xxlarge-down {
    display: none !important; }

  table.hide-for-small-only, table.show-for-small-up, table.hide-for-small, table.hide-for-small-down, table.hide-for-medium-only, table.show-for-medium-up, table.hide-for-medium, table.hide-for-medium-down, table.hide-for-large-only, table.show-for-large-up, table.hide-for-large, table.hide-for-large-down, table.hide-for-xlarge-only, table.show-for-xlarge-up, table.hide-for-xlarge, table.hide-for-xlarge-down, table.show-for-xxlarge-only, table.show-for-xxlarge-up, table.show-for-xxlarge, table.show-for-xxlarge-down {
    display: table; }

  thead.hide-for-small-only, thead.show-for-small-up, thead.hide-for-small, thead.hide-for-small-down, thead.hide-for-medium-only, thead.show-for-medium-up, thead.hide-for-medium, thead.hide-for-medium-down, thead.hide-for-large-only, thead.show-for-large-up, thead.hide-for-large, thead.hide-for-large-down, thead.hide-for-xlarge-only, thead.show-for-xlarge-up, thead.hide-for-xlarge, thead.hide-for-xlarge-down, thead.show-for-xxlarge-only, thead.show-for-xxlarge-up, thead.show-for-xxlarge, thead.show-for-xxlarge-down {
    display: table-header-group !important; }

  tbody.hide-for-small-only, tbody.show-for-small-up, tbody.hide-for-small, tbody.hide-for-small-down, tbody.hide-for-medium-only, tbody.show-for-medium-up, tbody.hide-for-medium, tbody.hide-for-medium-down, tbody.hide-for-large-only, tbody.show-for-large-up, tbody.hide-for-large, tbody.hide-for-large-down, tbody.hide-for-xlarge-only, tbody.show-for-xlarge-up, tbody.hide-for-xlarge, tbody.hide-for-xlarge-down, tbody.show-for-xxlarge-only, tbody.show-for-xxlarge-up, tbody.show-for-xxlarge, tbody.show-for-xxlarge-down {
    display: table-row-group !important; }

  tr.hide-for-small-only, tr.show-for-small-up, tr.hide-for-small, tr.hide-for-small-down, tr.hide-for-medium-only, tr.show-for-medium-up, tr.hide-for-medium, tr.hide-for-medium-down, tr.hide-for-large-only, tr.show-for-large-up, tr.hide-for-large, tr.hide-for-large-down, tr.hide-for-xlarge-only, tr.show-for-xlarge-up, tr.hide-for-xlarge, tr.hide-for-xlarge-down, tr.show-for-xxlarge-only, tr.show-for-xxlarge-up, tr.show-for-xxlarge, tr.show-for-xxlarge-down {
    display: table-row !important; }

  th.hide-for-small-only, td.hide-for-small-only, th.show-for-small-up, td.show-for-small-up, th.hide-for-small, td.hide-for-small, th.hide-for-small-down, td.hide-for-small-down, th.hide-for-medium-only, td.hide-for-medium-only, th.show-for-medium-up, td.show-for-medium-up, th.hide-for-medium, td.hide-for-medium, th.hide-for-medium-down, td.hide-for-medium-down, th.hide-for-large-only, td.hide-for-large-only, th.show-for-large-up, td.show-for-large-up, th.hide-for-large, td.hide-for-large, th.hide-for-large-down, td.hide-for-large-down, th.hide-for-xlarge-only, td.hide-for-xlarge-only, th.show-for-xlarge-up, td.show-for-xlarge-up, th.hide-for-xlarge, td.hide-for-xlarge, th.hide-for-xlarge-down, td.hide-for-xlarge-down, th.show-for-xxlarge-only, td.show-for-xxlarge-only, th.show-for-xxlarge-up, td.show-for-xxlarge-up, th.show-for-xxlarge, td.show-for-xxlarge, th.show-for-xxlarge-down, td.show-for-xxlarge-down {
    display: table-cell !important; } }
/* Orientation targeting */
.show-for-landscape,
.hide-for-portrait {
  display: inherit !important; }

.hide-for-landscape,
.show-for-portrait {
  display: none !important; }

/* Specific visibility for tables */
table.hide-for-landscape, table.show-for-portrait {
  display: table; }

thead.hide-for-landscape, thead.show-for-portrait {
  display: table-header-group !important; }

tbody.hide-for-landscape, tbody.show-for-portrait {
  display: table-row-group !important; }

tr.hide-for-landscape, tr.show-for-portrait {
  display: table-row !important; }

td.hide-for-landscape, td.show-for-portrait,
th.hide-for-landscape,
th.show-for-portrait {
  display: table-cell !important; }

@media only screen and (orientation: landscape) {
  .show-for-landscape,
  .hide-for-portrait {
    display: inherit !important; }

  .hide-for-landscape,
  .show-for-portrait {
    display: none !important; }

  /* Specific visibility for tables */
  table.show-for-landscape, table.hide-for-portrait {
    display: table; }

  thead.show-for-landscape, thead.hide-for-portrait {
    display: table-header-group !important; }

  tbody.show-for-landscape, tbody.hide-for-portrait {
    display: table-row-group !important; }

  tr.show-for-landscape, tr.hide-for-portrait {
    display: table-row !important; }

  td.show-for-landscape, td.hide-for-portrait,
  th.show-for-landscape,
  th.hide-for-portrait {
    display: table-cell !important; } }
@media only screen and (orientation: portrait) {
  .show-for-portrait,
  .hide-for-landscape {
    display: inherit !important; }

  .hide-for-portrait,
  .show-for-landscape {
    display: none !important; }

  /* Specific visibility for tables */
  table.show-for-portrait, table.hide-for-landscape {
    display: table; }

  thead.show-for-portrait, thead.hide-for-landscape {
    display: table-header-group !important; }

  tbody.show-for-portrait, tbody.hide-for-landscape {
    display: table-row-group !important; }

  tr.show-for-portrait, tr.hide-for-landscape {
    display: table-row !important; }

  td.show-for-portrait, td.hide-for-landscape,
  th.show-for-portrait,
  th.hide-for-landscape {
    display: table-cell !important; } }
/* Touch-enabled device targeting */
.show-for-touch {
  display: none !important; }

.hide-for-touch {
  display: inherit !important; }

.touch .show-for-touch {
  display: inherit !important; }

.touch .hide-for-touch {
  display: none !important; }

/* Specific visibility for tables */
table.hide-for-touch {
  display: table; }

.touch table.show-for-touch {
  display: table; }

thead.hide-for-touch {
  display: table-header-group !important; }

.touch thead.show-for-touch {
  display: table-header-group !important; }

tbody.hide-for-touch {
  display: table-row-group !important; }

.touch tbody.show-for-touch {
  display: table-row-group !important; }

tr.hide-for-touch {
  display: table-row !important; }

.touch tr.show-for-touch {
  display: table-row !important; }

td.hide-for-touch {
  display: table-cell !important; }

.touch td.show-for-touch {
  display: table-cell !important; }

th.hide-for-touch {
  display: table-cell !important; }

.touch th.show-for-touch {
  display: table-cell !important; }

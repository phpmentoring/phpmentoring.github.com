<!DOCTYPE html>
<html>
  <head>
    <% base_tag %>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <% require css("https://fonts.googleapis.com/css?family=Architects+Daughter") %>
    <% require themedCSS("stylesheet", "", "screen") %>
    <% require themedCSS("pygment_trac", "", "screen") %>
    <% require themedCSS("print", "", "print") %>
    <!--[if lt IE 9]> <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
    <title>$SiteConfig.Title | $MenuTitle</title>
  </head>
  <body>
    <% include Header %>
    <div id="content-wrapper">
      $Layout
      <% include Footer %>
    </div>
  </body>
</html>

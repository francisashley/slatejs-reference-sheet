<?php require_once('utils.php'); ?>

<!DOCTYPE html>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>Slate Reference Sheet</title>

<link rel="stylesheet" href="./style.css">

<div class="ref-container" style="padding: 20px 0 10px 0;">
  <h3 style="margin-left:20px;border:none;padding:0;margin-bottom:0.5rem;">Index</h3>
  <ul>
    <li><a href="#block">Block</a></li>
    <li><a href="#commands">Commands</a></li>
    <li><a href="#data">Data</a></li>
    <li><a href="#decoration">Decoration</a></li>
    <li><a href="#document">Document</a></li>
    <li><a href="#editor">Editor</a></li>
    <li><a href="#inline">Inline</a></li>
    <li><a href="#mark">Mark</a></li>
    <li><a href="#node">Node</a></li>
    <li><a href="#operations">Operation</a></li>
    <li><a href="#plugins">Plugins</a></li>
    <li><a href="#point">Point</a></li>
    <li><a href="#range">Range</a></li>
    <li><a href="#selection">Selection</a></li>
    <li><a href="#text">Text</a></li>
    <li><a href="#utils">Utils</a></li>
    <li><a href="#value">Value</a></li>
  </ul>
</div>

<?= section([
  "id" => "block",
  "title" => "Block",
  "sections" => data("block")
]);
?>

<?php

section([
  "id" => "commands",
  "title" => "Commands",
  "sections" => data("commands")
]);
?>

<?php
section([
  "id" => "data",
  "title" => "Data",
  "sections" => data("data")
]);
?>

<?php
section([
  "id" => "decoration",
  "title" => "Decoration",
  "sections" => data("decoration")
]);
?>

<?php
section([
  "id" => "document",
  "title" => "Document",
  "sections" => data("document")
]);
?>

<?php
section([
  "id" => "editor",
  "title" => "Editor",
  "sections" => data("editor")
]);
?>

<?php
section([
  "id" => "inline",
  "title" => "Inline",
  "sections" => data("inline")
]);
?>

<?php
section([
  "id" => "mark",
  "title" => "Mark",
  "sections" => data("mark")
]);
?>

<?php
section([
  "id" => "node",
  "title" => "Node",
  "sections" => data("node")
]);
?>

<?php
section([
  "id" => "operation",
  "title" => "Operation",
  "sections" => data("operation")
]);
?>

<?php
section([
  "id" => "plugins",
  "title" => "Plugins",
  "sections" => data("plugins")
]);
?>

<?php
section([
  "id" => "point",
  "title" => "Point",
  "sections" => data("point")
]);
?>

<?php
section([
  "id" => "range",
  "title" => "Range",
  "sections" => data("range")
]);
?>

<?php
 section([
  "id" => "selection",
  "title" => "Selection",
  "sections" => data("selection")
]);
?>

<?php
section([
  "id" => "text",
  "title" => "Text",
  "sections" => data("text")
]);
?>

<?php
section([
  "id" => "utils",
  "title" => "Utils",
  "sections" => data("utils")
]);
?>

<?php
section([
  "id" => "value",
  "title" => "Value",
  "sections" => data("value")
]);
?>
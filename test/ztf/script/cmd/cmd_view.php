#!/usr/bin/env php
<?php
/**
[case]
title=
cid=0
pid=0

[group]
 >>
 >>

[esac]
*/

include_once __DIR__ . DIRECTORY_SEPARATOR . '../lib/zd.php';

$zd = new zendata();

$output = $zd->cmd("-v");
print(">> $output[0]\n");

$output = $zd->cmd("-view");
print(">> $output[0]\n");
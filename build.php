<?php
echo shell_exec('git clone https://github.com/rok9ru/trpo-core.git core');
trim(shell_exec('git checkout 4.1'));
$version = trim(shell_exec('git symbolic-ref --short -q HEAD'));
echo trim(shell_exec("echo '$version'>version"));
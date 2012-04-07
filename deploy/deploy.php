<?php

function run($cmd) {
  echo str_replace("\n", '<br>', shell_exec($cmd . ' 2>&1'));
}

run('git pull origin master');


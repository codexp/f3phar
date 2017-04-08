<?php

$srcRoot = './vendor/bcosca/fatfree/lib';
$buildRoot = './build';

$phar = new Phar(
    $buildRoot . '/f3.phar',
    FilesystemIterator::CURRENT_AS_FILEINFO | FilesystemIterator::KEY_AS_FILENAME,
    'f3.phar'
);

$phar->buildFromDirectory($srcRoot);

$phar->setStub($phar->createDefaultStub('base.php'));

<?php
use think\facade\Route;

Route::rules([
    'easy_import' => '\\EasyPHPExcel\\Controller\\EasyImport@index',
]);

<?php

/**
 * @param null $path
 * @return string
 */
function public_path($path = null)
{
    return __DIR__ . '/../../' . PUBLIC_PATH . $path;
}

/**
 * @param null $path
 * @return string
 */
function uploads_path($path = null)
{
    return public_path() . '/' . UPLOADS_PATH . $path;
}

/**
 * @param null $path
 * @return string
 */
function storage_path($path = null)
{
    return __DIR__ . '/../' . STORAGE_PATH . $path;
}
<?php
function get_plugin_translated_string($string): string
{
    return __($string, get_plugin_text_domain());
}

function get_plugin_text_domain(): string
{
    return 'landshaft-widgets';
}
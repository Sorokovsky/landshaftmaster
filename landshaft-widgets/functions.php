<?php
function get_translated_string($string): string
{
    return __($string, get_text_domain());
}

function get_text_domain(): string
{
    return 'landshaft-widgets';
}

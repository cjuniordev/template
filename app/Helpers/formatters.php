<?php

if (! function_exists('only_numbers')) {
    function only_numbers(string $value): string
    {
        return preg_replace('/\D/', '', $value);
    }
}


if (! function_exists('whatsapp_link')) {
    function whatsapp_link(string $number, ?string $text = null): string
    {
        $link = "https://wa.me/55" . only_numbers($number);

        if ($text) {
            $link .= "?text=" . urlencode($text);
        }

        return $link;
    }
}


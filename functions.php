<?php

/**
 * Convert plain text to link
 *
 * @param string $text
 * @param string $link
 * @param string $class
 *
 * @return string
 */
function toLink(string $text, string $link, string $class = '') {
    return "<a class='$class' href='$link'>$text</a>";
}
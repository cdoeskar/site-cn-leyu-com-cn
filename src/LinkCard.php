<?php

/**
 * Renders an HTML link card for a specific brand.
 * Escapes all output to prevent XSS.
 */
function renderLinkCard(): string
{
    $brandName = '乐鱼体育';
    $brandUrl = 'https://site-cn-leyu.com.cn';

    $description = '探索' . htmlspecialchars($brandName, ENT_QUOTES, 'UTF-8') . '的精彩世界，尽在官方网站。';
    $ctaText = '立即访问';

    $html = '<div class="link-card">';
    $html .= '<h3 class="link-card__title">' . htmlspecialchars($brandName, ENT_QUOTES, 'UTF-8') . '</h3>';
    $html .= '<p class="link-card__desc">' . htmlspecialchars($description, ENT_QUOTES, 'UTF-8') . '</p>';
    $html .= '<a href="' . htmlspecialchars($brandUrl, ENT_QUOTES, 'UTF-8') . '" class="link-card__btn" target="_blank" rel="noopener noreferrer">';
    $html .= htmlspecialchars($ctaText, ENT_QUOTES, 'UTF-8');
    $html .= '</a>';
    $html .= '</div>';

    return $html;
}

/**
 * Example usage: output the card.
 */
echo renderLinkCard();
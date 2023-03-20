<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class ViteAssetExtension extends AbstractExtension
{
    public function getFunctions(): array
    {
        return [
            new TwigFunction('vite_asset', [$this, 'asset'], ['is_safe' => ['html']])
        ];
    }

    public function asset(string $entry): string
    {
        $html = <<<HTML
        <script type="module" src="http://127.0.0.1:5173/assets/@vite/client"></script>
        HTML;
        $html .= <<<HTML
        <script type="module" src="http://127.0.0.1:5173/assets/main.ts" defer></script>
        HTML;

        return $html;
    }
}

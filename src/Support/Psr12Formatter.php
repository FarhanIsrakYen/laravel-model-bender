<?php

namespace FarhanIsrakYen\LaravelModelMaker\Support;

class Psr12Formatter
{
    public static function formatMethod(string $method, int $indent = 1): string
    {
        $spaces = str_repeat(' ', $indent * 4);
        $lines = explode("\n", trim($method));
        $formatted = [];

        foreach ($lines as $line) {
            $line = rtrim($line);

            if ($line === '') {
                $formatted[] = '';
                continue;
            }

            $formatted[] = $spaces . ltrim($line);
        }

        return "\n" . implode("\n", $formatted) . "\n";
    }

    public static function normalizeSpacing(string $content): string
    {
        $content = preg_replace('/[ \t]+$/m', '', $content);
        $content = preg_replace("/\n{3,}/", "\n\n", $content);

        return rtrim($content) . "\n";
    }
}

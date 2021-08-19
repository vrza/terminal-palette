<?php

namespace TerminalPalette;

class AnsiSeq
{
    public const RESET             = "\033[0m";

    public const BOLD              = "\033[1m";
    public const UNDERLINE         = "\033[4m";
    public const REVERSED          = "\033[7m";

    public const BLACK             = "\033[30m";
    public const RED               = "\033[31m";
    public const GREEN             = "\033[32m";
    public const YELLOW            = "\033[33m";
    public const BLUE              = "\033[34m";
    public const MAGENTA           = "\033[35m";
    public const CYAN              = "\033[36m";
    public const WHITE             = "\033[37m";

    public const BG_BLACK          = "\033[40m";
    public const BG_RED            = "\033[41m";
    public const BG_GREEN          = "\033[42m";
    public const BG_YELLOW         = "\033[43m";
    public const BG_BLUE           = "\033[44m";
    public const BG_MAGENTA        = "\033[45m";
    public const BG_CYAN           = "\033[46m";
    public const BG_WHITE          = "\033[47m";

    public const BRIGHT_BLACK      = "\033[30;1m";
    public const BRIGHT_RED        = "\033[31;1m";
    public const BRIGHT_GREEN      = "\033[32;1m";
    public const BRIGHT_YELLOW     = "\033[33;1m";
    public const BRIGHT_BLUE       = "\033[34;1m";
    public const BRIGHT_MAGENTA    = "\033[35;1m";
    public const BRIGHT_CYAN       = "\033[36;1m";
    public const BRIGHT_WHITE      = "\033[37;1m";

    public const BG_BRIGHT_BLACK   = "\033[40;1m";
    public const BG_BRIGHT_RED     = "\033[41;1m";
    public const BG_BRIGHT_GREEN   = "\033[42;1m";
    public const BG_BRIGHT_YELLOW  = "\033[43;1m";
    public const BG_BRIGHT_BLUE    = "\033[44;1m";
    public const BG_BRIGHT_MAGENTA = "\033[45;1m";
    public const BG_BRIGHT_CYAN    = "\033[46;1m";
    public const BG_BRIGHT_WHITE   = "\033[47;1m";

    public static function get(string $key, bool $always = true): string
    {
        return $always ? constant('self::' . $key) : '';
    }

    public static function strip(string $str)
    {
        return ($str === null)
            ? null
            : preg_replace('#\\x1b[[][^A-Za-z]*[A-Za-z]#', '', $str);
    }
}

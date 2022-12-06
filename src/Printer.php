<?php

declare(strict_types=1);

namespace Src;

/**
 * Printer package
 *
 * @package Src
 * @author  Thiago Silva <thiagom.devsec@gmail.com>
 * @version 1.0
 */
class Printer
{
    /**
     * Print message
     *
     * @param  string
     */
    private static function out(string $message): void
    {
        echo $message;
    }

    /**
     * Print new line
     */
    private static function newLine(): void
    {
        self::out(PHP_EOL);
    }

    /**
     * Main display
     *
     * @param  string ed
     */
    private static function display(string $message): void
    {
        self::newLine();
        self::out($message);
        self::newLine();
    }

    /**
     * Info message
     *
     * @param  string
     */
    final public static function info(string $message): void
    {
        self::display($message);
    }

    /**
     * Warning message
     *
     * @param  string
     */
    final public static function warning(string $message): void
    {
        self::display(Colors::YELLOW->color() . $message . "\e[0m");
    }

    /**
     * Error message
     *
     * @param  string
     */
    final public static function error(string $message): void
    {
        self::display(Colors::RED->color() . $message . "\e[0m");
    }

    /**
     * Success message
     *
     * @param  string
     */
    final public static function success(string $message): void
    {
        self::display(Colors::GREEN->color() . $message . "\e[0m");
    }
}

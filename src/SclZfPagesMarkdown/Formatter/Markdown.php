<?php

namespace SclZfPagesMarkdown\Formatter;


use dflydev\markdown\MarkdownParser;
use SclZfPages\Formatter\FormatterInterface;
use Zend\Filter\StaticFilter;

/**
 * Content formatter for Markdown formatted content.
 *
 * @author Tom Oram <tom@scl.co.uk>
 */
class Markdown implements FormatterInterface
{
    /**
     * Formats markdown syntax content.
     *
     * @param  string $content
     * @return string
     */
    public function format($content)
    {
        $content = StaticFilter::execute($content, 'HtmlEntities');

        $markdownParser = new MarkdownParser();

        return $markdownParser->transformMarkdown($content);
    }
}

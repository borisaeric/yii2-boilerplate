<?php

namespace api\components\web;

use yii\web\Response;
use yii\web\HtmlResponseFormatter as BaseFormatter;

/**
 * Response formatter for represent data in tag <pre>
 *
 * It is used by [[Response]] to format response data.
 */
class HtmlResponseFormatter extends BaseFormatter
{
    /**
     * Formats the specified response.
     *
     * @param Response $response the response to be formatted.
     */
    public function format($response)
    {
        parent::format($response);
        if (!is_string($response->content)) {
            $response->content =
                "<PRE>"
                . var_export($response->content, true)
                . "</PRE>";
        }
    }
}

<?php
 namespace MailPoetVendor\Egulias\EmailValidator\Exception; if (!defined('ABSPATH')) exit; class UnclosedQuotedString extends \MailPoetVendor\Egulias\EmailValidator\Exception\InvalidEmail { const CODE = 145; const REASON = "Unclosed quoted string"; } 
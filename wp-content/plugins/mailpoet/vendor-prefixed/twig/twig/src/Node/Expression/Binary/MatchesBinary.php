<?php
 namespace MailPoetVendor\Twig\Node\Expression\Binary; if (!defined('ABSPATH')) exit; use MailPoetVendor\Twig\Compiler; class MatchesBinary extends \MailPoetVendor\Twig\Node\Expression\Binary\AbstractBinary { public function compile(\MailPoetVendor\Twig\Compiler $compiler) { $compiler->raw('preg_match(')->subcompile($this->getNode('right'))->raw(', ')->subcompile($this->getNode('left'))->raw(')'); } public function operator(\MailPoetVendor\Twig\Compiler $compiler) { return $compiler->raw(''); } } \class_alias('MailPoetVendor\\Twig\\Node\\Expression\\Binary\\MatchesBinary', 'MailPoetVendor\\Twig_Node_Expression_Binary_Matches'); 
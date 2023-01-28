<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/email_template.html.twig */
class __TwigTemplate_527e511ce335a53dffd06ca3fd7cc37477d4ff219f8d9ff1f7c7d36f27567b33 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/email_template.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/email_template.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTDXHTML1.0Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html>
\t<head>
\t\t<!-- Compiled with Bootstrap Email version: 1.0.0.alpha4 -->
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
\t\t<meta name=\"x-apple-disable-message-reformatting\">
\t\t<meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<meta name=\"format-detection\" content=\"telephone=no, date=no, address=no, email=no\">
\t\t<style>
\t\t\ttype=\"text/css\"
\t\t\tbody,
\t\t\ttable,
\t\t\ttd {
\t\t\t\tfont-family: Helvetica, Arial, sans-serif !important
\t\t\t}

\t\t\t.ExternalClass {
\t\t\t\twidth: 100%
\t\t\t}

\t\t\t.ExternalClass,
\t\t\t.ExternalClass p,
\t\t\t.ExternalClass span,
\t\t\t.ExternalClass font,
\t\t\t.ExternalClass td,
\t\t\t.ExternalClass div {
\t\t\t\tline-height: 150%
\t\t\t}

\t\t\ta {
\t\t\t\ttext-decoration: none
\t\t\t}

\t\t\t* {
\t\t\t\tcolor: inherit
\t\t\t}

\t\t\ta[x-apple-data-detectors],
\t\t\tu + #body a,
\t\t\t#MessageViewBody a {
\t\t\t\tcolor: inherit;
\t\t\t\ttext-decoration: none;
\t\t\t\tfont-size: inherit;
\t\t\t\tfont-family: inherit;
\t\t\t\tfont-weight: inherit;
\t\t\t\tline-height: inherit
\t\t\t}

\t\t\timg {
\t\t\t\t-ms-interpolation-mode: bicubic
\t\t\t}

\t\t\ttable:not([class^=s-]) {
\t\t\t\tfont-family: Helvetica, Arial, sans-serif;
\t\t\t\tmso-table-lspace: 0;
\t\t\t\tmso-table-rspace: 0;
\t\t\t\tborder-spacing: 0;
\t\t\t\tborder-collapse: collapse
\t\t\t}

\t\t\ttable:not([class^=s-]) td {
\t\t\t\tborder-spacing: 0;
\t\t\t\tborder-collapse: collapse
\t\t\t}

\t\t\t@media screen and(max-width: 600px) {
\t\t\t\t.max-w-48,
\t\t\t\t.max-w-48 > tbody > tr > td {
\t\t\t\t\tmax-width: 192px !important;
\t\t\t\t\twidth: 100% !important
\t\t\t\t}

\t\t\t\t.max-w-56,
\t\t\t\t.max-w-56 > tbody > tr > td {
\t\t\t\t\tmax-width: 224px !important;
\t\t\t\t\twidth: 100% !important
\t\t\t\t}

\t\t\t\t.max-w-96,
\t\t\t\t.max-w-96 > tbody > tr > td {
\t\t\t\t\tmax-width: 384px !important;
\t\t\t\t\twidth: 100% !important
\t\t\t\t}

\t\t\t\t.w-lg-80,
\t\t\t\t.w-lg-80 > tbody > tr > td {
\t\t\t\t\twidth: auto !important
\t\t\t\t}

\t\t\t\t.w-full,
\t\t\t\t.w-full > tbody > tr > td {
\t\t\t\t\twidth: 100% !important
\t\t\t\t}

\t\t\t\t.w-32,
\t\t\t\t.w-32 > tbody > tr > td {
\t\t\t\t\twidth: 128px !important
\t\t\t\t}

\t\t\t\t.pt-4:not(table),
\t\t\t\t.pt-4:not(.btn) > tbody > tr > td,
\t\t\t\t.pt-4.btn td a,
\t\t\t\t.py-4:not(table),
\t\t\t\t.py-4:not(.btn) > tbody > tr > td,
\t\t\t\t.py-4.btn td a {
\t\t\t\t\tpadding-top: 16px !important
\t\t\t\t}

\t\t\t\t.pb-4:not(table),
\t\t\t\t.pb-4:not(.btn) > tbody > tr > td,
\t\t\t\t.pb-4.btn td a,
\t\t\t\t.py-4:not(table),
\t\t\t\t.py-4:not(.btn) > tbody > tr > td,
\t\t\t\t.py-4.btn td a {
\t\t\t\t\tpadding-bottom: 16px !important
\t\t\t\t}

\t\t\t\t*[class*=s-lg-] > tbody > tr > td {
\t\t\t\t\tfont-size: 0 !important;
\t\t\t\t\tline-height: 0 !important;
\t\t\t\t\theight: 0 !important
\t\t\t\t}

\t\t\t\t.s-6 > tbody > tr > td {
\t\t\t\t\tfont-size: 24px !important;
\t\t\t\t\tline-height: 24px !important;
\t\t\t\t\theight: 24px !important
\t\t\t\t}

\t\t\t\t.s-10 > tbody > tr > td {
\t\t\t\t\tfont-size: 40px !important;
\t\t\t\t\tline-height: 40px !important;
\t\t\t\t\theight: 40px !important
\t\t\t\t}
\t\t\t}
\t\t</style>
\t</head>
\t<body style=\"outline: 0; width: 100%; min-width: 100%; height: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; font-family: Helvetica, Arial, sans-serif; line-height: 24px; font-weight: normal; font-size: 16px; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; color: #000000; margin: 0; padding: 0; border: 0;\" bgcolor=\"#ffffff\">
\t\t<table class=\"body\" valign=\"top\" role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"outline: 0; width: 100%; min-width: 100%; height: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; font-family: Helvetica, Arial, sans-serif; line-height: 24px; font-weight: normal; font-size: 16px; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; color: #000000; margin: 0; padding: 0; border: 0;\" bgcolor=\"#ffffff\">
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td valign=\"top\" style=\"line-height: 24px; font-size: 16px; margin: 0;\" align=\"left\">
\t\t\t\t\t\t<table class=\"bg-black w-full\" role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width: 100%;\" bgcolor=\"#000000\" width=\"100%\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td style=\"line-height: 24px; font-size: 16px; width: 100%; margin: 0;\" align=\"left\" bgcolor=\"#000000\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t<table class=\"container\" role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width: 100%;\">
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\" style=\"line-height: 24px; font-size: 16px; margin: 0; padding: 0 16px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--[if (gte mso 9)|(IE)]>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    <table align=\"center\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        <tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        <tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            <td width=\"600\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    <![endif]-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table align=\"center\" role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width: 100%; max-width: 600px; margin: 0 auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"line-height: 24px; font-size: 16px; margin: 0;\" align=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"s-10 w-full\" role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width: 100%;\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"line-height: 40px; font-size: 40px; width: 100%; height: 40px; margin: 0;\" align=\"left\" width=\"100%\" height=\"40\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&#160;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"ax-center\" role=\"presentation\" align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"margin: 0 auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"line-height: 24px; font-size: 16px; margin: 0;\" align=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"w-32\" src=\"https://symfony.com/images/opengraph/symfony.png\" style=\"height: auto; line-height: 100%; outline: none; text-decoration: none; display: block; width: 128px; border: 0 none;\" width=\"128\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"s-10 w-full\" role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width: 100%;\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"line-height: 40px; font-size: 40px; width: 100%; height: 40px; margin: 0;\" align=\"left\" width=\"100%\" height=\"40\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&#160;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"ax-center\" role=\"presentation\" align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"margin: 0 auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"line-height: 24px; font-size: 16px; margin: 0;\" align=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"text-white text-center\" style=\"color: #ffffff; padding-top: 0; padding-bottom: 0; font-weight: 500; vertical-align: baseline; font-size: 36px; line-height: 43.2px; margin: 0;\" align=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 195
        echo twig_escape_filter($this->env, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 195, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvenant de
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 197
        echo twig_escape_filter($this->env, (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 197, $this->source); })()), "html", null, true);
        echo "</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"s-10 w-full\" role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width: 100%;\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"line-height: 40px; font-size: 40px; width: 100%; height: 40px; margin: 0;\" align=\"left\" width=\"100%\" height=\"40\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&#160;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"ax-center\" role=\"presentation\" align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"margin: 0 auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"line-height: 24px; font-size: 16px; margin: 0;\" align=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"max-w-56  rounded-lg\" src=\"cid:logo\" style=\"height: auto; line-height: 100%; outline: none; text-decoration: none; display: block; border-radius: 8px; max-width: 224px; width: 100%; border: 0 none;\" width=\"224\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"s-10 w-full\" role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width: 100%;\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"line-height: 40px; font-size: 40px; width: 100%; height: 40px; margin: 0;\" align=\"left\" width=\"100%\" height=\"40\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&#160;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"ax-center\" role=\"presentation\" align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"margin: 0 auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"line-height: 24px; font-size: 16px; margin: 0;\" align=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"max-w-96 lh-lg text-white text-center text-2xl\" style=\"line-height: 2; font-size: 24px; color: #ffffff; max-width: 384px; -premailer-width: 384; width: 100%; margin: 0;\" align=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 234
        echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 234, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"s-10 w-full\" role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width: 100%;\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"line-height: 40px; font-size: 40px; width: 100%; height: 40px; margin: 0;\" align=\"left\" width=\"100%\" height=\"40\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&#160;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"btn btn-yellow-300 rounded-full fw-800 text-5xl py-4 ax-center  w-full w-lg-80\" role=\"presentation\" align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-radius: 9999px; border-collapse: separate !important; width: 320px; font-size: 48px; line-height: 57.6px; font-weight: 800 !important; margin: 0 auto;\" width=\"320\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"line-height: 24px; font-size: 16px; border-radius: 9999px; width: 320px; font-weight: 800 !important; margin: 0;\" align=\"center\" bgcolor=\"#ffda6a\" width=\"320\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 253
        echo twig_escape_filter($this->env, (isset($context["liens"]) || array_key_exists("liens", $context) ? $context["liens"] : (function () { throw new RuntimeError('Variable "liens" does not exist.', 253, $this->source); })()), "html", null, true);
        echo "\" style=\"color: #111111; font-size: 16px; font-family: Helvetica, Arial, sans-serif; text-decoration: none; border-radius: 9999px; line-height: 20px; display: inline-block; font-weight: 800 !important; white-space: nowrap; background-color: #ffda6a; padding: 16px 12px; border: 1px solid #ffda6a;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 254
        echo twig_escape_filter($this->env, (isset($context["objectif"]) || array_key_exists("objectif", $context) ? $context["objectif"] : (function () { throw new RuntimeError('Variable "objectif" does not exist.', 254, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"s-10 w-full\" role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width: 100%;\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"line-height: 40px; font-size: 40px; width: 100%; height: 40px; margin: 0;\" align=\"left\" width=\"100%\" height=\"40\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&#160;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"s-10 w-full\" role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width: 100%;\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"line-height: 40px; font-size: 40px; width: 100%; height: 40px; margin: 0;\" align=\"left\" width=\"100%\" height=\"40\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&#160;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t<!--[if (gte mso 9)|(IE)]>
\t\t\t\t\t\t\t\t\t\t                        </td>
\t\t\t\t\t\t\t\t\t\t                        </tr>
\t\t\t\t\t\t\t\t\t\t                        </tbody>
\t\t\t\t\t\t\t\t\t\t                        </table>
\t\t\t\t\t\t\t\t\t\t                        <![endif]-->
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t</body>
</html></td></tr></tbody></table></body></html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/email_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 254,  306 => 253,  284 => 234,  244 => 197,  239 => 195,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html PUBLIC \"-//W3C//DTDXHTML1.0Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html>
\t<head>
\t\t<!-- Compiled with Bootstrap Email version: 1.0.0.alpha4 -->
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
\t\t<meta name=\"x-apple-disable-message-reformatting\">
\t\t<meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<meta name=\"format-detection\" content=\"telephone=no, date=no, address=no, email=no\">
\t\t<style>
\t\t\ttype=\"text/css\"
\t\t\tbody,
\t\t\ttable,
\t\t\ttd {
\t\t\t\tfont-family: Helvetica, Arial, sans-serif !important
\t\t\t}

\t\t\t.ExternalClass {
\t\t\t\twidth: 100%
\t\t\t}

\t\t\t.ExternalClass,
\t\t\t.ExternalClass p,
\t\t\t.ExternalClass span,
\t\t\t.ExternalClass font,
\t\t\t.ExternalClass td,
\t\t\t.ExternalClass div {
\t\t\t\tline-height: 150%
\t\t\t}

\t\t\ta {
\t\t\t\ttext-decoration: none
\t\t\t}

\t\t\t* {
\t\t\t\tcolor: inherit
\t\t\t}

\t\t\ta[x-apple-data-detectors],
\t\t\tu + #body a,
\t\t\t#MessageViewBody a {
\t\t\t\tcolor: inherit;
\t\t\t\ttext-decoration: none;
\t\t\t\tfont-size: inherit;
\t\t\t\tfont-family: inherit;
\t\t\t\tfont-weight: inherit;
\t\t\t\tline-height: inherit
\t\t\t}

\t\t\timg {
\t\t\t\t-ms-interpolation-mode: bicubic
\t\t\t}

\t\t\ttable:not([class^=s-]) {
\t\t\t\tfont-family: Helvetica, Arial, sans-serif;
\t\t\t\tmso-table-lspace: 0;
\t\t\t\tmso-table-rspace: 0;
\t\t\t\tborder-spacing: 0;
\t\t\t\tborder-collapse: collapse
\t\t\t}

\t\t\ttable:not([class^=s-]) td {
\t\t\t\tborder-spacing: 0;
\t\t\t\tborder-collapse: collapse
\t\t\t}

\t\t\t@media screen and(max-width: 600px) {
\t\t\t\t.max-w-48,
\t\t\t\t.max-w-48 > tbody > tr > td {
\t\t\t\t\tmax-width: 192px !important;
\t\t\t\t\twidth: 100% !important
\t\t\t\t}

\t\t\t\t.max-w-56,
\t\t\t\t.max-w-56 > tbody > tr > td {
\t\t\t\t\tmax-width: 224px !important;
\t\t\t\t\twidth: 100% !important
\t\t\t\t}

\t\t\t\t.max-w-96,
\t\t\t\t.max-w-96 > tbody > tr > td {
\t\t\t\t\tmax-width: 384px !important;
\t\t\t\t\twidth: 100% !important
\t\t\t\t}

\t\t\t\t.w-lg-80,
\t\t\t\t.w-lg-80 > tbody > tr > td {
\t\t\t\t\twidth: auto !important
\t\t\t\t}

\t\t\t\t.w-full,
\t\t\t\t.w-full > tbody > tr > td {
\t\t\t\t\twidth: 100% !important
\t\t\t\t}

\t\t\t\t.w-32,
\t\t\t\t.w-32 > tbody > tr > td {
\t\t\t\t\twidth: 128px !important
\t\t\t\t}

\t\t\t\t.pt-4:not(table),
\t\t\t\t.pt-4:not(.btn) > tbody > tr > td,
\t\t\t\t.pt-4.btn td a,
\t\t\t\t.py-4:not(table),
\t\t\t\t.py-4:not(.btn) > tbody > tr > td,
\t\t\t\t.py-4.btn td a {
\t\t\t\t\tpadding-top: 16px !important
\t\t\t\t}

\t\t\t\t.pb-4:not(table),
\t\t\t\t.pb-4:not(.btn) > tbody > tr > td,
\t\t\t\t.pb-4.btn td a,
\t\t\t\t.py-4:not(table),
\t\t\t\t.py-4:not(.btn) > tbody > tr > td,
\t\t\t\t.py-4.btn td a {
\t\t\t\t\tpadding-bottom: 16px !important
\t\t\t\t}

\t\t\t\t*[class*=s-lg-] > tbody > tr > td {
\t\t\t\t\tfont-size: 0 !important;
\t\t\t\t\tline-height: 0 !important;
\t\t\t\t\theight: 0 !important
\t\t\t\t}

\t\t\t\t.s-6 > tbody > tr > td {
\t\t\t\t\tfont-size: 24px !important;
\t\t\t\t\tline-height: 24px !important;
\t\t\t\t\theight: 24px !important
\t\t\t\t}

\t\t\t\t.s-10 > tbody > tr > td {
\t\t\t\t\tfont-size: 40px !important;
\t\t\t\t\tline-height: 40px !important;
\t\t\t\t\theight: 40px !important
\t\t\t\t}
\t\t\t}
\t\t</style>
\t</head>
\t<body style=\"outline: 0; width: 100%; min-width: 100%; height: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; font-family: Helvetica, Arial, sans-serif; line-height: 24px; font-weight: normal; font-size: 16px; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; color: #000000; margin: 0; padding: 0; border: 0;\" bgcolor=\"#ffffff\">
\t\t<table class=\"body\" valign=\"top\" role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"outline: 0; width: 100%; min-width: 100%; height: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; font-family: Helvetica, Arial, sans-serif; line-height: 24px; font-weight: normal; font-size: 16px; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; color: #000000; margin: 0; padding: 0; border: 0;\" bgcolor=\"#ffffff\">
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td valign=\"top\" style=\"line-height: 24px; font-size: 16px; margin: 0;\" align=\"left\">
\t\t\t\t\t\t<table class=\"bg-black w-full\" role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width: 100%;\" bgcolor=\"#000000\" width=\"100%\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td style=\"line-height: 24px; font-size: 16px; width: 100%; margin: 0;\" align=\"left\" bgcolor=\"#000000\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t<table class=\"container\" role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width: 100%;\">
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td
\t\t\t\t\t\t\t\t\t\t\t\t\t\talign=\"center\" style=\"line-height: 24px; font-size: 16px; margin: 0; padding: 0 16px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--[if (gte mso 9)|(IE)]>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    <table align=\"center\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        <tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                        <tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            <td width=\"600\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    <![endif]-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table align=\"center\" role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width: 100%; max-width: 600px; margin: 0 auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"line-height: 24px; font-size: 16px; margin: 0;\" align=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"s-10 w-full\" role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width: 100%;\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"line-height: 40px; font-size: 40px; width: 100%; height: 40px; margin: 0;\" align=\"left\" width=\"100%\" height=\"40\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&#160;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"ax-center\" role=\"presentation\" align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"margin: 0 auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"line-height: 24px; font-size: 16px; margin: 0;\" align=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"w-32\" src=\"https://symfony.com/images/opengraph/symfony.png\" style=\"height: auto; line-height: 100%; outline: none; text-decoration: none; display: block; width: 128px; border: 0 none;\" width=\"128\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"s-10 w-full\" role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width: 100%;\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"line-height: 40px; font-size: 40px; width: 100%; height: 40px; margin: 0;\" align=\"left\" width=\"100%\" height=\"40\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&#160;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"ax-center\" role=\"presentation\" align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"margin: 0 auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"line-height: 24px; font-size: 16px; margin: 0;\" align=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"text-white text-center\" style=\"color: #ffffff; padding-top: 0; padding-bottom: 0; font-weight: 500; vertical-align: baseline; font-size: 36px; line-height: 43.2px; margin: 0;\" align=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ subject }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvenant de
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ from }}</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"s-10 w-full\" role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width: 100%;\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"line-height: 40px; font-size: 40px; width: 100%; height: 40px; margin: 0;\" align=\"left\" width=\"100%\" height=\"40\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&#160;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"ax-center\" role=\"presentation\" align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"margin: 0 auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"line-height: 24px; font-size: 16px; margin: 0;\" align=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"max-w-56  rounded-lg\" src=\"cid:logo\" style=\"height: auto; line-height: 100%; outline: none; text-decoration: none; display: block; border-radius: 8px; max-width: 224px; width: 100%; border: 0 none;\" width=\"224\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"s-10 w-full\" role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width: 100%;\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"line-height: 40px; font-size: 40px; width: 100%; height: 40px; margin: 0;\" align=\"left\" width=\"100%\" height=\"40\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&#160;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"ax-center\" role=\"presentation\" align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"margin: 0 auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"line-height: 24px; font-size: 16px; margin: 0;\" align=\"left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"max-w-96 lh-lg text-white text-center text-2xl\" style=\"line-height: 2; font-size: 24px; color: #ffffff; max-width: 384px; -premailer-width: 384; width: 100%; margin: 0;\" align=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ message }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"s-10 w-full\" role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width: 100%;\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"line-height: 40px; font-size: 40px; width: 100%; height: 40px; margin: 0;\" align=\"left\" width=\"100%\" height=\"40\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&#160;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"btn btn-yellow-300 rounded-full fw-800 text-5xl py-4 ax-center  w-full w-lg-80\" role=\"presentation\" align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-radius: 9999px; border-collapse: separate !important; width: 320px; font-size: 48px; line-height: 57.6px; font-weight: 800 !important; margin: 0 auto;\" width=\"320\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"line-height: 24px; font-size: 16px; border-radius: 9999px; width: 320px; font-weight: 800 !important; margin: 0;\" align=\"center\" bgcolor=\"#ffda6a\" width=\"320\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ liens }}\" style=\"color: #111111; font-size: 16px; font-family: Helvetica, Arial, sans-serif; text-decoration: none; border-radius: 9999px; line-height: 20px; display: inline-block; font-weight: 800 !important; white-space: nowrap; background-color: #ffda6a; padding: 16px 12px; border: 1px solid #ffda6a;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ objectif }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"s-10 w-full\" role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width: 100%;\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"line-height: 40px; font-size: 40px; width: 100%; height: 40px; margin: 0;\" align=\"left\" width=\"100%\" height=\"40\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&#160;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"s-10 w-full\" role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width: 100%;\" width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"line-height: 40px; font-size: 40px; width: 100%; height: 40px; margin: 0;\" align=\"left\" width=\"100%\" height=\"40\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&#160;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t<!--[if (gte mso 9)|(IE)]>
\t\t\t\t\t\t\t\t\t\t                        </td>
\t\t\t\t\t\t\t\t\t\t                        </tr>
\t\t\t\t\t\t\t\t\t\t                        </tbody>
\t\t\t\t\t\t\t\t\t\t                        </table>
\t\t\t\t\t\t\t\t\t\t                        <![endif]-->
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t</body>
</html></td></tr></tbody></table></body></html>
", "home/email_template.html.twig", "/Users/nounou/Desktop/Cours_doranco/14-cours_Symfony/projet_ecommerce/DressIn/templates/home/email_template.html.twig");
    }
}

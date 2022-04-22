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

/* contact.html.twig */
class __TwigTemplate_1f94caf736f937dfaea4388bfaeaa14ee222ad7d16d478fbcc4f1d7840db91da extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
<title>Contact</title>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"description\" content=\"Travelix Project\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"styles/bootstrap4/bootstrap.min.css\">
<link href=\"plugins/font-awesome-4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"styles/contact_styles.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"styles/contact_responsive.css\">
</head>

<body>

<div class=\"super_container\">
\t
\t<!-- Header -->

\t<header class=\"header\">

\t\t<!-- Top Bar -->

\t\t<div class=\"top_bar\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col d-flex flex-row\">
\t\t\t\t\t\t<div class=\"phone\">+45 345 3324 56789</div>
\t\t\t\t\t\t<div class=\"social\">
\t\t\t\t\t\t\t<ul class=\"social_list\">
\t\t\t\t\t\t\t\t<li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-behance\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"user_box ml-auto\">
\t\t\t\t\t\t\t<div class=\"user_box_login user_box_link\"><a href=\"#\">login</a></div>
\t\t\t\t\t\t\t<div class=\"user_box_register user_box_link\"><a href=\"#\">register</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t\t
\t\t</div>

\t\t<!-- Main Navigation -->

\t\t<nav class=\"main_nav\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col main_nav_col d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t<div class=\"logo_container\">
\t\t\t\t\t\t\t<div class=\"logo\"><a href=\"#\"><img src=\"images/logo.png\" alt=\"\">travelix</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"main_nav_container ml-auto\">
\t\t\t\t\t\t\t<ul class=\"main_nav_list\">
\t\t\t\t\t\t\t\t<li class=\"main_nav_item\"><a href=\"index.html\">home</a></li>
\t\t\t\t\t\t\t\t<li class=\"main_nav_item\"><a href=\"about.html\">about us</a></li>
\t\t\t\t\t\t\t\t<li class=\"main_nav_item\"><a href=\"offers.html\">offers</a></li>
\t\t\t\t\t\t\t\t<li class=\"main_nav_item\"><a href=\"blog.html\">news</a></li>
\t\t\t\t\t\t\t\t<li class=\"main_nav_item\"><a href=\"#\">contact</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"content_search ml-lg-0 ml-auto\">
\t\t\t\t\t\t\t<svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t\t\t\t\t\t\twidth=\"17px\" height=\"17px\" viewBox=\"0 0 512 512\" enable-background=\"new 0 0 512 512\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t<path class=\"mag_glass\" fill=\"#FFFFFF\" d=\"M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
\t\t\t\t\t\t\t\t\t\t\ts112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
\t\t\t\t\t\t\t\t\t\t\tC407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
\t\t\t\t\t\t\t\t\t\t\tM119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
\t\t\t\t\t\t\t\t\t\t\tc0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z\"/>
\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t<path class=\"mag_glass\" fill=\"#FFFFFF\" d=\"M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
\t\t\t\t\t\t\t\t\t\t\tc8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
\t\t\t\t\t\t\t\t\t\t\tC-2.019,484.77-2.019,497.865,6.057,505.942z\"/>
\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<form id=\"search_form\" class=\"search_form bez_1\">
\t\t\t\t\t\t\t<input type=\"search\" class=\"search_content_input bez_1\">
\t\t\t\t\t\t</form>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"hamburger\">
\t\t\t\t\t\t\t<i class=\"fa fa-bars trans_200\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</nav>

\t</header>

\t<div class=\"menu trans_500\">
\t\t<div class=\"menu_content d-flex flex-column align-items-center justify-content-center text-center\">
\t\t\t<div class=\"menu_close_container\"><div class=\"menu_close\"></div></div>
\t\t\t<div class=\"logo menu_logo\"><a href=\"#\"><img src=\"images/logo.png\" alt=\"\"></a></div>
\t\t\t<ul>
\t\t\t\t<li class=\"menu_item\"><a href=\"index.html\">home</a></li>
\t\t\t\t<li class=\"menu_item\"><a href=\"about.html\">about us</a></li>
\t\t\t\t<li class=\"menu_item\"><a href=\"offers.html\">offers</a></li>
\t\t\t\t<li class=\"menu_item\"><a href=\"blog.html\">news</a></li>
\t\t\t\t<li class=\"menu_item\"><a href=\"#\">contact</a></li>
\t\t\t</ul>
\t\t</div>
\t</div>

\t<!-- Home -->

\t<div class=\"home\">
\t\t<div class=\"home_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"images/contact_background.jpg\"></div>
\t\t<div class=\"home_content\">
\t\t\t<div class=\"home_title\">contact</div>
\t\t</div>
\t</div>

\t<!-- Contact -->

\t<div class=\"contact_form_section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">

\t\t\t\t\t<!-- Contact Form -->
\t\t\t\t\t<div class=\"contact_form_container\">
\t\t\t\t\t\t<div class=\"contact_title text-center\">get in touch</div>
\t\t\t\t\t\t<form action=\"#\" id=\"contact_form\" class=\"contact_form text-center\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"contact_form_name\" class=\"contact_form_name input_field\" placeholder=\"Name\" required=\"required\" data-error=\"Name is required.\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"contact_form_email\" class=\"contact_form_email input_field\" placeholder=\"E-mail\" required=\"required\" data-error=\"Email is required.\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"contact_form_subject\" class=\"contact_form_subject input_field\" placeholder=\"Subject\" required=\"required\" data-error=\"Subject is required.\">
\t\t\t\t\t\t\t<textarea id=\"contact_form_message\" class=\"text_field contact_form_message\" name=\"message\" rows=\"4\" placeholder=\"Message\" required=\"required\" data-error=\"Please, write us a message.\"></textarea>
\t\t\t\t\t\t\t<button type=\"submit\" id=\"form_submit_button\" class=\"form_submit_button button trans_200\">send message<span></span><span></span><span></span></button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- About -->
\t<div class=\"about\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t
\t\t\t\t\t<!-- About - Image -->

\t\t\t\t\t<div class=\"about_image\">
\t\t\t\t\t\t<img src=\"images/man.png\" alt=\"\">
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t
\t\t\t\t\t<!-- About - Content -->

\t\t\t\t\t<div class=\"about_content\">
\t\t\t\t\t\t<div class=\"logo_container about_logo\">
\t\t\t\t\t\t\t<div class=\"logo\"><a href=\"#\"><img src=\"images/logo.png\" alt=\"\">travelix</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"about_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vu lputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer eleme ntum orci eu vehicula iaculis consequat nisl. Nunc et suscipit urna pretium.</p>
\t\t\t\t\t\t<ul class=\"about_social_list\">
\t\t\t\t\t\t\t<li class=\"about_social_item\"><a href=\"#\"><i class=\"fa fa-pinterest\"></i></a></li>
\t\t\t\t\t\t\t<li class=\"about_social_item\"><a href=\"#\"><i class=\"fa fa-facebook-f\"></i></a></li>
\t\t\t\t\t\t\t<li class=\"about_social_item\"><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t\t<li class=\"about_social_item\"><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
\t\t\t\t\t\t\t<li class=\"about_social_item\"><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t
\t\t\t\t\t<!-- About Info -->

\t\t\t\t\t<div class=\"about_info\">
\t\t\t\t\t\t<ul class=\"contact_info_list\">
\t\t\t\t\t\t\t<li class=\"contact_info_item d-flex flex-row\">
\t\t\t\t\t\t\t\t<div><div class=\"contact_info_icon\"><img src=\"images/placeholder.svg\" alt=\"\"></div></div>
\t\t\t\t\t\t\t\t<div class=\"contact_info_text\">4127 Raoul Wallenber 45b-c Gibraltar</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"contact_info_item d-flex flex-row\">
\t\t\t\t\t\t\t\t<div><div class=\"contact_info_icon\"><img src=\"images/phone-call.svg\" alt=\"\"></div></div>
\t\t\t\t\t\t\t\t<div class=\"contact_info_text\">2556-808-8613</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"contact_info_item d-flex flex-row\">
\t\t\t\t\t\t\t\t<div><div class=\"contact_info_icon\"><img src=\"images/message.svg\" alt=\"\"></div></div>
\t\t\t\t\t\t\t\t<div class=\"contact_info_text\"><a href=\"mailto:contactme@gmail.com?Subject=Hello\" target=\"_top\">contactme@gmail.com</a></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"contact_info_item d-flex flex-row\">
\t\t\t\t\t\t\t\t<div><div class=\"contact_info_icon\"><img src=\"images/planet-earth.svg\" alt=\"\"></div></div>
\t\t\t\t\t\t\t\t<div class=\"contact_info_text\"><a href=\"https://colorlib.com\">www.colorlib.com</a></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Google Map -->
\t\t
\t<div class=\"travelix_map\">
\t\t<div id=\"google_map\" class=\"google_map\">
\t\t\t<div class=\"map_container\">
\t\t\t\t<div id=\"map\"></div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Footer -->

\t<footer class=\"footer\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">

\t\t\t\t<!-- Footer Column -->
\t\t\t\t<div class=\"col-lg-3 footer_column\">
\t\t\t\t\t<div class=\"footer_col\">
\t\t\t\t\t\t<div class=\"footer_content footer_about\">
\t\t\t\t\t\t\t<div class=\"logo_container footer_logo\">
\t\t\t\t\t\t\t\t<div class=\"logo\"><a href=\"#\"><img src=\"images/logo.png\" alt=\"\">travelix</a></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"footer_about_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vu lputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer eleme ntum orci eu vehicula pretium.</p>
\t\t\t\t\t\t\t<ul class=\"footer_social_list\">
\t\t\t\t\t\t\t\t<li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-pinterest\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-facebook-f\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Footer Column -->
\t\t\t\t<div class=\"col-lg-3 footer_column\">
\t\t\t\t\t<div class=\"footer_col\">
\t\t\t\t\t\t<div class=\"footer_title\">blog posts</div>
\t\t\t\t\t\t<div class=\"footer_content footer_blog\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Footer blog item -->
\t\t\t\t\t\t\t<div class=\"footer_blog_item clearfix\">
\t\t\t\t\t\t\t\t<div class=\"footer_blog_image\"><img src=\"images/footer_blog_1.jpg\" alt=\"https://unsplash.com/@avidenov\"></div>
\t\t\t\t\t\t\t\t<div class=\"footer_blog_content\">
\t\t\t\t\t\t\t\t\t<div class=\"footer_blog_title\"><a href=\"blog.html\">Travel with us this year</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"footer_blog_date\">Nov 29, 2017</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Footer blog item -->
\t\t\t\t\t\t\t<div class=\"footer_blog_item clearfix\">
\t\t\t\t\t\t\t\t<div class=\"footer_blog_image\"><img src=\"images/footer_blog_2.jpg\" alt=\"https://unsplash.com/@deannaritchie\"></div>
\t\t\t\t\t\t\t\t<div class=\"footer_blog_content\">
\t\t\t\t\t\t\t\t\t<div class=\"footer_blog_title\"><a href=\"blog.html\">New destinations for you</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"footer_blog_date\">Nov 29, 2017</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Footer blog item -->
\t\t\t\t\t\t\t<div class=\"footer_blog_item clearfix\">
\t\t\t\t\t\t\t\t<div class=\"footer_blog_image\"><img src=\"images/footer_blog_3.jpg\" alt=\"https://unsplash.com/@bergeryap87\"></div>
\t\t\t\t\t\t\t\t<div class=\"footer_blog_content\">
\t\t\t\t\t\t\t\t\t<div class=\"footer_blog_title\"><a href=\"blog.html\">Travel with us this year</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"footer_blog_date\">Nov 29, 2017</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Footer Column -->
\t\t\t\t<div class=\"col-lg-3 footer_column\">
\t\t\t\t\t<div class=\"footer_col\">
\t\t\t\t\t\t<div class=\"footer_title\">tags</div>
\t\t\t\t\t\t<div class=\"footer_content footer_tags\">
\t\t\t\t\t\t\t<ul class=\"tags_list clearfix\">
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">design</a></li>
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">fashion</a></li>
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">music</a></li>
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">video</a></li>
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">party</a></li>
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">photography</a></li>
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">adventure</a></li>
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">travel</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Footer Column -->
\t\t\t\t<div class=\"col-lg-3 footer_column\">
\t\t\t\t\t<div class=\"footer_col\">
\t\t\t\t\t\t<div class=\"footer_title\">contact info</div>
\t\t\t\t\t\t<div class=\"footer_content footer_contact\">
\t\t\t\t\t\t\t<ul class=\"contact_info_list\">
\t\t\t\t\t\t\t\t<li class=\"contact_info_item d-flex flex-row\">
\t\t\t\t\t\t\t\t\t<div><div class=\"contact_info_icon\"><img src=\"images/placeholder.svg\" alt=\"\"></div></div>
\t\t\t\t\t\t\t\t\t<div class=\"contact_info_text\">4127 Raoul Wallenber 45b-c Gibraltar</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"contact_info_item d-flex flex-row\">
\t\t\t\t\t\t\t\t\t<div><div class=\"contact_info_icon\"><img src=\"images/phone-call.svg\" alt=\"\"></div></div>
\t\t\t\t\t\t\t\t\t<div class=\"contact_info_text\">2556-808-8613</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"contact_info_item d-flex flex-row\">
\t\t\t\t\t\t\t\t\t<div><div class=\"contact_info_icon\"><img src=\"images/message.svg\" alt=\"\"></div></div>
\t\t\t\t\t\t\t\t\t<div class=\"contact_info_text\"><a href=\"mailto:contactme@gmail.com?Subject=Hello\" target=\"_top\">contactme@gmail.com</a></div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"contact_info_item d-flex flex-row\">
\t\t\t\t\t\t\t\t\t<div><div class=\"contact_info_icon\"><img src=\"images/planet-earth.svg\" alt=\"\"></div></div>
\t\t\t\t\t\t\t\t\t<div class=\"contact_info_text\"><a href=\"https://colorlib.com\">www.colorlib.com</a></div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</footer>

\t<!-- Copyright -->

\t<div class=\"copyright\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-3 order-lg-1 order-2  \">
\t\t\t\t\t<div class=\"copyright_content d-flex flex-row align-items-center\">
\t\t\t\t\t\t<div><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>. Downloaded from <a href=\"https://themeslab.org/\" target=\"_blank\">Themeslab</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-9 order-lg-2 order-1\">
\t\t\t\t\t<div class=\"footer_nav_container d-flex flex-row align-items-center justify-content-lg-end\">
\t\t\t\t\t\t<div class=\"footer_nav\">
\t\t\t\t\t\t\t<ul class=\"footer_nav_list\">
\t\t\t\t\t\t\t\t<li class=\"footer_nav_item\"><a href=\"index.html\">home</a></li>
\t\t\t\t\t\t\t\t<li class=\"footer_nav_item\"><a href=\"about.html\">about us</a></li>
\t\t\t\t\t\t\t\t<li class=\"footer_nav_item\"><a href=\"offers.html\">offers</a></li>
\t\t\t\t\t\t\t\t<li class=\"footer_nav_item\"><a href=\"blog.html\">news</a></li>
\t\t\t\t\t\t\t\t<li class=\"footer_nav_item\"><a href=\"#\">contact</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

</div>

<script src=\"js/jquery-3.2.1.min.js\"></script>
<script src=\"styles/bootstrap4/popper.js\"></script>
<script src=\"styles/bootstrap4/bootstrap.min.js\"></script>
<script src=\"plugins/parallax-js-master/parallax.min.js\"></script>
<script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA\"></script>
<script src=\"js/contact_custom.js\"></script>

</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "contact.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
<title>Contact</title>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"description\" content=\"Travelix Project\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"styles/bootstrap4/bootstrap.min.css\">
<link href=\"plugins/font-awesome-4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"styles/contact_styles.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"styles/contact_responsive.css\">
</head>

<body>

<div class=\"super_container\">
\t
\t<!-- Header -->

\t<header class=\"header\">

\t\t<!-- Top Bar -->

\t\t<div class=\"top_bar\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col d-flex flex-row\">
\t\t\t\t\t\t<div class=\"phone\">+45 345 3324 56789</div>
\t\t\t\t\t\t<div class=\"social\">
\t\t\t\t\t\t\t<ul class=\"social_list\">
\t\t\t\t\t\t\t\t<li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-behance\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"user_box ml-auto\">
\t\t\t\t\t\t\t<div class=\"user_box_login user_box_link\"><a href=\"#\">login</a></div>
\t\t\t\t\t\t\t<div class=\"user_box_register user_box_link\"><a href=\"#\">register</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t\t
\t\t</div>

\t\t<!-- Main Navigation -->

\t\t<nav class=\"main_nav\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col main_nav_col d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t<div class=\"logo_container\">
\t\t\t\t\t\t\t<div class=\"logo\"><a href=\"#\"><img src=\"images/logo.png\" alt=\"\">travelix</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"main_nav_container ml-auto\">
\t\t\t\t\t\t\t<ul class=\"main_nav_list\">
\t\t\t\t\t\t\t\t<li class=\"main_nav_item\"><a href=\"index.html\">home</a></li>
\t\t\t\t\t\t\t\t<li class=\"main_nav_item\"><a href=\"about.html\">about us</a></li>
\t\t\t\t\t\t\t\t<li class=\"main_nav_item\"><a href=\"offers.html\">offers</a></li>
\t\t\t\t\t\t\t\t<li class=\"main_nav_item\"><a href=\"blog.html\">news</a></li>
\t\t\t\t\t\t\t\t<li class=\"main_nav_item\"><a href=\"#\">contact</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"content_search ml-lg-0 ml-auto\">
\t\t\t\t\t\t\t<svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
\t\t\t\t\t\t\twidth=\"17px\" height=\"17px\" viewBox=\"0 0 512 512\" enable-background=\"new 0 0 512 512\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t<path class=\"mag_glass\" fill=\"#FFFFFF\" d=\"M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
\t\t\t\t\t\t\t\t\t\t\ts112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
\t\t\t\t\t\t\t\t\t\t\tC407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
\t\t\t\t\t\t\t\t\t\t\tM119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
\t\t\t\t\t\t\t\t\t\t\tc0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z\"/>
\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t<g>
\t\t\t\t\t\t\t\t\t\t\t<path class=\"mag_glass\" fill=\"#FFFFFF\" d=\"M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
\t\t\t\t\t\t\t\t\t\t\tc8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
\t\t\t\t\t\t\t\t\t\t\tC-2.019,484.77-2.019,497.865,6.057,505.942z\"/>
\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<form id=\"search_form\" class=\"search_form bez_1\">
\t\t\t\t\t\t\t<input type=\"search\" class=\"search_content_input bez_1\">
\t\t\t\t\t\t</form>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"hamburger\">
\t\t\t\t\t\t\t<i class=\"fa fa-bars trans_200\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</nav>

\t</header>

\t<div class=\"menu trans_500\">
\t\t<div class=\"menu_content d-flex flex-column align-items-center justify-content-center text-center\">
\t\t\t<div class=\"menu_close_container\"><div class=\"menu_close\"></div></div>
\t\t\t<div class=\"logo menu_logo\"><a href=\"#\"><img src=\"images/logo.png\" alt=\"\"></a></div>
\t\t\t<ul>
\t\t\t\t<li class=\"menu_item\"><a href=\"index.html\">home</a></li>
\t\t\t\t<li class=\"menu_item\"><a href=\"about.html\">about us</a></li>
\t\t\t\t<li class=\"menu_item\"><a href=\"offers.html\">offers</a></li>
\t\t\t\t<li class=\"menu_item\"><a href=\"blog.html\">news</a></li>
\t\t\t\t<li class=\"menu_item\"><a href=\"#\">contact</a></li>
\t\t\t</ul>
\t\t</div>
\t</div>

\t<!-- Home -->

\t<div class=\"home\">
\t\t<div class=\"home_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"images/contact_background.jpg\"></div>
\t\t<div class=\"home_content\">
\t\t\t<div class=\"home_title\">contact</div>
\t\t</div>
\t</div>

\t<!-- Contact -->

\t<div class=\"contact_form_section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">

\t\t\t\t\t<!-- Contact Form -->
\t\t\t\t\t<div class=\"contact_form_container\">
\t\t\t\t\t\t<div class=\"contact_title text-center\">get in touch</div>
\t\t\t\t\t\t<form action=\"#\" id=\"contact_form\" class=\"contact_form text-center\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"contact_form_name\" class=\"contact_form_name input_field\" placeholder=\"Name\" required=\"required\" data-error=\"Name is required.\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"contact_form_email\" class=\"contact_form_email input_field\" placeholder=\"E-mail\" required=\"required\" data-error=\"Email is required.\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"contact_form_subject\" class=\"contact_form_subject input_field\" placeholder=\"Subject\" required=\"required\" data-error=\"Subject is required.\">
\t\t\t\t\t\t\t<textarea id=\"contact_form_message\" class=\"text_field contact_form_message\" name=\"message\" rows=\"4\" placeholder=\"Message\" required=\"required\" data-error=\"Please, write us a message.\"></textarea>
\t\t\t\t\t\t\t<button type=\"submit\" id=\"form_submit_button\" class=\"form_submit_button button trans_200\">send message<span></span><span></span><span></span></button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- About -->
\t<div class=\"about\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t
\t\t\t\t\t<!-- About - Image -->

\t\t\t\t\t<div class=\"about_image\">
\t\t\t\t\t\t<img src=\"images/man.png\" alt=\"\">
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t
\t\t\t\t\t<!-- About - Content -->

\t\t\t\t\t<div class=\"about_content\">
\t\t\t\t\t\t<div class=\"logo_container about_logo\">
\t\t\t\t\t\t\t<div class=\"logo\"><a href=\"#\"><img src=\"images/logo.png\" alt=\"\">travelix</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"about_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vu lputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer eleme ntum orci eu vehicula iaculis consequat nisl. Nunc et suscipit urna pretium.</p>
\t\t\t\t\t\t<ul class=\"about_social_list\">
\t\t\t\t\t\t\t<li class=\"about_social_item\"><a href=\"#\"><i class=\"fa fa-pinterest\"></i></a></li>
\t\t\t\t\t\t\t<li class=\"about_social_item\"><a href=\"#\"><i class=\"fa fa-facebook-f\"></i></a></li>
\t\t\t\t\t\t\t<li class=\"about_social_item\"><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t\t<li class=\"about_social_item\"><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
\t\t\t\t\t\t\t<li class=\"about_social_item\"><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t
\t\t\t\t\t<!-- About Info -->

\t\t\t\t\t<div class=\"about_info\">
\t\t\t\t\t\t<ul class=\"contact_info_list\">
\t\t\t\t\t\t\t<li class=\"contact_info_item d-flex flex-row\">
\t\t\t\t\t\t\t\t<div><div class=\"contact_info_icon\"><img src=\"images/placeholder.svg\" alt=\"\"></div></div>
\t\t\t\t\t\t\t\t<div class=\"contact_info_text\">4127 Raoul Wallenber 45b-c Gibraltar</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"contact_info_item d-flex flex-row\">
\t\t\t\t\t\t\t\t<div><div class=\"contact_info_icon\"><img src=\"images/phone-call.svg\" alt=\"\"></div></div>
\t\t\t\t\t\t\t\t<div class=\"contact_info_text\">2556-808-8613</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"contact_info_item d-flex flex-row\">
\t\t\t\t\t\t\t\t<div><div class=\"contact_info_icon\"><img src=\"images/message.svg\" alt=\"\"></div></div>
\t\t\t\t\t\t\t\t<div class=\"contact_info_text\"><a href=\"mailto:contactme@gmail.com?Subject=Hello\" target=\"_top\">contactme@gmail.com</a></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"contact_info_item d-flex flex-row\">
\t\t\t\t\t\t\t\t<div><div class=\"contact_info_icon\"><img src=\"images/planet-earth.svg\" alt=\"\"></div></div>
\t\t\t\t\t\t\t\t<div class=\"contact_info_text\"><a href=\"https://colorlib.com\">www.colorlib.com</a></div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Google Map -->
\t\t
\t<div class=\"travelix_map\">
\t\t<div id=\"google_map\" class=\"google_map\">
\t\t\t<div class=\"map_container\">
\t\t\t\t<div id=\"map\"></div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Footer -->

\t<footer class=\"footer\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">

\t\t\t\t<!-- Footer Column -->
\t\t\t\t<div class=\"col-lg-3 footer_column\">
\t\t\t\t\t<div class=\"footer_col\">
\t\t\t\t\t\t<div class=\"footer_content footer_about\">
\t\t\t\t\t\t\t<div class=\"logo_container footer_logo\">
\t\t\t\t\t\t\t\t<div class=\"logo\"><a href=\"#\"><img src=\"images/logo.png\" alt=\"\">travelix</a></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"footer_about_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vu lputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer eleme ntum orci eu vehicula pretium.</p>
\t\t\t\t\t\t\t<ul class=\"footer_social_list\">
\t\t\t\t\t\t\t\t<li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-pinterest\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-facebook-f\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
\t\t\t\t\t\t\t\t<li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Footer Column -->
\t\t\t\t<div class=\"col-lg-3 footer_column\">
\t\t\t\t\t<div class=\"footer_col\">
\t\t\t\t\t\t<div class=\"footer_title\">blog posts</div>
\t\t\t\t\t\t<div class=\"footer_content footer_blog\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Footer blog item -->
\t\t\t\t\t\t\t<div class=\"footer_blog_item clearfix\">
\t\t\t\t\t\t\t\t<div class=\"footer_blog_image\"><img src=\"images/footer_blog_1.jpg\" alt=\"https://unsplash.com/@avidenov\"></div>
\t\t\t\t\t\t\t\t<div class=\"footer_blog_content\">
\t\t\t\t\t\t\t\t\t<div class=\"footer_blog_title\"><a href=\"blog.html\">Travel with us this year</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"footer_blog_date\">Nov 29, 2017</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Footer blog item -->
\t\t\t\t\t\t\t<div class=\"footer_blog_item clearfix\">
\t\t\t\t\t\t\t\t<div class=\"footer_blog_image\"><img src=\"images/footer_blog_2.jpg\" alt=\"https://unsplash.com/@deannaritchie\"></div>
\t\t\t\t\t\t\t\t<div class=\"footer_blog_content\">
\t\t\t\t\t\t\t\t\t<div class=\"footer_blog_title\"><a href=\"blog.html\">New destinations for you</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"footer_blog_date\">Nov 29, 2017</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Footer blog item -->
\t\t\t\t\t\t\t<div class=\"footer_blog_item clearfix\">
\t\t\t\t\t\t\t\t<div class=\"footer_blog_image\"><img src=\"images/footer_blog_3.jpg\" alt=\"https://unsplash.com/@bergeryap87\"></div>
\t\t\t\t\t\t\t\t<div class=\"footer_blog_content\">
\t\t\t\t\t\t\t\t\t<div class=\"footer_blog_title\"><a href=\"blog.html\">Travel with us this year</a></div>
\t\t\t\t\t\t\t\t\t<div class=\"footer_blog_date\">Nov 29, 2017</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Footer Column -->
\t\t\t\t<div class=\"col-lg-3 footer_column\">
\t\t\t\t\t<div class=\"footer_col\">
\t\t\t\t\t\t<div class=\"footer_title\">tags</div>
\t\t\t\t\t\t<div class=\"footer_content footer_tags\">
\t\t\t\t\t\t\t<ul class=\"tags_list clearfix\">
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">design</a></li>
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">fashion</a></li>
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">music</a></li>
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">video</a></li>
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">party</a></li>
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">photography</a></li>
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">adventure</a></li>
\t\t\t\t\t\t\t\t<li class=\"tag_item\"><a href=\"#\">travel</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Footer Column -->
\t\t\t\t<div class=\"col-lg-3 footer_column\">
\t\t\t\t\t<div class=\"footer_col\">
\t\t\t\t\t\t<div class=\"footer_title\">contact info</div>
\t\t\t\t\t\t<div class=\"footer_content footer_contact\">
\t\t\t\t\t\t\t<ul class=\"contact_info_list\">
\t\t\t\t\t\t\t\t<li class=\"contact_info_item d-flex flex-row\">
\t\t\t\t\t\t\t\t\t<div><div class=\"contact_info_icon\"><img src=\"images/placeholder.svg\" alt=\"\"></div></div>
\t\t\t\t\t\t\t\t\t<div class=\"contact_info_text\">4127 Raoul Wallenber 45b-c Gibraltar</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"contact_info_item d-flex flex-row\">
\t\t\t\t\t\t\t\t\t<div><div class=\"contact_info_icon\"><img src=\"images/phone-call.svg\" alt=\"\"></div></div>
\t\t\t\t\t\t\t\t\t<div class=\"contact_info_text\">2556-808-8613</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"contact_info_item d-flex flex-row\">
\t\t\t\t\t\t\t\t\t<div><div class=\"contact_info_icon\"><img src=\"images/message.svg\" alt=\"\"></div></div>
\t\t\t\t\t\t\t\t\t<div class=\"contact_info_text\"><a href=\"mailto:contactme@gmail.com?Subject=Hello\" target=\"_top\">contactme@gmail.com</a></div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"contact_info_item d-flex flex-row\">
\t\t\t\t\t\t\t\t\t<div><div class=\"contact_info_icon\"><img src=\"images/planet-earth.svg\" alt=\"\"></div></div>
\t\t\t\t\t\t\t\t\t<div class=\"contact_info_text\"><a href=\"https://colorlib.com\">www.colorlib.com</a></div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</footer>

\t<!-- Copyright -->

\t<div class=\"copyright\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-3 order-lg-1 order-2  \">
\t\t\t\t\t<div class=\"copyright_content d-flex flex-row align-items-center\">
\t\t\t\t\t\t<div><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>. Downloaded from <a href=\"https://themeslab.org/\" target=\"_blank\">Themeslab</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-9 order-lg-2 order-1\">
\t\t\t\t\t<div class=\"footer_nav_container d-flex flex-row align-items-center justify-content-lg-end\">
\t\t\t\t\t\t<div class=\"footer_nav\">
\t\t\t\t\t\t\t<ul class=\"footer_nav_list\">
\t\t\t\t\t\t\t\t<li class=\"footer_nav_item\"><a href=\"index.html\">home</a></li>
\t\t\t\t\t\t\t\t<li class=\"footer_nav_item\"><a href=\"about.html\">about us</a></li>
\t\t\t\t\t\t\t\t<li class=\"footer_nav_item\"><a href=\"offers.html\">offers</a></li>
\t\t\t\t\t\t\t\t<li class=\"footer_nav_item\"><a href=\"blog.html\">news</a></li>
\t\t\t\t\t\t\t\t<li class=\"footer_nav_item\"><a href=\"#\">contact</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

</div>

<script src=\"js/jquery-3.2.1.min.js\"></script>
<script src=\"styles/bootstrap4/popper.js\"></script>
<script src=\"styles/bootstrap4/bootstrap.min.js\"></script>
<script src=\"plugins/parallax-js-master/parallax.min.js\"></script>
<script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA\"></script>
<script src=\"js/contact_custom.js\"></script>

</body>

</html>", "contact.html.twig", "C:\\xampp\\htdocs\\integration\\integration\\projet\\projet\\projet\\templates\\contact.html.twig");
    }
}

<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* user_guard/show.html.twig */
class __TwigTemplate_76e93494cba7d3fe10844b347d2458f6 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user_guard/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user_guard/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "UserGuard";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <h1>UserGuard</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_guard"]) || array_key_exists("user_guard", $context) ? $context["user_guard"] : (function () { throw new RuntimeError('Variable "user_guard" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_guard"]) || array_key_exists("user_guard", $context) ? $context["user_guard"] : (function () { throw new RuntimeError('Variable "user_guard" does not exist.', 16, $this->source); })()), "email", [], "any", false, false, false, 16), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Roles</th>
                <td>";
        // line 20
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_guard"]) || array_key_exists("user_guard", $context) ? $context["user_guard"] : (function () { throw new RuntimeError('Variable "user_guard" does not exist.', 20, $this->source); })()), "roles", [], "any", false, false, false, 20)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_guard"]) || array_key_exists("user_guard", $context) ? $context["user_guard"] : (function () { throw new RuntimeError('Variable "user_guard" does not exist.', 20, $this->source); })()), "roles", [], "any", false, false, false, 20)), "html", null, true)) : (yield ""));
        yield "</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_guard"]) || array_key_exists("user_guard", $context) ? $context["user_guard"] : (function () { throw new RuntimeError('Variable "user_guard" does not exist.', 24, $this->source); })()), "password", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_guard_index");
        yield "\">back to list</a>

    <a href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_guard_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_guard"]) || array_key_exists("user_guard", $context) ? $context["user_guard"] : (function () { throw new RuntimeError('Variable "user_guard" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)]), "html", null, true);
        yield "\">edit</a>

    ";
        // line 33
        yield Twig\Extension\CoreExtension::include($this->env, $context, "user_guard/_delete_form.html.twig");
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "user_guard/show.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  132 => 33,  127 => 31,  122 => 29,  114 => 24,  107 => 20,  100 => 16,  93 => 12,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}UserGuard{% endblock %}

{% block body %}
    <h1>UserGuard</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ user_guard.id }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ user_guard.email }}</td>
            </tr>
            <tr>
                <th>Roles</th>
                <td>{{ user_guard.roles ? user_guard.roles|json_encode : '' }}</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>{{ user_guard.password }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_user_guard_index') }}\">back to list</a>

    <a href=\"{{ path('app_user_guard_edit', {'id': user_guard.id}) }}\">edit</a>

    {{ include('user_guard/_delete_form.html.twig') }}
{% endblock %}
", "user_guard/show.html.twig", "C:\\laragon\\www\\GitHub\\Marmitoff\\templates\\user_guard\\show.html.twig");
    }
}
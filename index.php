<?php
// Portfolio contact form handler.
// For production, configure your server's mail settings or replace this with SMTP/PHPMailer.
$success = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($name === '' || $message === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Please enter a valid name, email, and message.';
    } else {
        $to = 'your-email@example.com'; // <-- Replace with your email
        $subject = 'New Portfolio Message from ' . $name;
        $body = "Name: {$name}\nEmail: {$email}\n\nMessage:\n{$message}";
        $headers = "From: {$email}\r\nReply-To: {$email}\r\n";

        if (@mail($to, $subject, $body, $headers)) {
            $success = 'Thanks! Your message has been sent.';
        } else {
            $success = 'Thanks! Your message is ready. Configure SMTP/mail() on the server to deliver it.';
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Professional PHP, Laravel and WordPress developer portfolio.">
    <meta name="theme-color" content="#070b14">
    <title>PHP Developer | Laravel • WordPress • APIs</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="noise"></div>
<div class="cursor-glow"></div>
<div class="scroll-progress"></div>

<header class="nav-wrap">
    <nav class="nav container">
        <a href="#home" class="brand"><span>&lt;/&gt;</span> ABHAY<span class="dot">.</span></a>
        <button class="menu-toggle" aria-label="Open menu"><span></span><span></span></button>
        <div class="nav-links">
            <a href="#about">About</a>
            <a href="#skills">Skills</a>
            <a href="#work">Work</a>
            <a href="#services">Services</a>
            <a href="#contact" class="nav-cta">Let's talk <span>↗</span></a>
        </div>
    </nav>
</header>

<main>
<section id="home" class="hero">
    <div class="hero-orb orb-one"></div>
    <div class="hero-orb orb-two"></div>
    <canvas id="particles"></canvas>

    <div class="container hero-grid">
        <div class="hero-copy reveal">
            <div class="eyebrow"><span class="status-dot"></span> Available for opportunities</div>
            <p class="hero-kicker">BACKEND ENGINEER · WEB DEVELOPER</p>
            <h1>Building <span class="gradient-text">fast, scalable</span><br>web experiences.</h1>
            <p class="hero-description">
                PHP developer focused on Laravel, WordPress, APIs, databases and real-world integrations.
                I turn complex requirements into clean, reliable products.
            </p>
            <div class="hero-actions">
                <a class="btn btn-primary" href="#work">View my work <span>↗</span></a>
                <a class="btn btn-ghost" href="#contact">Let's connect</a>
            </div>
            <div class="hero-meta">
                <div><strong>2+</strong><span>Years experience</span></div>
                <div><strong>20+</strong><span>Integrations & builds</span></div>
                <div><strong>∞</strong><span>Problems solved</span></div>
            </div>
        </div>

        <div class="code-card-wrap reveal delay-2">
            <div class="code-card tilt">
                <div class="code-top">
                    <div class="window-dots"><i></i><i></i><i></i></div>
                    <span>developer.php</span>
                    <span class="live-chip">● LIVE</span>
                </div>
                <div class="code-body">
<pre><code><span class="line-no">01</span> <span class="purple">&lt;?php</span>
<span class="line-no">02</span>
<span class="line-no">03</span> <span class="keyword">class</span> <span class="cyan">Developer</span>
<span class="line-no">04</span> {
<span class="line-no">05</span>     <span class="keyword">public</span> <span class="cyan">$stack</span> = [
<span class="line-no">06</span>         <span class="string">'PHP'</span>,
<span class="line-no">07</span>         <span class="string">'Laravel'</span>,
<span class="line-no">08</span>         <span class="string">'WordPress'</span>,
<span class="line-no">09</span>         <span class="string">'MySQL'</span>,
<span class="line-no">10</span>         <span class="string">'REST APIs'</span>
<span class="line-no">11</span>     ];
<span class="line-no">12</span>
<span class="line-no">13</span>     <span class="keyword">public function</span> <span class="cyan">build</span>() {
<span class="line-no">14</span>         <span class="keyword">return</span> <span class="string">'Ideas → Production'</span>;
<span class="line-no">15</span>     }
<span class="line-no">16</span> }
<span class="line-no">17</span> <span class="purple">?&gt;</span></code></pre>
                </div>
                <div class="code-bottom">
                    <span>● Laravel</span><span>✓ API Ready</span><span>⚡ Optimized</span>
                </div>
            </div>
        </div>
    </div>
    <a class="scroll-hint" href="#about"><span></span> SCROLL TO EXPLORE</a>
</section>

<section id="about" class="section about">
    <div class="container two-col">
        <div class="section-label reveal">01 — ABOUT ME</div>
        <div class="about-content reveal">
            <p class="section-kicker">THE PERSON BEHIND THE CODE</p>
            <h2>I build with logic,<br><em>curiosity & precision.</em></h2>
            <p>
                I'm a PHP-focused web developer who enjoys backend architecture, debugging,
                API integrations and building practical solutions that actually work in production.
                My experience spans Laravel applications, custom WordPress development, databases,
                payment systems, CRM automation and third-party APIs.
            </p>
            <p>
                I care about more than making a feature work. I focus on maintainability, performance,
                clean data flow and a smooth experience for the people using the product.
            </p>
            <div class="signature">ABHAY <span>THAKUR</span></div>
        </div>
    </div>
</section>

<section id="skills" class="section skills-section">
    <div class="container">
        <div class="section-head reveal">
            <div><span class="section-kicker">02 — TOOLKIT</span><h2>My technical <em>arsenal.</em></h2></div>
            <p>Technologies I use to design, build, integrate and optimize web applications.</p>
        </div>
        <div class="skills-grid">
            <div class="skill-card reveal tilt"><span class="skill-icon">PHP</span><h3>PHP / Laravel</h3><p>Backend systems, MVC architecture, authentication, business logic and scalable APIs.</p><div class="meter"><i style="--w:92%"></i></div></div>
            <div class="skill-card reveal delay-1 tilt"><span class="skill-icon">WP</span><h3>WordPress</h3><p>Custom plugins, themes, shortcodes, Divi, WooCommerce and performance optimization.</p><div class="meter"><i style="--w:94%"></i></div></div>
            <div class="skill-card reveal delay-2 tilt"><span class="skill-icon">{ }</span><h3>APIs & Integrations</h3><p>REST APIs, webhooks and integrations with CRM, communication and payment platforms.</p><div class="meter"><i style="--w:90%"></i></div></div>
            <div class="skill-card reveal delay-3 tilt"><span class="skill-icon">DB</span><h3>MySQL</h3><p>Queries, joins, schema design, data relationships and application-level optimization.</p><div class="meter"><i style="--w:88%"></i></div></div>
            <div class="skill-card reveal tilt"><span class="skill-icon">JS</span><h3>JavaScript</h3><p>Interactive interfaces, AJAX, asynchronous workflows and frontend behavior.</p><div class="meter"><i style="--w:82%"></i></div></div>
            <div class="skill-card reveal delay-1 tilt"><span class="skill-icon">⚙</span><h3>DevOps & Tools</h3><p>Git, GitHub, Composer, Google Cloud, server deployment, debugging and optimization.</p><div class="meter"><i style="--w:80%"></i></div></div>
        </div>
        <div class="tech-marquee"><div class="marquee-track"><span>PHP</span><b>✦</b><span>LARAVEL</span><b>✦</b><span>WORDPRESS</span><b>✦</b><span>MYSQL</span><b>✦</b><span>JAVASCRIPT</span><b>✦</b><span>REST API</span><b>✦</b><span>GIT</span><b>✦</b><span>STRIPE</span><b>✦</b><span>TWILIO</span><b>✦</b><span>PHP</span><b>✦</b><span>LARAVEL</span><b>✦</b><span>WORDPRESS</span></div></div>
    </div>
</section>

<section id="work" class="section work-section">
    <div class="container">
        <div class="section-head reveal">
            <div><span class="section-kicker">03 — SELECTED WORK</span><h2>Things I've <em>built.</em></h2></div>
            <p>A selection of backend, WordPress, API and product-development work.</p>
        </div>

        <div class="projects">
            <article class="project-card project-large reveal">
                <div class="project-visual visual-purple"><div class="visual-grid"></div><span class="project-mark">AI</span><div class="floating-window"><small>AI Review Analysis</small><strong>Customer intelligence</strong><span>Laravel · OpenAI API</span></div></div>
                <div class="project-info"><div><span class="project-number">01</span><span class="project-type">LARAVEL · AI</span></div><h3>AI Customer Engagement Platform</h3><p>Backend features for an AI-powered customer engagement platform, including review analysis and API-driven workflows.</p><div class="tags"><span>Laravel</span><span>OpenAI API</span><span>MySQL</span><span>REST</span></div></div>
            </article>

            <article class="project-card reveal delay-1">
                <div class="project-visual visual-green"><div class="browser"><div class="browser-bar"></div><div class="browser-content"><b>RESUME</b><span>ATS PRO</span><i></i><i></i><i></i></div></div></div>
                <div class="project-info"><div><span class="project-number">02</span><span class="project-type">WORDPRESS · PLUGIN</span></div><h3>Resume Builder Platform</h3><p>Custom WordPress resume builder with premium templates, Stripe checkout and dynamic resume generation.</p><div class="tags"><span>PHP</span><span>WordPress</span><span>Stripe</span></div></div>
            </article>

            <article class="project-card reveal delay-2">
                <div class="project-visual visual-orange"><div class="api-flow"><span>CRM</span><b>→</b><span>API</span><b>→</b><span>SMS</span></div></div>
                <div class="project-info"><div><span class="project-number">03</span><span class="project-type">INTEGRATIONS</span></div><h3>CRM & Communication Integrations</h3><p>Integrated HubSpot, GoHighLevel, Twilio and RingCentral workflows for calls, SMS, webhooks and automation.</p><div class="tags"><span>Twilio</span><span>HubSpot</span><span>GHL</span><span>Webhooks</span></div></div>
            </article>

            <article class="project-card reveal">
                <div class="project-visual visual-blue"><div class="speedometer"><strong>90+</strong><small>PERFORMANCE</small><div></div></div></div>
                <div class="project-info"><div><span class="project-number">04</span><span class="project-type">PERFORMANCE</span></div><h3>WordPress Speed Optimization</h3><p>Optimized WordPress websites using caching, WebP conversion, asset optimization, CSS/JS tuning and Core Web Vitals improvements.</p><div class="tags"><span>LiteSpeed</span><span>WebP</span><span>Divi</span></div></div>
            </article>
        </div>
    </div>
</section>

<section id="services" class="section services-section">
    <div class="container">
        <div class="section-label reveal">04 — WHAT I DO</div>
        <div class="service-list">
            <div class="service-row reveal"><span>01</span><h3>Backend Development</h3><p>Robust PHP/Laravel applications, APIs, authentication and business logic.</p><b>↗</b></div>
            <div class="service-row reveal"><span>02</span><h3>WordPress Development</h3><p>Custom plugins, themes, integrations, fixes and performance-focused builds.</p><b>↗</b></div>
            <div class="service-row reveal"><span>03</span><h3>API & CRM Integration</h3><p>Connect products with CRMs, payments, messaging platforms and external services.</p><b>↗</b></div>
            <div class="service-row reveal"><span>04</span><h3>Debugging & Optimization</h3><p>Find the root cause, clean the implementation and improve reliability and speed.</p><b>↗</b></div>
        </div>
    </div>
</section>

<section id="contact" class="section contact-section">
    <div class="container contact-grid">
        <div class="contact-copy reveal">
            <span class="section-kicker">05 — CONTACT</span>
            <h2>Have an idea?<br><em>Let's build it.</em></h2>
            <p>Whether you need a Laravel backend, WordPress solution, API integration or help fixing a complex issue, let's talk.</p>
            <div class="contact-links">
                <a href="mailto:your-email@example.com">your-email@example.com <span>↗</span></a>
                <a href="#" aria-label="LinkedIn profile">LinkedIn <span>↗</span></a>
                <a href="#" aria-label="GitHub profile">GitHub <span>↗</span></a>
            </div>
        </div>
        <form class="contact-form reveal delay-1" method="POST" action="#contact">
            <?php if ($success): ?><div class="form-message success"><?= htmlspecialchars($success) ?></div><?php endif; ?>
            <?php if ($error): ?><div class="form-message error"><?= htmlspecialchars($error) ?></div><?php endif; ?>
            <label>Your name<input type="text" name="name" placeholder="John Doe" required></label>
            <label>Email address<input type="email" name="email" placeholder="john@example.com" required></label>
            <label>Tell me about the project<textarea name="message" rows="5" placeholder="What are you looking to build?" required></textarea></label>
            <button class="btn btn-primary submit-btn" type="submit">Send message <span>↗</span></button>
        </form>
    </div>
</section>
</main>

<footer class="footer">
    <div class="container footer-inner">
        <a href="#home" class="brand"><span>&lt;/&gt;</span> ABHAY<span class="dot">.</span></a>
        <p>Designed & built with PHP, CSS & JavaScript.</p>
        <span>© <?= date('Y') ?> All rights reserved.</span>
    </div>
</footer>

<script src="assets/js/app.js"></script>
</body>
</html>

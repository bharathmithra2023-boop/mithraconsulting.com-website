<?php
/**
 * Slug-based auto-template: page-ai-security.php
 */
get_header(); ?>

<main class="site-main">

<!-- HERO -->
<section class="svc-hero">
  <div class="container svc-hero-inner">
    <div class="svc-hero-text">
      <span class="section-label">AI Security</span>
      <h1 class="svc-hero-h1">AI Security &amp; Governance</h1>
      <p class="svc-hero-sub">Secure your LLMs, ML models, and AI-powered products end to end &mdash; from adversarial testing through governance, compliance, and continuous risk monitoring.</p>
      <div class="svc-hero-btns">
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary">Request a Scoping Call &rarr;</a>
      </div>
    </div>
    <div class="svc-hero-img">
      <img src="<?php echo esc_url(content_url('uploads/mithra/blog-5.jpg')); ?>" alt="AI Security Assessment" loading="eager">
    </div>
  </div>
</section>

<!-- OVERVIEW -->
<section class="section" id="overview">
  <div class="container">
    <div class="two-col">
      <div class="reveal">
        <span class="section-label">Overview</span>
        <h2 class="section-h2">Security built for <em>the AI stack</em></h2>
        <div class="svc-overview-text">
          <p>As organisations embed LLMs, copilots, and machine learning models into core products, the attack surface has shifted from traditional infrastructure to prompts, training data, model weights, and third-party AI supply chains. Our AI Security practice addresses this new layer directly.</p>
          <p>We combine offensive testing (adversarial and red-team assessment of your AI systems) with defensive engineering (secure architecture, guardrails, monitoring) and governance advisory (policy, risk registers, regulatory alignment) into a single, coordinated service.</p>
          <p>Engagements are tailored to how you use AI &mdash; whether you&rsquo;re deploying third-party LLM APIs, fine-tuning open models, building RAG pipelines, or operating in-house ML systems &mdash; and cover both pre-deployment assurance and ongoing operational security.</p>
        </div>
      </div>
      <div class="reveal reveal-delay-2">
        <div class="svc-stat-box">
          <div class="svc-big-num">40+</div>
          <div class="svc-big-lbl">AI Systems Assessed</div>
          <div class="svc-stat-badges">
            <span class="cert-badge">OWASP LLM Top 10</span>
            <span class="cert-badge">MITRE ATLAS</span>
            <span class="cert-badge">ISO 42001</span>
            <span class="cert-badge">NIST AI RMF</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SERVICE AREAS -->
<section class="section section-alt" id="capabilities">
  <div class="container">
    <div style="text-align:center;max-width:620px;margin:0 auto 60px">
      <span class="section-label reveal">Service Areas</span>
      <h2 class="section-h2 reveal reveal-delay-1">Coverage across the <em>AI lifecycle</em></h2>
    </div>
    <div class="svc-detail-grid">

      <div class="svc-detail-card reveal">
        <div class="svc-detail-icon">&#128027;</div>
        <h3>LLM &amp; AI Penetration Testing</h3>
        <ul class="svc-list">
          <li>Prompt injection &amp; jailbreak testing</li>
          <li>Indirect prompt injection via RAG / tools</li>
          <li>Model extraction &amp; inversion attacks</li>
          <li>Adversarial input &amp; evasion testing</li>
          <li>Training data leakage assessment</li>
          <li>Guardrail &amp; content-filter bypass testing</li>
        </ul>
      </div>

      <div class="svc-detail-card reveal reveal-delay-1">
        <div class="svc-detail-icon">&#128736;</div>
        <h3>AI Architecture &amp; Guardrail Review</h3>
        <ul class="svc-list">
          <li>RAG pipeline &amp; vector store security review</li>
          <li>Agent &amp; tool-calling permission boundaries</li>
          <li>API key, secrets &amp; access control hardening</li>
          <li>Output validation &amp; sandboxing design</li>
          <li>Rate limiting &amp; abuse prevention controls</li>
        </ul>
      </div>

      <div class="svc-detail-card reveal reveal-delay-2">
        <div class="svc-detail-icon">&#128450;</div>
        <h3>Data &amp; Model Security</h3>
        <ul class="svc-list">
          <li>Training &amp; fine-tuning data poisoning assessment</li>
          <li>Model weight &amp; artifact storage security</li>
          <li>PII / sensitive data handling in prompts &amp; logs</li>
          <li>Model versioning &amp; integrity verification</li>
        </ul>
      </div>

      <div class="svc-detail-card reveal">
        <div class="svc-detail-icon">&#128279;</div>
        <h3>AI Supply Chain Risk</h3>
        <ul class="svc-list">
          <li>Third-party LLM &amp; API provider risk assessment</li>
          <li>Open-source model &amp; dependency vetting</li>
          <li>Vendor due diligence for embedded AI features</li>
          <li>License &amp; data-residency review</li>
        </ul>
      </div>

      <div class="svc-detail-card reveal reveal-delay-1">
        <div class="svc-detail-icon">&#9878;</div>
        <h3>AI Governance &amp; Compliance</h3>
        <ul class="svc-list">
          <li>AI risk register &amp; impact assessments (AIIA)</li>
          <li>Policy development for responsible AI use</li>
          <li>ISO / IEC 42001 (AI Management System) readiness</li>
          <li>EU AI Act &amp; NIST AI RMF gap assessments</li>
          <li>Model card &amp; documentation standards</li>
          <li>AI incident response planning</li>
          <li>Employee AI-usage policy &amp; awareness training</li>
          <li>Continuous AI risk monitoring dashboards</li>
        </ul>
      </div>

    </div>
  </div>
</section>

<!-- METHODOLOGY -->
<section class="section" id="methodology">
  <div class="container">
    <div style="text-align:center;max-width:600px;margin:0 auto 60px">
      <span class="section-label reveal">Methodology</span>
      <h2 class="section-h2 reveal reveal-delay-1">How we <em>secure your AI</em></h2>
    </div>
    <div class="methodology-steps">
      <div class="method-step reveal"><div class="step-num">01</div><h4>Discovery</h4><p>Map every model, agent, prompt pipeline, and third-party AI dependency in scope.</p></div>
      <div class="method-arrow">&#8594;</div>
      <div class="method-step reveal reveal-delay-1"><div class="step-num">02</div><h4>Threat Modelling</h4><p>Identify risks specific to your AI use case using MITRE ATLAS and OWASP LLM Top 10.</p></div>
      <div class="method-arrow">&#8594;</div>
      <div class="method-step reveal reveal-delay-2"><div class="step-num">03</div><h4>Adversarial Testing</h4><p>Actively attack prompts, models, and guardrails to validate real-world resilience.</p></div>
      <div class="method-arrow">&#8594;</div>
      <div class="method-step reveal reveal-delay-3"><div class="step-num">04</div><h4>Governance Review</h4><p>Assess policies, documentation, and controls against relevant AI regulations and standards.</p></div>
      <div class="method-arrow">&#8594;</div>
      <div class="method-step reveal reveal-delay-3"><div class="step-num">05</div><h4>Remediation</h4><p>Deliver prioritised fixes plus a roadmap for ongoing AI risk monitoring.</p></div>
    </div>
  </div>
</section>

<!-- BENEFITS -->
<section class="section section-alt" id="benefits">
  <div class="container">
    <div style="text-align:center;max-width:600px;margin:0 auto 60px">
      <span class="section-label reveal">Why Mithra AI Security</span>
      <h2 class="section-h2 reveal reveal-delay-1">What you gain from <em>this engagement</em></h2>
    </div>
    <div class="why-grid">
      <div class="why-card reveal"><div class="why-icon">&#128373;</div><h3>Adversary-Grade Testing</h3><p>We attack your AI systems the way real adversaries do, uncovering prompt and model weaknesses before launch.</p></div>
      <div class="why-card reveal reveal-delay-1"><div class="why-icon">&#128203;</div><h3>Regulatory Readiness</h3><p>Get ahead of the EU AI Act, ISO 42001, and NIST AI RMF with documented, audit-ready evidence.</p></div>
      <div class="why-card reveal reveal-delay-2"><div class="why-icon">&#9881;</div><h3>Practical Guardrails</h3><p>Architecture and control recommendations your engineering team can implement directly, not just theory.</p></div>
      <div class="why-card reveal"><div class="why-icon">&#128200;</div><h3>Continuous Risk Visibility</h3><p>Move beyond a point-in-time report with an ongoing view of your AI risk posture as models and usage evolve.</p></div>
      <div class="why-card reveal reveal-delay-1"><div class="why-icon">&#128101;</div><h3>Cross-Functional Reporting</h3><p>Technical findings for engineering teams alongside governance summaries for legal, risk, and leadership.</p></div>
      <div class="why-card reveal reveal-delay-2"><div class="why-icon">&#128737;</div><h3>Vendor &amp; Supply Chain Assurance</h3><p>Confidence in the AI tools and models you depend on, with clear visibility into third-party risk.</p></div>
    </div>
  </div>
</section>

<!-- STANDARDS BAND -->
<div class="trust-band">
  <div class="container">
    <div class="trust-band-label">Standards &amp; Frameworks</div>
    <div class="trust-pills">
      <span class="trust-pill">OWASP LLM Top 10</span>
      <span class="trust-pill">MITRE ATLAS</span>
      <span class="trust-pill">NIST AI RMF</span>
      <span class="trust-pill">ISO / IEC 42001</span>
      <span class="trust-pill">EU AI Act</span>
      <span class="trust-pill">ISO 27001</span>
      <span class="trust-pill">OWASP ML Top 10</span>
    </div>
  </div>
</div>

<!-- CTA -->
<section class="cta-section">
  <div class="container">
    <h2 class="reveal">Ready to secure your AI systems?</h2>
    <p class="reveal reveal-delay-1">Request a scoping call with our AI security team. We&rsquo;ll define the right assessment for your models, pipelines, and governance needs within 48 hours.</p>
    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-white reveal reveal-delay-2">Request a Scoping Call &rarr;</a>
  </div>
</section>

</main>
<?php get_footer(); ?>

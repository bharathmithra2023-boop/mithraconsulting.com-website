<?php
/**
 * Slug-based auto-template: page-it-solutions.php
 */
get_header(); ?>

<main class="site-main">

<!-- HERO -->
<section class="svc-hero">
  <div class="container svc-hero-inner">
    <div class="svc-hero-text">
      <span class="section-label">IT Solutions</span>
      <h1 class="svc-hero-h1">Enterprise IT Security Solutions</h1>
      <p class="svc-hero-sub">Enterprise-grade endpoint and email security &mdash; deployed, configured, and monitored by certified security engineers.</p>
      <div class="svc-hero-btns">
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary">Book an IT Security Assessment &rarr;</a>
      </div>
    </div>
    <div class="svc-hero-img">
      <img src="<?php echo esc_url(content_url('uploads/mithra/blog-2.jpg')); ?>" alt="Enterprise IT Security Solutions" loading="eager">
    </div>
  </div>
</section>

<!-- OVERVIEW -->
<section class="section" id="overview">
  <div class="container">
    <div class="two-col">
      <div class="reveal">
        <span class="section-label">Overview</span>
        <h2 class="section-h2">Security engineering for your <em>endpoints and inbox</em></h2>
        <div class="svc-overview-text">
          <p>Endpoints and email remain the two most exploited entry points for attackers. Mithra&#8217;s IT Solutions team deploys, configures, and manages enterprise-grade security tooling to harden these critical attack vectors &mdash; protecting your workforce whether they are in the office, remote, or hybrid.</p>
          <p>Our engineers are certified across leading security platforms including CrowdStrike, SentinelOne, Microsoft Defender, Proofpoint, and Mimecast. We take a deploy-and-optimise approach: we do not just install software &mdash; we tune detection policies, build response playbooks, and monitor alerts.</p>
          <p>All implementations are aligned to CIS Controls and NIST CSF to ensure your endpoint and email security investments also contribute to your broader compliance programme.</p>
        </div>
      </div>
      <div class="reveal reveal-delay-2">
        <div class="svc-stat-box">
          <div class="svc-big-num">Zero Trust</div>
          <div class="svc-big-lbl">Architecture Aligned</div>
          <div class="svc-stat-badges">
            <span class="cert-badge">CrowdStrike</span>
            <span class="cert-badge">SentinelOne</span>
            <span class="cert-badge">MS Defender</span>
            <span class="cert-badge">Proofpoint</span>
            <span class="cert-badge">Mimecast</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CORE SERVICES -->
<section class="section section-alt" id="services">
  <div class="container">
    <div style="text-align:center;max-width:620px;margin:0 auto 60px">
      <span class="section-label reveal">Core Services</span>
      <h2 class="section-h2 reveal reveal-delay-1">Endpoint &amp; email <em>security expertise</em></h2>
    </div>
    <div class="svc-detail-grid svc-2col">

      <div class="svc-detail-card reveal">
        <div class="svc-detail-icon">&#128187;</div>
        <h3>Endpoint Security</h3>
        <p style="color:var(--muted);font-size:.95rem;margin-bottom:16px">Full-lifecycle endpoint protection from deployment through continuous monitoring &mdash; covering Windows, macOS, and Linux environments.</p>
        <ul class="svc-list">
          <li>EDR / XDR deployment (CrowdStrike Falcon / SentinelOne / Microsoft Defender for Endpoint)</li>
          <li>Behavioural detection &amp; threat intelligence integration</li>
          <li>Application allowlisting &amp; execution control</li>
          <li>USB &amp; removable media control policies</li>
          <li>Disk encryption (BitLocker / FileVault / LUKS)</li>
          <li>Data Loss Prevention (DLP) policy configuration</li>
          <li>Patch lifecycle management &amp; vulnerability remediation</li>
          <li>Compliance reporting &amp; CIS Controls alignment</li>
          <li>EDR-integrated threat hunting</li>
          <li>Zero-trust network access (ZTNA) integration</li>
        </ul>
      </div>

      <div class="svc-detail-card reveal reveal-delay-1">
        <div class="svc-detail-icon">&#128231;</div>
        <h3>Email Security</h3>
        <p style="color:var(--muted);font-size:.95rem;margin-bottom:16px">Multi-layered email security protecting your organisation from phishing, BEC, ransomware delivery, and account takeover.</p>
        <ul class="svc-list">
          <li>Secure Email Gateway (Proofpoint / Mimecast / Defender for Office 365)</li>
          <li>Phishing &amp; spear-phishing protection</li>
          <li>Sandboxing for attachment &amp; link detonation</li>
          <li>DMARC, DKIM &amp; SPF configuration &amp; monitoring</li>
          <li>BEC &amp; impersonation detection</li>
          <li>Email DLP policies &amp; sensitive data scanning</li>
          <li>Microsoft 365 &amp; Google Workspace hardening</li>
          <li>Archiving &amp; eDiscovery setup</li>
          <li>Account takeover detection &amp; response</li>
          <li>Security awareness training programme support</li>
        </ul>
      </div>

    </div>
  </div>
</section>

<!-- METHODOLOGY -->
<section class="section" id="methodology">
  <div class="container">
    <div style="text-align:center;max-width:600px;margin:0 auto 60px">
      <span class="section-label reveal">Our Methodology</span>
      <h2 class="section-h2 reveal reveal-delay-1">From assessment to <em>optimised protection</em></h2>
    </div>
    <div class="methodology-steps">
      <div class="method-step reveal"><div class="step-num">01</div><h4>Assessment</h4><p>Current-state endpoint and email security review against CIS Controls baseline.</p></div>
      <div class="method-arrow">&#8594;</div>
      <div class="method-step reveal reveal-delay-1"><div class="step-num">02</div><h4>Tool Selection</h4><p>Platform selection aligned to your environment, budget, and compliance requirements.</p></div>
      <div class="method-arrow">&#8594;</div>
      <div class="method-step reveal reveal-delay-2"><div class="step-num">03</div><h4>Deployment</h4><p>Phased rollout across all endpoints with minimal business disruption and full coverage verification.</p></div>
      <div class="method-arrow">&#8594;</div>
      <div class="method-step reveal reveal-delay-3"><div class="step-num">04</div><h4>Policy Config</h4><p>Detection policy tuning, DLP rules, and email security gateway configuration optimisation.</p></div>
      <div class="method-arrow">&#8594;</div>
      <div class="method-step reveal reveal-delay-3"><div class="step-num">05</div><h4>Monitor &amp; Optimise</h4><p>Ongoing alert monitoring, policy refinement, and regular security posture reporting.</p></div>
    </div>
  </div>
</section>

<!-- BENEFITS -->
<section class="section section-alt" id="benefits">
  <div class="container">
    <div style="text-align:center;max-width:600px;margin:0 auto 60px">
      <span class="section-label reveal">Business Value</span>
      <h2 class="section-h2 reveal reveal-delay-1">What our IT solutions <em>deliver</em></h2>
    </div>
    <div class="why-grid">
      <div class="why-card reveal"><div class="why-icon">&#128737;</div><h3>Reduced Attack Surface</h3><p>Hardened endpoints with enforced policies dramatically reduce the opportunities for initial compromise.</p></div>
      <div class="why-card reveal reveal-delay-1"><div class="why-icon">&#128231;</div><h3>Phishing Protection</h3><p>Multi-layer defences including sandboxing, link rewriting, and BEC detection stop email-borne attacks before they reach inboxes.</p></div>
      <div class="why-card reveal reveal-delay-2"><div class="why-icon">&#128203;</div><h3>Compliance Enablement</h3><p>Endpoint encryption, DLP, and email archiving directly satisfy controls required by ISO 27001, HIPAA, and PCI-DSS.</p></div>
      <div class="why-card reveal"><div class="why-icon">&#128300;</div><h3>Centralised Visibility</h3><p>Unified console for all endpoints and email telemetry, with dashboards showing coverage, detections, and policy compliance.</p></div>
      <div class="why-card reveal reveal-delay-1"><div class="why-icon">&#9889;</div><h3>Rapid Response</h3><p>EDR-enabled remote isolation, process termination, and forensic investigation capabilities for fast incident containment.</p></div>
      <div class="why-card reveal reveal-delay-2"><div class="why-icon">&#127891;</div><h3>Employee Awareness</h3><p>Phishing simulation and security awareness training support to reduce the human risk factor across your organisation.</p></div>
    </div>
  </div>
</section>

<!-- TOOLS BAND -->
<div class="trust-band">
  <div class="container">
    <div class="trust-band-label">Tools &amp; Standards</div>
    <div class="trust-pills">
      <span class="trust-pill">CIS Controls</span><span class="trust-pill">NIST CSF</span>
      <span class="trust-pill">CrowdStrike</span><span class="trust-pill">SentinelOne</span>
      <span class="trust-pill">Microsoft Defender</span><span class="trust-pill">Proofpoint</span>
      <span class="trust-pill">Mimecast</span><span class="trust-pill">DMARC</span>
      <span class="trust-pill">Zero Trust</span>
    </div>
  </div>
</div>

<!-- CTA -->
<section class="cta-section">
  <div class="container">
    <h2 class="reveal">Harden your endpoints and secure your inbox</h2>
    <p class="reveal reveal-delay-1">Speak to our engineering team about a tailored endpoint and email security assessment for your organisation.</p>
    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-white reveal reveal-delay-2">Book an IT Security Assessment &rarr;</a>
  </div>
</section>

</main>
<?php get_footer(); ?>

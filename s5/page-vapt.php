<?php
/**
 * Slug-based auto-template: page-vapt.php
 */
get_header(); ?>

<main class="site-main">

<!-- HERO -->
<section class="svc-hero">
  <div class="container svc-hero-inner">
    <div class="svc-hero-text">
      <span class="section-label">VAPT</span>
      <h1 class="svc-hero-h1">Vulnerability Assessment &amp; Penetration Testing</h1>
      <p class="svc-hero-sub">Uncover hidden vulnerabilities before attackers do &mdash; expert penetration testing across web, network, mobile, and AI systems.</p>
      <div class="svc-hero-btns">
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary">Request a Scoping Call &rarr;</a>
      </div>
    </div>
    <div class="svc-hero-img">
      <img src="<?php echo esc_url(content_url('uploads/mithra/blog-4.jpg')); ?>" alt="Penetration Testing" loading="eager">
    </div>
  </div>
</section>

<!-- OVERVIEW -->
<section class="section" id="overview">
  <div class="container">
    <div class="two-col">
      <div class="reveal">
        <span class="section-label">Overview</span>
        <h2 class="section-h2">Attack simulation by <em>certified experts</em></h2>
        <div class="svc-overview-text">
          <p>Our VAPT service delivers authoritative security testing conducted by OSCP, CEH, and CREST-certified professionals. We simulate the full attack lifecycle &mdash; from reconnaissance through exploitation to post-compromise &mdash; to give you a realistic picture of your security posture.</p>
          <p>Every engagement is scoped precisely to your environment and business context. We produce both a detailed technical report for your security team and an executive summary for leadership, with every finding accompanied by a proof-of-concept, CVSS score, and actionable remediation guidance.</p>
          <p>We cover the complete attack surface: web applications, APIs, internal and external networks, mobile applications on Android and iOS, and emerging AI/ML system vulnerabilities.</p>
        </div>
      </div>
      <div class="reveal reveal-delay-2">
        <div class="svc-stat-box">
          <div class="svc-big-num">500+</div>
          <div class="svc-big-lbl">Engagements Delivered</div>
          <div class="svc-stat-badges">
            <span class="cert-badge">OSCP Certified</span>
            <span class="cert-badge">CEH</span>
            <span class="cert-badge">CREST</span>
            <span class="cert-badge">OWASP</span>
            <span class="cert-badge">CVSS Scored</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- TESTING CAPABILITIES -->
<section class="section section-alt" id="capabilities">
  <div class="container">
    <div style="text-align:center;max-width:620px;margin:0 auto 60px">
      <span class="section-label reveal">Testing Capabilities</span>
      <h2 class="section-h2 reveal reveal-delay-1">Every attack surface, <em>thoroughly tested</em></h2>
    </div>
    <div class="svc-detail-grid">

      <div class="svc-detail-card reveal">
        <div class="svc-detail-icon">&#127760;</div>
        <h3>Web Application VAPT</h3>
        <ul class="svc-list">
          <li>OWASP Top 10 &amp; SANS Top 25 coverage</li>
          <li>Business logic flaw identification</li>
          <li>Auth, session &amp; access control testing</li>
          <li>API security (REST / GraphQL / SOAP)</li>
          <li>Injections: SQLi, XXE, SSRF, RCE</li>
          <li>Client-side: XSS, CSRF, DOM attacks</li>
          <li>Black, grey &amp; white box methodologies</li>
          <li>CVSS-scored findings with PoC &amp; remediation</li>
        </ul>
      </div>

      <div class="svc-detail-card reveal reveal-delay-1">
        <div class="svc-detail-icon">&#128272;</div>
        <h3>Network VAPT</h3>
        <ul class="svc-list">
          <li>External &amp; internal perimeter testing</li>
          <li>Firewall rule &amp; ACL analysis</li>
          <li>Network segmentation validation</li>
          <li>VLAN hopping &amp; pivoting techniques</li>
          <li>Wireless: WPA2 / WPA3 / Evil Twin attacks</li>
          <li>Active Directory: Kerberoasting, PTH, DCSync</li>
          <li>Full kill chain simulation</li>
        </ul>
      </div>

      <div class="svc-detail-card reveal reveal-delay-2">
        <div class="svc-detail-icon">&#128241;</div>
        <h3>Mobile Android VAPT</h3>
        <ul class="svc-list">
          <li>OWASP MASVS aligned methodology</li>
          <li>APK static &amp; dynamic analysis</li>
          <li>Frida instrumentation &amp; runtime hooking</li>
          <li>Insecure storage &amp; weak cryptography</li>
          <li>Certificate pinning bypass</li>
          <li>Root detection bypass techniques</li>
          <li>Intent injection &amp; deeplink analysis</li>
        </ul>
      </div>

      <div class="svc-detail-card reveal">
        <div class="svc-detail-icon">&#63743;</div>
        <h3>Mobile iOS VAPT</h3>
        <ul class="svc-list">
          <li>IPA binary analysis &amp; reverse engineering</li>
          <li>iOS MASVS aligned methodology</li>
          <li>Jailbreak detection bypass</li>
          <li>Keychain &amp; NSUserDefaults analysis</li>
          <li>SSL pinning bypass techniques</li>
          <li>Swift / ObjC class dump &amp; analysis</li>
          <li>Biometric authentication bypass</li>
        </ul>
      </div>

      <div class="svc-detail-card reveal reveal-delay-1">
        <div class="svc-detail-icon">&#129302;</div>
        <h3>AI VAPT</h3>
        <ul class="svc-list">
          <li>Adversarial ML attack generation</li>
          <li>Model inversion &amp; extraction attacks</li>
          <li>Data poisoning assessment</li>
          <li>Prompt injection &amp; jailbreaking</li>
          <li>RAG pipeline security review</li>
          <li>Indirect prompt injection testing</li>
          <li>Training data leakage assessment</li>
          <li>LLM supply chain risk analysis</li>
        </ul>
        <p class="svc-card-note">Need broader AI governance, compliance, or architecture review? See our dedicated <a href="<?php echo esc_url(home_url('/services/ai-security/')); ?>">AI Security service &rarr;</a></p>
      </div>

    </div>
  </div>
</section>

<!-- METHODOLOGY -->
<section class="section" id="methodology">
  <div class="container">
    <div style="text-align:center;max-width:600px;margin:0 auto 60px">
      <span class="section-label reveal">Methodology</span>
      <h2 class="section-h2 reveal reveal-delay-1">Our <em>testing methodology</em></h2>
    </div>
    <div class="methodology-steps">
      <div class="method-step reveal"><div class="step-num">01</div><h4>Scoping</h4><p>Define targets, rules of engagement, and testing objectives with your team.</p></div>
      <div class="method-arrow">&#8594;</div>
      <div class="method-step reveal reveal-delay-1"><div class="step-num">02</div><h4>Reconnaissance</h4><p>Passive and active information gathering to map the full attack surface.</p></div>
      <div class="method-arrow">&#8594;</div>
      <div class="method-step reveal reveal-delay-2"><div class="step-num">03</div><h4>Exploitation</h4><p>Manual and automated exploitation of discovered vulnerabilities with PoC.</p></div>
      <div class="method-arrow">&#8594;</div>
      <div class="method-step reveal reveal-delay-3"><div class="step-num">04</div><h4>Post-Exploitation</h4><p>Privilege escalation, lateral movement, and business impact demonstration.</p></div>
      <div class="method-arrow">&#8594;</div>
      <div class="method-step reveal reveal-delay-3"><div class="step-num">05</div><h4>Reporting</h4><p>CVSS-scored technical report plus executive summary with remediation roadmap.</p></div>
    </div>
  </div>
</section>

<!-- BENEFITS -->
<section class="section section-alt" id="benefits">
  <div class="container">
    <div style="text-align:center;max-width:600px;margin:0 auto 60px">
      <span class="section-label reveal">Why Mithra VAPT</span>
      <h2 class="section-h2 reveal reveal-delay-1">What you gain from <em>every engagement</em></h2>
    </div>
    <div class="why-grid">
      <div class="why-card reveal"><div class="why-icon">&#128269;</div><h3>Zero-Day Discovery</h3><p>Our researchers leverage custom tooling and manual techniques to surface vulnerabilities automated scanners miss.</p></div>
      <div class="why-card reveal reveal-delay-1"><div class="why-icon">&#128300;</div><h3>Risk Prioritisation</h3><p>Every finding is CVSS-scored and contextualised to your business so your team fixes what matters most first.</p></div>
      <div class="why-card reveal reveal-delay-2"><div class="why-icon">&#128203;</div><h3>Compliance Evidence</h3><p>Pentest reports accepted by ISO 27001, SOC 2, PCI-DSS, and HIPAA auditors as evidence of security testing.</p></div>
      <div class="why-card reveal"><div class="why-icon">&#129399;</div><h3>Real Attack Simulation</h3><p>We think and operate like real adversaries, using the same tools, techniques, and procedures documented in MITRE ATT&amp;CK.</p></div>
      <div class="why-card reveal reveal-delay-1"><div class="why-icon">&#128295;</div><h3>Remediation Guidance</h3><p>Actionable fix recommendations with code-level examples and configuration guidance, not just vulnerability descriptions.</p></div>
      <div class="why-card reveal reveal-delay-2"><div class="why-icon">&#128101;</div><h3>Dual Audience Reporting</h3><p>Technical depth for your security engineers alongside a clear executive summary for board and leadership audiences.</p></div>
    </div>
  </div>
</section>

<!-- STANDARDS BAND -->
<div class="trust-band">
  <div class="container">
    <div class="trust-band-label">Standards &amp; Frameworks</div>
    <div class="trust-pills">
      <span class="trust-pill">OWASP Top 10</span><span class="trust-pill">PTES</span>
      <span class="trust-pill">OSSTMM</span><span class="trust-pill">MASVS</span>
      <span class="trust-pill">NIST 800-115</span><span class="trust-pill">MITRE ATT&amp;CK</span>
      <span class="trust-pill">CVE / CVSS</span><span class="trust-pill">ISO 27001</span>
    </div>
  </div>
</div>

<!-- CTA -->
<section class="cta-section">
  <div class="container">
    <h2 class="reveal">Ready to test your defences?</h2>
    <p class="reveal reveal-delay-1">Request a scoping call with our pentest team. We&#8217;ll define the right engagement for your environment within 48 hours.</p>
    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-white reveal reveal-delay-2">Request a Scoping Call &rarr;</a>
  </div>
</section>

</main>
<?php get_footer(); ?>

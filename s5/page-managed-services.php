<?php
/**
 * Slug-based auto-template: page-managed-services.php
 */
get_header(); ?>

<main class="site-main">

<!-- HERO -->
<section class="svc-hero">
  <div class="container svc-hero-inner">
    <div class="svc-hero-text">
      <span class="section-label">Managed Services</span>
      <h1 class="svc-hero-h1">Managed Cloud Security Services</h1>
      <p class="svc-hero-sub">Fully managed security operations across Microsoft Azure, Amazon AWS, and Google Cloud Platform &mdash; expert oversight so your team can focus on building, not firefighting.</p>
      <div class="svc-hero-btns">
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary">Talk to Our Cloud Team &rarr;</a>
      </div>
    </div>
    <div class="svc-hero-img">
      <img src="<?php echo esc_url(content_url('uploads/mithra/managed.jpg')); ?>" alt="Managed Cloud Security Services" loading="eager">
    </div>
  </div>
</section>

<!-- OVERVIEW -->
<section class="section" id="overview">
  <div class="container">
    <div class="two-col">
      <div class="reveal">
        <span class="section-label">Overview</span>
        <h2 class="section-h2">Your cloud, <em>always secured</em></h2>
        <div class="svc-overview-text">
          <p>Multi-cloud environments are powerful but complex. Security configuration sprawl, identity over-provisioning, and ungoverned resources accumulate silently &mdash; creating risk that compounds until it becomes a breach. Most organisations lack the bandwidth or depth to manage cloud security continuously across Azure, AWS, and GCP simultaneously.</p>
          <p>Mithra&#8217;s Managed Services practice provides end-to-end cloud security operations &mdash; handling hardening, monitoring, incident response, compliance alignment, and monthly reporting as a unified, accountable service. We become your cloud security function, not a point-in-time advisory.</p>
          <p>Our certified engineers hold platform-specific credentials across all three major clouds, combined with security expertise spanning identity, network, workload, and data protection &mdash; bringing the depth that specialised cloud security demands.</p>
        </div>
      </div>
      <div class="reveal reveal-delay-2">
        <div class="svc-stat-box">
          <div class="svc-big-num">3</div>
          <div class="svc-big-lbl">Cloud Platforms Managed</div>
          <div class="svc-stat-badges">
            <span class="cert-badge">Microsoft Azure</span>
            <span class="cert-badge">Amazon AWS</span>
            <span class="cert-badge">Google Cloud</span>
            <span class="cert-badge">24&#215;7 Operations</span>
            <span class="cert-badge">ISO 27017</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PLATFORM SERVICES -->
<section class="section section-alt" id="services">
  <div class="container">
    <div style="text-align:center;max-width:620px;margin:0 auto 60px">
      <span class="section-label reveal">What We Offer</span>
      <h2 class="section-h2 reveal reveal-delay-1">Platform-Specific <em>Managed Security</em></h2>
    </div>
    <div class="svc-detail-grid svc-3col">

      <div class="svc-detail-card reveal">
        <div class="svc-detail-icon">&#9729;&#65039;</div>
        <h3>Microsoft Azure</h3>
        <p style="color:var(--muted);font-size:.9rem;margin-bottom:14px">Comprehensive managed security for your Azure estate &mdash; from identity hardening to SIEM operations and cost-aware governance.</p>
        <ul class="svc-list">
          <li>Microsoft Defender for Cloud management &amp; tuning</li>
          <li>Azure Policy &amp; compliance dashboard management</li>
          <li>Entra ID hardening (PIM, Conditional Access, MFA)</li>
          <li>Microsoft Sentinel SIEM deployment &amp; operation</li>
          <li>Azure Firewall &amp; NSG rule lifecycle management</li>
          <li>Key Vault rotation &amp; secrets management</li>
          <li>Identity Secure Score improvement programme</li>
          <li>Cost Management &amp; security governance reporting</li>
        </ul>
      </div>

      <div class="svc-detail-card reveal reveal-delay-1">
        <div class="svc-detail-icon">&#128230;</div>
        <h3>Amazon Web Services</h3>
        <p style="color:var(--muted);font-size:.9rem;margin-bottom:14px">Full-spectrum AWS security management &mdash; detection, compliance, identity governance, and continuous monitoring across your entire AWS footprint.</p>
        <ul class="svc-list">
          <li>Amazon GuardDuty management &amp; threat response</li>
          <li>AWS Security Hub consolidated findings management</li>
          <li>IAM Access Analyzer &amp; least-privilege remediation</li>
          <li>AWS Config compliance rules &amp; automated remediation</li>
          <li>CloudTrail &amp; VPC Flow Log monitoring</li>
          <li>S3 bucket policy review &amp; public access control</li>
          <li>AWS WAF &amp; Shield DDoS management</li>
          <li>Inspector vulnerability scanning &amp; patch coordination</li>
        </ul>
      </div>

      <div class="svc-detail-card reveal reveal-delay-2">
        <div class="svc-detail-icon">&#127758;</div>
        <h3>Google Cloud Platform</h3>
        <p style="color:var(--muted);font-size:.9rem;margin-bottom:14px">End-to-end GCP security management &mdash; Security Command Center, identity, network controls, and Chronicle SIEM for complete threat visibility.</p>
        <ul class="svc-list">
          <li>Security Command Center Premium management</li>
          <li>Cloud Armor DDoS protection &amp; WAF policy management</li>
          <li>GCP IAM Recommender &amp; permission governance</li>
          <li>VPC Service Controls &amp; perimeter security</li>
          <li>Chronicle SIEM integration &amp; detection rules</li>
          <li>Google Workspace hardening (DLP, device management)</li>
          <li>Cloud Logging anomaly detection &amp; alerting</li>
          <li>CIS GCP Benchmark continuous compliance monitoring</li>
        </ul>
      </div>

    </div>
  </div>
</section>

<!-- PROCESS -->
<section class="section" id="process">
  <div class="container">
    <div style="text-align:center;max-width:600px;margin:0 auto 60px">
      <span class="section-label reveal">Our Process</span>
      <h2 class="section-h2 reveal reveal-delay-1">How We Operate <em>Your Cloud Security</em></h2>
    </div>
    <div class="methodology-steps">
      <div class="method-step reveal"><div class="step-num">01</div><h4>Cloud Audit</h4><p>Comprehensive audit of your existing cloud environment, policies, and security posture.</p></div>
      <div class="method-arrow">&#8594;</div>
      <div class="method-step reveal reveal-delay-1"><div class="step-num">02</div><h4>Hardening</h4><p>Systematic remediation of misconfigurations, identity risks, and compliance gaps.</p></div>
      <div class="method-arrow">&#8594;</div>
      <div class="method-step reveal reveal-delay-2"><div class="step-num">03</div><h4>Monitoring Setup</h4><p>SIEM integration, detection rule deployment, and alerting pipeline configuration.</p></div>
      <div class="method-arrow">&#8594;</div>
      <div class="method-step reveal reveal-delay-3"><div class="step-num">04</div><h4>Incident Response</h4><p>24&#215;7 threat detection with pre-built cloud runbooks for rapid containment and recovery.</p></div>
      <div class="method-arrow">&#8594;</div>
      <div class="method-step reveal reveal-delay-3"><div class="step-num">05</div><h4>Monthly Review</h4><p>Executive and technical reports covering posture, incidents, compliance, and programme progress.</p></div>
    </div>
  </div>
</section>

<!-- BENEFITS -->
<section class="section section-alt" id="benefits">
  <div class="container">
    <div style="text-align:center;max-width:600px;margin:0 auto 60px">
      <span class="section-label reveal">Why It Matters</span>
      <h2 class="section-h2 reveal reveal-delay-1"><em>Key Benefits</em></h2>
    </div>
    <div class="why-grid">
      <div class="why-card reveal"><div class="why-icon">&#128225;</div><h3>24&#215;7 Protection</h3><p>Around-the-clock monitoring and incident response across all cloud environments &mdash; threats contained regardless of when they emerge.</p></div>
      <div class="why-card reveal reveal-delay-1"><div class="why-icon">&#127942;</div><h3>Expert Management</h3><p>Certified cloud security engineers with deep platform expertise &mdash; expensive skills to hire, but accessible and affordable through Mithra.</p></div>
      <div class="why-card reveal reveal-delay-2"><div class="why-icon">&#128176;</div><h3>Cost Optimisation</h3><p>Right-sizing, reserved instance advisory, and eliminating over-provisioned resources reduce cloud spend alongside security overhead.</p></div>
      <div class="why-card reveal"><div class="why-icon">&#128203;</div><h3>Compliance Assurance</h3><p>Continuous alignment with CIS benchmarks, ISO 27017, SOC 2 cloud controls, and platform-specific security baselines &mdash; always audit-ready.</p></div>
      <div class="why-card reveal reveal-delay-1"><div class="why-icon">&#9889;</div><h3>Faster Response</h3><p>Pre-built cloud runbooks and experienced responders mean security incidents are contained in minutes, not hours of escalation.</p></div>
      <div class="why-card reveal reveal-delay-2"><div class="why-icon">&#128202;</div><h3>Monthly Reporting</h3><p>Executive and technical reporting on posture, incidents, compliance status, and security programme progress delivered every month.</p></div>
    </div>
  </div>
</section>

<!-- STANDARDS BAND -->
<div class="trust-band">
  <div class="container">
    <div class="trust-band-label">Standards &amp; Platforms</div>
    <div class="trust-pills">
      <span class="trust-pill">CIS Azure Benchmark</span><span class="trust-pill">AWS Well-Architected</span>
      <span class="trust-pill">GCP Security Foundations</span><span class="trust-pill">ISO 27017</span>
      <span class="trust-pill">SOC 2</span><span class="trust-pill">NIST CSF</span>
      <span class="trust-pill">Zero Trust</span><span class="trust-pill">ISO 42001</span>
      <span class="trust-pill">GDPR</span>
    </div>
  </div>
</div>

<?php mithra_related_services(); ?>

<!-- CTA -->
<section class="cta-section">
  <div class="container">
    <h2 class="reveal">Ready for Managed Cloud Security?</h2>
    <p class="reveal reveal-delay-1">Let our cloud security engineers take full ownership of your Azure, AWS, or GCP security &mdash; so your team can focus on building, not firefighting.</p>
    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-white reveal reveal-delay-2">Talk to Our Cloud Team &rarr;</a>
  </div>
</section>

</main>
<?php get_footer(); ?>
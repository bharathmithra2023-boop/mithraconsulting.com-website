<?php
/**
 * Slug-based auto-template: page-cloud-services.php
 */
get_header(); ?>

<main class="site-main">

<!-- HERO -->
<section class="svc-hero">
  <div class="container svc-hero-inner">
    <div class="svc-hero-text">
      <span class="section-label">Cloud Services</span>
      <h1 class="svc-hero-h1">Cloud Security &amp; Infrastructure Services</h1>
      <p class="svc-hero-sub">Secure, resilient, compliant cloud infrastructure across AWS, Azure, and GCP &mdash; posture management to disaster recovery.</p>
      <div class="svc-hero-btns">
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary">Request Cloud Assessment &rarr;</a>
      </div>
    </div>
    <div class="svc-hero-img">
      <img src="<?php echo esc_url(content_url('uploads/mithra/blog-5.jpg')); ?>" alt="Cloud Security Services" loading="eager">
    </div>
  </div>
</section>

<!-- OVERVIEW -->
<section class="section" id="overview">
  <div class="container">
    <div class="two-col">
      <div class="reveal">
        <span class="section-label">Overview</span>
        <h2 class="section-h2">Cloud security built <em>for resilience</em></h2>
        <div class="svc-overview-text">
          <p>Mithra&#8217;s cloud security team designs, implements, and continuously monitors secure cloud architectures across the major hyperscalers. We combine automated posture management with expert human oversight to ensure your cloud environments remain secure, compliant, and operationally resilient.</p>
          <p>Our cloud-certified engineers (AWS Security Specialty, Azure Security Engineer, GCP Professional Cloud Security Engineer) bring deep hands-on experience configuring cloud-native security controls that align to CIS Benchmarks, NIST, and ISO 27017.</p>
          <p>From cloud security posture management through to disaster recovery planning and tested backup strategies, we deliver the full spectrum of cloud security services your organisation needs to operate with confidence.</p>
        </div>
      </div>
      <div class="reveal reveal-delay-2">
        <div class="svc-stat-box">
          <div class="svc-big-num">3</div>
          <div class="svc-big-lbl">Major Cloud Platforms</div>
          <div class="svc-stat-badges">
            <span class="cert-badge">AWS Certified</span>
            <span class="cert-badge">Azure Certified</span>
            <span class="cert-badge">GCP Certified</span>
            <span class="cert-badge">CIS Benchmarks</span>
            <span class="cert-badge">ISO 27017</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SERVICES -->
<section class="section section-alt" id="services">
  <div class="container">
    <div style="text-align:center;max-width:620px;margin:0 auto 60px">
      <span class="section-label reveal">Our Services</span>
      <h2 class="section-h2 reveal reveal-delay-1">From posture <em>to recovery</em></h2>
    </div>
    <div class="svc-detail-grid svc-3col">

      <div class="svc-detail-card reveal">
        <div class="svc-detail-icon">&#9729;&#65039;</div>
        <h3>Cloud Security Posture Management</h3>
        <ul class="svc-list">
          <li>Multi-cloud unified visibility dashboard</li>
          <li>CIS &amp; NIST automated assessments</li>
          <li>Misconfiguration detection &amp; alerting</li>
          <li>IAM over-privilege &amp; entitlement analysis</li>
          <li>Public exposure &amp; S3 / blob discovery</li>
          <li>Compliance dashboards &amp; reporting</li>
          <li>Configuration drift detection</li>
          <li>Automated remediation workflows</li>
        </ul>
      </div>

      <div class="svc-detail-card reveal reveal-delay-1">
        <div class="svc-detail-icon">&#128737;&#65039;</div>
        <h3>Disaster Recovery</h3>
        <ul class="svc-list">
          <li>Business Impact Analysis (BIA)</li>
          <li>RTO &amp; RPO definition &amp; optimisation</li>
          <li>DR architecture design &amp; documentation</li>
          <li>Cloud-native failover implementation</li>
          <li>Runbook authoring &amp; validation</li>
          <li>Tabletop exercise facilitation</li>
          <li>Quarterly DR testing &amp; reporting</li>
          <li>Cross-region &amp; cross-cloud strategies</li>
        </ul>
      </div>

      <div class="svc-detail-card reveal reveal-delay-2">
        <div class="svc-detail-icon">&#128190;</div>
        <h3>Backup &amp; Restoration</h3>
        <ul class="svc-list">
          <li>3-2-1-1-0 backup strategy design</li>
          <li>Immutable backup vault configuration</li>
          <li>Cross-region replication setup</li>
          <li>Retention policies &amp; lifecycle rules</li>
          <li>Restore validation &amp; SLA testing</li>
          <li>Encryption at rest &amp; in transit</li>
          <li>Hybrid &amp; air-gapped backup options</li>
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
      <h2 class="section-h2 reveal reveal-delay-1">Our cloud <em>security journey</em></h2>
    </div>
    <div class="methodology-steps">
      <div class="method-step reveal"><div class="step-num">01</div><h4>Discovery</h4><p>Cloud inventory, asset mapping, and current-state posture assessment.</p></div>
      <div class="method-arrow">&#8594;</div>
      <div class="method-step reveal reveal-delay-1"><div class="step-num">02</div><h4>Architecture</h4><p>Secure reference architecture design aligned to CIS Benchmarks and NIST.</p></div>
      <div class="method-arrow">&#8594;</div>
      <div class="method-step reveal reveal-delay-2"><div class="step-num">03</div><h4>Implementation</h4><p>Cloud-native security controls deployment, IAM hardening, and network segmentation.</p></div>
      <div class="method-arrow">&#8594;</div>
      <div class="method-step reveal reveal-delay-3"><div class="step-num">04</div><h4>Test &amp; Validate</h4><p>DR failover testing, backup restoration drills, and posture validation.</p></div>
      <div class="method-arrow">&#8594;</div>
      <div class="method-step reveal reveal-delay-3"><div class="step-num">05</div><h4>Monitor</h4><p>Continuous posture monitoring, drift detection, and monthly compliance reporting.</p></div>
    </div>
  </div>
</section>

<!-- BENEFITS -->
<section class="section section-alt" id="benefits">
  <div class="container">
    <div style="text-align:center;max-width:600px;margin:0 auto 60px">
      <span class="section-label reveal">Why Mithra Cloud</span>
      <h2 class="section-h2 reveal reveal-delay-1">What our cloud services <em>deliver</em></h2>
    </div>
    <div class="why-grid">
      <div class="why-card reveal"><div class="why-icon">&#128300;</div><h3>Continuous Visibility</h3><p>Real-time dashboards across AWS, Azure, and GCP so you always know your cloud security state.</p></div>
      <div class="why-card reveal reveal-delay-1"><div class="why-icon">&#128737;</div><h3>Reduced Attack Surface</h3><p>Systematic identification and remediation of misconfigurations, over-privileged identities, and public exposures.</p></div>
      <div class="why-card reveal reveal-delay-2"><div class="why-icon">&#128203;</div><h3>Regulatory Compliance</h3><p>Automated compliance evidence aligned to CIS, NIST, ISO 27017, and SOC 2 cloud control requirements.</p></div>
      <div class="why-card reveal"><div class="why-icon">&#9889;</div><h3>Faster Recovery</h3><p>Tested, documented DR runbooks mean your team knows exactly what to do when incidents occur.</p></div>
      <div class="why-card reveal reveal-delay-1"><div class="why-icon">&#128176;</div><h3>Cost Optimisation</h3><p>Right-sized backup retention, optimised data transfer, and elimination of orphaned resources reduce cloud spend.</p></div>
      <div class="why-card reveal reveal-delay-2"><div class="why-icon">&#127758;</div><h3>Multi-Cloud Coverage</h3><p>Single pane of glass across all cloud platforms with consistent security policies and controls.</p></div>
    </div>
  </div>
</section>

<!-- STANDARDS BAND -->
<div class="trust-band">
  <div class="container">
    <div class="trust-band-label">Standards &amp; Platforms</div>
    <div class="trust-pills">
      <span class="trust-pill">CIS Benchmarks</span><span class="trust-pill">NIST 800-53</span>
      <span class="trust-pill">AWS Well-Architected</span><span class="trust-pill">Azure Security Baseline</span>
      <span class="trust-pill">GCP Security Foundations</span><span class="trust-pill">ISO 27017</span>
    </div>
  </div>
</div>

<!-- CTA -->
<section class="cta-section">
  <div class="container">
    <h2 class="reveal">Secure your cloud environment today</h2>
    <p class="reveal reveal-delay-1">Start with a cloud security assessment. We&#8217;ll map your posture, identify critical gaps, and build a prioritised remediation plan.</p>
    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-white reveal reveal-delay-2">Request Cloud Assessment &rarr;</a>
  </div>
</section>

</main>
<?php get_footer(); ?>

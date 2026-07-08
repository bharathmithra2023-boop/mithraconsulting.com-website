<?php
/**
 * Slug-based auto-template: page-soc-monitoring.php
 */
get_header(); ?>

<main class="site-main">

<!-- HERO -->
<section class="svc-hero">
  <div class="container svc-hero-inner">
    <div class="svc-hero-text">
      <span class="section-label">SOC Monitoring</span>
      <h1 class="svc-hero-h1">SOC &mdash; 24&#215;7 Monitoring</h1>
      <p class="svc-hero-sub">Your always-on security operations centre &mdash; real-time threat detection, rapid incident response, and proactive threat hunting.</p>
      <div class="svc-hero-btns">
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary">Activate SOC Coverage &rarr;</a>
      </div>
    </div>
    <div class="svc-hero-img">
      <img src="<?php echo esc_url(content_url('uploads/mithra/soc.jpg')); ?>" alt="SOC 24x7 Monitoring" loading="eager">
    </div>
  </div>
</section>

<!-- OVERVIEW -->
<section class="section" id="overview">
  <div class="container">
    <div class="two-col">
      <div class="reveal">
        <span class="section-label">Overview</span>
        <h2 class="section-h2">Eyes on your environment <em>around the clock</em></h2>
        <div class="svc-overview-text">
          <p>Mithra&#8217;s SOC provides enterprise-grade security monitoring without the capital investment of building an in-house operations centre. Our analysts work in rotating shifts to ensure 24-hour coverage, 365 days a year, monitoring your environment for threats using industry-leading SIEM platforms and threat intelligence feeds.</p>
          <p>We deploy, tune, and operate SIEM platforms including Microsoft Sentinel, Splunk, and IBM QRadar &mdash; integrating log sources across cloud, on-premises, endpoint, and network infrastructure. Our MITRE ATT&amp;CK-aligned detection library covers the full adversary kill chain.</p>
          <p>When threats are detected, our analysts triage within 15 minutes for P1 incidents, contain and investigate, and guide your team through remediation with clear, actionable communication at every step.</p>
        </div>
      </div>
      <div class="reveal reveal-delay-2">
        <div class="svc-stat-box">
          <div class="svc-big-num">&lt;15 min</div>
          <div class="svc-big-lbl">P1 Triage SLA</div>
          <div class="svc-stat-badges">
            <span class="cert-badge">Microsoft Sentinel</span>
            <span class="cert-badge">Splunk</span>
            <span class="cert-badge">IBM QRadar</span>
            <span class="cert-badge">MITRE ATT&amp;CK</span>
            <span class="cert-badge">24&#215;7 Coverage</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CAPABILITIES -->
<section class="section section-alt" id="capabilities">
  <div class="container">
    <div style="text-align:center;max-width:620px;margin:0 auto 60px">
      <span class="section-label reveal">SOC Capabilities</span>
      <h2 class="section-h2 reveal reveal-delay-1">Detection, response &amp; <em>proactive hunting</em></h2>
    </div>
    <div class="svc-detail-grid svc-2col">

      <div class="svc-detail-card reveal">
        <div class="svc-detail-icon">&#128225;</div>
        <h3>24&#215;7 Threat Monitoring</h3>
        <ul class="svc-list">
          <li>SIEM deployment &amp; management (Sentinel / Splunk / QRadar)</li>
          <li>Log aggregation across all sources</li>
          <li>Real-time correlation &amp; alerting</li>
          <li>Threat intelligence integration (MISP / STIX / TAXII)</li>
          <li>MITRE ATT&amp;CK technique coverage mapping</li>
          <li>ML-powered anomaly detection</li>
          <li>P1&ndash;P4 tiered alerting &amp; SLA management</li>
          <li>Monthly security operations reports</li>
        </ul>
      </div>

      <div class="svc-detail-card reveal reveal-delay-1">
        <div class="svc-detail-icon">&#128680;</div>
        <h3>Incident Response</h3>
        <ul class="svc-list">
          <li>Rapid P1 triage within 15 minutes</li>
          <li>Containment &amp; isolation coordination</li>
          <li>Digital forensics &amp; evidence preservation</li>
          <li>Root cause analysis (RCA)</li>
          <li>Eradication &amp; recovery guidance</li>
          <li>Post-incident report &amp; lessons learned</li>
          <li>Playbook updates based on findings</li>
          <li>Regulatory breach notification support</li>
        </ul>
      </div>

      <div class="svc-detail-card reveal">
        <div class="svc-detail-icon">&#128270;</div>
        <h3>Threat Hunting</h3>
        <ul class="svc-list">
          <li>Hypothesis-driven proactive hunt campaigns</li>
          <li>IOC &amp; IOA investigation</li>
          <li>Lateral movement detection</li>
          <li>Living-off-the-Land (LotL) attack identification</li>
          <li>YARA &amp; Sigma rule development</li>
          <li>Weekly threat hunt reports</li>
          <li>Hunt findings fed back into detection rules</li>
        </ul>
      </div>

      <div class="svc-detail-card reveal reveal-delay-1">
        <div class="svc-detail-icon">&#128202;</div>
        <h3>Vulnerability Management</h3>
        <ul class="svc-list">
          <li>Continuous scanning (Tenable Nessus / Qualys)</li>
          <li>CVSS-based risk prioritisation</li>
          <li>Threat intelligence context enrichment</li>
          <li>Patch coordination with IT teams</li>
          <li>SLA tracking per risk tier</li>
          <li>Monthly vulnerability KPI dashboard</li>
          <li>Trend analysis &amp; executive reporting</li>
        </ul>
      </div>

    </div>
  </div>
</section>

<!-- METHODOLOGY -->
<section class="section" id="methodology">
  <div class="container">
    <div style="text-align:center;max-width:600px;margin:0 auto 60px">
      <span class="section-label reveal">How We Operate</span>
      <h2 class="section-h2 reveal reveal-delay-1">From onboarding to <em>continuous improvement</em></h2>
    </div>
    <div class="methodology-steps">
      <div class="method-step reveal"><div class="step-num">01</div><h4>Onboarding</h4><p>Log source integration, SIEM deployment, and baseline environment profiling.</p></div>
      <div class="method-arrow">&#8594;</div>
      <div class="method-step reveal reveal-delay-1"><div class="step-num">02</div><h4>Tuning</h4><p>Detection rule tuning, false positive reduction, and initial threat hunt campaigns.</p></div>
      <div class="method-arrow">&#8594;</div>
      <div class="method-step reveal reveal-delay-2"><div class="step-num">03</div><h4>24&#215;7 Monitoring</h4><p>Around-the-clock analyst coverage with tiered SLA alerting and escalation paths.</p></div>
      <div class="method-arrow">&#8594;</div>
      <div class="method-step reveal reveal-delay-3"><div class="step-num">04</div><h4>Detect &amp; Respond</h4><p>Rapid triage, containment, investigation, and guided remediation for every incident.</p></div>
      <div class="method-arrow">&#8594;</div>
      <div class="method-step reveal reveal-delay-3"><div class="step-num">05</div><h4>Continuous Improvement</h4><p>Monthly reporting, coverage gap analysis, and detection library expansion.</p></div>
    </div>
  </div>
</section>

<!-- BENEFITS -->
<section class="section section-alt" id="benefits">
  <div class="container">
    <div style="text-align:center;max-width:600px;margin:0 auto 60px">
      <span class="section-label reveal">Why Mithra SOC</span>
      <h2 class="section-h2 reveal reveal-delay-1">The value of <em>always-on protection</em></h2>
    </div>
    <div class="why-grid">
      <div class="why-card reveal"><div class="why-icon">&#9889;</div><h3>Sub-15-Min Triage</h3><p>Guaranteed P1 alert triage within 15 minutes, with clear escalation paths and SLA commitments in contract.</p></div>
      <div class="why-card reveal reveal-delay-1"><div class="why-icon">&#127919;</div><h3>ATT&amp;CK Coverage</h3><p>Detection rules mapped to MITRE ATT&amp;CK tactics and techniques with regular gap analysis and new coverage additions.</p></div>
      <div class="why-card reveal reveal-delay-2"><div class="why-icon">&#128203;</div><h3>Regulatory Notifications</h3><p>Breach notification support aligned to GDPR 72-hour, HIPAA 60-day, and other regulatory timelines.</p></div>
      <div class="why-card reveal"><div class="why-icon">&#128270;</div><h3>Proactive Hunting</h3><p>Regular threat hunt campaigns proactively search for attacker presence before automated tools detect anomalies.</p></div>
      <div class="why-card reveal reveal-delay-1"><div class="why-icon">&#128300;</div><h3>Multi-Source Visibility</h3><p>Unified view across cloud, endpoint, network, identity, and application log sources in a single SIEM platform.</p></div>
      <div class="why-card reveal reveal-delay-2"><div class="why-icon">&#128336;</div><h3>Reduced MTTR</h3><p>Structured playbooks, pre-approved containment actions, and expert analysts reduce mean time to respond significantly.</p></div>
    </div>
  </div>
</section>

<!-- TOOLS BAND -->
<div class="trust-band">
  <div class="container">
    <div class="trust-band-label">Tools &amp; Standards</div>
    <div class="trust-pills">
      <span class="trust-pill">MITRE ATT&amp;CK</span><span class="trust-pill">NIST CSF</span>
      <span class="trust-pill">ISO 27035</span><span class="trust-pill">SIEM</span>
      <span class="trust-pill">SOAR</span><span class="trust-pill">Sigma Rules</span>
      <span class="trust-pill">YARA</span><span class="trust-pill">STIX / TAXII</span>
    </div>
  </div>
</div>

<?php mithra_related_services(); ?>

<!-- CTA -->
<section class="cta-section">
  <div class="container">
    <h2 class="reveal">Never face a threat alone again</h2>
    <p class="reveal reveal-delay-1">Talk to our SOC team about onboarding your environment. We can have monitoring active within 2 weeks.</p>
    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-white reveal reveal-delay-2">Activate SOC Coverage &rarr;</a>
  </div>
</section>

</main>
<?php get_footer(); ?>
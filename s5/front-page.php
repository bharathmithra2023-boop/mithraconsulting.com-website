<?php
/**
 * Mithra Consulting — Front Page (Homepage)
 */
get_header();
?>

<!-- ─── HERO ─────────────────────────────────────────────── -->
<section class="hero">
  <div class="hero-left">
    <div class="hero-dots"></div>
    <div class="hero-glow"></div>
    <div class="hero-left-inner">

      <div class="hero-badge">
        <div class="badge-dot pulse"></div>
        <span><?php esc_html_e( 'Trusted Security Partner', 'mithra' ); ?></span>
      </div>

      <h1 class="hero-h1">
        <?php esc_html_e( 'Securing Your', 'mithra' ); ?><br>
        <em><?php esc_html_e( 'Digital Future', 'mithra' ); ?></em><br>
        <?php esc_html_e( 'Together', 'mithra' ); ?>
      </h1>

      <p class="hero-sub">
        <?php esc_html_e( 'Enterprise-grade cybersecurity, compliance advisory, and managed security services &mdash; delivered with precision, depth, and accountability.', 'mithra' ); ?>
      </p>

      <div class="hero-btns">
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">
          <?php esc_html_e( 'Get a Free Assessment &rarr;', 'mithra' ); ?>
        </a>
        <a href="#services" class="btn btn-outline">
          <?php esc_html_e( 'Explore Services', 'mithra' ); ?>
        </a>
      </div>

      <div class="hero-pills">
        <span class="pill">ISO 27001</span>
        <span class="pill">SOC 2</span>
        <span class="pill">PCI-DSS</span>
        <span class="pill">HIPAA</span>
        <span class="pill">GDPR</span>
        <span class="pill">DPDPA</span>
      </div>

    </div>
  </div><!-- .hero-left -->

  <div class="hero-right">
    <img src="https://picsum.photos/seed/mithra-hero/900/600"
         alt="<?php esc_attr_e( 'Mithra Consulting cybersecurity professionals at work', 'mithra' ); ?>"
         loading="eager">
  </div><!-- .hero-right -->
</section>

<!-- ─── ABOUT ─────────────────────────────────────────────── -->
<section class="section" id="about">
  <div class="container">
    <div class="two-col">

      <div class="reveal">
        <span class="section-label"><?php esc_html_e( 'Who We Are', 'mithra' ); ?></span>
        <h2 class="section-h2"><?php esc_html_e( 'Your Strategic ', 'mithra' ); ?><em><?php esc_html_e( 'Security', 'mithra' ); ?></em><?php esc_html_e( ' Advisor', 'mithra' ); ?></h2>
        <div class="about-text">
          <p><?php esc_html_e( 'Mithra Consulting is a specialist cybersecurity firm dedicated to helping organisations build resilient, compliant, and secure digital environments. Founded on the belief that security should be an enabler &mdash; not a blocker &mdash; we partner with businesses across every stage of their security journey.', 'mithra' ); ?></p>
          <p><?php esc_html_e( 'From startups seeking their first compliance certification to enterprises managing complex multi-cloud environments, our team brings hands-on expertise, regulatory depth, and a genuine commitment to long-term partnership.', 'mithra' ); ?></p>
          <p><?php esc_html_e( 'We don't just deliver reports &mdash; we work alongside your team to understand context, reduce risk, and build capability that lasts.', 'mithra' ); ?></p>
        </div>

        <div class="stats-4">
          <div class="stat-box"><div class="n">500+</div><div class="l"><?php esc_html_e( 'Assessments Completed', 'mithra' ); ?></div></div>
          <div class="stat-box"><div class="n">98%</div><div class="l"><?php esc_html_e( 'Client Satisfaction', 'mithra' ); ?></div></div>
          <div class="stat-box"><div class="n">50+</div><div class="l"><?php esc_html_e( 'Expert Consultants', 'mithra' ); ?></div></div>
          <div class="stat-box"><div class="n">12+</div><div class="l"><?php esc_html_e( 'Years Experience', 'mithra' ); ?></div></div>
        </div>

        <div class="cert-badges">
          <span class="cert-badge">ISO 27001 Certified</span>
          <span class="cert-badge">CISA Advisors</span>
          <span class="cert-badge">CISSP Team</span>
          <span class="cert-badge">AWS Partner</span>
          <span class="cert-badge">Microsoft Partner</span>
        </div>
      </div>

      <div class="reveal reveal-delay-2">
        <div class="about-img-wrap">
          <img src="https://picsum.photos/seed/mithra-about/900/520"
               alt="<?php esc_attr_e( 'Mithra Consulting team at work', 'mithra' ); ?>"
               loading="lazy">
          <div class="iso-badge">
            <div class="icon">&#9989;</div>
            <div>
              <strong>ISO 27001 Certified</strong>
              <span>Audit-Ready Practice</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ─── TRACK RECORD ──────────────────────────────────────── -->
<section class="track-record-section">
  <div class="container">
    <div class="track-record-inner">
      <div class="track-record-label"><?php esc_html_e( 'Our Track Record', 'mithra' ); ?></div>
      <div class="track-record-grid">
        <div class="tr-stat">
          <div class="tr-num">500+</div>
          <div class="tr-lbl"><?php esc_html_e( 'Assessments Done', 'mithra' ); ?></div>
        </div>
        <div class="tr-divider"></div>
        <div class="tr-stat">
          <div class="tr-num">98%</div>
          <div class="tr-lbl"><?php esc_html_e( 'Client Retention', 'mithra' ); ?></div>
        </div>
        <div class="tr-divider"></div>
        <div class="tr-stat">
          <div class="tr-num">7+</div>
          <div class="tr-lbl"><?php esc_html_e( 'Frameworks Covered', 'mithra' ); ?></div>
        </div>
        <div class="tr-divider"></div>
        <div class="tr-stat">
          <div class="tr-num">24&#215;7</div>
          <div class="tr-lbl"><?php esc_html_e( 'SOC Monitoring', 'mithra' ); ?></div>
        </div>
        <div class="tr-divider"></div>
        <div class="tr-stat">
          <div class="tr-num">12+</div>
          <div class="tr-lbl"><?php esc_html_e( 'Years Experience', 'mithra' ); ?></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ─── TRUST BAND ────────────────────────────────────────── -->
<div class="trust-band">
  <div class="container">
    <div class="trust-band-label"><?php esc_html_e( 'Compliance Frameworks We Cover', 'mithra' ); ?></div>
    <div class="trust-pills">
      <span class="trust-pill">ISO 27001</span>
      <span class="trust-pill">ISO 42001</span>
      <span class="trust-pill">SOC 2 Type I &amp; II</span>
      <span class="trust-pill">HIPAA</span>
      <span class="trust-pill">PCI-DSS v4.0</span>
      <span class="trust-pill">GDPR</span>
      <span class="trust-pill">DPDPA 2023</span>
      <span class="trust-pill">NIST CSF</span>
      <span class="trust-pill">CIS Controls</span>
      <span class="trust-pill">MITRE ATT&amp;CK</span>
      <span class="trust-pill">OWASP Top 10</span>
      <span class="trust-pill">VAPT</span>
      <span class="trust-pill">CVSS v3.1</span>
    </div>
  </div>
</div>

<!-- ─── SERVICES ──────────────────────────────────────────── -->
<section class="section" id="services">
  <div class="container">
    <div style="text-align:center;max-width:620px;margin:0 auto 0">
      <span class="section-label reveal"><?php esc_html_e( 'What We Do', 'mithra' ); ?></span>
      <h2 class="section-h2 reveal reveal-delay-1">
        <?php esc_html_e( 'Comprehensive ', 'mithra' ); ?><em><?php esc_html_e( 'Security Services', 'mithra' ); ?></em>
      </h2>
      <p class="section-lead reveal reveal-delay-2" style="margin:0 auto">
        <?php esc_html_e( 'End-to-end cybersecurity solutions crafted for modern enterprise challenges &mdash; from compliance to cloud, from detection to response.', 'mithra' ); ?>
      </p>
    </div>

    <div class="services-grid">

      <div class="svc-card reveal">
        <div class="svc-icon">&#128269;</div>
        <h3><?php esc_html_e( 'Audit &amp; Compliance', 'mithra' ); ?></h3>
        <p><?php esc_html_e( 'Navigate ISO 27001, SOC 2, HIPAA, PCI-DSS, GDPR, and DPDPA with confidence. Expert gap analysis, readiness assessments, and certification support.', 'mithra' ); ?></p>
        <a href="<?php echo esc_url( home_url( '/services/audit-compliance/' ) ); ?>" class="svc-link">
          <?php esc_html_e( 'Explore Service &rarr;', 'mithra' ); ?>
        </a>
      </div>

      <div class="svc-card reveal reveal-delay-1">
        <div class="svc-icon">&#128737;&#65039;</div>
        <h3><?php esc_html_e( 'VAPT', 'mithra' ); ?></h3>
        <p><?php esc_html_e( 'Rigorous vulnerability assessment and penetration testing for web apps, networks, mobile (Android &amp; iOS), and AI/ML systems. Manual-led, CVSS-scored.', 'mithra' ); ?></p>
        <a href="<?php echo esc_url( home_url( '/services/vapt/' ) ); ?>" class="svc-link">
          <?php esc_html_e( 'Explore Service &rarr;', 'mithra' ); ?>
        </a>
      </div>

      <div class="svc-card reveal reveal-delay-2">
        <div class="svc-icon">&#9729;&#65039;</div>
        <h3><?php esc_html_e( 'Cloud Services', 'mithra' ); ?></h3>
        <p><?php esc_html_e( 'Multi-cloud security posture management, disaster recovery architecture, and enterprise backup strategies across AWS, Azure, and GCP.', 'mithra' ); ?></p>
        <a href="<?php echo esc_url( home_url( '/services/cloud-services/' ) ); ?>" class="svc-link">
          <?php esc_html_e( 'Explore Service &rarr;', 'mithra' ); ?>
        </a>
      </div>

      <div class="svc-card reveal reveal-delay-1">
        <div class="svc-icon">&#128225;</div>
        <h3><?php esc_html_e( 'SOC Monitoring', 'mithra' ); ?></h3>
        <p><?php esc_html_e( '24&#215;7 threat detection and response powered by SIEM, threat intelligence, and MITRE ATT&amp;CK-aligned detection. Proactive threat hunting included.', 'mithra' ); ?></p>
        <a href="<?php echo esc_url( home_url( '/services/soc-monitoring/' ) ); ?>" class="svc-link">
          <?php esc_html_e( 'Explore Service &rarr;', 'mithra' ); ?>
        </a>
      </div>

      <div class="svc-card reveal reveal-delay-2">
        <div class="svc-icon">&#128187;</div>
        <h3><?php esc_html_e( 'IT Solutions', 'mithra' ); ?></h3>
        <p><?php esc_html_e( 'Enterprise endpoint security with EDR/XDR deployment and hardened email security including DMARC, BEC protection, and sandbox analysis.', 'mithra' ); ?></p>
        <a href="<?php echo esc_url( home_url( '/services/it-solutions/' ) ); ?>" class="svc-link">
          <?php esc_html_e( 'Explore Service &rarr;', 'mithra' ); ?>
        </a>
      </div>

      <div class="svc-card reveal reveal-delay-3">
        <div class="svc-icon">&#9881;&#65039;</div>
        <h3><?php esc_html_e( 'Managed Services', 'mithra' ); ?></h3>
        <p><?php esc_html_e( 'Fully managed security operations for Microsoft Azure, Amazon AWS, and Google Cloud Platform &mdash; continuous monitoring, compliance, and optimisation.', 'mithra' ); ?></p>
        <a href="<?php echo esc_url( home_url( '/services/managed-services/' ) ); ?>" class="svc-link">
          <?php esc_html_e( 'Explore Service &rarr;', 'mithra' ); ?>
        </a>
      </div>

    </div>
  </div>
</section>

<!-- ─── WHY CHOOSE US ─────────────────────────────────────── -->
<section class="section section-alt">
  <div class="container">
    <div style="text-align:center;max-width:600px;margin:0 auto">
      <span class="section-label reveal"><?php esc_html_e( 'Why Mithra', 'mithra' ); ?></span>
      <h2 class="section-h2 reveal reveal-delay-1">
        <?php esc_html_e( 'Built for ', 'mithra' ); ?><em><?php esc_html_e( 'Trust', 'mithra' ); ?></em><?php esc_html_e( ' at Every Level', 'mithra' ); ?>
      </h2>
    </div>
    <div class="why-grid">
      <div class="why-card reveal">
        <div class="why-icon">&#127942;</div>
        <h3><?php esc_html_e( 'Deep Domain Expertise', 'mithra' ); ?></h3>
        <p><?php esc_html_e( 'Our consultants hold CISSP, CISA, CEH, AWS Security, and other leading certifications &mdash; bringing practitioner-grade knowledge to every engagement.', 'mithra' ); ?></p>
      </div>
      <div class="why-card reveal reveal-delay-1">
        <div class="why-icon">&#128300;</div>
        <h3><?php esc_html_e( 'Evidence-Based Approach', 'mithra' ); ?></h3>
        <p><?php esc_html_e( 'Every finding is backed by documented evidence, CVSS scoring, and actionable remediation guidance &mdash; not generic recommendations.', 'mithra' ); ?></p>
      </div>
      <div class="why-card reveal reveal-delay-2">
        <div class="why-icon">&#129309;</div>
        <h3><?php esc_html_e( 'Long-Term Partnership', 'mithra' ); ?></h3>
        <p><?php esc_html_e( 'We measure success by your security posture improvement over time, not one-off deliverables. 98% of clients engage us year after year.', 'mithra' ); ?></p>
      </div>
      <div class="why-card reveal reveal-delay-3">
        <div class="why-icon">&#9889;</div>
        <h3><?php esc_html_e( 'Rapid Time-to-Value', 'mithra' ); ?></h3>
        <p><?php esc_html_e( 'Structured delivery methodology means quick onboarding, clear milestones, and results you can act on &mdash; not reports that gather dust.', 'mithra' ); ?></p>
      </div>
    </div>
  </div>
</section>

<!-- ─── CTA ───────────────────────────────────────────────── -->
<section class="cta-section">
  <div class="container">
    <h2 class="reveal"><?php esc_html_e( 'Ready to Strengthen Your Security?', 'mithra' ); ?></h2>
    <p class="reveal reveal-delay-1">
      <?php esc_html_e( 'Let's discuss your needs. No obligation &mdash; just an honest conversation about where you are and where you need to be.', 'mithra' ); ?>
    </p>
    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-white reveal reveal-delay-2">
      <?php esc_html_e( 'Schedule a Free Consultation &rarr;', 'mithra' ); ?>
    </a>
  </div>
</section>

<?php get_footer(); ?>

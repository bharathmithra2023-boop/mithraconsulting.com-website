<?php
/**
 * Template: About — page-about.php
 * Auto-loaded for the /about/ page (slug: about)
 */
get_header(); ?>

<main class="site-main">

<!-- HERO -->
<section class="svc-hero">
  <div class="container svc-hero-inner">
    <div class="svc-hero-text">
      <span class="section-label"><?php esc_html_e( 'About Us', 'mithra' ); ?></span>
      <h1 class="svc-hero-h1"><?php esc_html_e( 'Building trust in a ', 'mithra' ); ?><em><?php esc_html_e( 'digital-first world', 'mithra' ); ?></em></h1>
      <p class="svc-hero-sub"><?php esc_html_e( 'Mithra Consulting is a specialist cybersecurity firm helping enterprises build resilient, compliant and secure digital environments &mdash; from startups seeking their first certification to global organisations managing complex multi-cloud estates.', 'mithra' ); ?></p>
      <div class="svc-hero-btns">
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary"><?php esc_html_e( 'Work With Us', 'mithra' ); ?> &rarr;</a>
      </div>
    </div>
    <div class="svc-hero-img">
      <img src="<?php echo esc_url( content_url( 'uploads/mithra/about.jpg' ) ); ?>" alt="<?php esc_attr_e( 'Mithra Consulting team at work', 'mithra' ); ?>" loading="eager">
    </div>
  </div>
</section>

<!-- MISSION -->
<section class="section" id="mission">
  <div class="container">
    <div class="two-col">
      <div class="reveal">
        <span class="section-label"><?php esc_html_e( 'Our Mission', 'mithra' ); ?></span>
        <h2 class="section-h2"><?php esc_html_e( 'Security as an ', 'mithra' ); ?><em><?php esc_html_e( 'enabler', 'mithra' ); ?></em><?php esc_html_e( ', not a blocker', 'mithra' ); ?></h2>
        <div class="svc-overview-text">
          <p><?php esc_html_e( 'Mithra Consulting exists to make enterprise-grade cybersecurity accessible, actionable and accountable. Our mission is simple: help organisations achieve the certifications that unlock enterprise contracts, stand up the defensive posture that stops real attackers, and build the security operating model that scales with the business &mdash; without security ever becoming a bottleneck.', 'mithra' ); ?></p>
          <p><?php esc_html_e( 'We deliver this through a coordinated practice covering audit &amp; compliance (ISO 27001, ISO 42001, SOC 2, PCI-DSS, HIPAA, GDPR, DPDPA, CMMC), penetration testing across every attack surface (web, network, mobile, API, cloud and AI/LLM), 24x7 SOC monitoring and incident response, cloud security and managed services on AWS, Azure and GCP, and dedicated AI security and governance for the regulated AI era.', 'mithra' ); ?></p>
          <p><?php esc_html_e( 'Every engagement is scoped precisely to your business context. We produce technical depth for your engineers and clear executive summaries for your board. We do not hand over a report and walk away &mdash; we work alongside your team to reduce risk, close audit gaps, and grow the internal capability that outlasts the engagement.', 'mithra' ); ?></p>
        </div>
      </div>
      <div class="reveal reveal-delay-2">
        <div class="svc-stat-box">
          <div class="svc-big-num">500+</div>
          <div class="svc-big-lbl"><?php esc_html_e( 'Assessments Delivered', 'mithra' ); ?></div>
          <div class="svc-stat-badges">
            <span class="cert-badge">ISO 27001 Certified</span>
            <span class="cert-badge">CISA Advisors</span>
            <span class="cert-badge">CISSP Team</span>
            <span class="cert-badge">OSCP</span>
            <span class="cert-badge">CREST</span>
          </div>
        </div>
        <div class="recognition-mini">
          <img src="<?php echo esc_url(content_url('uploads/mithra/outstanding-workplace.png')); ?>" alt="Outstanding Workplaces Certified — India, Dec 2025 to Dec 2026" loading="lazy" width="80" height="128">
          <div>
            <strong><?php esc_html_e( 'Outstanding Workplaces&#8482;', 'mithra' ); ?></strong>
            <span><?php esc_html_e( 'Certified in India &middot; Dec 2025 &ndash; Dec 2026', 'mithra' ); ?></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FOUNDER -->
<section class="section section-alt" id="founder">
  <div class="container">
    <div style="text-align:center;max-width:640px;margin:0 auto 56px">
      <span class="section-label reveal"><?php esc_html_e( 'Leadership', 'mithra' ); ?></span>
      <h2 class="section-h2 reveal reveal-delay-1"><?php esc_html_e( 'Meet the ', 'mithra' ); ?><em><?php esc_html_e( 'founder', 'mithra' ); ?></em></h2>
    </div>

    <div class="founder-card reveal">
      <div class="founder-photo">
        <img src="<?php echo esc_url(content_url('uploads/mithra/founder-bharath.jpg')); ?>" alt="Bharath S — Founder & CEO of Mithra Consulting" loading="lazy" width="600" height="600">
      </div>
      <div class="founder-body">
        <div class="founder-name">
          <h3>Bharath S</h3>
          <span class="founder-role"><?php esc_html_e( 'Founder &amp; CEO, Mithra Consulting &middot; Chennai, India', 'mithra' ); ?></span>
        </div>
        <div class="founder-bio">
          <p><?php esc_html_e( 'Bharath founded Mithra Consulting in July 2019 to deliver end-to-end cybersecurity, GRC and IT solutioning to organisations across industries. His focus: managing complex security programmes and delivering them efficiently &mdash; from ISO 27001 and SOC 2 rollouts to VAPT engagements and managed services.', 'mithra' ); ?></p>
          <p><?php esc_html_e( 'An ISO 27001 Lead Implementer, he has personally led compliance programmes across SOC 2, ISO 27001, CMMC and HIPAA for clients spanning e-commerce, healthcare, fintech, insurance and SaaS. Under his leadership, Mithra Consulting has delivered VAPT projects across web, mobile, API and desktop applications with 100% client retention.', 'mithra' ); ?></p>
          <p><?php esc_html_e( 'Bharath brings 18+ years of technology leadership. Before founding Mithra, he was Product Delivery Manager at Engagedly (where he project-managed the entire SOC 2 programme), Director of Operations at 99tests (100+ mobile and web apps across multiple domains), and held senior product and testing leadership roles at PASS Technologies AG, HeyMath! and STC ThirdEye. He holds a PGDBA in Marketing from Symbiosis and a B.Tech in Mechanical Engineering from Pondicherry University.', 'mithra' ); ?></p>
        </div>
        <div class="founder-creds">
          <span class="cert-badge">ISO 27001 Lead Implementer</span>
          <span class="cert-badge">PRINCE2</span>
          <span class="cert-badge">CSPO</span>
          <span class="cert-badge">Risk Management</span>
        </div>
        <div class="founder-expertise">
          <strong><?php esc_html_e( 'Areas of expertise:', 'mithra' ); ?></strong>
          <span><?php esc_html_e( 'GRC &middot; Cyber Security &middot; VAPT &middot; Endpoint Security &middot; IT Solutioning &middot; Cloud Services &middot; Managed Services &middot; SOC 2 / ISO 27001 / CMMC / HIPAA compliance &middot; Security questionnaire response', 'mithra' ); ?></span>
        </div>
        <div class="founder-links">
          <a href="https://www.linkedin.com/in/sbharath1012/" target="_blank" rel="noopener" class="founder-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
            <?php esc_html_e( 'Connect on LinkedIn', 'mithra' ); ?>
          </a>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="founder-link founder-link-alt">
            <?php esc_html_e( 'Book a call with Bharath', 'mithra' ); ?> &rarr;
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- VALUES -->
<section class="section" id="values">
  <div class="container">
    <div style="text-align:center;max-width:600px;margin:0 auto 60px">
      <span class="section-label reveal"><?php esc_html_e( 'What We Stand For', 'mithra' ); ?></span>
      <h2 class="section-h2 reveal reveal-delay-1"><?php esc_html_e( 'The values behind ', 'mithra' ); ?><em><?php esc_html_e( 'every engagement', 'mithra' ); ?></em></h2>
    </div>
    <div class="why-grid">
      <div class="why-card reveal">
        <div class="why-icon">&#127919;</div>
        <h3><?php esc_html_e( 'Outcomes over deliverables', 'mithra' ); ?></h3>
        <p><?php esc_html_e( 'We measure success by risk reduced, certifications achieved, and threats stopped &mdash; not the thickness of a report.', 'mithra' ); ?></p>
      </div>
      <div class="why-card reveal reveal-delay-1">
        <div class="why-icon">&#129309;</div>
        <h3><?php esc_html_e( 'Partnership, not consulting', 'mithra' ); ?></h3>
        <p><?php esc_html_e( 'We embed with your team so security capability grows in-house, not just billable hours on our side.', 'mithra' ); ?></p>
      </div>
      <div class="why-card reveal reveal-delay-2">
        <div class="why-icon">&#128218;</div>
        <h3><?php esc_html_e( 'Depth of expertise', 'mithra' ); ?></h3>
        <p><?php esc_html_e( 'Every consultant holds industry-recognised credentials and stays current with hands-on offensive and defensive research.', 'mithra' ); ?></p>
      </div>
      <div class="why-card reveal">
        <div class="why-icon">&#128737;</div>
        <h3><?php esc_html_e( 'Independence &amp; integrity', 'mithra' ); ?></h3>
        <p><?php esc_html_e( 'We are vendor-neutral. Our recommendations are driven by your risk profile, not tool commissions.', 'mithra' ); ?></p>
      </div>
      <div class="why-card reveal reveal-delay-1">
        <div class="why-icon">&#128295;</div>
        <h3><?php esc_html_e( 'Practical over theoretical', 'mithra' ); ?></h3>
        <p><?php esc_html_e( 'Every finding is paired with code-level remediation, sample configurations, and a clear path from red to green.', 'mithra' ); ?></p>
      </div>
      <div class="why-card reveal reveal-delay-2">
        <div class="why-icon">&#128200;</div>
        <h3><?php esc_html_e( 'Continuous, not point-in-time', 'mithra' ); ?></h3>
        <p><?php esc_html_e( 'Threats evolve daily. Our engagement models keep your posture measured and improved on an ongoing basis.', 'mithra' ); ?></p>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section">
  <div class="container">
    <h2 class="reveal"><?php esc_html_e( 'Ready to strengthen your security posture?', 'mithra' ); ?></h2>
    <p class="reveal reveal-delay-1"><?php esc_html_e( 'Talk to our team about your goals. We will design a right-sized engagement and share a scoped proposal within 48 hours.', 'mithra' ); ?></p>
    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-white reveal reveal-delay-2"><?php esc_html_e( 'Get in Touch', 'mithra' ); ?> &rarr;</a>
  </div>
</section>

</main>
<?php get_footer(); ?>
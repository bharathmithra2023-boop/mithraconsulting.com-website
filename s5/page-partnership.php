<?php
/**
 * Template: Partnership With Us — page-partnership.php
 * Slug: partnership
 * Form POSTs to admin-post.php (see mithra_handle_partnership() in functions.php)
 * and redirects back here with ?sent=1 (or ?err=...)
 */

$mithra_form_status = '';
$mithra_form_error  = '';
$mithra_form_data   = array( 'company' => '', 'name' => '', 'email' => '', 'phone' => '', 'type' => '', 'website' => '', 'message' => '' );

if ( isset( $_GET['sent'] ) && $_GET['sent'] === '1' ) {
    $mithra_form_status = 'ok';
} elseif ( isset( $_GET['err'] ) ) {
    $mithra_form_status = 'error';
    $err_map = array(
        'nonce'    => __( 'Security check failed. Please refresh and try again.', 'mithra' ),
        'required' => __( 'Please fill in all required fields (Company, Name, Email, Partnership Type).', 'mithra' ),
        'email'    => __( 'Please enter a valid email address.', 'mithra' ),
    );
    $mithra_form_error = $err_map[ sanitize_key( $_GET['err'] ) ] ?? __( 'Something went wrong. Please try again.', 'mithra' );
    // Repopulate from query string for convenience
    foreach ( array_keys( $mithra_form_data ) as $k ) {
        if ( isset( $_GET[ 'f_' . $k ] ) ) {
            $mithra_form_data[ $k ] = wp_unslash( $_GET[ 'f_' . $k ] );
        }
    }
}

get_header(); ?>

<main class="site-main">

<!-- HERO -->
<section class="svc-hero">
  <div class="container svc-hero-inner">
    <div class="svc-hero-text">
      <span class="section-label"><?php esc_html_e( 'Partnership Programme', 'mithra' ); ?></span>
      <h1 class="svc-hero-h1"><?php esc_html_e( 'Partner with ', 'mithra' ); ?><em><?php esc_html_e( 'Mithra Consulting', 'mithra' ); ?></em></h1>
      <p class="svc-hero-sub"><?php esc_html_e( 'Join our growing ecosystem of technology partners, resellers, MSPs and referral partners. Together, we help enterprises across India and beyond stay secure, compliant and resilient.', 'mithra' ); ?></p>
      <div class="svc-hero-btns">
        <a href="#partnership-form" class="btn btn-primary"><?php esc_html_e( 'Start the Conversation', 'mithra' ); ?> &rarr;</a>
      </div>
    </div>
    <div class="svc-hero-img">
      <img src="<?php echo esc_url( content_url( 'uploads/mithra/partnership.jpg' ) ); ?>" alt="<?php esc_attr_e( 'Mithra Consulting partnership team', 'mithra' ); ?>" loading="eager">
    </div>
  </div>
</section>

<!-- WHY PARTNER -->
<section class="section" id="why-partner">
  <div class="container">
    <div style="text-align:center;max-width:640px;margin:0 auto 56px">
      <span class="section-label reveal"><?php esc_html_e( 'Why Partner', 'mithra' ); ?></span>
      <h2 class="section-h2 reveal reveal-delay-1"><?php esc_html_e( 'A partnership that ', 'mithra' ); ?><em><?php esc_html_e( 'accelerates growth', 'mithra' ); ?></em></h2>
    </div>
    <div class="why-grid">
      <div class="why-card reveal">
        <div class="why-icon">&#128200;</div>
        <h3><?php esc_html_e( 'Expand your portfolio', 'mithra' ); ?></h3>
        <p><?php esc_html_e( 'Add enterprise-grade cybersecurity, compliance and managed services to your offering without building the practice in-house.', 'mithra' ); ?></p>
      </div>
      <div class="why-card reveal reveal-delay-1">
        <div class="why-icon">&#128176;</div>
        <h3><?php esc_html_e( 'Attractive margins', 'mithra' ); ?></h3>
        <p><?php esc_html_e( 'Structured referral, reseller and revenue-share models tailored to your business, with transparent commercials and dedicated partner support.', 'mithra' ); ?></p>
      </div>
      <div class="why-card reveal reveal-delay-2">
        <div class="why-icon">&#127942;</div>
        <h3><?php esc_html_e( 'Co-branded deliverables', 'mithra' ); ?></h3>
        <p><?php esc_html_e( 'White-label and co-branded reporting options let your team own the client relationship while we deliver behind the scenes.', 'mithra' ); ?></p>
      </div>
      <div class="why-card reveal">
        <div class="why-icon">&#128218;</div>
        <h3><?php esc_html_e( 'Enablement &amp; training', 'mithra' ); ?></h3>
        <p><?php esc_html_e( 'Sales enablement, technical training, joint pre-sales support and access to our knowledge base so your team goes to market with confidence.', 'mithra' ); ?></p>
      </div>
      <div class="why-card reveal reveal-delay-1">
        <div class="why-icon">&#128737;</div>
        <h3><?php esc_html_e( 'Compliance-first delivery', 'mithra' ); ?></h3>
        <p><?php esc_html_e( 'ISO 27001 Lead Implementer heritage, aligned to ISO 42001, SOC 2, HIPAA, PCI-DSS, GDPR and DPDPA out of the box.', 'mithra' ); ?></p>
      </div>
      <div class="why-card reveal reveal-delay-2">
        <div class="why-icon">&#129309;</div>
        <h3><?php esc_html_e( 'True partnership', 'mithra' ); ?></h3>
        <p><?php esc_html_e( 'We are not a lead-hoarder. Your customers stay your customers. Our success is measured by your growth and their outcomes.', 'mithra' ); ?></p>
      </div>
    </div>
  </div>
</section>

<!-- PARTNERSHIP TYPES -->
<section class="section section-alt" id="partnership-types">
  <div class="container">
    <div style="text-align:center;max-width:640px;margin:0 auto 56px">
      <span class="section-label reveal"><?php esc_html_e( 'Programme Tracks', 'mithra' ); ?></span>
      <h2 class="section-h2 reveal reveal-delay-1"><?php esc_html_e( 'Choose the track that ', 'mithra' ); ?><em><?php esc_html_e( 'fits you', 'mithra' ); ?></em></h2>
    </div>
    <div class="svc-detail-grid">
      <div class="svc-detail-card reveal">
        <div class="svc-detail-icon">&#128100;</div>
        <h3><?php esc_html_e( 'Referral Partner', 'mithra' ); ?></h3>
        <ul class="svc-list">
          <li>Introduce qualified opportunities</li>
          <li>Earn structured referral commissions</li>
          <li>No delivery or contracting overhead</li>
          <li>Ideal for consultants and MSPs</li>
        </ul>
      </div>
      <div class="svc-detail-card reveal reveal-delay-1">
        <div class="svc-detail-icon">&#128188;</div>
        <h3><?php esc_html_e( 'Reseller Partner', 'mithra' ); ?></h3>
        <ul class="svc-list">
          <li>Resell Mithra services under your paper</li>
          <li>Volume-based discount tiers</li>
          <li>White-label or co-branded reporting</li>
          <li>Ideal for system integrators and distributors</li>
        </ul>
      </div>
      <div class="svc-detail-card reveal reveal-delay-2">
        <div class="svc-detail-icon">&#128295;</div>
        <h3><?php esc_html_e( 'Technology Alliance', 'mithra' ); ?></h3>
        <ul class="svc-list">
          <li>Joint go-to-market with technology vendors</li>
          <li>Integration and interoperability engagements</li>
          <li>Co-marketing, events, and thought leadership</li>
          <li>Ideal for security product companies</li>
        </ul>
      </div>
      <div class="svc-detail-card reveal">
        <div class="svc-detail-icon">&#127760;</div>
        <h3><?php esc_html_e( 'Global / Regional Distributor', 'mithra' ); ?></h3>
        <ul class="svc-list">
          <li>Represent Mithra in your geography</li>
          <li>Exclusive or non-exclusive territory options</li>
          <li>Local delivery enablement and training</li>
          <li>Ideal for established distribution networks</li>
        </ul>
      </div>
    </div>
  </div>
</section>


<!-- NETWORKING PARTNERS -->
<div class="partners-band net-partners">
  <div class="container">
    <div class="partners-label"><?php esc_html_e( 'Networking Partners', 'mithra' ); ?></div>
    <a class="net-headline" href="#" title="Avion Network" aria-label="Avion Network">
      <img src="<?php echo esc_url(content_url('uploads/mithra/partner-avion-v3.png')); ?>" alt="Avion Network" loading="lazy">
    </a>
    <div class="net-partner-sub"><?php esc_html_e( 'In partnership with leading networking vendors', 'mithra' ); ?></div>
    <div class="net-marquee" aria-label="Networking vendor logos">
      <div class="net-track">
        <?php
        $mithra_net_logos = array(
          'partner-ruckus.png' => 'Ruckus Networks',
          'partner-dlink.png'  => 'D-Link',
          'partner-aruba.png'  => 'Aruba, a Hewlett Packard Enterprise company',
          'partner-hpe.png'    => 'Hewlett Packard Enterprise',
          'partner-cisco.png'  => 'Cisco',
        );
        for ( $mithra_rep = 0; $mithra_rep < 3; $mithra_rep++ ) {
          foreach ( $mithra_net_logos as $mithra_file => $mithra_name ) {
            echo '<div class="partner-tile"><img src="' . esc_url( content_url( 'uploads/mithra/' . $mithra_file ) ) . '" alt="' . esc_attr( $mithra_name ) . '" loading="lazy"></div>';
          }
        }
        ?>
      </div>
    </div>
  </div>
</div>

<!-- ENQUIRY FORM -->
<section class="section" id="partnership-form">
  <div class="container">
    <div class="partnership-form-shell">

      <div class="partnership-form-copy reveal">
        <span class="section-label"><?php esc_html_e( 'Enquiry Form', 'mithra' ); ?></span>
        <h2 class="section-h2"><?php esc_html_e( 'Let&rsquo;s explore ', 'mithra' ); ?><em><?php esc_html_e( 'a partnership', 'mithra' ); ?></em></h2>
        <p><?php esc_html_e( 'Tell us a little about your company and how you would like to work with us. Our partnerships team will respond within one business day.', 'mithra' ); ?></p>
        <ul class="partnership-checks">
          <li><?php esc_html_e( 'Enquiries go directly to sales@mithraconsulting.com', 'mithra' ); ?></li>
          <li><?php esc_html_e( 'One business-day response commitment', 'mithra' ); ?></li>
          <li><?php esc_html_e( 'NDA on request before sharing commercials', 'mithra' ); ?></li>
        </ul>
      </div>

      <form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" class="partnership-form reveal reveal-delay-1" novalidate>
        <input type="hidden" name="action" value="mithra_partnership">
        <?php wp_nonce_field( 'mithra_partnership', 'mithra_partnership_nonce' ); ?>

        <?php if ( $mithra_form_status === 'ok' ) : ?>
          <div class="form-alert form-alert-ok" role="status">
            <strong><?php esc_html_e( 'Thank you!', 'mithra' ); ?></strong>
            <?php esc_html_e( 'Your enquiry has been received. Our partnerships team will get back to you within one business day.', 'mithra' ); ?>
          </div>
        <?php elseif ( $mithra_form_status === 'error' ) : ?>
          <div class="form-alert form-alert-err" role="alert">
            <strong><?php esc_html_e( 'Please check the form:', 'mithra' ); ?></strong>
            <?php echo esc_html( $mithra_form_error ); ?>
          </div>
        <?php endif; ?>

        <div class="form-row">
          <div class="form-field">
            <label for="pf-company"><?php esc_html_e( 'Company Name', 'mithra' ); ?> <span class="req">*</span></label>
            <input type="text" id="pf-company" name="company" required value="<?php echo esc_attr( $mithra_form_data['company'] ); ?>" autocomplete="organization">
          </div>
          <div class="form-field">
            <label for="pf-name"><?php esc_html_e( 'Contact Name', 'mithra' ); ?> <span class="req">*</span></label>
            <input type="text" id="pf-name" name="name" required value="<?php echo esc_attr( $mithra_form_data['name'] ); ?>" autocomplete="name">
          </div>
        </div>

        <div class="form-row">
          <div class="form-field">
            <label for="pf-email"><?php esc_html_e( 'Work Email', 'mithra' ); ?> <span class="req">*</span></label>
            <input type="email" id="pf-email" name="email" required value="<?php echo esc_attr( $mithra_form_data['email'] ); ?>" autocomplete="email">
          </div>
          <div class="form-field">
            <label for="pf-phone"><?php esc_html_e( 'Phone', 'mithra' ); ?></label>
            <input type="tel" id="pf-phone" name="phone" value="<?php echo esc_attr( $mithra_form_data['phone'] ); ?>" autocomplete="tel">
          </div>
        </div>

        <div class="form-row">
          <div class="form-field">
            <label for="pf-type"><?php esc_html_e( 'Partnership Type', 'mithra' ); ?> <span class="req">*</span></label>
            <select id="pf-type" name="type" required>
              <option value=""><?php esc_html_e( 'Select&hellip;', 'mithra' ); ?></option>
              <?php $types = array( 'Referral Partner', 'Reseller Partner', 'Technology Alliance', 'Global / Regional Distributor', 'Other' );
              foreach ( $types as $t ) {
                  $sel = ( $mithra_form_data['type'] === $t ) ? ' selected' : '';
                  echo '<option value="' . esc_attr( $t ) . '"' . $sel . '>' . esc_html( $t ) . '</option>';
              } ?>
            </select>
          </div>
          <div class="form-field">
            <label for="pf-website"><?php esc_html_e( 'Company Website', 'mithra' ); ?></label>
            <input type="url" id="pf-website" name="website" value="<?php echo esc_attr( $mithra_form_data['website'] ); ?>" placeholder="https://" autocomplete="url">
          </div>
        </div>

        <div class="form-field form-field-full">
          <label for="pf-message"><?php esc_html_e( 'Tell us more', 'mithra' ); ?></label>
          <textarea id="pf-message" name="message" rows="5" placeholder="<?php esc_attr_e( 'Share your goals, current customer base, geographies, and anything else we should know...', 'mithra' ); ?>"><?php echo esc_textarea( $mithra_form_data['message'] ); ?></textarea>
        </div>

        <!-- Honeypot -->
        <div style="position:absolute;left:-9999px" aria-hidden="true">
          <label>Do not fill this in <input type="text" name="hp_field" tabindex="-1" autocomplete="off"></label>
        </div>

        <button type="submit" class="btn btn-primary">
          <?php esc_html_e( 'Submit Partnership Enquiry', 'mithra' ); ?> &rarr;
        </button>
        <p class="form-privacy"><?php esc_html_e( 'By submitting, you agree to Mithra Consulting contacting you about partnership opportunities. We will never share your details.', 'mithra' ); ?></p>
      </form>

    </div>
  </div>
</section>

</main>
<?php get_footer(); ?>
<?php
require_once 'app/layouts/page.php';

return function () {
  pageLayout(
    title: "Terms of Service",
    heading: "Terms of Service",
    description: "Terms of service for BTEK's personal tools that connect to Google accounts.",
    renderChildren: function () {
?>
    <section class="diagonal">
      <div class="container">
        <p><em>Last updated: November 8, 2026</em></p>

        <p>These terms cover BTEK's personal assistant tools (the "App"), a private set of tools that Brian Dombrowski
          runs for his own household.</p>

        <h3>Use</h3>
        <p>The App is for personal, non-commercial use by people Brian has invited. You may use it only with accounts and
          data you are allowed to access. Don't use it to break the law or anyone else's terms, including
          <a href="https://policies.google.com/terms">Google's Terms of Service</a>.</p>

        <h3>Your data</h3>
        <p>You keep all rights to your data. How the App handles it is described in the
          <a href="/privacy">Privacy Policy</a>. You can revoke the App's access to your Google account at any time at
          <a href="https://myaccount.google.com/permissions">myaccount.google.com/permissions</a>.</p>

        <h3>No warranty</h3>
        <p>The App is provided "as is", without warranties of any kind. It may change, break or stop at any time.</p>

        <h3>Limitation of liability</h3>
        <p>To the extent the law allows, BTEK and Brian Dombrowski are not liable for any damages or data loss arising
          from use of the App.</p>

        <h3>Changes</h3>
        <p>Changes to these terms are posted on this page with a new "Last updated" date. Continuing to use the App means
          you accept them.</p>

        <h3>Contact</h3>
        <p>Questions? Use the <a href="/contact">contact page</a>.</p>
      </div>
    </section>
<?php
    }
  );
};

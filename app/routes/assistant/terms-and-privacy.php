<?php
require_once 'app/layouts/page.php';

return function () {
  pageLayout(
    title: "Assistant Terms & Privacy",
    heading: "Assistant Terms & Privacy",
    description: "Privacy policy and terms of service for BTEK's personal assistant tools that connect to Google accounts.",
    renderChildren: function () {
?>
    <section class="diagonal">
      <div class="container">
        <p><em>Last updated: November 8, 2026</em></p>

        <p>This page covers BTEK's personal assistant tools (the "App"), a private set of tools that Brian Dombrowski
          runs for his own household. The App is not offered to the public.</p>

        <ul>
          <li><a href="#privacy">Privacy Policy</a></li>
          <li><a href="#terms">Terms of Service</a></li>
        </ul>

        <h2 id="privacy">Privacy Policy</h2>

        <h3>Google user data the App accesses</h3>
        <p>When you sign in with Google and grant access, the App can read and, where you allow it, change data in these
          Google services: Gmail, Google Calendar, Google Contacts, Google Tasks, Google Drive, Google Docs, Google Sheets
          and Google Slides, plus your basic profile (name and email address).</p>

        <h3>How the data is used</h3>
        <ul>
          <li>To search and summarize your own email, calendar, contacts, tasks and files when you ask.</li>
          <li>To keep a private personal log, create reminders and calendar suggestions, and back up that log to your own
            Google Drive.</li>
          <li>To make changes in your Google account only when you or your own scheduled jobs request them.</li>
        </ul>

        <h3>Storage and sharing</h3>
        <ul>
          <li>Data is processed and stored on computers you control. OAuth tokens are stored encrypted on those
            computers.</li>
          <li>Text may be sent to an AI model provider to summarize or classify it, only to provide the App's features.
          </li>
          <li>Google user data is never sold, never used for advertising, and never shared with anyone else except as
            required by law.</li>
          <li>No human reads your data except you, unless you ask for help with a specific issue.</li>
        </ul>

        <h3>Google API Services User Data Policy</h3>
        <p>The App's use and transfer of information received from Google APIs adheres to the
          <a href="https://developers.google.com/terms/api-services-user-data-policy">Google API Services User Data
            Policy</a>, including the Limited Use requirements.</p>

        <h3>Retention and deletion</h3>
        <p>You can revoke the App's access at any time at
          <a href="https://myaccount.google.com/permissions">myaccount.google.com/permissions</a>. Data the App stored
          locally is kept until you delete it from your own computers.</p>

        <h2 id="terms">Terms of Service</h2>

        <h3>Use</h3>
        <p>The App is for personal, non-commercial use by people Brian has invited. You may use it only with accounts and
          data you are allowed to access. Don't use it to break the law or anyone else's terms, including
          <a href="https://policies.google.com/terms">Google's Terms of Service</a>.</p>

        <h3>Your data</h3>
        <p>You keep all rights to your data. How the App handles it is described in the
          <a href="#privacy">Privacy Policy</a> above.</p>

        <h3>No warranty</h3>
        <p>The App is provided "as is", without warranties of any kind. It may change, break or stop at any time.</p>

        <h3>Limitation of liability</h3>
        <p>To the extent the law allows, BTEK and Brian Dombrowski are not liable for any damages or data loss arising
          from use of the App.</p>

        <h2>Changes and contact</h2>
        <p>Changes are posted on this page with a new "Last updated" date. Continuing to use the App means you accept
          them. Questions? Use the <a href="/contact">contact page</a>.</p>
      </div>
    </section>
<?php
    }
  );
};

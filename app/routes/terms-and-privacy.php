<?php
require_once 'app/layouts/page.php';

return function () {
  pageLayout(
    title: "Terms & Privacy",
    heading: "Terms & Privacy",
    description: "Terms of service and privacy statements for BTEK apps.",
    renderChildren: function () {
?>
    <section class="diagonal">
      <div class="container">
        <h3>Available Terms &amp; Privacy Statements</h3>
        <ul>
          <li><a href="/assistant">BTEK Assistant</a> (<a href="/assistant/terms-and-privacy">terms &amp; privacy</a>): BTEK's personal assistant tools that connect to
            Google accounts</li>
        </ul>
      </div>
    </section>
<?php
    }
  );
};

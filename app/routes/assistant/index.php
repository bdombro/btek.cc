<?php
require_once 'app/layouts/page.php';

return function () {
  pageLayout(
    title: "BTEK Assistant",
    heading: "BTEK Assistant",
    subtitle: "A private personal assistant for one household",
    description: "BTEK Assistant is a private set of tools that helps Brian Dombrowski's household search, summarize and organize their own Google data.",
    renderChildren: function () {
?>
    <section class="diagonal">
      <div class="container">
        <h3>What it is</h3>
        <p>BTEK Assistant is a private set of tools that Brian Dombrowski runs for his own household. It lets an AI
          assistant answer questions about the family's own email, calendar, contacts, tasks and documents, and keeps a
          private family log up to date. It is not offered to the public, and only invited household members can sign
          in.</p>

        <h3>What it does</h3>
        <ul>
          <li><strong>Answers questions</strong> like "who did the electrical work on the house in 2022?" by searching
            the family's own Gmail, Calendar, Contacts and Drive.</li>
          <li><strong>Keeps a family log</strong>: twice a day it reads new email and calendar events and records the
            important ones in a private log.</li>
          <li><strong>Tracks deadlines</strong> by adding reminders to a Google Tasks list and suggested events to a
            private Google Calendar.</li>
          <li><strong>Organizes documents</strong>: reads and edits the household's Google Docs, Sheets and Slides, and
            saves files and log backups to their Google Drive.</li>
        </ul>

        <h3>Why it uses Google data</h3>
        <p>The App signs in with Google so it can read and update the signed-in user's own Gmail, Calendar, Contacts,
          Tasks, Drive, Docs, Sheets and Slides. It only uses that data to provide the features above, for that same
          user. Data is stored on computers the household controls, and it is never sold, used for advertising or shared
          with others. See the <a href="/assistant/terms-and-privacy#privacy">Privacy Policy</a> for details.</p>

        <h3>Policies</h3>
        <ul>
          <li><a href="/assistant/terms-and-privacy#privacy">Privacy Policy</a></li>
          <li><a href="/assistant/terms-and-privacy#terms">Terms of Service</a></li>
        </ul>

        <h3>Contact</h3>
        <p>Questions? Use the <a href="/contact">contact page</a>.</p>
      </div>
    </section>
<?php
    }
  );
};

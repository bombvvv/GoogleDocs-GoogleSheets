<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BDM & Co.</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/15181efa86.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/register.css">
  </head>

  <body>
    <section class="container">
      <div class="columns is-multiline">
        <div class="column is-8 is-offset-2 register">
          <div class="columns">
            <div class="column left">
              <h1 class="title is-4">Upload your Google Docs</h1>
              <button class="button is-block is-primary is-fullwidth is-medium" style="background-color: #2684fc">Upload</button>
            </div>
            <div class="column right has-text-centered">
              <h1 class="title is-4">Upload your Google Sheets</h1>
                <button class="button is-block is-primary is-fullwidth is-medium" style="background-color: #21a464">Upload</button>
            </div>
          </div>
        </div>
        <div class="column is-8 is-offset-2">
          <br>
          <nav class="level">
            <div class="level-left">
              <div class="level-item">
                <span class="icon">
                  <a href="https://github.com/Edoardo11/GoogleDocs-GoogleSheets" target="_blank">
                    <i class="fab fa-github"></i>
                  </a>
                </span> &emsp;
              </div>
            </div>
            <div class="level-right">
              <small class="level-item" style="color: var(--textLight)">
                &copy; BDM & Co.
              </small>
            </div>
          </nav>
        </div>
      </div>
    </section>
  </body>
  <style>
    :root {
      --brandColor: black; 
      --background: rgb(247, 247, 247);
      --textDark: hsla(0, 0%, 0%, 0.66);
      --textLight: hsla(0, 0%, 0%, 0.33);
    }

    a:link {
      color: black;
      background-color: transparent;
      text-decoration: none;
    }
    a:visited {
      color: black;
      background-color: transparent;
      text-decoration: none;
    }
    a:hover {
      color: black;
      background-color: transparent;
      text-decoration: underline;
    }
    a:active {
      color: black;
      background-color: transparent;
      text-decoration: underline;
    }

    body {
      background: var(--background);
      height: 100vh;
      color: var(--textDark);
    }

    .button.is-primary.is-focused:not(:active), .button.is-primary:focus:not(:active) {
        box-shadow: 0 0 0 0.125em rgb(0 0 0 / 20%);
    }

    .field:not(:last-child) {
      margin-bottom: 1rem;
    }

    .register {
      margin-top: 10rem;
      background: white;
      border-radius: 10px;
    }

    .left,
    .right {
      padding: 4.5rem;
    }

    .left {
      border-right: 5px solid var(--background);
    }

    .left .title {
      font-weight: 800;
      letter-spacing: -2px;
    }

    .left .colored {
      color: var(--brandColor);
      font-weight: 500;
      margin-top: 1rem !important;
      letter-spacing: -1px;
    }

    .left p {
      color: var(--textLight);
      font-size: 1.15rem;
    }

    .right .title {
      font-weight: 800;
      letter-spacing: -1px;
    }

    .right .description {
      margin-top: 1rem;
      margin-bottom: 1rem !important;
      color: var(--textLight);
      font-size: 1.15rem;
    }

    .right small {
      color: var(--textLight);
    }

    input {
      font-size: 1rem;
    }

    input:focus {
      border-color: var(--brandColor) !important;
      box-shadow: 0 0 0 1px var(--brandColor) !important;
    }

    .fab,
    .fas {
      color: var(--textLight);
      margin-right: 1rem;
    }

  </style>

</html>
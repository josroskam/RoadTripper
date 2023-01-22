<?php
    define('PROJECT_ROOT_PATH', __DIR__);
    include_once (PROJECT_ROOT_PATH . '/../header/index.php');
    // include '../../app/assets/img';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/mystyle.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Feed</title>
  <link href="../feed/css/mystyle.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
  <style>
    <?php include '../../app/css/mystyle.css';
    ?>
  </style>
</head>

<body>
  <main class="container">
    <!-- <div class="p-4 p-md-5 mb-4 rounded text-bg-dark"> -->
    <div class="p-4 p-md-5 mb-4 rounded hero">
      <div class="col-md-6 px-0">
        <!-- <img src="./../../../app/assets/img/lipton-redbull-actie-bever-roadtrip-THUMB.jpg" alt="" width="100px" height="200px"> -->
        <h1 class="display-4 fst-italic">Pack your backs with Your Roadtrip!</h1>
        <p class="lead my-3">Create and share your own routes with others! Take your experience from roadtripping to a
          higher level with destinations from all over the world.</p>
        <!-- <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p> -->
      </div>
    </div>

    <div class="row mb-2">
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">Popular route</strong>
            <h3 class="mb-0">Travel to Dedinky, Slovakia</h3>
            <div class="mb-1 text-muted">Nov 12</div>
            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to
              additional content.</p>
            <!-- <a href="#" class="stretched-link">Continue reading</a> -->
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">Popular route</strong>
            <h3 class="mb-0">Trip through Scandinavia!</h3>
            <div class="mb-1 text-muted">Nov 11</div>
            <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional
              content.</p>
            <!-- <a href="#" class="stretched-link">Continue reading</a> -->
          </div>
        </div>
      </div>
    </div>

    <div class="row g-5">
      <div class="col-md-8">
        <h3 class="pb-4 mb-4 fst-italic border-bottom">
          Last added routes
        </h3>

        <article class="blog-post">
          <h2 class="blog-post-title mb-1">Sample blog post</h2>
          <p class="blog-post-meta">January 1, 2021 by <a href="#">Mark</a></p>

          <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic
            typography, lists, tables, images, code, and more are all supported as expected.</p>
          <hr>
          <p>This is some additional paragraph placeholder content. It has been written to fill the available space and
            show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the
            demonstration flowing, so be on the lookout for this exact same string of text.</p>
          <h2>Blockquotes</h2>
          <p>This is an example blockquote in action:</p>
          <blockquote class="blockquote">
            <p>Quoted text goes here.</p>
          </blockquote>
          <p>This is some additional paragraph placeholder content. It has been written to fill the available space and
            show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the
            demonstration flowing, so be on the lookout for this exact same string of text.</p>
          <h3>Example lists</h3>
          <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly
            repetitive body text used throughout. This is an example unordered list:</p>
          <ul>
            <li>First list item</li>
            <li>Second list item with a longer description</li>
            <li>Third list item to close it out</li>
          </ul>
          <p>And this is an ordered list:</p>
          <ol>
            <li>First list item</li>
            <li>Second list item with a longer description</li>
            <li>Third list item to close it out</li>
          </ol>
          <p>And this is a definition list:</p>
          <dl>
            <dt>HyperText Markup Language (HTML)</dt>
            <dd>The language used to describe and define the content of a Web page</dd>
            <dt>Cascading Style Sheets (CSS)</dt>
            <dd>Used to describe the appearance of Web content</dd>
            <dt>JavaScript (JS)</dt>
            <dd>The programming language used to build advanced Web sites and applications</dd>
          </dl>
          <h2>Inline HTML elements</h2>
          <p>HTML defines a long list of available inline tags, a complete list of which can be found on the <a
              href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element">Mozilla Developer Network</a>.</p>
          <ul>
            <li><strong>To bold text</strong>, use <code
                class="language-plaintext highlighter-rouge">&lt;strong&gt;</code>.</li>
            <li><em>To italicize text</em>, use <code class="language-plaintext highlighter-rouge">&lt;em&gt;</code>.
            </li>
            <li>Abbreviations, like <abbr title="HyperText Markup Language">HTML</abbr> should use <code
                class="language-plaintext highlighter-rouge">&lt;abbr&gt;</code>, with an optional <code
                class="language-plaintext highlighter-rouge">title</code> attribute for the full phrase.</li>
            <li>Citations, like <cite>— Mark Otto</cite>, should use <code
                class="language-plaintext highlighter-rouge">&lt;cite&gt;</code>.</li>
            <li><del>Deleted</del> text should use <code class="language-plaintext highlighter-rouge">&lt;del&gt;</code>
              and <ins>inserted</ins> text should use <code
                class="language-plaintext highlighter-rouge">&lt;ins&gt;</code>.</li>
            <li>Superscript <sup>text</sup> uses <code class="language-plaintext highlighter-rouge">&lt;sup&gt;</code>
              and subscript <sub>text</sub> uses <code class="language-plaintext highlighter-rouge">&lt;sub&gt;</code>.
            </li>
          </ul>
          <p>Most of these elements are styled by browsers with few modifications on our part.</p>
          <h2>Heading</h2>
          <p>This is some additional paragraph placeholder content. It has been written to fill the available space and
            show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the
            demonstration flowing, so be on the lookout for this exact same string of text.</p>
          <h3>Sub-heading</h3>
          <p>This is some additional paragraph placeholder content. It has been written to fill the available space and
            show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the
            demonstration flowing, so be on the lookout for this exact same string of text.</p>
          <pre><code>Example code block</code></pre>
          <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly
            repetitive body text used throughout.</p>
        </article>

        <article class="blog-post">
          <h2 class="blog-post-title mb-1">Another blog post</h2>
          <p class="blog-post-meta">December 23, 2020 by <a href="#">Jacob</a></p>

          <p>This is some additional paragraph placeholder content. It has been written to fill the available space and
            show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the
            demonstration flowing, so be on the lookout for this exact same string of text.</p>
          <blockquote>
            <p>Longer quote goes here, maybe with some <strong>emphasized text</strong> in the middle of it.</p>
          </blockquote>
          <p>This is some additional paragraph placeholder content. It has been written to fill the available space and
            show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the
            demonstration flowing, so be on the lookout for this exact same string of text.</p>
          <h3>Example table</h3>
          <p>And don't forget about tables in these posts:</p>
          <table class="table">
            <thead>
              <tr>
                <th>Name</th>
                <th>Upvotes</th>
                <th>Downvotes</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Alice</td>
                <td>10</td>
                <td>11</td>
              </tr>
              <tr>
                <td>Bob</td>
                <td>4</td>
                <td>3</td>
              </tr>
              <tr>
                <td>Charlie</td>
                <td>7</td>
                <td>9</td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <td>Totals</td>
                <td>21</td>
                <td>23</td>
              </tr>
            </tfoot>
          </table>

          <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly
            repetitive body text used throughout.</p>
        </article>

        <article class="blog-post">
          <h2 class="blog-post-title mb-1">New feature</h2>
          <p class="blog-post-meta">December 14, 2020 by <a href="#">Chris</a></p>

          <p>This is some additional paragraph placeholder content. It has been written to fill the available space and
            show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the
            demonstration flowing, so be on the lookout for this exact same string of text.</p>
          <ul>
            <li>First list item</li>
            <li>Second list item with a longer description</li>
            <li>Third list item to close it out</li>
          </ul>
          <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly
            repetitive body text used throughout.</p>
        </article>

        <nav class="blog-pagination" aria-label="Pagination">
          <a class="btn btn-outline-primary rounded-pill" href="#">Older</a>
          <a class="btn btn-outline-secondary rounded-pill disabled">Newer</a>
        </nav>

      </div>

      <div class="col-md-4">
        <div class="position-sticky" style="top: 2rem;">
          <div class="p-4 mb-3 rounded">
            <h4 class="fst-italic">Add a route</h4>
            <p class="mb-0">www.yourroadtrip.net will expand and will let you experience the best routes provided by
              train! Coming up on the end of June 2023.</p><br>
            <?php
          if(isset($_SESSION["firstname"])){
            ?>
            <a href="/newroute">Check it out <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z" />
              </svg></a>
            <?php
          } 
          else
          {
            ?>
            <a href="/login">You must login first to add a new route <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z" />
              </svg></a>
            <?php
          }
        ?>

          </div>

          <div class="p-4 mb-3 rounded">
            <h4 class="fst-italic">Incoming new features</h4>
            <p class="mb-0">Personalise your own route, and share it with others!</p>
          </div>

          <div class="p-4">
            <h4 class="fst-italic">Archives</h4>
            <ol class="list-unstyled mb-0">
              <li><a href="#">March 2021</a></li>
              <li><a href="#">February 2021</a></li>
              <li><a href="#">January 2021</a></li>
              <li><a href="#">December 2020</a></li>
              <li><a href="#">November 2020</a></li>
              <li><a href="#">October 2020</a></li>
              <li><a href="#">September 2020</a></li>
              <li><a href="#">August 2020</a></li>
              <li><a href="#">July 2020</a></li>
              <li><a href="#">June 2020</a></li>
              <li><a href="#">May 2020</a></li>
              <li><a href="#">April 2020</a></li>
            </ol>
          </div>

          <div class="p-4">
            <h4 class="fst-italic">Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div>
      </div>
    </div>

  </main>
  <footer>
    <?php
      // define('PROJECT_ROOT_PATH', __DIR__);
      include_once (PROJECT_ROOT_PATH . '/../footer/index.php');
    ?>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
  </script>
</body>

</html>
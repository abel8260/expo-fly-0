<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Iceland projects </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/cheatsheet/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- Bootstrap core CSS -->
<link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">

<link rel="icon" href="../drawing.svg" sizes="any" type="image/svg+xml">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      body {
  scroll-behavior: smooth;
}

/**
 * Bootstrap "Journal code" icon
 * @link https://icons.getbootstrap.com/icons/journal-code/
 */
.bd-heading a::before {
  display: inline-block;
  width: 1em;
  height: 1em;
  margin-right: .25rem;
  content: "";
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%25230d6efd' viewBox='0 0 16 16'%3E%3Cpath d='M4 1h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1H2a2 2 0 0 1 2-2z'/%3E%3Cpath d='M2 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H2zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H2zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H2z'/%3E%3Cpath fill-rule='evenodd' d='M8.646 5.646a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 8 8.646 6.354a.5.5 0 0 1 0-.708zm-1.292 0a.5.5 0 0 0-.708 0l-2 2a.5.5 0 0 0 0 .708l2 2a.5.5 0 0 0 .708-.708L5.707 8l1.647-1.646a.5.5 0 0 0 0-.708z'/%3E%3C/svg%3E");
  background-size: 1em;
}

/* stylelint-disable-next-line selector-max-universal */
.bd-heading + div > * + * {
  margin-top: 3rem;
}

/* Table of contents */
.bd-aside a {
  padding: .1875rem .5rem;
  margin-top: .125rem;
  margin-left: .3125rem;
  color: rgba(0, 0, 0, .65);
  text-decoration: none;
}

.bd-aside a:hover,
.bd-aside a:focus {
  color: rgba(0, 0, 0, .85);
  background-color: rgba(121, 82, 179, .1);
}

.bd-aside .active {
  font-weight: 600;
  color: rgba(0, 0, 0, .85);
}

.bd-aside .btn {
  padding: .25rem .5rem;
  font-weight: 600;
  color: rgba(0, 0, 0, .65);
  border: 0;
}

.bd-aside .btn:hover,
.bd-aside .btn:focus {
  color: rgba(0, 0, 0, .85);
  background-color: rgba(121, 82, 179, .1);
}

.bd-aside .btn:focus {
  box-shadow: 0 0 0 1px rgba(121, 82, 179, .7);
}

.bd-aside .btn::before {
  width: 1.25em;
  line-height: 0;
  content: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='rgba%280,0,0,.5%29' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M5 14l6-6-6-6'/%3e%3c/svg%3e");
  transition: transform .35s ease;

  /* rtl:raw:
  transform: rotate(180deg) translateX(-2px);
  */
  transform-origin: .5em 50%;
}

.bd-aside .btn[aria-expanded="true"]::before {
  transform: rotate(90deg)/* rtl:ignore */;
}


/* Examples */
.scrollspy-example {
  position: relative;
  height: 200px;
  margin-top: .5rem;
  overflow: auto;
}

[id="modal"] .bd-example .btn,
[id="buttons"] .bd-example .btn,
[id="tooltips"] .bd-example .btn,
[id="popovers"] .bd-example .btn,
[id="dropdowns"] .bd-example .btn-group,
[id="dropdowns"] .bd-example .dropdown,
[id="dropdowns"] .bd-example .dropup,
[id="dropdowns"] .bd-example .dropend,
[id="dropdowns"] .bd-example .dropstart {
  margin: 0 1rem 1rem 0;
}

/* Layout */
@media (min-width: 1200px) {
  body {
    display: grid;
    gap: 1rem;
    grid-template-columns: 1fr 4fr 1fr;
    grid-template-rows: auto;
  }

  .bd-header {
    position: fixed;
    top: 0;
    /* rtl:begin:ignore */
    right: 0;
    left: 0;
    /* rtl:end:ignore */
    z-index: 1030;
    grid-column: 1 / span 3;
  }

  .bd-aside,
  .bd-cheatsheet {
    padding-top: 4rem;
  }

  /**
   * 1. Too bad only Firefox supports subgrids ATM
   */
  .bd-cheatsheet,
  .bd-cheatsheet section,
  .bd-cheatsheet article {
    display: inherit; /* 1 */
    gap: inherit; /* 1 */
    grid-template-columns: 1fr 4fr;
    grid-column: 1 / span 2;
    grid-template-rows: auto;
  }

  .bd-aside {
    grid-area: 1 / 3;
    scroll-margin-top: 4rem;
  }

  .bd-cheatsheet section,
  .bd-cheatsheet section > h2 {
    top: 2rem;
    scroll-margin-top: 2rem;
  }

  .bd-cheatsheet section > h2::before {
    position: absolute;
    /* rtl:begin:ignore */
    top: 0;
    right: 0;
    bottom: -2rem;
    left: 0;
    /* rtl:end:ignore */
    z-index: -1;
    content: "";
    background-image: linear-gradient(to bottom, rgba(255, 255, 255, 1) calc(100% - 3rem), rgba(255, 255, 255, .01));
  }

  .bd-cheatsheet article,
  .bd-cheatsheet .bd-heading {
    top: 8rem;
    scroll-margin-top: 8rem;
  }

  .bd-cheatsheet .bd-heading {
    z-index: 1;
  }
}
    </style>

    
    <!-- Custom styles for this template -->
    <link href="cheatsheet.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<header class="bd-header bg-dark py-3 d-flex align-items-stretch border-bottom border-dark">
  <div class="container-fluid d-flex align-items-center">
    <h1 class="d-flex align-items-center fs-4 text-white mb-0">
       Server:
    </h1>
    <a href="/docs/5.1/examples/cheatsheet-rtl/" class="ms-auto link-light" hreflang="ar">Iceland</a>
  </div>
</header>
<aside class="bd-aside sticky-xl-top text-muted align-self-start mb-3 mb-xl-5 px-2">
  <h2 class="h6 pt-4 pb-3 mb-4 border-bottom">On this site</h2>
  <nav class="small" id="toc">
    <ul class="list-unstyled">
      <li class="my-2">
        <button class="btn d-inline-flex align-items-center collapsed" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#contents-collapse" aria-controls="contents-collapse">Servers:</button>
        <ul class="list-unstyled ps-3 collapse" id="contents-collapse">
          <li><a class="d-inline-flex align-items-center rounded" href="#typography">Iceland </a></li>
 
        </ul>
      </li>
      <li class="my-2">
        <button class="btn d-inline-flex align-items-center collapsed" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#forms-collapse" aria-controls="forms-collapse">Pieces</button>
        <ul class="list-unstyled ps-3 collapse" id="forms-collapse">
          <li><a class="d-inline-flex align-items-center rounded" href="#overview">treebox</a></li>

        </ul>
      </li>
    
    </ul>
  </nav>
</aside>
<div class="bd-cheatsheet container-fluid bg-body">
  <section id="content">
     
    <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>Treebox</h3>
        <a class="d-flex align-items-center" href="/docs/5.1/content/typography/">Documentation</a>
        <a class="d-flex align-items-center" href="/docs/5.1/content/typography/">gundam 1 </a>
        <a class="d-flex align-items-center" href="/docs/5.1/content/typography/">gundam 2 </a>
        <a class="d-flex align-items-center" href="/docs/5.1/content/typography/">gundam 3 </a>
      </div>
      <h2 class="sticky-xl-top fw-bold pt-3 pt-xl-5 pb-2 pb-xl-3">Contents</h2>

<article class="my-3" id="typography">
 
      
      
        <div class="bd-example">
        
        </div>

        <div class="bd-example">
        <p class="display-6">Display 6</p>
        <p class="h6">Heading 6</p>
        </div>

        <div class="bd-example">
        <p class="lead">
       
        </p>
        </div>

        <div class="bd-example">
        <p>You can use the mark tag to <mark>highlight</mark> text.</p>
        <p><del>This line of text is meant to be treated as deleted text.</del></p>
        <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
        <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
        <p><u>This line of text will render as underlined.</u></p>
        <p><small>This line of text is meant to be treated as fine print.</small></p>
        <p><strong>This line rendered as bold text.</strong></p>
        <p><em>This line rendered as italicized text.</em></p>
        </div>

        <div class="bd-example">
       
        </div>

        <div class="bd-example">
        <ul class="list-unstyled">
          <li>This is a list.</li>
          <li>It appears completely unstyled.</li>
          <li>Structurally, it's still a list.</li>
          <li>However, this style only applies to immediate child elements.</li>
          <li>Nested lists:
            <ul>
              <li>are unaffected by this style</li>
              <li>will still show a bullet</li>
              <li>and have appropriate left margin</li>
            </ul>
          </li>
          <li>This may still come in handy in some situations.</li>
        </ul>
        </div>

        <div class="bd-example">
       
        </div>
      </div>
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>Images</h3>
        <a class="d-flex align-items-center" href="/docs/5.1/content/images/">Documentation</a>
      </div>

      <div>
        <div class="bd-example">
        <svg class="bd-placeholder-img bd-placeholder-img-lg img-fluid" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Responsive image" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Responsive image</text></svg>

        </div>

        <div class="bd-example">
        <svg class="bd-placeholder-img img-thumbnail" width="200" height="200" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera: 200x200" preserveAspectRatio="xMidYMid slice" focusable="false"><title>A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">200x200</text></svg>

        </div>
      </div>
    </article>
   
    </div>
  </div>
</div>


    <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <script>/* global bootstrap: false */

(function () {
  'use strict'

  // Tooltip and popover demos
  document.querySelectorAll('.tooltip-demo')
    .forEach(function (tooltip) {
      new bootstrap.Tooltip(tooltip, {
        selector: '[data-bs-toggle="tooltip"]'
      })
    })

  document.querySelectorAll('[data-bs-toggle="popover"]')
    .forEach(function (popover) {
      new bootstrap.Popover(popover)
    })

  document.querySelectorAll('.toast')
    .forEach(function (toastNode) {
      var toast = new bootstrap.Toast(toastNode, {
        autohide: false
      })

      toast.show()
    })

  // Disable empty links and submit buttons
  document.querySelectorAll('[href="#"], [type="submit"]')
    .forEach(function (link) {
      link.addEventListener('click', function (event) {
        event.preventDefault()
      })
    })

  function setActiveItem() {
    var hash = window.location.hash

    if (hash === '') {
      return
    }

    var link = document.querySelector('.bd-aside a[href="' + hash + '"]')

    if (!link) {
      return
    }

    var active = document.querySelector('.bd-aside .active')
    var parent = link.parentNode.parentNode.previousElementSibling

    link.classList.add('active')

    if (parent.classList.contains('collapsed')) {
      parent.click()
    }

    if (!active) {
      return
    }

    var expanded = active.parentNode.parentNode.previousElementSibling

    active.classList.remove('active')

    if (expanded && parent !== expanded) {
      expanded.click()
    }
  }

  setActiveItem()
  window.addEventListener('hashchange', setActiveItem)
})()</script>
  </body>
</html>

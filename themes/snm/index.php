<?php get_header(); ?>
  <div class="main">
    <div class="board">
      <header class="board-header">
        <?php the_title('<h1 class="pinned">','</h1>'); ?>
      </header>
      <article class="main-content pinned">
        <h1>Article Header</h1>
        <p>Article content</p>
      </article>
    </div>
  </div>
<?php get_footer(); ?>

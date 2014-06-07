<div class="sidebarWrap">
  
  <aside class="searchForm">
    <div class="searchField">
      <form action="<?php bloginfo('url'); ?>/search-results/" method="get">
        <fieldset>
          <label class="screen-reader-text">Search</label>
          <input class="searchInput" name="q" type="search" placeholder="Search...">
          <input class="searchImage" name="submit" type="image" src="<?php bloginfo('template_url'); ?>/inc/search.svg">
        </fieldset>
      </form>
    </div>
  </aside>

  <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('sidebar')) : endif; ?>

</div><?php //Sidebar Wrap ?>
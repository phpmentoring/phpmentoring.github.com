<% if FragmentMenu.Count %>
<nav id="main-nav" class="inner clearfix">
  <ul>
    <% loop FragmentMenu %>
      <li><a href="#$Fragment">$Title</a></li>
    <% end_loop %>
  </ul>
</nav>
<% end_if %>
<div class="inner clearfix">
  <section id="main-content">
    $Content
    $Form
  </section>
  <% include Sidebar %>
</div>

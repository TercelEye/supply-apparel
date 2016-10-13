<div class="list-group">
  <a href="{{url('admin/category')}}" class="list-group-item {{ (Request::is('admin/category')?"active":"") }}">
    Category
  </a>
  <a href="{{url('admin/colour')}}" class="list-group-item {{ (Request::is('admin/colour')?"active":"") }}">Colour</a>
  <a href="{{url('admin/featured-product')}}" class="list-group-item {{ (Request::is('admin/featured-product')?"active":"") }}">Featured Product</a>
  <a href="{{url('admin/featured-shop')}}" class="list-group-item {{ (Request::is('admin/featured-shop')?"active":"") }}">Featured Boutiques</a>
 
</div>
<div class="list-group">
  <a href="{{url('admin/category')}}" class="list-group-item {{ (Request::is('admin/category')?"active":"") }}">
    Category
  </a>
  <a href="{{url('admin/colour')}}" class="list-group-item {{ (Request::is('admin/colour')?"active":"") }}">Colour</a>
  <a href="#" class="list-group-item">Morbi leo risus</a>
  <a href="#" class="list-group-item">Porta ac consectetur ac</a>
  <a href="#" class="list-group-item">Vestibulum at eros</a>
</div>
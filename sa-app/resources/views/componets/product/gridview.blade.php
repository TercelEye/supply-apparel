<?php 
    $column_item_classes = "col-md-3 col-sm-4 col-xs-6";
    if(isset($item_type)){
        switch ($item_type) {
            case 'filter':{ $column_item_classes = "col-md-4 col-sm-6 col-xs-12"; }
            break;
            
            default:{ $column_item_classes = "col-md-3 col-sm-4 col-xs-6"; }
            break;
        }
        
    }
?>
<div class="row">
<div class="col-md-12">
    @include('componets.product.items')
</div><!-- end col md -->
</div><!-- end row -->

@if(isset($is_pagination))
    <div class="row">
    <div class="col-md-12">
        {{$products->appends($_REQUEST)->links()}}   
        </div>                    
    </div>
@endif

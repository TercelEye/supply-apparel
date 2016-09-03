    <!-- gallery hear -->
    <div id="products_gallery" class="eagle-gallery img300">
        <div class="owl-carousel">
             
            @foreach($images as $image)        
                <img src="{{ url($image->name) }}" data-medium-img="{{ url($image->name) }}" 
                data-big-img="{{ url($image->name) }}" data-title="" alt="">
            @endforeach

        </div>
    </div>
    <!-- gallery hear End -->
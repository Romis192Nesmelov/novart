<div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
    <div class="colorlib-icon"><i class="{{ $icon }}"></i></div>
    <div class="colorlib-text">
        <p><a href="{{ $isTel ? 'tel:'.( str_replace(['(',')','-',' '],'',$contact) ) : 'mailto:'.$contact }}">{{ $contact }}</a></p>
    </div>
</div>

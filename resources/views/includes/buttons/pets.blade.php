@aware(['displayStyle'])
<div style="display: inline-block; width: 33%; text-align: center;">
    <h3>Pets Table</h3>
    <div style="width:45%; display:inline-block; text-align:center;margin-top:10px;margin-bottom:10px;">
        
        @if($displayStyle == 'popover')
        <h3><strong>Pop-Over Style Filters</strong></h3>
        @else
        <h3>Pop-Over Style Filters</h3>
        @endif
        <div style="text-align:center;margin-top:10px;margin-bottom:10px;">
            <a href="{{ route('pets.tw3') }}">Tailwind 3</a> |
            <a href="{{ route('pets.tw') }}">Tailwind 2</a> |
            <a href="{{ route('pets.bs4') }}">Bootstrap 4</a> |
            <a href="{{ route('pets.bs5') }}">Bootstrap 5</a>

        </div>
    </div>
    <div style="width:45%; display:inline-block; text-align:center;margin-top:10px;margin-bottom:10px;">
        @if($displayStyle == 'slide-down')
        <h3><strong>Slide-Down Style Filters</strong></h3>
        @else
        <h3>Slide-Down Style Filters</h3>
        @endif
        <div style="text-align:center;margin-top:10px;margin-bottom:10px;">
            <a href="{{ route('pets.tw3-slidedown') }}">Tailwind 3</a> |
            <a href="{{ route('pets.tw-slidedown') }}">Tailwind 2</a> |
            <a href="{{ route('pets.bs4-slidedown') }}">Bootstrap 4</a> |
            <a href="{{ route('pets.bs5-slidedown') }}">Bootstrap 5</a> 
        </div>
    </div>
</div>

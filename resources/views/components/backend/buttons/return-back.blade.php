@props(["small"=>""])
<button onclick="window.history.back();" class="btn btn-warning m-1 {{($small=='true')? 'btn-sm' : ''}}" data-bs-toggle="tooltip" title="{{__('Return Back')}}"><i class="fas fa-reply"></i>&nbsp;{!! ($slot != "") ? '&nbsp;' . $slot : '' !!}</button>
@props(['small' => 'true'])
<button onclick="window.history.back();" class="btn btn-warning m-1 {{ $small == 'true' ? 'btn-sm' : '' }}"
    data-toggle="tooltip" title="{{ __('Return Back') }}"><i
        class="fas fa-reply fa-fw"></i>&nbsp;{!! $slot != '' ? '&nbsp;' . $slot : '' !!}</button>

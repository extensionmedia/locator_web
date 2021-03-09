<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    @if (!$is_printed)

        @include('printed.contrat.includes.links')
        @include('printed.contrat.includes.css')
    </head>
        <div style="text-align: center; padding: 10px 0">
            <a href="{{route('contrat.create')}}"><i class="fas fa-download"></i> Download</a>
        </div>

    @else
        @include('printed.contrat.includes.css')
    </head>
@endif

<div>
    header
</div>
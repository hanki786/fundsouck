<h3>Search Results</h3>
@foreach($fi as $fund_identity)
        <h4><a style="color:#337ab7" href="{{ route('fund_overview_result') }}?fund_identity_id={{ $fund_identity->id }}" title="">{{ $fund_identity->fund_name }}</a></h4>
        <p>{{ $fund_identity->fund_souk_code }} - {{ $fund_identity->fund_short_name }}</p>
        <hr>
@endforeach
@if(count($fi) == 0)
        <h2>Nothing found</h2>
@endif
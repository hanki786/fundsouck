<h3>Search Results</h3>
@foreach($fi as $fund_identity)
        <h4><a href="{{ route('fund_overview_result') }}?fund_identity_id={{ $fund_identity->id }}" title="">{{ $fund_identity->fund_name }}</a></h4>
        <p>{{ $fund_identity->fund_souk_code }} - {{ $fund_identity->fund_short_name }}</p>
        <hr>
@endforeach
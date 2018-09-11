@extends("layout.base")

@section("content")
    <div class="container">
    <ais-index
            app-id="{{env('ALGOLIA_APP_ID')}}"
            api-key="{{env('ALGOLIA_KEY')}}"
            index-name="dev_resources"
    >
        <ais-search-box></ais-search-box>
        <ais-refinement-list attribute-name="languages"></ais-refinement-list>
        <ais-results>
            <template slot-scope="{ result }">
                <p>
                    <a :href="result.path">

                        <ais-highlight :result="result" attribute-name="name"></ais-highlight>
                    </a>
                </p>
            </template>
        </ais-results>
    </ais-index>
    </div>
@endsection

@section('extra-css')<style> .ais-highlight em{ background: yellow; } </style>@endsection
<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">

        @if ($roomdata['ResponseCode']['ResCode'] == '000')
            @foreach ($roomdata['Data'] as $key => $value)
                <div class="col">
                    <div class="card">
                        <img src="http://203.151.166.134/dip_intranet/images/{{ $value['ROOM_PIC_NAME'] }}"
                            class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $value['ROOM_NAME'] }}</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
            @endforeach

        @endif

    </div>
</div>

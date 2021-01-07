<div class="row" >
    @if(!is_null(session("notification")))
        <div class="col-md-6 offset-md-3">
            @if(isset(session('notification')['type']))
                <div class="alert alert-{{session('notification')['type']}} alert-dismissible">
            @else
                <div class="alert alert-success alert-dismissible">
            @endif
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5>
                        @if(isset(session("notification")['icon']))
                            <i class="icon {{session("notification")['icon']}}"></i>
                        @endif
                        Alert!
                    </h5>
                    {{session('notification')['message']}}
                </div>
        </div>
    @endif
</div>

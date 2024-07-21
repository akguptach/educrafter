<div class="row">

    @if($deals && count($deals) > 0)
        @foreach($deals as $deal)
        <div class="col-sm-3">
            <div class="courses__item shine__animate-item"
                style="border: 1px solid #E5E7EB;box-shadow: 5px 7px 0px 0px #000000;padding: 0px 0px 10px;">
                <div class="courses__item-thumb">
                    <a href="{{route('Offers.details',$deal->id)}}" class="shine__animate-link">
                        <img src="{{$deal->image}}" alt="img" style="border-radius: 6px 6px 0px 0px;">
                    </a>
                </div>
                <div class="courses__item-content" style="padding: 0px 10px 10px 10px;">
                    <h5 class="title"><a href="{{route('Offers.details',$deal->id)}}">{{$deal->title}}</a>
                    </h5>
                    <div class="courses__item-bottom">
                        <div class="button">
                            <a href="{{route('Offers.details',$deal->id)}}" class="btn-border">
                                <span class="text">Get Now</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    @else
        <div style="text-align: center;font-size: 16px;">No deal found</div>
    @endif


</div>
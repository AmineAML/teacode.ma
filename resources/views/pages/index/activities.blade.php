<div id="activities" class="activities section-wrapper">
    <div class="section">
        @foreach ($data->activities as $key => $activity)
        <div id="{{ $activity->slug }}" class="activity-wrapper">
            <div class="container">
                <div class="row align-items-center activity-row">
                    <div class="col-lg-6 col-md-7 activity-description">
                        <h3 class="activity-header text-capitalize mb-md-2 mb-4 tc-black-almost">
                            <span class="activity-header-icon">{!!  $activity->icon !!}</span>
                            <span class="activity-header-txt">{{ $activity->title }}</span>
                        </h3>
                        <div class="activity-body description tc-black-almost">
                            {!! $activity->description->text !!}
                            @if (isset($activity->description->list))
                                <{!! $activity->description->listType ?? 'ul' !!} class="pl-4 m-0">
                                @foreach ($activity->description->list as $listItem)
                                <li class="capitalize-first-letter">{!! $listItem !!}</li>
                                @endforeach
                                </{!! $activity->description->listType ?? 'ul' !!}>
                            @endif
                            <div class="capitalize-first-letter btn-join-us">
                                <a href='/discord/{{ $activity->slug }}' target='_black'>
                                    <span class='d-inline-block capitalize-first-letter'>
                                        <span class='mr-1'>click to join</span>
                                        <i class='fas fa-chevron-right'></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5 activity-img">
                        <div class="img-wrapper mt-5 mt-md-0">
                            {{-- @php $activity->slug = 'mock-interview' @endphp --}}
                            @include('pages.index.svg-includes.' . $activity->slug)
                            {{-- <img class="img-fluid" src="{{ asset($activity->img) }}" alt=""> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

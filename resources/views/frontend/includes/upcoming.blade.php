<ul class="events__groups">
    @forelse($upcoming_events as $upcoming_event)

    <li class="events__list  transition row py-4">
        <div class="events__list__date col-sm-2 col-6 d-flex align-items-center">{{ $upcoming_event->start_from }}</div>
        <div class="events__list__title col-sm-4 col-6 d-flex align-items-center">
            <a href="#" class="events__list__title-link transition">{{ $upcoming_event->event_name }}</a>
        </div>
        <div class="events__list__place col-sm-3 col-6 d-flex align-items-center">{{ $upcoming_event->event_location }}</div>

    </li>
    @empty
    <li class="events__list  transition row py-4">
        <div class="align-items-center pl-4 pr-2">"Because of covid pandemic they are delayed, and once the dates are confirmed will be updated."</div>

    </li>
     @endforelse
</ul>

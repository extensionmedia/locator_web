<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>

<div class="px-3 mb-4">
    <div class="flex justify-between items-center text-gray-700 text-lg font-bold py-4">
        <div class="">{{ __('Notifications') }}</div>
        <div class="">
            <button class="bg-white rounded-lg py-2 px-3 text-gray-600 text-sm hover:bg-orange-100 border-white shadow focus:outline-none">
                <i class="fas fa-plus"></i>
                <span class="ml-2"> {{ __('Ajouter Alerts') }}</span>
            </button>
        </div>
    </div>
    <div class="bg-white rounded-xl shadow p-4">
        <div id="calendar"></div>
    </div>
</div>
<script>
    $(document).ready(function() {
        // page is now ready, initialize the calendar...
        $('#calendar').fullCalendar({
            // put your options and callbacks here

            events : [
                {
                    title : 'task',
                    start : '2020-11-20',
                    url : '/'
                },{
                    title : 'task 2',
                    start : '2020-11-20',
                    url : '/'
                }
            ]
        })
    });
</script>
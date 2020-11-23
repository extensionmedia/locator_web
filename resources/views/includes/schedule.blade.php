<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />
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
        <div class="-mx-4 mt-4 border-t"></div>
        <div class="my-4">
            @foreach ($schedules as $schedule)
                <div class="flex items-center py-2 rounded-xl text-xs cursor-pointer hover:bg-orange-100 hover:shadow-lg 
                transition duration-500 ease-in-out
                 transform hover:translate-y-1 hover:scale-100">
                    <div class="px-2 font-bold">
                        <?= $schedule['due_date'] ?>
                    </div>
                    <div class="px-1">
                        <?= $schedule['description'] ?>
                    </div>
                </div>                
            @endforeach
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        // page is now ready, initialize the calendar...
        $('#calendar').fullCalendar({
            // put your options and callbacks here

            events : [
                <?php foreach($schedules as $schedule): ?>
                    {
                        title : "<?= $schedule['description'] ?>",
                        start : "<?= $schedule['due_date'] ?>"
                    },
                <?php endforeach; ?>
            ]
        })
    });
</script>
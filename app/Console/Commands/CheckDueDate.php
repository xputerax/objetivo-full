<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Goal;
use DateTimeZone;

class CheckDueDate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'checkduedate:hourly';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Artisan command to check goals due date hourly';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //Get id, user_id and due date from database for all users
        //Returns json
        $data = Goal::select('id','user_id','title','due_at')->get();

        //Decode the json file
        $datarr = json_decode($data, true);
        
        //Calculate the interval(in hours) from current time to due date for each goal in the database
        date_default_timezone_set('Asia/Kuala_Lumpur');
        $timeformat = 'Y-m-d H:i:s';
        foreach ($datarr as $item) {
            //Date in Date object
            $duedate = date($timeformat,strtotime($item['due_at']));
            $currdate = date($timeformat);

            //Calculate difference in hours
            $hours = abs(strtotime($duedate) - strtotime($currdate))/3600;
            $hours += 8; //Correct the timezone
            $hours = (int)$hours; //Convert to integer

            echo "Goal ID: ".$item['id']."|| ".$duedate." ||".$hours." hours\n";
        }
        
    }
}

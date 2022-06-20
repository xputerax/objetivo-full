<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Goal;
use App\Models\User;
use App\Notifications\SendReminder;
use Illuminate\Support\Facades\Mail;

class CheckReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'checkReminder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Artisan command to check which goals to send reminder';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $goalarr = $this->getGoalToRemind();

        /** For each user, check through all items in goal array
         * whether user_id is the same.
         * If yes, then notify
         * Else no
         */
        foreach(User::all() as $user) {
            foreach($goalarr as $item) {
                if($user->id == $item['user_id']) {
                    $user->notify(new SendReminder());
                }
            }
        }
    }

    public function getGoalToRemind() {
        //Get id, user_id and due date from database for all users
        //Returns Collection
        $datarr = Goal::select('id','user_id','title','due_at')->get()->toArray();
        
        //Calculate the interval(in hours) from current time to due date for each goal in the database
        //date_default_timezone_set('Asia/Kuala_Lumpur');
        $timeformat = 'Y-m-d H:i:s';
        $goalarr = array();
        foreach ($datarr as $item) {
            //Date in Date object
            $duedate = date($timeformat,strtotime($item['due_at']));
            $currdate = date($timeformat);

            //Calculate difference in hours
            $hours = (strtotime($duedate) - strtotime($currdate))/3600;
            //$hours -= 8; //Correct the timezone
            $hours = (int)$hours; //Convert to integer

            //Check if the hours is equals to 24
            if($hours==24) {
                array_push($goalarr,$item);
            }
        }

        return $goalarr;
    }
}

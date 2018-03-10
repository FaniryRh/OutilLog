<?php

namespace App\Observers;

use App\Reunion;
use App\Notifications\QA_EmailNotification;
use Illuminate\Support\Facades\Notification;

class ReunionCrudActionObserver
{

    public function created(Reunion $model)
    {
        $emails = ["admin@admin.com"];
        $data = [
            "action" => "Created",
            "crud_name" => "Reunions"
        ];

        $users = \App\User::where("email", $emails)->get();
        Notification::send($users, new QA_EmailNotification($data));

    }

    public function updated(Reunion $model)
    {
        $emails = ["admin@admin.com"];
        $data = [
            "action" => "Updated",
            "crud_name" => "Reunions"
        ];
        $users = \App\User::where("email", $emails)->get();
        Notification::send($users, new QA_EmailNotification($data));
    }

    public function deleting(Reunion $model)
    {
        $emails = ["admin@admin.com"];
        $data = [
            "action" => "Deleted",
            "crud_name" => "Reunions"
        ];
        $users = \App\User::where("email", $emails)->get();
        Notification::send($users, new QA_EmailNotification($data));
    }

}
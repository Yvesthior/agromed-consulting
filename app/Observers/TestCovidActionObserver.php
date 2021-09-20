<?php

namespace App\Observers;

use App\Models\TestCovid;
use App\Notifications\DataChangeEmailNotification;
use Illuminate\Support\Facades\Notification;

class TestCovidActionObserver
{
    public function created(TestCovid $model)
    {
        $data  = ['action' => 'created', 'model_name' => 'TestCovid'];
        $users = \App\Models\User::whereHas('roles', function ($q) { return $q->where('title', 'Admin'); })->get();
        Notification::send($users, new DataChangeEmailNotification($data));
    }

    public function updated(TestCovid $model)
    {
        $data  = ['action' => 'updated', 'model_name' => 'TestCovid'];
        $users = \App\Models\User::whereHas('roles', function ($q) { return $q->where('title', 'Admin'); })->get();
        Notification::send($users, new DataChangeEmailNotification($data));
    }

    public function deleting(TestCovid $model)
    {
        $data  = ['action' => 'deleted', 'model_name' => 'TestCovid'];
        $users = \App\Models\User::whereHas('roles', function ($q) { return $q->where('title', 'Admin'); })->get();
        Notification::send($users, new DataChangeEmailNotification($data));
    }
}

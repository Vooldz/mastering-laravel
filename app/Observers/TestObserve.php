<?php

namespace App\Observers;

use App\Models\Test;

class TestObserve
{
    /**
     * Handle the Test "created" event.
     */
    // public function created(Test $test): void
    // {
    //     $test->title = "Azooz";
    //     $test->save();
    // }

    /**
     * Handle the Test "creating" event.
     */
    public function creating(Test $test): void
    {
        // $test->title = "Azooz";
    }

    /**
     * Handle the Test "updated" event.
     */
    public function updated(Test $test): void
    {

        // $test->content = "Hello from observer";
        // $test->saveQuietly();
    }

    /**
     * Handle the Test "deleted" event.
     */
    public function deleted(Test $test): void
    {
        //
    }

    /**
     * Handle the Test "restored" event.
     */
    public function restored(Test $test): void
    {
        //
    }

    /**
     * Handle the Test "force deleted" event.
     */
    public function forceDeleted(Test $test): void
    {
        //
    }
}

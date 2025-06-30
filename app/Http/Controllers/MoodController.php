<?php

namespace App\Http\Controllers;

use App\Models\Mood;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MoodController extends Controller
{


    public function index()
{
    
    $moodData = Mood::with('user')->orderBy('entry_date', 'desc')->get();

    return view('mood_table', compact('moodData'));
}



    public function add(Request $request)
    {
        $request->validate([
            'mood' => 'required|in:Happy,Sad,Angry,Excited',
            'note' => 'nullable|string|max:1000',
        ]);

        $user = Auth::user();
        $today = now()->toDateString();

        $existingMood = Mood::where('user_id', $user->id)
                            ->whereDate('entry_date', $today)
                            ->first();

        if ($existingMood) {
            return redirect()->back()->withErrors(['You have already submitted your mood for today.']);
        }

        Mood::create([
            'user_id' => $user->id,
            'mood' => $request->mood,
            'note' => $request->note,
            'entry_date' => $today,
        ]);

        return redirect()->back()->with('success', 'Mood submitted successfully.');
    }

    public function update(Request $request, Mood $mood)
    {
        // $this->authorize('update', $mood); // optional: add policy

        $request->validate([
            'mood' => 'required|in:Happy,Sad,Angry,Excited',
            'note' => 'nullable|string|max:1000',
        ]);

        $mood->update([
            'mood' => $request->mood,
            'note' => $request->note,
        ]);

        return redirect()->back()->with('success', 'Mood updated.');
    }

    public function destroy(Mood $mood)
    {
        // $this->authorize('delete', $mood); // optional: add policy

        $mood->delete();

        return redirect()->back()->with('success', 'Mood entry deleted.');
    }
}


?>
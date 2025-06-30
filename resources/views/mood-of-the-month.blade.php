<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mood Summary</title>
</head>
<body>

@include('components.navbar')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow-lg border-0 rounded" style="background: #fdfdfd; border-radius: 15px;">
                <div class="card-header text-white text-center" style="background: linear-gradient(135deg, #007bff, #00c6ff); border-top-left-radius: 15px; border-top-right-radius: 15px;">
                    <h2 class="mb-0" style="font-weight: bold; letter-spacing: 1px;">🌟 Mood of the Month 🌟</h2>
                </div>

                <div class="card-body text-center py-5" style="background-color: #ffffff;">
                    @if($topMood)
                        <h4 class="text-muted mb-4" style="font-style: italic;">The most popular mood in the past 30 days is:</h4>

                        <div class="my-4" style="font-size: 4rem; color: #007bff;">
                            🥇 <strong style="font-weight: 700;">{{ ucfirst($topMood->mood) }}</strong>
                        </div>

                        <p class="text-secondary" style="font-size: 1.1rem;">
                            Selected <span class="fw-bold text-dark">{{ $topMood->count }}</span> time{{ $topMood->count > 1 ? 's' : '' }} in the last 30 days.
                        </p>
                    @else
                        <div class="alert alert-warning" style="border-radius: 10px;">
                            No mood data found for the past 30 days. Start tracking your moods!
                        </div>
                    @endif
                </div>

                <div class="card-footer text-center" style="background-color: #f0f0f0; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px;">
                    <a href="{{ route('welcome') }}" class="btn btn-outline-primary" style="padding: 10px 20px; font-weight: 500; border-radius: 30px;">
                        ← Back to Home
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

    
</body>
</html>



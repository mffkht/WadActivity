<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Profiles</title>
    <style>
        /* Basic body styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
            margin: 40px 0 20px;  /* Adjusted margin (top: 40px, bottom: 20px) */
            font-size: 2rem;
        }

        .profiles-container {
            width: 100%;  /* Set the container to full width */
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            margin: 0 auto;
        }

        /* Each profile item with updated padding */
        .profile-item {
            padding: 20px;
            border-bottom: 1px solid #ddd;
        }

        /* Profile item last-child (no border at the bottom) */
        .profile-item:last-child {
            border-bottom: none;
        }

        /* Profile user name */
        .profile-item strong {
            font-size: 1.2rem;
            color: #333;
        }

        /* Profile email styling */
        .profile-item .email {
            font-size: 1rem;
            color: #666;
        }

        /* Profile bio styling */
        .profile-item .bio {
            font-size: 0.95rem;
            color: #777;
        }

        /* Adding some responsive design adjustments */
        @media (max-width: 768px) {
            .profiles-container {
                padding: 15px;
            }

            h1 {
                font-size: 1.5rem;
            }
        }

    </style>
</head>
<body>

    <h1>ALL PROFILES</h1>

    <div class="profiles-container">
        <ul>
            @foreach($profiles as $profile)
                <li class="profile-item">
                    <strong>{{ $profile->user->name }}</strong><br>
                    <span class="email">Email: {{ $profile->user->email }}</span><br>
                    <span class="bio">Profile Bio: {{ $profile->bio }}</span>
                </li>
            @endforeach
        </ul>
    </div>

</body>
</html>
